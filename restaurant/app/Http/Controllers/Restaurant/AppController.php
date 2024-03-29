<?php

namespace App\Http\Controllers\Restaurant;

use App\Http\Controllers\Controller;
use App\Order;
use App\Restaurant;
use App\User;
use App\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
class AppController extends Controller
{
    
    public function index($url) {
      return view('restaurant.dashboard');
    }

    public function order() {
        $get_orders = Order::where('fk_restaurant_id',Auth::user()->id)->get();
        $resta_url =  Restaurant::where('id',Auth::user()->id)->pluck('url')->first();
        $html = view('restaurant.dashboard-order-view',compact('get_orders','resta_url'))->render();
        if ($html) {
            $res_array = array(
                'msg' => 'success',
                'response' => $html,
            );
            echo json_encode($res_array);
            exit;
        }
    }
    public function create_order() {
        $zones = Zone::all();
        return view('restaurant.creat-order',compact('zones'));
    }

    public function store_order(Request $request) {
        $resta_url = Restaurant::where('id',Auth::user()->id)->pluck('url')->first();       
        $validator = Validator::make($request->all(), [
            'customer_name' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'pickup_time' => 'required',
            'delivery_price' => 'required',
            'payment_method' => 'required',
        ]);
        if ($validator->fails()) {
            Session::flash('error', $validator->messages()->first());
            return redirect()->back()->withInput();
        } else {
            $order = new Order();
            $order->customer_name = $request->customer_name;
            $order->last_name = $request->last_name;
            $order->address = $request->address;
            $order->appartment_no = $request->appartment_no;
            $order->buzzer = $request->buzzer;
            $order->contact = $request->contact;
            $order->distance = $request->distance;
            $order->pickup_time = $request->pickup_time;
            $order->status = 'pending';
            $order->delivery_price = $request->delivery_price;
            $order->tip = $request->tip;
            $order->tip_by = 'customer';
            $order->payment_method = 'cash by customer';
            $order->order_price = $request->order_price;
            $order->fk_zone_id = $request->fk_zone_id;
            $order->fk_restaurant_id = $request->fk_restaurant_id;

            $order->save();

            Session::flash('success', 'Order created successfully!');
            return redirect()->route('restaurant.dashboard',['url'=>$resta_url]);

        }
    }

    public function find_drivers(Request $request) {
        $rules = array(
        'longitude' => 'required',
        'latitude' => 'required',
        'radius' => 'required',
        'order_id' => 'required',
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return [
                'status' => 440,
                'message' => $validator->errors()->first()
            ];
        } else {
        $order = Order::find($request->$order_id);
        if($order) {
            $longitude = $request->longitude;
            $latitude = $request->latitude;
            $radius = $request->radius;
            $drivers = \DB::table('users')
            ->select(\DB::raw('
                users.*,111.111 *
                DEGREES(ACOS(COS(RADIANS('.$latitude.'))
                * COS(RADIANS(latitude))
                * COS(RADIANS('.$longitude.' - longitude))
                + SIN(RADIANS('.$longitude.'))
                * SIN(RADIANS(latitude)))) AS radius')
            )
            ->where('status', '=','available')
            ->having('radius', '<', $radius)
            ->get();
                if (sizeof($arry) > 0) {
                    foreach($drivers as $driver) {
                        $test = $this->notification($driver->device_token,'An Order that need to deliver now! ',$request->order_id);
                    }
                    Session::flash('success', 'Notifications Sent to your nearby drivers!');
                    return redirect()->route('');
                } else {
                    Session::flash('No Drivers Found Nearby', $validator->messages()->first());
                    return redirect()->back()->withInput();
                }
            } else {

            }
        }
    }
    function get_driving_distance($lat1, $lat2, $long1, $long2) {
        $url = "https://maps.googleapis.com/maps/api/distancematrix/json?origins=
            " . $lat1 . "," . $long1 . "&destinations=" . $lat2 . "," . $long2 . "&mode=driving&language=en_us&key=apikey";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $response = curl_exec($ch);
        curl_close($ch);
        $response_a = json_decode($response, true);
        $dist = $response_a['rows'][0]['elements'][0]['distance']['text'];
        $time = $response_a['rows'][0]['elements'][0]['duration']['text'];
        return array('distance' => $dist, 'time' => $time);
    }

    function distance($lat1, $lon1, $lat2, $lon2, $unit) {
        if (($lat1 == $lat2) && ($lon1 == $lon2)) {
            return 0;
        } else {
            $theta = $lon1 - $lon2;
            $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
            $dist = acos($dist);
            $dist = rad2deg($dist);
            $miles = $dist * 60 * 1.1515;
            $unit = strtoupper($unit);

            if ($unit == "K") {
                return ($miles * 1.609344);
            } else if ($unit == "N") {
                return ($miles * 0.8684);
            } else {
                return $miles;
            }
        }
    }

    /*public function schedule_delivery()
    {
        $users = User::where('status','assigned')->get();//get all users which are inside that specific radius 
        foreach($users as $user)
        {
            $test = $this->notification($user->device_token,'An Order that need to deliver now! ',$request->booking_id);
        }
      }*/
    }
