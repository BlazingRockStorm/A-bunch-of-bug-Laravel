<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slides;

class PageController extends Controller
{
    //
	public function getIndex(){
		$slide = slides::all();
		return view('index',compact('slide')); 
	}
}
