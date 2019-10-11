<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\PolygonTrait\GoogleTrait;
use App\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ZoneController extends Controller
{
	use GoogleTrait;
	public function index() {
     	$zones = Zone::all();
     	return view('admin.zones.index',compact('zones'));

	}
	public function create() {
		return view('admin.zones.create');
	}
	public function store(Request $request) {

		$this->validate(request(), [
			'name' => 'required',
			'route_list' => 'required|regex:/\d+\.\d+\:\d+\.\d+/',
			'status' =>'required'
		]);
		$get_contents_array = explode(",",$request->route_list);
		$lat_long_array= [];
		foreach ($get_contents_array as $get_data) {
			$data =explode(":",$get_data);
			$lat = trim(current($data));
			$long =  trim(end($data));
			$lat_long_array[]=[$lat,$long];
		}
		$route_list = $this->encodePoints($lat_long_array);
		$zone = new Zone();
		$zone->route_list = $route_list;
		$zone->name = $request->name;
		$zone->status = $request->status;
		$zone->save();
		Session::flash('success', 'Zone added successfully!');
		return redirect()->route('zones');
	}
	public function show(Request $request) {
		
		$coordinates = [];
		$keys= ['lat','lng'];
		$map = Zone::where('id',$_POST['zone_id'])->first();
		$points = $this->decodeString($map->route_list);
		$get_json = json_encode($points);
		$get_files = str_replace("\\r\\n", "", $get_json);
		$map_data = json_decode($get_files,true);
		foreach($map_data as $m){
			$coordinates[] = array_combine($keys,$m);
		}
		$get_json = json_encode($coordinates);
		$get_file = str_replace("\\r\\n", "", $get_json);
		$html = view('admin.zones.map')->with('get_file', $get_file)->render();
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
