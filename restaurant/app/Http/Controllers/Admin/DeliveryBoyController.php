<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class DeliveryBoyController extends Controller
{
	public function index($status='') {
		if(empty($status)) {
			$delivery_boys = User::all();
		} else {
			
			$delivery_boys = User::where('status',$status)->get();
		}
		return view('admin.delivery-boys.index',compact('delivery_boys'));
	}
	public function show_map() {
		$user_location = User::where('id',$_POST['user_id'])->first();
	    $html = view('admin.delivery-boys.map-address')->with('user_location', $user_location)->render();
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
