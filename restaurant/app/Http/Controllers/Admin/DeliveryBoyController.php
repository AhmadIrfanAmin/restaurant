<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class DeliveryBoyController extends Controller
{
	
	public function index($status) {

		$delivery_boys = User::where('user_status',$status)->get();
		return view('admin.delivery-boys.index',compact('delivery_boys'));
	}
	public function all_delivery_boys() {
		$delivery_boys = User::where('user_status','')->get();

		return view('admin.delivery-boys.all-delivery-boys',compact('delivery_boys'));
	}
	public function change_status() {
		$user = User::where('id',$_POST['user_id'])->first();
		$user->user_status = $_POST['status'];
        $user->save();

        if(!$user){
            $finalResult = array('msg' => 'error', 'response' => 'Something went');
            echo json_encode($finalResult);
            exit;
        }else{            
            $finalResult = array('msg' => 'success', 'response' => 'Delivery Boy has been '.$_POST['status'].' successfully.');
            echo json_encode($finalResult);
            exit;
        }
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
