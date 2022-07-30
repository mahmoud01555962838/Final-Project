<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function cartList()
    {
        $cartItems = Cart::getContent();
        // dd($cartItems);
        return view('cart', compact('cartItems'));
    }


    public function addToCart(Request $request)
    {
        Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->image,
            )
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->route('cart.list');
    }

    public function updateCart(Request $request)
    {
        Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        Cart::clear();

        /**
     * Create a new controller instance.
     *
     * @return void
     */
    }
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


}
