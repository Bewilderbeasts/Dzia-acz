<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Wyniki;
use Carbon\Carbon;

class WynikiController extends Controller
{
    public function wyniki()
    {

    	 $currentid = Auth::id();
        $user = Auth::user();
          $secondaryid = DB::table('userhasworkers')->where('user_id2', '=', $currentid)->get()->pluck('user_id')->first();

        $results = DB::table('results')->where('user_id', '=', $secondaryid)->orderBy('date')->where('date', '<=', Carbon::now())->take(7)->get();
        $terminarz = DB::table('terminarz')->where('user_id', '=', $secondaryid)->orderBy('date')->where('date', '>=', Carbon::now())->get();
        return view('wyniki', compact('results', 'terminarz'));
    }

    public function resultsadd()
    {

        $currentid = Auth::id();

        $user = Auth::user();

        $matches = DB::table('terminarz')->where('user_id', '=', $currentid)->orderBy('date')->where('date', '<=', Carbon::now())->take(2)->get();
        

        return view('resultsadd', compact('matches'));
        }

        public function resultsadding(Request $request){

        //save player to database

        $currentid = Auth::id();
        $dane = $request->get('match');
        $date = substr($dane, -10);
        $match = substr($dane, 0, -11);

        $results = new Wyniki();
        $results->user_id = $currentid;
        $results->match = $match;
        $results->date = $date;
        $results->score = $request->get('result');
        //dd($results);
        $results->save();


       return view('resultsaddsuccess');
    }
}
