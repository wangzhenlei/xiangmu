<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\Model;


class SelfController extends Controller
{
	public function self()
	{
		return view("self.self_add");
	}
	
}
