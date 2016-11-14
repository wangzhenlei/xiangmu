<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\Model;


class RegistController extends Controller
{
	public function regist()
	{
		return view("regist.regist");
	}
	
}
