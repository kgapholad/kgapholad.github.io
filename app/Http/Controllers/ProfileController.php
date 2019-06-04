<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
	$call_url = "http://196.40.112.155:8080/mngrouting/action/usedcodes/120";
        //-------------USSD --To get a list of all shortcodes allocated for a given base shortcode you just need to send an HTTP POST --------\\
	$param = array(
	);
     //create curl resource 
        $ch = curl_init(); 
        // set url 
        curl_setopt($ch, CURLOPT_URL, $call_url);
        //Create a POST a String a string 
	curl_setopt($ch, CURLOPT_POST, 1);
	//return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	// Set POSTFIELDS //
	curl_setopt($ch, CURLOPT_POSTFIELDS,$param);	
        // $output_data contains the output string 
        $output_data = curl_exec($ch); 

	$profile = simplexml_load_string($output_data); 
        return view('profile')->with('profile', $profile); 
		#return view('profile');
    }
    //--- Checks if ussd is available to use ----\\
}
