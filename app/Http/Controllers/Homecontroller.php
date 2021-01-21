<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function Home()
    {

		       	
        return view('Home');
    }

    public function Aboutus()
    {
    	return view('Aboutus');
    }

    public function Contect()
    {
    	return view('Contect');
    }

    
}
