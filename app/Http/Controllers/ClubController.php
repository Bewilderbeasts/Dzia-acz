<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Clubb;
use DB;
use App\Models\User;

class ClubController extends Controller
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
        $user = Auth::user();
        $id = Auth::id();

        return view('club', array('user' =>Auth::user()));
    }

        public function edit()
    {
        
        $user = Auth::user();
        $id = Auth::id();
         $data = DB::table('club')
            ->where('user_id', '=', $id)
           
            ->get();

        return view('clubedit', compact('data'), array('user' =>Auth::user()));
    }



    public function update(Request $request)
    {
         $id = Auth::user()->id;

         Clubb::where('user_id', '=', $id)->update([
        'clubname' => $request->clubname,
        'localization' => $request->localization,
        'lnumber' => $request->lnumber,
        'phone' => $request->phone,
        'street' => $request->street,
        'town' => $request->town,
        'postcode' => $request->postcode,
        'city' => $request->city,
]);
       
       
        return view('datasuccess');
    }

    public function clubstore(Request $request)
    {
       //print_r($request->input()); 

        $club = new Clubb;
        $club->user_id = $request->user()->id;
        $club->clubname = $request->clubname;
        $club->localization = $request->localization;
        $club->lnumber = $request->lnumber;
        $club->phone = $request->phone;
        $club->street = $request->street;
        $club->town = $request->town;
        $club->postcode = $request->postcode;
        $club->city = $request->city;
    
            $club->save();
            return view('clubsuccess');
    }


    public function image(Request $request)
    {
        $name = $request->name;
        $image = $request->file('logo');
        $imageName = time().'-'.$image->extension();
        $image->move(public_path('img'),$imageName);
        
        $user = Auth::user();
            $user->logo = $imageName;
            $user->save();
            return view('home');
    }
}
