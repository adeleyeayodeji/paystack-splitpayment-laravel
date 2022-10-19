<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('split');
});

//create sub account
Route::any('/createSubAccount', [UserController::class, 'createSubAccount']);

//getSubAccounts
Route::any('/getSubAccounts', [UserController::class, 'getSubAccounts']);

//initializePayment
Route::any('/initializePayment', [UserController::class, 'initializePayment']);

//verifyPayment
Route::any('/verifyPayment', [UserController::class, 'verifyPayment']);
