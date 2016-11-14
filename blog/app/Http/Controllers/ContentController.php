<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\Model;


class ContentController extends Controller
{
	public function content()
	{
		return view("content.content");
	}
	
}
