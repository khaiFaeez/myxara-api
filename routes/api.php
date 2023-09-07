<?php

use App\Http\Controllers\API\InvoiceController;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\TokenController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('auth/token', [TokenController::class, 'store'])->middleware('guest');
Route::post('auth/checkId', [TokenController::class, 'checkId'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('auth/user', [TokenController::class, 'user']);
    Route::get('user/invoices', [InvoiceController::class, 'index']);
    Route::get('user/invoices/{invoiceNo}', [InvoiceController::class, 'show']);
    Route::delete('auth/token/delete', [TokenController::class, 'destroy']);
});
