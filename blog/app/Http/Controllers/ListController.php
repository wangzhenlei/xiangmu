<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\Model;


class ListController extends Controller
{
	public function list()
	{
		return view("list.list");
	}
	
}
