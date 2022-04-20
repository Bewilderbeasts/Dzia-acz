<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Kadra;

class KadraController extends Controller
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
       // $kadraz = DB::select('select * from kadra');
        $secondaryid = DB::table('userhasworkers')->where('user_id2', '=', $currentidz)->get()->pluck('user_id')->first();


        $kadraz = DB::table('kadra')->where('user_id', '=', $secondaryid)->get();
        return view('kadra', compact('kadraz'));
        
    }

     public function kadra()
    {
        return view('kadraadd');
    }


     public function addpersonel(Request $request){

        //save player to database

        $currentid = Auth::id();

        $kadra = new Kadra();
        $kadra->user_id = $currentid;
        $kadra->name = $request->name;
        $kadra->surname = $request->surname;
        $kadra->position = $request->get('position');
        $kadra->number = $request->get('number');
        $kadra->age = $request->get('age');
        $kadra->nationality = $request->get('nationality');
        $kadra->contract = $request->get('contract');
        //var_dump($currentid);
        $kadra->save();


       return view('kadrasuccess');
}

}
