<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Stats;
use App\Models\Kadra;


class StatController extends Controller
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
        $stat1 = DB::table('stats')->where('user_id', '=', $secondaryid)->get();

        $stat = DB::table('stats')->where('user_id', '=', $secondaryid)->get();

        $zawodnicy = DB::table('kadra')->where('user_id', '=', $secondaryid)->get();
        //dd($upperdata);
        return view('stats', compact('stat', 'zawodnicy', 'stat1'));
        
    }

     public function statadd()
    {

        $currentidz = Auth::id();

        $user = Auth::user();

        $zawodnicy = DB::table('kadra')->where('user_id', '=', $currentidz)->get();
        

        return view('statadd', compact('zawodnicy'));
    }

    public function statsedit()
    {

        $currentidz = Auth::id();

        $user = Auth::user();

        $zawodnicy = DB::table('kadra')->where('user_id', '=', $currentidz)->get();
        $staty = DB::table('stats')->where('user_id', '=', $currentidz)->get();

        return view('statedit', compact('zawodnicy', 'staty'));
    }

     public function gotoedit($stats)
    {
        $currentidz = Auth::id();
        $stats = Stats::find($stats);
        $zawodnicy = DB::table('kadra')->where('user_id', '=', $currentidz)->get();
        $staty = DB::table('stats')->where('user_id', '=', $currentidz)->get();

        return view('statedit', compact('stats','zawodnicy', 'staty'));
    }


     public function statadding(Request $request){

        //save player to database

        $currentid = Auth::id();

        $stats = new Stats();
        $stats->user_id = $currentid;
        $stats->player = $request->get('player');
        $stats->apps = $request->get('apps');
        $stats->goals = $request->get('goals');
        $stats->asissts = $request->get('asissts');
        $stats->ycards = $request->get('ycards');
        $stats->rcards = $request->get('rcards');
        //dd($stats);
        $stats->save();


       return view('stataddsuccess');
}

     public function statediting(Request $request, $stats){

         $input = $request->all();

    $stats = Stats::find($stats);
       $stats->player = $input['player'];
       $stats->apps = $input['apps'];
       $stats->goals = $input['goals'];
       $stats->asissts = $input['asissts'];
       $stats->ycards = $input['ycards'];
       $stats->rcards = $input['rcards'];
       $stats->save();

    

        return view('stateditsuccess');
        }


}