<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
	public function index($status='') {
		if(empty($status)) {
			$orders = Order::all();
		} else {
			
			$orders = Order::where('status',$status)->get();
		}
		return view('admin.orders.index',compact('orders'));
	}
	public function view_order($order_id) {
		$order_detail = Order::where('id',$order_id)->first();
		return view('admin.orders.order-detail',compact('order_detail'));
	}
}
