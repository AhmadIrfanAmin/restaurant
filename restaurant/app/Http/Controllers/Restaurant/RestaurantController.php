<?php

namespace App\Http\Controllers\Restaurant;

use App\Http\Controllers\Controller;
use App\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
     public function register_restaurant_routes()
    {
        $restaurants = Restaurant::all(); // Assume that you have a model Tuning

       

        // Now loop all restaurants and declare routes
        foreach($restaurants as $restaurant) {
            $url = '/restaurant-' . $restaurant->name;
            $route_name = 'restaurant.' . $restaurant->name;
            Route::any($url, $route_name); // You may use get/post
        }
    }

    public function TuningMethod($tuning = null)
    {
        // $tuning will contain the current tuning name, check
        dd($tuning);
    }
}
