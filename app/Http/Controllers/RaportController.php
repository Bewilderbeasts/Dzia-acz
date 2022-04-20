<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Kadra;
use App\Models\Terminarz;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use DB;
use Carbon\Carbon;
use PDF;

class RaportController extends Controller
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


     public function generate(Request $request)
    {

       $match = $request->match;
       $formation = $request->formation;
      
       $zawodnik1 = $request->input('player1');
       $zawodnik2 = $request->input('player2');
       $zawodnik3 = $request->input('player3');
       $zawodnik4 = $request->input('player4');
       $zawodnik5 = $request->input('player5');
       $zawodnik6 = $request->input('player6');
       $zawodnik7 = $request->input('player7');
       $zawodnik8 = $request->input('player8');
       $zawodnik9 = $request->input('player9');
       $zawodnik10 = $request->input('player10');
       $zawodnik11 = $request->input('player11');

       $rezerwowy1 = $request->input('reserve1');
       $rezerwowy2 = $request->input('reserve2');
       $rezerwowy3 = $request->input('reserve3');
       $rezerwowy4 = $request->input('reserve4');
       $rezerwowy5 = $request->input('reserve5');
       $rezerwowy6 = $request->input('reserve6');
       $rezerwowy7 = $request->input('reserve7');

       $nazwisko1 = substr($zawodnik1, 0, -5);
       $nazwisko2 = substr($zawodnik2, 0, -5);
       $nazwisko3 = substr($zawodnik3, 0, -5);
       $nazwisko4 = substr($zawodnik4, 0, -5);
       $nazwisko5 = substr($zawodnik5, 0, -5);
       $nazwisko6 = substr($zawodnik6, 0, -5);
       $nazwisko7 = substr($zawodnik7, 0, -5);
       $nazwisko8 = substr($zawodnik8, 0, -5);
       $nazwisko9 = substr($zawodnik9, 0, -5);
       $nazwisko10 = substr($zawodnik10, 0, -5);
       $nazwisko11 = substr($zawodnik11, 0, -5);
       $nazwisko12 = substr($rezerwowy1, 0, -5);
       $nazwisko13 = substr($rezerwowy2, 0, -5);
       $nazwisko14 = substr($rezerwowy3, 0, -5);
       $nazwisko15 = substr($rezerwowy4, 0, -5);
       $nazwisko16 = substr($rezerwowy5, 0, -5);
       $nazwisko17 = substr($rezerwowy6, 0, -5);
       $nazwisko18 = substr($rezerwowy7, 0, -5);

       $wiek1 = substr($zawodnik1,  -2, 2);
       $wiek2 = substr($zawodnik2,  -2, 2);
       $wiek3 = substr($zawodnik3,  -2, 2);
       $wiek4 = substr($zawodnik4,  -2, 2);
       $wiek5 = substr($zawodnik5,  -2, 2);
       $wiek6 = substr($zawodnik6,  -2, 2);
       $wiek7 = substr($zawodnik7,  -2, 2);
       $wiek8 = substr($zawodnik8,  -2, 2);
       $wiek9 = substr($zawodnik9,  -2, 2);
       $wiek10 = substr($zawodnik10,  -2, 2);
       $wiek11 = substr($zawodnik11,  -2, 2);
       $wiek12 = substr($rezerwowy1,  -2, 2);
       $wiek13 = substr($rezerwowy2,  -2, 2);
       $wiek14 = substr($rezerwowy3,  -2, 2);
       $wiek15 = substr($rezerwowy4,  -2, 2);
       $wiek16 = substr($rezerwowy5,  -2, 2);
       $wiek17 = substr($rezerwowy6,  -2, 2);
       $wiek18 = substr($rezerwowy7,  -2, 2);


       $numer1 = substr($zawodnik1, -5, -3);
       $numer2 = substr($zawodnik2, -5, -3);
       $numer3 = substr($zawodnik3, -5, -3);
       $numer4 = substr($zawodnik4, -5, -3);
       $numer5 = substr($zawodnik5, -5, -3);
       $numer6 = substr($zawodnik6, -5, -3);
       $numer7 = substr($zawodnik7, -5, -3);
       $numer8 = substr($zawodnik8, -5, -3);
       $numer9 = substr($zawodnik9, -5, -3);
       $numer10 = substr($zawodnik10, -5, -3);
       $numer11 = substr($zawodnik11, -5, -3);
       $numer12 = substr($rezerwowy1, -5, -3);
       $numer13 = substr($rezerwowy2, -5, -3);
       $numer14 = substr($rezerwowy3, -5, -3);
       $numer15 = substr($rezerwowy4, -5, -3);
       $numer16 = substr($rezerwowy5, -5, -3);
       $numer17 = substr($rezerwowy6, -5, -3);
       $numer18 = substr($rezerwowy7, -5, -3);

       $age1 = substr($zawodnik1, -2);
      

        //dd($match, $formation, $zawodnicy1sklad, );
       //dd($zawodnik1);
       //return view('raport', compact('match','formation', 'zawodnik1', 'zawodnik2','zawodnik3','zawodnik4','zawodnik5','zawodnik6','zawodnik7','zawodnik8','zawodnik9','zawodnik10','zawodnik11', 'rezerwowy1', 'rezerwowy2', 'rezerwowy3', 'rezerwowy4', 'rezerwowy5', 'rezerwowy6', 'rezerwowy7', 'numer1', 'numer2', 'numer3', 'numer4', 'numer5', 'numer6', 'numer7', 'numer8', 'numer9', 'numer10', 'numer11', 'numer12', 'numer13', 'numer14', 'numer15', 'numer16', 'numer17', 'numer18', 'nazwisko1', 'nazwisko2', 'nazwisko3', 'nazwisko4', 'nazwisko5', 'nazwisko6', 'nazwisko7', 'nazwisko8', 'nazwisko9', 'nazwisko10', 'nazwisko11', 'nazwisko12', 'nazwisko13', 'nazwisko14', 'nazwisko15',  'nazwisko16', 'nazwisko17', 'nazwisko18', 'wiek1','wiek2','wiek3','wiek4','wiek5','wiek6','wiek7','wiek8','wiek9','wiek10','wiek11','wiek12','wiek13','wiek14', 'wiek15','wiek16','wiek17','wiek18',));

        $pdf = PDF::loadView('raport', compact('match','formation', 'zawodnik1', 'zawodnik2','zawodnik3','zawodnik4','zawodnik5','zawodnik6','zawodnik7','zawodnik8','zawodnik9','zawodnik10','zawodnik11', 'rezerwowy1', 'rezerwowy2', 'rezerwowy3', 'rezerwowy4', 'rezerwowy5', 'rezerwowy6', 'rezerwowy7', 'numer1', 'numer2', 'numer3', 'numer4', 'numer5', 'numer6', 'numer7', 'numer8', 'numer9', 'numer10', 'numer11', 'numer12', 'numer13', 'numer14', 'numer15', 'numer16', 'numer17', 'numer18', 'nazwisko1', 'nazwisko2', 'nazwisko3', 'nazwisko4', 'nazwisko5', 'nazwisko6', 'nazwisko7', 'nazwisko8', 'nazwisko9', 'nazwisko10', 'nazwisko11', 'nazwisko12', 'nazwisko13', 'nazwisko14', 'nazwisko15',  'nazwisko16', 'nazwisko17', 'nazwisko18', 'wiek1','wiek2','wiek3','wiek4','wiek5','wiek6','wiek7','wiek8','wiek9','wiek10','wiek11','wiek12','wiek13','wiek14', 'wiek15','wiek16','wiek17','wiek18',));
   return $pdf->download('raport.pdf');
    }




      public function index()
    {


        $currentidz = Auth::id();
        $user = Auth::user();

        $terminarz = DB::table('terminarz')->where('user_id', '=', $currentidz)->orderBy('date')->where('date', '>=', Carbon::now())->take(2)->get();

        $zawodnicy = DB::table('kadra')->where('user_id', '=', $currentidz)->get();


        return view('selectraport', compact('terminarz', 'zawodnicy'));
    }
}
