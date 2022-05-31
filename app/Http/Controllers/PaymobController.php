<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PaymobController extends Controller
{
    public function get_iframe($amount){
        $response = Http::withHeaders(['content-type' => 'application/json'])->post('https://accept.paymobsolutions.com/api/auth/tokens', ["api_key" => env('PAYMOB_API_KEY')]);
        $json = $response->json();

        $response_final = Http::withHeaders(['content-type' => 'application/json'])->post('https://accept.paymobsolutions.com/api/ecommerce/orders', ["auth_token" => $json['token'], "delivery_needed" => "false", "amount_cents" => $amount * 100, "items" => []]);

        $json_final = $response_final->json();

        $store_payment = $this->store_payment($payment_id = $json_final['id'], $amount = $this->calc_amout_after_transaction("paymob", $this->amount) , $source = "credit", $process_data = json_encode($json_final) , $currency_code = "USD", $status = strtoupper("PENDING") , $note = $this->amount_in_egp);

        $response_final_final = Http::withHeaders(['content-type' => 'application/json'])->post('https://accept.paymobsolutions.com/api/acceptance/payment_keys', ["auth_token" => $json['token'], "expiration" => 36000, "amount_cents" => $json_final['amount_cents'], "order_id" => $json_final['id'], "billing_data" => ["apartment" => "NA", "email" => \Auth::user()->email, "floor" => "NA", "first_name" => \Auth::user()->fname, "street" => "NA", "building" => "NA", "phone_number" => \Auth::user()->lname, "shipping_method" => "NA", "postal_code" => "NA", "city" => "NA", "country" => "NA", "last_name" =>  \Auth::user()->lname, "state" => "NA"], "currency" => "EGP", "integration_id" => env('PAYMOB_MODE') == "live" ? env('PAYMOB_LIVE_INTEGRATION_ID') : env('PAYMOB_SANDBOX_INTEGRATION_ID')]);

        $response_final_final_json = $response_final_final->json();


        $res = ['status' => 200,
            'redirect' => "https://accept.paymobsolutions.com/api/acceptance/iframes/" . env("PAYMOB_IFRAME_ID") . "?payment_token=" . $response_final_final_json['token'], 'message' => 'جار تحويلك إلى صفحة الدفع'];

        return $res['redirect'];
    }


}
