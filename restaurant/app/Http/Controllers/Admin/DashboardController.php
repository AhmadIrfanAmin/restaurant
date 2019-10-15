<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index($status='') {
		return view('admin.dashboard');
	}
	public function dashboard_top_view() {
		
		$html = view('admin.dashboard.dashboard-top-view')->render();
		if ($html) {
			$res_array = array(
			'msg' => 'success',
			'response' => $html,
			);
			echo json_encode($res_array);
			exit;
		}
    }
    public function dashboard_bottom_view() {
    	$delivery_boys = User::where('user_status','approved')->where('status','active')->get();
    	$orders = Order::where('status','assigned')->get();
		$html = view('admin.dashboard.dashboard-bottom-view')->with('delivery_boys',$delivery_boys,'orders',$orders)->render();
		if ($html) {
			$res_array = array(
			'msg' => 'success',
			'response' => $html,
			);
			echo json_encode($res_array);
			exit;
		}
    }
	
}
