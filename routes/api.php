<?php

use App\Http\Controllers\BillingController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//
//Route::get('/test', function (Request $request) {
//    $data = (new \App\Service\GoogleSheetsService())->readSheets();
//
//    return response()->json($data);
//});

Route::post('payme', [BillingController::class, 'payme']);
Route::post('click', [BillingController::class, 'click']);
Route::post('apelsin', [BillingController::class, 'apelsin']);
Route::post('alifmobi', [BillingController::class, 'alifmobi']);
