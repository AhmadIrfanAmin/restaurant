<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\PolygonTrait\GoogleTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ZoneController extends Controller
{
	use GoogleTrait;
	public function index() {
     	// $zones = Zone::all();
     	// return view('admin.zones.zone',compact('zones'));
		return view('admin.zones.index');

	}
	public function create() {
		return view('admin.zones.create');
	}
	public function store(Request $request) {
		// $this->validate(request(), [
		// 	'zone_name' => 'required',
		// 	'zone_list' => 'required'
		// ]);
		// $get_contents_array = explode(",",$request->zone_list);
		// $lat_long_array= [];
		// foreach ($get_contents_array as $get_data) {
		// 	$data =explode(":",$get_data);
		// 	$lat = trim(current($data));
		// 	$long =  trim(end($data));
		// 	$lat_long_array[]=[$lat,$long];
		// }
		// $var = $this->encodePoints($lat_long_array);
		// $map = new Map();
		// $map->zone_file = $var;
		// $map->zone_name = rand();
		// $map->save();
		// Session::flash('success', 'Zone added successfully!');
		// return redirect()->route('zones');
	}
	public function show() {
		// $coordinates = [];
		// $keys= ['lat','lng'];
		// $map = Map::where('zone_name','125890418')->first();
		// $points = $this->decodeString($map->zone_file);
		// $get_json = json_encode($points);
		// $get_files = str_replace("\\r\\n", "", $get_json);
		// $map_data = json_decode($get_files,true);
		
		// foreach($map_data as $m){
		// 	$coordinates[] = array_combine($keys,$m);
		// }
		// $get_json = json_encode($coordinates);
		// $get_file = str_replace("\\r\\n", "", $get_json);
		// return view('map')->with('get_file',$get_file);
	}
}
