<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\Model;


class IndexController extends Controller
{
	public function index()
	{
		return view("index.index");
	}
	
}
