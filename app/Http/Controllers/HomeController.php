<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function home(){
		return view('welcome');
	}
	function about(){
		return view('about');
	}
	function contact(){
		return view('contact');
	}
	
	function news(){
		return view('news');
	}
	
	
	function developer(){
		return view('component.developer');
	}
}
