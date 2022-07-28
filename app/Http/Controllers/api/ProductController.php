<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
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
        return $products;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    /*     $request->validate([
            'name' => 'required | min:4',
            'description' => 'required | min:30',
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
       if($product){
        return response()->json([
            "msg"=> "added succusfully"
        ]);
    }; */
       
//return $product;
       $added = Product::create($request->all());

        if($added){
            return response()->json([
                "msg"=> "added succusfully"
            ]);
        };
     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return response()->json([
            $product
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $updated = $product->update($request->all());

        if($updated){
            return response()->json([
                "msg"=> "updated succusfully"
            ]);
        };
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $deleted = $product->delete();

        if($deleted){
            return response()->json([
                "msg"=> "deleted succusfully",
                "code"=> 200
            ]);
        };
    }

    public function search(Request $req)
    {
        $data= Product::
        where('name', 'like', '%'.$req->input('query').'%')
        ->get();
        return $data;
    }

    public function filter1()
    {
        $data=Product::
        whereBetween('price', [0, 50])
        ->get();

        return $data;

    }

    public function filter2()
    {
        $data=Product::
        whereBetween('price', [50, 100])
        ->get();

        return $data;

    }

    public function filter3()
    {
        $data= DB::table('products')->orderBy('price', 'asc')->where('price', '>', 100)->get();
        return $data;
    }
}
