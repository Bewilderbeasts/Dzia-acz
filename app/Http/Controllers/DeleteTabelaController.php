<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tabela;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use DB;

class DeleteTabelaController extends Controller
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

        public function destroy()
{       

        $currentidz = Auth::id();
        $user = Auth::user();

        $tabela = DB::table('tabela')->where('user_id', '=', $currentidz)->delete();;

        return redirect('tabela');
}
}