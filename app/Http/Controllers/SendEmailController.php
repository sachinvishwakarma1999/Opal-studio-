<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

class SendEmailController extends Controller
{
    function send(Request $request)
    {

    	$this->validate($request,[
    		'name'  => 'required',
    		'email' =>  'required|email',
    		'message'=>  'required',
    		'mobile'  =>  'required'


    	]);
    	$data = array(
    		'name' => $request->name,
    		'email'=> $request->email,
    		'message'=>$request->message,
    		'mobile'=>$request->mobile
    	);
    	Mail::to('Studiosopal@gmail.com')->send(new SendEmail($data));
    	return back()->with('success','Thanks for conecting us');
    }
}
