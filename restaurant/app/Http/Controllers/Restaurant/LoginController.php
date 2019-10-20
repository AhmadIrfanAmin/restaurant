<?php

namespace App\Http\Controllers\Restaurant;

use App\Http\Controllers\Controller;
use App\Restaurant;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show_login_form($url) {
        $restaurant_info = Restaurant::where('url',$url)->first();
        if (!empty($restaurant_info)){
            return view('restaurant.login', compact('restaurant_info'));
        }
        else {
            abort(404);
        }
    }
    public function restaurant_login(Request $request) {
    
        $this->validate($request, [
            'username'   => 'required',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('restaurant')->attempt(['username' => $request->username, 'password' => $request->password])) {
           
        	
            return redirect()->intended('restaurant/dashboard');
        }
        return back()->withInput($request->only('username', 'password'));
    }
}
