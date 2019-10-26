<?php

namespace App\Http\Controllers\Restaurant;

use App\Http\Controllers\Controller;
use App\Setting;
use App\WebHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller
{//radius
	//per km charge
   public function get_settings($url) {
		$settings =  Setting::where('by_admin',0)->where('restaurant_url',$url)->get();
		return view('restaurant.setting', compact('settings'));
	}

	public function update_settings(Request $request) {
	
		$settings = $request->except('_method', '_token');
		
		foreach($settings['meta_value'] as $key => $value) {
			\DB::table('settings')->where('meta_key', $key)->update(['meta_value' => $value]);
		}
	
		Session::flash('success', 'Update successfully');
		return redirect()->route('app.settings',['url'=>WebHelper::get_restaurant_url(\Auth::user()->id)]);




	}
}
