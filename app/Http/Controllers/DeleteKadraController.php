<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kadra;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use DB;

class DeleteKadraController extends Controller
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

        public function destroy($id)
{       

        $kadra = kadra::findOrFail($id);
        $kadra -> delete();

        return redirect('personel');
}
}