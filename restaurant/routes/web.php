<?php

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
    return view('welcome');
});
Route::prefix('admin')->group(function () {
   Route::get('login', function () {
    return view('admin.login');
});
   Route::get('register', function () {
    return view('admin.register');
});

Route::get('dashboard', 'Admin\DashboardController@index');
Route::get('orders/{status?}', 'Admin\OrderController@index')->name('orders');
Route::get('view-order/{order_id}', 'Admin\OrderController@view_order')->name('view.order');
Route::get('zones', 'Admin\ZoneController@index')->name('zones');
Route::get('zone/add', 'Admin\ZoneController@create')->name('add.zone');
Route::post('zone/store', 'Admin\ZoneController@store')->name('store.zone');
Route::post('zone/show', 'Admin\ZoneController@show')->name('show.zone');
Route::get('delivery-boys/{status?}', 'Admin\DeliveryBoyController@index')->name('delivery-boys');
Route::post('delivery-boys/show', 'Admin\DeliveryBoyController@show_map')->name('delivery-boys.map');
Route::resource('restaurants', 'Admin\RestaurantController');
Route::post('restaurant-map/show', 'Admin\RestaurantController@show_map')->name('restaurant.map');

});