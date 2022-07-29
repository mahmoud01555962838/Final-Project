<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Orderdetail;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('orders.index',['orders'=> $request->user()->orders()->with(['user','address','orderdetail'])->get()]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $user = $request->user();
        $carts = $user->carts()->with('product')->get();
        return view('orders.create',compact('carts','user'));
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
            'address_id'=>'exists:addresses,id',
        ]);

        $user = $request->user()->loadMissing(['carts.product']);
        $carts = $user->carts ?? optional([]);
        // return back if not countable > 0
        if(!$carts->count()) return back();

        $address = $user->addresses()->findOrFail($request->get('address_id'));

        $order =Order::firstOrcreate([
            'id'=>$request->get('order_id')
        ],[
            'address_id'=>$address->id,
            'status'=>Order::STATUS['pending'],
            'time_delivery'=>now()->addDays(3),
            'notes'=>$request->get('notes','no notes'),
            'user_id'=>$request->user()->id
        ]);
        $data['items'] =[];

        foreach ($carts as  $cart) {
            $order->orderdetail()->updateOrCreate([
                'product_id' => $cart->product_id,
                'order_id' => $order->id,
            ],[
                'price' => $cart->product->price,
                'quantity' => $cart->qty,
                'size' => $cart->size,
            ]);
            $data['items'][] =
                [
                    'name' => $cart->product->name,
                    'price' => (float)number_format($cart->product->price,2,'.',''),
                    'desc'  => substr($cart->product->description,0,10),
                    'qty' => (int)$cart->qty
                ];
        }

        $order->push();


        $data['invoice_id'] = $order->id;
        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
        $data['return_url'] = route('orders.success');
        $data['cancel_url'] = route('orders.cancel');
        $data['total'] = (float)number_format(array_sum(
            array_map(fn($arr)=> (float)$arr['price'] * (int)$arr['qty'],$data['items'] ?? [])
        ),2,'.','');

        //give a discount of 10% of the order amount
        $data['shipping_discount'] = round((10 / 100) * $data['total'], 2);

        $provider = new ExpressCheckout();

        $response = $provider->setExpressCheckout($data);

        $response = $provider->setExpressCheckout($data, true);

        if(!($response['paypal_link'] ?? null)){
            dd($response,$data);
        }

        $order->update(['ref_id'=>$response['TOKEN'] ?? null]);

        return redirect($response['paypal_link']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        $order->loadMissing(['user','address','orderdetail']);
        $provider = new ExpressCheckout();
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $orderInfo = $provider->showOrderDetails($order->ref_id);
        if(($orderInfo['status'] ?? '') === 'CREATED'){
            dd(
                $order,
                $orderInfo,
            );
        }
        return view('orders.show',compact('order','orderInfo'));
    }

    public function cancel(Request $request)
    {
        $provider = new ExpressCheckout();
        $response = $provider->getExpressCheckoutDetails($request->get('token'));
        // dd($response,$request->all());
        $id = $response['TOKEN'] ?? 0;
        Order::where('ref_id',$id)->update(['status'=>Order::STATUS['canceled']]);

        return redirect()->route('orders.index');
    }
}
