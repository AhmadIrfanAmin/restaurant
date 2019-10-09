<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeliveryBoyController extends Controller
{
	public function index() {
		// $vehicle_types = Vehicle_type::all();
		return view('admin.delivery-boys.index');
	}
	public function create(Request $request) {
		return view('admin.delivery-boys.create');
	}
}
