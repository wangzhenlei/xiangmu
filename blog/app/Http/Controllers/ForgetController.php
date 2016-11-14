<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\Model;


class ForgetController extends Controller
{
	public function forget01()
	{
		return view("forget.forget01");
	}
	

	public function forget02()
	{
		return view("forget.forget02");
	}


	public function forget03()
	{
		return view("forget.forget03");
	}
}
