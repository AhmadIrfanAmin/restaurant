<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller
{
   public function get_settings() {
		$settings =  \DB::table('admin_settings')->select()->get();
		return view('admin.settings.edit', compact('settings'));
	}

	public function update_settings(Request $request) {
		$meta_keys=request('name');
		$meta_value=request('key');
		$cases = [];
		$ids = [];
		$params = [];
		foreach ($meta_keys as $key => $value) {

			$id =$value;
			$metId= '"' . $id . '"';
			$metaV= '"' . $meta_value[$key] . '"';

			$cases[] = "WHEN name= $metId THEN $metaV";
			$params[] = $meta_value[$key];
			$ids[] = $id;
		}

		$ids = '"' . implode('","', $ids) . '"';
		$cases = implode(' ', $cases);

		$updateReocrd=\DB::update("UPDATE `admin_settings` SET `key` = CASE  {$cases} END  WHERE `name` in ({$ids})", $params);
		Session::flash('success', 'update successfully');
		return redirect('admin/settings');




	}
}
