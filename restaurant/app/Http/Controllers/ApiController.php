<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Order;
class ApiController extends Controller
{
    //
   

    public function send_verify_request(Request $request)
    {
        //driver verify request        
    }
    public function login(Request $request){
        //$token='diWhHpEdy1k:APA91bHfaE_zy4FUJ_GGDmO3XuJNz5qshyMeyjbIvvdLKI-DkR5rzhS00k9Hwc49yKzJLUraUPbu9-H-XOv8hbT-q-omtzXa8-uAv8Ewej52zO1gH0maKoGP4FLCu9FwVlLSpwBDC_3T';
        //$abc = $this->notification($token ,'title');
       // dd($abc);
        $response = new \stdClass();
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if($validator->fails()){
            $response->status = 'failed';
            $response->code = 400;
            $response->message = 'validation failed';
            $response->response = $validator->errors();
            return response()->json($response);
        } else {
            $user = User::where('email', $request->email)->where('role', 'agent')->first();
            if($user){
                $country = Country::find($user->country_id);
                $state = Country::find($user->state_id);

                if (Hash::check($request->password, $user->password)) {
                    $user->remember_token = md5(time());
                    $user->save();
                    $login_user = new \stdClass();
                    $login_user->id = $user->id;
                    $login_user->name = $user->name;
                    $login_user->email = $user->email;
                    $login_user->gender = $user->gender;
                    $login_user->mobile = $user->contact;
                    $login_user->address = $user->address;
                    $login_user->country = $country->name;
                    $login_user->state = $state->name;
                    $login_user->_token = $user->remember_token;

                    $response->status = 'success';
                    $response->code = 200;
                    $response->message = 'login successful';
                    $response->response = $login_user;
                    return response()->json($response);

                } else {

                    $response->status = 'failed';
                    $response->code = 401;
                    $response->message = 'password does not match';
                    $response->response = [];
                    return response()->json($response);
                }
            }else{
                $response->status = 'failed';
                $response->code = 404;
                $response->message = 'agent not found';
                $response->response = [];
                return response()->json($response);
            }
        }
    }

