<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function cart(Request $request)
    {
        $user = $request->user();
        $carts = $user->carts()->with('product')->get();
        return view('cart',compact('carts'));
    }

    public function update(Request $request,$id)
    {
        if($request->get('qty',0) <= 0){
            $request->user()->carts()->find($id)?->delete();
        }else{
            $request->user()->carts()->where('id',$id)->update(['qty'=>$request->get('qty',1)]);
        }

        return back();
    }

    public function order(Request $request)
    {
        return view('order',['orders'=>$request->user()->orders()->get()]);
    }
}
