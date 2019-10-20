<?php
namespace App;

use App\Order;
use App\Restaurant;
use Carbon\Carbon;

class WebHelper {

	
	public static function print_date($date) {
		return date('Y/m/d', strtotime($date));
	
	}
	 public static function  get_status($status) {
        return $status ? 'Active' : 'Inactive';
    }
    public static function  get_status_class($status_class) {
        return $status_class=='active' ? 'success' : 'danger';
    }
   
	public static function print_dateTime($date) {
		return date('M j, Y, g:i A', strtotime($date));
	}	

	public static function print_fullDate($date) {
		return date('l, M j, Y', strtotime($date));
	}
	public static function upperfirst($val) {
		return ucfirst($val);
	}
	public static function lowercase($val) {
		return strtolower($val);
	}
	public static function get_restaurant_name($rest_id) {
		return Restaurant::where('id',$rest_id)->pluck('name')->first();
	}
	public static function  get_order_status($status) {
        if($status=='pending'){
        	$status_class ='primary';

		} else if($status=='assigned') {
			$status_class ='info';

		} else if($status=='canceled') {
			$status_class ='danger';

		} else if($status=='pickedup') {
			$status_class ='purple';
			
		} else if($status=='complete') {
			$status_class ='success';
			
		}
		return $status_class;
    }
    public static function count_orders($status) {
    	$orders = Order::where('status',$status)->whereDate('created_at',Carbon::today())->get();
    	return $orders->count();
	}
	public static function approved_delivery_boys()
	{
		return $delivery_boys = User::where('user_status','approved')->where('status','active')->get();
	}
	public static function assigned_orders()
	{
		return $orders = Order::where('status','assigned')->get();
	}
	
	
}
