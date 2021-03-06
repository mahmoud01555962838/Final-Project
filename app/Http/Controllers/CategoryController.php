<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $categorys = Category::all();
        return view("admin.categoryAdmin", [ "categorys" => $categorys]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("users.category.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required | min:4',
        ]);
       Category::create($request->all());
       return redirect('/categoryAdmin');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        
      
        return view('users.category.show',["category"=>$category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view("users.category.edit",["data"=> $category]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $category->update($request->all());
      return redirect('/categoryAdmin');
    //   ->route("");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
       return redirect('/categoryAdmin');
    //    ->route("products.index")
    }

    public function category1(){
        $category1=DB::table('categories')
        ->where([
            ['id', '=', '1']
        ])->get();
        return redirect('products.index', ['category1'=>$category1]);
    } 
    // public function getcount(){
    //     $wordlist = Category::where('id', '<=', $correctedComparisons)->get();
    //     $wordCount = $wordlist->count();
    //     return view('admin.dashbord', ['wordCount'=>$wordCount]);
    //     }
}
