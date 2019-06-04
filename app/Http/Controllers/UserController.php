<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Read submitted form input values
use Illuminate\Support\Facades\Input;
//Read Databases
use Illuminate\Support\Facades\DB;
//Read Pagination
use Illuminate\Pagination\Paginator;

class UserController extends Controller
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
		       $users = DB::table('users')->paginate(1);
				#DB::table('users')->where('votes', '>', 100)->delete();
				/* Conditional Clauses
				$users = DB::table('users')
                ->when($role, function ($query, $role) {
                    return $query->where('role_id', $role);
                })
                ->get();
				Auto-Incrementing IDs
				$id = DB::table('users')->insertGetId(
					['email' => 'john@example.com', 'votes' => 0]
				);
				updates
				DB::table('users')
				->where('id', 1)
				->update(['votes' => 1]);
				/* inserts
				DB::table('users')->insert(
					['email' => 'john@example.com', 'votes' => 0]
				);
				*/
         #return view( ['users' => $users]);
       return view('user')->with('users', $users); 
    }
}
