<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Dataa;
use App\Models\User;

class ProfilerController extends Controller
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
        $users = Auth::id();
        $data = DB::table('data')
            ->where('user_id', '=', $users)
           
            ->get();
        
        return view('profiler', compact('data'));
        //return view('profiler', array('user' =>Auth::user()));
    }
}
