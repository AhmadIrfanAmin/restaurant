<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Restaurant;
use App\Setting;
use App\WebHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $restaurants = Restaurant::where('status','!=', 'blocked')->get();
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
            'username' => 'required',
            'password' => 'required',
            'address' => 'required',
            'status' => 'required',
            'contact' => 'required',
            'photo' => 'mimes:jpeg,jpg,png|max:10000'
            ]);

        if ($request->hasFile('photo')) {
            $file_name_with_ext = $request->file('photo')->getClientOriginalName();
            $file = pathinfo($file_name_with_ext, PATHINFO_FILENAME);
            $extension = $request->file('photo')->getClientOriginalExtension();
            $file_name = $file . '_' . time() . '.' . $extension;
            $path = $request->file('photo')->move('images/restaurant', $file_name);
        } else {
            $file_name = 'noimage.jpg';
        }

        $address = $request->address; 
        $apiKey = 'AIzaSyAztLRM2c-6I3w681cHGtNQgjLVzmIQdt0'; 
        // Get JSON results from this request
        $geo = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.urlencode($address).'&sensor=false&key='.$apiKey);
        $geo = json_decode($geo, true); // Convert the JSON to an array

        $latitude = $geo['results'][0]['geometry']['location']['lat']; // Latitude
        $longitude = $geo['results'][0]['geometry']['location']['lng']; // Longitude
        $restaurant = new Restaurant;
        $restaurant->name = $request->name;
        $restaurant->username = $request->username;
        $restaurant->password = Hash::make($request->password);
        $restaurant->address = $address;
        $restaurant->status = $request->status;
        $restaurant->photo = $file_name;
        $restaurant->latitude = $latitude;
        $restaurant->longitude = $longitude;
        $restaurant->contact = $request->contact;
        $restaurant->url = bin2hex(random_bytes(6));
        $restaurant->save();
        $resturant_setting = new Setting;
        $resturant_setting->meta_tag = 'restaurant';
        $resturant_setting->meta_label = 'Accept Delivery By Machine';
        $resturant_setting->meta_key = 'delivery_by_machine';
        
        $resturant_setting->meta_input = 'checkbox';
        $resturant_setting->meta_value = 'no';
        $resturant_setting->restaurant_url = WebHelper::get_restaurant_url($restaurant->id);
        $resturant_setting->save();
        Session::flash('success', 'Restaurant added successfully!');
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
        $restaurant=Restaurant::find($id);
        return view('admin.restaurants.edit',compact('restaurant'));
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
        $this->validate(request(), [
            'name' => 'required',
            'username' => 'required',
            'address' => 'required',
            'status' => 'required',
            'contact' => 'required',
            'photo' => 'mimes:jpeg,jpg,png|max:10000'
            ]);

        if ($request->hasFile('photo')) {
            $file_name_with_ext = $request->file('photo')->getClientOriginalName();
            $file = pathinfo($file_name_with_ext, PATHINFO_FILENAME);
            $extension = $request->file('photo')->getClientOriginalExtension();
            $file_name = $file . '_' . time() . '.' . $extension;
            $path = $request->file('photo')->move('images/restaurant', $file_name);
        } 

        $address = $request->address; 
        $apiKey = 'AIzaSyAztLRM2c-6I3w681cHGtNQgjLVzmIQdt0';
         // Get JSON results from this request
        $geo = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.urlencode($address).'&sensor=false&key='.$apiKey);
        $geo = json_decode($geo, true); // Convert the JSON to an array
        $latitude = $geo['results'][0]['geometry']['location']['lat']; // Latitude
        $longitude = $geo['results'][0]['geometry']['location']['lng']; // Longitude 

        $restaurant = Restaurant::find($id);
        $restaurant->name = $request->name;
        $restaurant->username = $request->username;
        if(!empty($request->password)) {
            $restaurant->password = Hash::make($request->password); 
        }
        $restaurant->address = $address;
        $restaurant->status = $request->status;
        $restaurant->latitude = $latitude;
        $restaurant->longitude = $longitude;
        $restaurant->contact = $request->contact;
        if($request->hasFile('photo')){
            $restaurant->photo = $file_name;
        }
        $restaurant->save();
        Session::flash('success', 'Restaurant Updated successfully!');
        return redirect()->route('restaurants.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function block_restaurant() {

        $restaurant = Restaurant::where('id',$_POST['restaurant_id'])->first();
        $restaurant->status = $_POST['status'];
        $restaurant->save();

        if(!$restaurant){
            $finalResult = array('msg' => 'error', 'response' => 'Something went');
            echo json_encode($finalResult);
            exit;
        }else{            
            $finalResult = array('msg' => 'success', 'response' => 'Restaurant has been blocked successfully.');
            echo json_encode($finalResult);
            exit;
        }
    }
}
