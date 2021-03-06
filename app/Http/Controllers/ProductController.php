<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;





use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

            $products=Product::all();
            $cat=Category::find(1);
            $cat2=Category::find(2);
            return view("products.index",["products" => $products, "cat" =>$cat ,"cat2" =>$cat2]);
            // return view("admin.productAdmin",["products" => $products, "cat" =>$cat ,"cat2" =>$cat2]);
            // return view("admin.productAdmin",["product" => $product]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view("users.product.createProduct",["data"=> $category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $product=new Product;
        // $request->validate([
        //     'name'=>'required' ,
        //     'description'=>'required',
        //     'price'=>'required',
        //     'photo'=>'required',
        // ]);
        // $product->user_id=auth()->user()->id;
        // Product::create($request->all());
        // return redirect()->route("products.index");

        //wa7de gdeda

        $request->validate([
            'name' => 'required | min:4',
            'description' => 'required | min:10',
            'price' => 'required|numeric',
            'photo' => 'required|image|mimes:jpg,png,jpeg|max:2048',


        ]);

        $path = $request->file('photo')->store('public/images');
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->photo = $path;
        $product->category_id = $request->category_id;
        $product->save();


        // return redirect('/');

        return redirect('/productAdmin');

        // ->route('/')
        //                 ->with('success','?????? ?????????? ????????????');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {


        // return view("users.product.showProduct",["data"=>$product]);

        // $catrel=Category::all();
        $related = $product->relatedProducts(4, true)->with('category')->get();

        return view("users.product.showProduct",["data"=>$product,"related"=>$related]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        // dd($product);
        $category = Category::all();
        return view("users.product.editProduct",["data"=>$product,"data1"=> $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        // dd($product);
    //     $product->update($request->all());
    //   return redirect()->route("products.index");
      //w7da gdeda
      $request->validate([
            'name' => 'required | min:4',
            'description' => 'required | min:10',
            'price' => 'required|numeric ',
            // 'photo' => 'required|image|mimes:jpg,png,jpeg|max:2048'

    ]);

    $product = Product::find($id);
    if($request->hasFile('photo')){
        $request->validate([
          'photo' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);
        $path = $request->file('photo')->store('public/images');
        $product->photo = $path;
    }
    // $product->name = $request->name;
    // $product->description = $request->description;
    // $product->price = $request->price;
    // $product->photo = $path;
    // $product->category_id = $request->category_id;
    // $product->save();
        
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        // $product->photo = $path;
        // $product->photo = $request->photo;
        $product->category_id = $request->category_id;
        $product->save();
        return redirect('/productAdmin');
    // ->route('products.index')
    //                 ->with('success','???? ?????????? ????????????');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
       return redirect("/productAdmin");
    }


    public function search(Request $req)
    {
        $data= Product::
        where('name', 'like', '%'.$req->input('query').'%')
        ->get();
        return view('search',['products'=>$data]);
    }

    public function filter1()
    {
        $data=Product::
        whereBetween('price', [0, 50])
        ->get();

        return view('filter',['products'=>$data]);

    }

    public function filter2()
    {
        $data=Product::
        whereBetween('price', [50, 100])
        ->get();

        return view('filter',['products'=>$data]);

    }

    public function filter3()
    {
        $data= DB::table('products')->orderBy('price', 'asc')->where('price', '>', 100)->get();
        return view('filter',['products'=>$data]);
    }
    function cart (Request $request){
         return "Hello" ;
    }
}
