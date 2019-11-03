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
Route::group(['prefix' => 'admin'], function() {
   Route::get('login', function () {
    return view('admin.login');
});
   Route::get('register', function () {
    return view('admin.register');
});
Route::get('dashboard/top', 'Admin\DashboardController@dashboard_top_view')->name('dashboard.top');
Route::get('dashboard/bottom', 'Admin\DashboardController@dashboard_bottom_view')->name('dashboard.bottom'); 
Route::get('dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');
Route::get('orders/{status?}', 'Admin\OrderController@index')->name('orders');
Route::get('view-order/{order_id}', 'Admin\OrderController@view_order')->name('view.order');
Route::get('zones', 'Admin\ZoneController@index')->name('zones');
Route::get('zone/add', 'Admin\ZoneController@create')->name('add.zone');
Route::post('zone/store', 'Admin\ZoneController@store')->name('store.zone');
Route::post('zone/show', 'Admin\ZoneController@show')->name('show.zone');
Route::get('zone/{zone}/edit', 'Admin\ZoneController@edit')->name('edit.zone');
Route::post('zone/{zone}', 'Admin\ZoneController@update')->name('update.zone');
Route::post('zones/block', 'Admin\ZoneController@block_zone')->name('block.zone');
Route::get('delivery-boys/{status}', 'Admin\DeliveryBoyController@index')->name('delivery-boys');

Route::get('delivery-boys', 'Admin\DeliveryBoyController@all_delivery_boys')->name('all.delivery-boys');
Route::post('delivery-boys/show', 'Admin\DeliveryBoyController@show_map')->name('delivery-boys.map');
Route::post('delivery-boys/change_status', 'Admin\DeliveryBoyController@change_status')->name('delivery-boys.status');


Route::resource('restaurants', 'Admin\RestaurantController');
Route::post('restaurant-map/show', 'Admin\RestaurantController@show_map')->name('restaurant.map');
Route::post('restaurant/block', 'Admin\RestaurantController@block_restaurant')->name('block.restaurant');
Route::get('settings', 'Admin\SettingController@get_settings')->name("admin.settings");
Route::post('update-settings', 'Admin\SettingController@update_settings')->name("update.settings");
Route::get('deliveryboys/available', 'Admin\DeliveryBoyController@available_delivery_boys')->name('pin_map');
});

Auth::routes();

Route::group(['prefix' => 'restaurant'], function () {
		Route::get('{url}/login', 'Restaurant\LoginController@show_login_form');
		Route::post('store/login', 'Restaurant\LoginController@restaurant_login')->name('restaurant.login');
		
});
Route::group(['prefix' => 'restaurant',  'middleware' => 'auth:restaurant'], function () {
	Route::get('{url}/dashboard', 'Restaurant\AppController@index')->name('restaurant.dashboard');
	Route::get('dashboard/orders', 'Restaurant\AppController@order')->name('dashboard.order');
	Route::get('{url}/create/order', 'Restaurant\AppController@create_order')->name('create.order'); 
	Route::post('store/order', 'Restaurant\AppController@store_order')->name('store.order');
		Route::get('{url}/app-settings', 'Restaurant\AppController@setting')->name('app.setting'); 
});


