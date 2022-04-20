<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\UserHasRoles;
use App\Models\UserHasWorkers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Dataa;
use App\Models\RolasHasUsers;
use DB;

class WorkersController extends Controller
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





    public function addworker(Request $request){

        $currentidz = Auth::id();
        $logo = DB::table('users')->where('id', '=', $currentidz)->pluck('logo');
        $logo1 = substr($logo, 0, -2);
        $logo2 = substr($logo1, 2);
       
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->logo = $logo2;
        $user->password = Hash::make($request->password);
        $user->save();

        $id = $user->id;
        $role = new RolasHasUsers();
        $role->user_id = $id;
        $role->role_id = $request->get('role');
        $role->save();

        $worker = new UserHasWorkers();
        $worker->user_id = Auth::id();
        $worker->user_id2 = $id;
        $worker->save();

        Dataa::create([
            'user_id' => $user->id,
        ]);

        return view('worksuccess');
}


        public function destroy($id)
{       

        $currentidz = Auth::id();
        $workeridz = DB::table('userhasworkers')->where('user_id', '=', $currentidz)->pluck('user_id2');
        $users = user::whereIn('id', $workeridz)->findOrFail($id);
        $users -> delete();
        return dd($id);

        return redirect('home');
}
    
        public function index()
    {

        $currentid = Auth::id();
        $workerid = DB::table('userhasworkers')->where('user_id', '=', $currentid)->pluck('user_id2');
        $works = user::whereIn('id', $workerid)->get();

       // $stanowisko = DB::table('userhasroles')->where('user_id', '=', $workerid)->pluck('role_id');
        $stan = UserHasRoles::whereIn('user_id', $workerid)->pluck('role_id')->toArray();
        $praca = Role::whereIn('id', $stan)->pluck("role");

      
      // var_dump($praca);

      if ($stan == '1') {
       $pracka = DB::table('roles')->where('id', '=', '1')->pluck('role');
   } else {
       $pracka = DB::table('roles')->where('id', '=', '2')->pluck('role');
   }

      

      return view('workers', compact('works', 'pracka', 'stan'));
    }

      public function work()
    {
        return view('addworker');
    }
}
