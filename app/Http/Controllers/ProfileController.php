<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Dataa;
use App\Models\User;

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


    public function imagez(Request $request)
    {   
        $name = $request->name;
        $image = $request->file('logo');
        $imageName = time().'-'.$image->extension();
        $image->move(public_path('img'),$imageName);
        
            $data->avatar = $imageName;
            $data->save();
            return view('home');
    }
    public function store(Request $request)
    {
         $id = Auth::user()->id;

         Dataa::where('user_id', '=', $id)->update([
    'name' => $request->name,
        'surname' => $request->surname,
        'phone' => $request->phone,
        'street' => $request->street,
        'town' => $request->town,
        'postcode' => $request->postcode,
        'city' => $request->city,
]);
       
       
        return view('datasuccess');

    
    }


    public function index()
    {
        $user = Auth::id();
        $data = DB::table('data')
            ->where('user_id', '=', $user)
           
            ->get();

        return view('profile', compact('data'), array('user' =>Auth::user()));
    }
}
