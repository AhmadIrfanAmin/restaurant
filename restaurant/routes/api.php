<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();

});
Route::post('/update_order_status','ApiController@update_order_status');
Route::post('/get_my_orders','ApiController@getMyOrders');
Route::post('/update_account_setting','ApiController@update_account_setting');
Route::post('/updateProfile','ApiController@updateProfile');
Route::post('/login','ApiController@login');
Route::post('/register','ApiController@register');
Route::post('/update_token','ApiController@update_token');