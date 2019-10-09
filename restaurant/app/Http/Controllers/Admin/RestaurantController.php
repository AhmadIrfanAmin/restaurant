<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
	public function index() {
		
		return view('admin.restaurants.index');
	}
	public function create(Request $request) {
		return view('admin.restaurants.create');
	}
}
