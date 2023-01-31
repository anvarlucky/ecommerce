<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\v1\GoodsController;
use App\Http\Controllers\api\v1\TypeController;
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
Route::get('goods',[GoodsController::class,'index']);
Route::get('good/{id}',[GoodsController::class,'show']);
Route::post('good',[GoodsController::class,'store']);
Route::get('types',[TypeController::class,'index']);
Route::post('type',[TypeController::class,'store']);
