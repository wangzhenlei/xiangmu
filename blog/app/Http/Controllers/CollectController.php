<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\Model;


class CollectController extends Controller
{
	public function collect()
	{
		return view("collect.collect");
	}
	
}