<?php

namespace App\Http\Controllers\Restaurant;

use App\Http\Controllers\Controller;
use App\Order;
use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index($url) {
    	
		return view('restaurant.dashboard');
	}
	public function order() {
		$get_orders = Order::where('fk_restaurant_id',Auth::user()->id)->get();
		$resta_url =  Restaurant::where('id',Auth::user()->id)->pluck('url')->first();
		$html = view('restaurant.dashboard-order-view',compact('get_orders','resta_url'))->render();
		if ($html) {
			$res_array = array(
			'msg' => 'success',
			'response' => $html,
			);
			echo json_encode($res_array);
			exit;
		}
	}
	public function create_order($url) {
	
    	
		return view('restaurant.creat-order');
	}
}
