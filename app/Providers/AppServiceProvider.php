<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Models\rolashasusers;
use Illuminate\Support\Facades\Blade;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
$currentidz = Auth::id();
       
         $role = DB::table('rolashasusers')->where('user_id', '=', $currentidz)->get()->pluck('role_id')->first();

        Blade::directive('dzialacz', function ($role) {
             
           
            $isAuth = false;

            // check if the user authenticated is teacher
            if (auth()->user() && $role == 2) {

                $isAuth = true;
            }

            return "<?php if (" . intval($isAuth) . ") { ?>";
        });

        Blade::directive('enddzialacz', function () {
            return "<?php } ?>";
        });
    }
}
