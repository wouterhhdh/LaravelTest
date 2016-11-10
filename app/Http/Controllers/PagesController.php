<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{
	public function home(){
		$people = ['Data1', 'Data2', 'Data3'];
  		return view('welcome', compact('people'));
	}
	public function about(){
		return view('pages.about');
	}	
}
