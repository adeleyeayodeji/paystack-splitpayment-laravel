<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PaystackSplit;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //create sub account
    public function createSubAccount(Request $request)
    {
        //check if is post request
        if ($request->isMethod('post')) {
            //unset _token
            unset($request['_token']);
            //get the data
            $data = $request->all();
            unset($request['email']);
            $pdata = $request->all();
            //create a sub account
            $subAccount = PaystackSplit::createSubAccount($data);
            // create user
            $user = User::create([
                'name' => $data['business_name'],
                'subaccount_code' => $subAccount['data']['subaccount_code'],
                'email' => $data['email'],
                'password' => Hash::make($data['email']),
            ]);
            return $user;
        }
        return view("pages/createSubAccount");
    }

    //get subaccounts
    public function getSubAccounts()
    {
        return User::all();
    }

    //initialize payment
    public function initializePayment(Request $request)
    {
        //check if is post request
        if ($request->isMethod('post')) {
            $subAccount_code = $request->subaccount;
            $amount = intval($request->amount) * 100;
            //get user where subaccount_code is equal to subaccount_code
            $user = User::where('subaccount_code', $subAccount_code)->first();
            //check if user exists
            if ($user) {
                //get email
                $email = $user->email;
                $data = [
                    "email" => $email,
                    "amount" => $amount,
                    "subaccount" => $subAccount_code,
                ];
                //initialize payment
                $payment = PaystackSplit::initializePayment($data);
                //check if payment is successful
                if ($payment['status']) {
                    //redirect to payment page
                    return [
                        'status' => true,
                        'message' => $payment['message'],
                        "url" => $payment['data']['authorization_url'],
                        'reference' => $payment['data']['reference'],
                    ];
                } else {
                    return [
                        'status' => false,
                        'data' => $payment['message'],
                    ];
                }
            } else {
                return [
                    "status" => false,
                    "message" => "User not found",
                ];
            }
        }
        //get all users
        $users = User::all();
        return view("pages/initializePayment", compact('users'));
    }

    //verifyPayment
    public function verifyPayment(Request $request)
    {
        $reference = $request->reference;
        //verify payment
        $payment = PaystackSplit::verifyPayment($reference);
        //check if payment is successful
        if ($payment["data"]['status'] == "success") {
            return [
                'status' => true,
                'data' => $payment['data'],
                'message' => "Payment successful",
            ];
        } else {
            return [
                'status' => false,
                'message' => "Still pending...",
                'statusText' => $payment['data']['status'],
            ];
        }
    }
}
