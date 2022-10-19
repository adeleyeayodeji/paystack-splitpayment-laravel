<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PaystackSplit extends Controller
{
    //Create a subaccount
    public static function createSubAccount($data)
    {
        //http with token
        $response = Http::withToken('sk_test_12ac11ca17dd81c1313d41a4d681b33ed432a829')->post("https://api.paystack.co/subaccount", $data);
        //return the response
        return $response->json();
    }

    //Initialize a split payment
    public static function initializePayment($data)
    {
        $response = Http::withToken('sk_test_12ac11ca17dd81c1313d41a4d681b33ed432a829')->post("https://api.paystack.co/transaction/initialize", $data);
        return $response->json();
    }

    //verifyPayment
    public static function verifyPayment($reference)
    {
        $response = Http::withToken('sk_test_12ac11ca17dd81c1313d41a4d681b33ed432a829')->get("https://api.paystack.co/transaction/verify/" . $reference);
        return $response->json();
    }
}
