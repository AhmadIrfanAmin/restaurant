<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
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

}
