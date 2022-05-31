<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Order;
use App\User;
use Auth;
use Illuminate\Http\Request;
use PaytmWallet;
use Redirect;
use Session;

class PaytmController extends Controller
{

    /**
     * Redirect the user to the Payment Gateway.
     *
     * @return Response
     */

    public function order(Request $request)
    {
         $appurl = env('APP_URL');

         $payment = PaytmWallet::with('receive');

         $payment->prepare([
             'order' => str_random(32),
             'user' => Auth::User()->id,
             'mobile_number' => $request->mobile,
             'email' => $request->email,
             'amount' => $request->amount,
             'callback_url' => url('payment/status'),
         ]);
         return $payment->receive();
    }

    /**
     * Obtain the payment information.
     *
     * @return Object
     */
    public function paymentCallback()
    {
        
        // $transaction = PaytmWallet::with('receive');

        // $response = $transaction->response();
        // $order_id = $transaction->getOrderId();

        // if ($transaction->isSuccessful()) {

        //     $txn_id = $response['TXNID'];

        //     $payment_method = 'PayTM';

        //     $checkout = new OrderStoreController;

        //     return $checkout->orderstore($txn_id, $payment_method);

        // } else if ($transaction->isFailed()) {

        //     \Session::flash('delete', trans('flash.PaymentFailed'));
        //     return redirect('/');
        // }

    }
}
