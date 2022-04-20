<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Clubb;

class ClubsController extends Controller
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
        $currentidz = Auth::id();

        $user = Auth::user();
        $secondaryid = DB::table('userhasworkers')->where('user_id2', '=', $currentidz)->get()->pluck('user_id')->first();
        $club1 = DB::table('club')->where('user_id', '=', $secondaryid)->get();
        $userz = DB::table('users')->where('id', '=', $secondaryid)->get();
        $id = Auth::id();
      //  $club = DB::select('select * from club');

         $club = DB::table('club')
            ->where('user_id', '=', $secondaryid)
           
            ->get();
        //dd($userz);
        return view('clubs',compact('club1', 'user', 'userz'));
        
    }
}
