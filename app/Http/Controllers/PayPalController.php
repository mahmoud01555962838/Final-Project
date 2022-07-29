<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;


class PayPalController extends Controller
{

    /**
     * Retrieve IPN Response From PayPal
     *
     * @param \Illuminate\Http\Request $request
     */
    public function postNotify(Request $request)
    {
        // Import the namespace Srmklive\PayPal\Services\ExpressCheckout first in your controller.
        $provider = new ExpressCheckout;

        $request->merge(['cmd' => '_notify-validate']);
        $post = $request->all();

        $response = (string) $provider->verifyIPN($post);

        if ($response === 'VERIFIED') {
            // Your code goes here ...
        }
    }
    /**
     * success transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function successTransaction(Request $request)
    {
        $provider = new ExpressCheckout();
        $response = $provider->getExpressCheckoutDetails($request->get('token'));

        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            dd('Your payment was successfully.',$response,$request->all());
            $id = $response['TOKEN'] ?? 0;
            Order::where('ref_id',$id)->update(['status'=>Order::STATUS['success']])

            return redirect()
            ->route('orders.index')
            ->with('success', 'Transaction complete.');
        }

        return redirect()
        ->route('orders.index')
            ->with('error', $response['message'] ?? 'Something went wrong.');
    }
}
