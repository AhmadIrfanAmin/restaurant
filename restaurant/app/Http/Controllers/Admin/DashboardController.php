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
	// public function dashboard_top_view()
 //    {

 //        $data['cancel']=$this->order_model->countCancelOrders(0);
 //        $data['pending']=$this->order_model->countPendingOrders(1);
 //        $data['completed']=$this->order_model->countOrders(2);
 //        $data['assign']=$this->order_model->countAssignOrders(1);
 //        $html = $this->load->view('dashboard-top-view', $data, true);
 //        if ($html) {
 //            $res_array = array(
 //                'msg' => 'success',
 //                'response' => $html,
 //            );
 //            echo json_encode($res_array);
 //            exit;
 //        }
 //    }
	
}
