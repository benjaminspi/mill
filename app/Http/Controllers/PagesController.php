<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller{

	public function home(){

			$mills = [ "Mill 1", "Mill 2", "Mill 3"];

		    return view(
		    	'welcome',
		    	['mills' => $mills]
		    );

	}

	public function contact(){

	    return view('contact');

	}

	public function about(){

	    return view('about');

	}

}