    public function register(Request $request){
        $response = new \stdClass();
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed|min:6',
            'contact' => 'required',
            //'permanent_address' => 'required',
            'role' => 'driver',
        ]);

        if($validator->fails()){
            $response->status = 'failed';
            $response->code = 400;
            $response->message = 'validation failed';
            $response->response = $validator->errors();
            return response()->json($response);
        } else {
            $exist = User::where('email',$request->email)->where('role',$request->role)->first();

            if(!$exist){
                /*if($request->hasFile('image')){
                    $image = $request->file('image');
                    $name = time().'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('/drivers/images');
                    if(!File::isDirectory($destinationPath)){
                        File::makeDirectory($destinationPath, 0777, true, true);
                    }
                    $image->move($destinationPath, $name);
                }else{
                    $name = 'default.jpg';
                }*/

                $user = new User();
                $user->name = $request->name;
                $user->email = $request->email;
                $user->password =$request->password;
               // $user->image = $name;
                $user->contact = $request->contact;
                $user->permanent_address = $request->permanent_address;
                $user->role = 'driver';
                $user->save();
                $response->status = 'success';
                $response->code = 200;
                $response->message = 'customer added successful';
                $response->response = $user;
                return response()->json($response);
            }else{
                $response->status = 'failed';
                $response->code = 409;
                $response->message = 'email already exist';
                $response->response = [];
                return response()->json($response);
            }
        }
    }

    public function getMyOrders(Request $request){
        $response = new \stdClass();
        $validator = Validator::make($request->all(),[
            'driver_id' => 'required',
            'status' => 'required',
        ]);
        if($validator->fails())
        {
            $response->status = 'failed';
            $response->code = 400;
            $response->message = 'validation failed';
            $response->response = $validator->errors();
            return response()->json($response);
        }
        else
        {

            $orders = Order::where('fk_assigned_driver_id',$request->driver_id)->where('status',$request->status)->get();
            if(sizeof($orders)>0){
                $response->status = 'success';
                $response->code = 200;
                $response->message = 'Your Orders';
                $response->response = $orders;
                return response()->json($response);
            }else{
                $response->status = 'failed';
                $response->code = 400;
                $response->message = 'No Orders Found';
                $response->response = [];
                return response()->json($response);
            }
        }
        
    }

    public function update_order_status(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'order_id' => 'required',
            'status' => 'required',
        ]);
        if($validator->fails()){
            $response->status = 'failed';
            $response->code = 422;
            $response->message = 'validation failed';
            $response->response = $validator->errors();
            return response()->json($response);
        } 
        else 
        {
            $id = $request->order_id;
            $status = $request->status;
            $order_status = \DB::table('orders')
                                ->where('id', $id)
                                ->update(['status' => $status]);
            if($order_status)
            {
                return response(['status' => 200, 'message' => 'Status Changed']);
            }
            else
            {
                $response->status = 'failed';
                $response->code = 422;
                $response->message = 'No Order Found';
                $response->response = $validator->errors();
                return response()->json($response);
            }
        }
        
    }
    public function update_status(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'order_id' => 'required',
            'status' => 'required',
        ]);
        if($validator->fails()){
            $response->status = 'failed';
            $response->code = 422;
            $response->message = 'validation failed';
            $response->response = $validator->errors();
            return response()->json($response);
        } 
        else 
        {
            $id = $request->order_id;
            $status = $request->status;
            $order_status = \DB::table('orders')
                                ->where('id', $id)
                                ->update(['status' => $status]);
                                // Get fcm token from users tables using order_id
            $fcm_token = \DB::table('orders')
                                ->join('users', 'orders.fk_customer_id', '=', 'users.id')
                                ->where('orders.id', $id)
                                ->value('fcm_token');
    
                                //Send Notifications 
                                // Start
            define('API_ACCESS_KEY', 
                'AAAAmHw-t58:APA91bGT8az1Cd5mZloii3dozhet-IMrYiqJUHk1ify-bx3_WXzJHQ6165TVIp2QcZj6vAsXm5Qg2yrC7oah4mfWv7roGTIAITELBLT-Z6jUa5riDIq97JkAzWR1Vwe5jeThdApMQqZe');
            // Customize the msg if you want
            $msg = array (
                        'title' => 'Order is'.' '.ucfirst($status),
                        'message' => 'Status Changed',
                    );
            $fields = array (
                            'registration_ids' => array($fcm_token),
                            'data' => $msg
                        );
            $headers = array (
                            'Authorization: key=' . API_ACCESS_KEY,
                            'Content-Type: application/json'
                        );
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://android.googleapis.com/gcm/send');
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
            $result = curl_exec($ch);
    
            curl_close($ch);
            // End
            return response(['status' => 200, 'message' => 'Status Changed']);
        }
        
    }

    public function update_account_setting(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'is_machine_accept' => 'required',
            'driver_id' => 'required',
            'status' => 'required',
        ]);

        if($validator->fails())
        {
            $response->status = 'failed';
            $response->code = 400;
            $response->message = 'validation failed';
            $response->response = $validator->errors();
            return response()->json($response);
        }
        else
        {
            $response = new \stdClass();
            $user = User::find($request->driver_id)->first();
            if($user)
            {
                $user->is_machine_accept = $request->is_machine_request;
                $user->status = $request->status;
                $user->save();
                $response->status = 'success';
                $response->code = 200;
                $response->message = 'User Account Setting Updated';
                $response->response = $user;
                return response()->json($response);
            }
            else
            {
                $response->status = 'failed';
                $response->code = 409;
                $response->message = 'User Not Found';
                $response->response = [];
                return response()->json($response);
            }
        }

    }
    public function setStatus(Request $request)
    {
        $response = new \stdClass();

        $validator = Validator::make($request->all(), [
            'online' => 'required',
            'id' => 'required',
        ]);

        if($validator->fails()){
            $response->status = 'failed';
            $response->code = 440;
            $response->message = 'validation failed';
            $response->response = $validator->errors();
            return response()->json($response);
        } else {}

        $response = new \stdClass();
        $user = User::find($id);
        if($user)
        {
            $user->online = $request->online;
            $user->save();
            $response->status = 'success';
                $response->code = 200;
                $response->message = 'online';
                $response->response = [];
                return response()->json($response);
        }
        else
        {
            $response->status = 'failed';
            $response->code = 422;
            $response->message = 'No User Found';
            $response->response = [];
            return response()->json($response);
        }
    }

    public function updateProfile(Request $request){
        $response = new \stdClass();

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'password' => 'required',
            'home_address' => 'required',
        ]);

        if($validator->fails()){
            $response->status = 'failed';
            $response->code = 440;
            $response->message = 'validation failed';
            $response->response = $validator->errors();
            return response()->json($response);
        } else {
            $user = User::find($request->id);
            if($user){
                $user->status = $request->status;
                $user->first_name = $request->first_name;
                $user->last_name = $request->last_name;
                $user->email = $request->email;
                $user->contact = $request->contact;
                $user->password = Hash::make($request->password);//$request->password;  
                $user->home_address = $request->home_address;              
                $user->save();
                $response->status = 'success';
                $response->code = 200;
                $response->message = 'Status Updated Successful';
                $response->response = $user;
                return response()->json($response);
            }else{
                $response->status = 'failed';
                $response->code = 440;
                $response->message = 'No User Found';
                $response->response = [];
                return response()->json($response);
            }
        }
    }

    public function changeOrderStatus(Request $request){
        $response = new \stdClass();

        $validator = Validator::make($request->all(), [
            'order_id' => 'required',
            'status' => 'required',
        ]);

        if($validator->fails()){
            $response->status = 'failed';
            $response->code = 440;
            $response->message = 'validation failed';
            $response->response = $validator->errors();
            return response()->json($response);
        } else {
            $order = Order::find($request->order_id);
            if($order){
                $order->status = $request->status;
                $order->save();
                $response->status = 'success';
                $response->code = 200;
                $response->message = 'Status Updated Successful';
                $response->response = $order;
                return response()->json($response);
            }else{
                $response->status = 'failed';
                $response->code = 440;
                $response->message = 'No Order Found';
                $response->response = [];
                return response()->json($response);
            }
        }
    }


    public function imageUploadPost(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'image_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'fk_order_id' => 'required',
        ]);
        $response = new \stdClass();
        
        if($validator->fails())
        {
            $response->status = 'failed';
            $response->code = 440;
            $response->message = 'validation failed';
            $response->response = $validator->errors();
            return response()->json($response);
        }
        else
        {
            if ($request->hasFile('image_url')) 
            {
                $image_file = $request->file('image_url');
                $image_name = time() . '.' . $image_file->getClientOriginalExtension();
                $destinationPath = public_path('/order_assets/images');
               /// if (!File::isDirectory($destinationPath)) {
               ///     File::makeDirectory($destinationPath, 0777, true, true);
              ///  }
              ///  $image_file->move($destinationPath, $image_name);
            }

            $App_Image_Object = new App_image();
            $App_Image_Object->image_url = $image_name;
            $App_Image_Object->fk_order_id = $request->fk_order_id;
            $App_Image_Object->save();
            $response->status = "success";
            $response->code = 200;
            $response->message = "Image Uploaded Successfully!";
            $response->response = $App_Image_Object;
            return response()->json($response);


        }
        //$imageName = time().'.'.request()->image_url->getClientOriginalExtension();

  
       // dd($imageName);
        //request()->image_url->move(public_path('images'), $imageName);

  

        //return back()

//            ->with('success','You have successfully upload image.')

  ///          ->with('image',$imageName);

    }
}
