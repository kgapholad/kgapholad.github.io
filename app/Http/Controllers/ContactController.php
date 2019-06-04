<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Read submitted form input values
use Illuminate\Support\Facades\Input;
//Read Databases
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
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
        return view('contact');
    }
	public function store()
	{
	   $user = Input::get('username');
	   $email = Input::get('email');
	   return $user.'-'.$email;
	   # return redirect('profile?suc=y');
	}

}
