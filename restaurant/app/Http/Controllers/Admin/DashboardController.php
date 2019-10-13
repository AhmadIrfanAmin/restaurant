<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index($status='') {
    	$delivery_boys = User::where('user_status','approved')->where('status','active')->get();
    	$orders = Order::where('status','assigned')->get();
		return view('admin.dashboard',compact('orders','delivery_boys'));
	}
	
}
