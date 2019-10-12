<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index($status='') {
    	$orders = Order::where('status','assigned')->get();
		return view('admin.dashboard',compact('orders'));
	}
}
