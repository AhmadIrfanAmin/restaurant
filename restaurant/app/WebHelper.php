<?php
namespace App;

use App\Order;
use App\Restaurant;
use App\Setting;
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
	public static function get_restaurant_username($rest_id) {
		return Restaurant::where('id',$rest_id)->pluck('username')->first();
	}
	public static function get_restaurant_url($rest_id) {
		return Restaurant::where('id',$rest_id)->pluck('url')->first();
	}
	public static function input_helper($meta_label, $meta_key, $meta_value, $type) {
		switch ($type) {
			case 'text': ?>
			  	<label class="col-form-label"><?php echo ucfirst($meta_label); ?></label>
				<input type="hidden" value="<?php echo $meta_value; ?>" name="meta_value[<?php echo $meta_key; ?>]"/>
				<input type="text" class="form-control" name="meta_value[<?php echo $meta_key; ?>]" value="<?php echo $meta_value; ?>" >
				<?php
				break;
			case 'checkbox': ?>
				<input type="hidden" value="no" name="meta_value[<?php echo $meta_key; ?>]"/>
				<div class="checkbox checkbox-primary mb-2">
					<input id="checkbox2" type="checkbox"  name="meta_value[<?php echo $meta_key; ?>]" value="yes" <?php echo $meta_value == 'yes' ? 'checked' : ''; ?> >
					<label for="checkbox2">
						<?php echo ucfirst($meta_label); ?>
					</label>
				</div>
				<?php
				break;
		}
	}
	public static function check_delivery_by_machine($rest_url) {
		$meta_value = Setting::where('restaurant_url',$rest_url)->pluck('meta_value')->first();
		return $meta_value=='yes' ? true : false;
	}
	public static function get_restaurant_lat_long($rest_url) {
		return Restaurant::where('url',$rest_url)->first();
	
	}
	
	
	
}
