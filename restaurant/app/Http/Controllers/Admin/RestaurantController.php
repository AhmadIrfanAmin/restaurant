<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $restaurants = Restaurant::all();
        return view('admin.restaurants.index',compact('restaurants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.restaurants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate(request(), [
            'name' => 'required',
            'address' => 'required',
            'status' => 'required',
            'contact' => 'required',
            ]);
        $address = $request->address; 
        $apiKey = 'AIzaSyAztLRM2c-6I3w681cHGtNQgjLVzmIQdt0'; 
        // Get JSON results from this request
        $geo = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.urlencode($address).'&sensor=false&key='.$apiKey);
        $geo = json_decode($geo, true); // Convert the JSON to an array

        $latitude = $geo['results'][0]['geometry']['location']['lat']; // Latitude
        $longitude = $geo['results'][0]['geometry']['location']['lng']; // Longitude
    
        $restaurant = new Restaurant;
        $restaurant->name = $request->name;
        $restaurant->address = $address;
        $restaurant->status = $request->status;
        $restaurant->latitude = $latitude;
        $restaurant->longitude = $longitude;
        $restaurant->contact = $request->contact;
        $restaurant->save();
        return redirect()->route('restaurants.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_map() {
        $restaurant_location = Restaurant::where('id',$_POST['restaurant_id'])->first();
        $html = view('admin.restaurants.map-address')->with('restaurant_location', $restaurant_location)->render();
        if ($html) {
            $res_array = array(
                'msg' => 'success',
                'response' => $html,
            );
            echo json_encode($res_array);
            exit;
        }    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
