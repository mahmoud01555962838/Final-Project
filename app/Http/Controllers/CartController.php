<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = $request->user();
        $carts = $user->carts()->with('product')->get();

        return view('cart',compact('carts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(int $id,Request $request)
    {
        $cart = Cart::query()->updateOrCreate([
            'user_id'=>$request->user()->id,
            'product_id'=>$id,
            'size'=>$request->get('size'),
        ],[
           'qty'=>(int)$request->get('qty',1),
        ]);

        if($cart->qty <= 0 ) {
            $cart->delete();
            return $request->wantsJson() ? response()->json([
                "status"=>true
            ]) : back()->with('status','deleted successfully');
        }

        return $request->wantsJson() ? response()->json([
            "status"=>true
        ]) : back()->with('status','deleted successfully');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
