<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller
{//radius
	//per km charge
   public function get_settings() {
		$settings =  Setting::all();
		return view('admin.settings.edit', compact('settings'));
	}

	public function update_settings(Request $request) {
	
		$settings = $request->except('_method', '_token');
		
		foreach($settings['meta_value'] as $key => $value) {
			\DB::table('settings')->where('meta_key', $key)->update(['meta_value' => $value]);
		}
		
	
		Session::flash('success', 'Update successfully');
		return redirect('admin/settings');




	}
}
