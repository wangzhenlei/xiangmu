<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\Model;


class LoginController extends Controller
{
	public function login()
	{
		return view("login.login");
	}
	
}
