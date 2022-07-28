<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

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
        
            $request->validate([
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
        $created= $product->save();
       if($created){
        return response()->json([

            $created,
            "msg"=> "added succusfully"
        ]);
    }; 
       
    //    $added = Product::create($request->all());

    //     if($added){
    //         return response()->json([
    //             "msg"=> "added succusfully"
    //         ]);
    //     };
     
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
}
