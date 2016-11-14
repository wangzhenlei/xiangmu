<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\Model;


class ZoneController extends Controller
{
	public function zone()
	{
		return view("zone.zone");
	}
	
}