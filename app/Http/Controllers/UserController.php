<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;

class UserController extends Controller
{

    public function data()
    {   
        $user = Auth::user();
        return view('profile', array('user' => Auth::user() ));

    }

     public function error() {

        return view('error');

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
            return view('clubsuccess');
    }

    /*public function update_logo(Request $request){

        if($request->hasFile('logo')){
            $logo = $request->file('logo');
            $filename = time() . '-' . $logo->getClientOriginalExtension();
            Image::make($logo)->resize(200, 200)->save( public_path('/img/' . $filename ));

            $user = Auth::user();
            $user->logo = $filename;
            $user->save();
        }
        return view('profile', array('user' => Auth::user() ));
    }*/

}