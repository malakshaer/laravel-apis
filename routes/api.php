<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\PlaceValue;
use App\Http\Controllers\MathExpression;
use App\Http\Controllers\ToBinary;
use App\Http\Controllers\SortAPI;

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
Route::get("/getPlaceValue", [PlaceValue::class, 'getPlaceValue']);

Route::group(['prefix' => "math"], function(){
    Route::get("/getExpression", [MathExpression::class, 'getExpression']);

});
Route::get("/toBinary", [ToBinary::class, 'toBinary']);

Route::get("/getSortedString", [SortAPI::class, 'getSortedString']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

