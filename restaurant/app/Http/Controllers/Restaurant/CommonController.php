<?php

namespace App\Http\Controllers\Restaurant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommonController extends Controller
{
	public function get_location_lat_long(Request $request) {
		$address = $request->address;
		if(empty($address)) {
			return response()->json(['type' => 'error','message' => 'please enter address']);
		} 
		$apiKey = 'AIzaSyAztLRM2c-6I3w681cHGtNQgjLVzmIQdt0'; 
		$geo = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.urlencode($address).'&sensor=false&key='.$apiKey);
        $geo = json_decode($geo, true); // Convert the JSON to an array
        $latitude = $geo['results'][0]['geometry']['location']['lat']; // Latitude
        $longitude = $geo['results'][0]['geometry']['location']['lng']; // Longitude
        return response()->json(['type' => 'success','lat'=> $latitude, 'long' => $longitude]);
	}
}
