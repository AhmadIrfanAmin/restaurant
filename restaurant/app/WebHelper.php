<?php
namespace App;

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

	
}
