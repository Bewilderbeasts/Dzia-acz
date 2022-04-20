<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group([
	'middleware' =>'roles',
	'roles' => 'Działacz'
], function() {

Route::get('/workersnew', [App\Http\Controllers\WorkersController::class, 'work'])->name('workers');
Route::delete('/workersdelete/{id}', [App\Http\Controllers\DeleteController::class, 'destroy'])->name('delete.workers');
Route::delete('/kadradelete/{id}', [App\Http\Controllers\DeleteKadraController::class, 'destroy'])->name('delete.kadra');
Route::delete('/tabeladelete', [App\Http\Controllers\DeleteTabelaController::class, 'destroy'])->name('delete.tabela');
Route::get('/workers', [App\Http\Controllers\WorkersController::class, 'index'])->name('worker');
Route::POST('/personeladd', [App\Http\Controllers\KadraController::class, 'addpersonel'])->name('kadraadd');
Route::get('/personelnew', [App\Http\Controllers\KadraController::class, 'kadra'])->name('kadras');
Route::POST('/clubupdates', [App\Http\Controllers\ClubController::class, 'clubstore'])->name('club.store');
Route::get('/clubedit', [App\Http\Controllers\ClubController::class, 'edit'])->name('club.edit');
Route::get('/club', [App\Http\Controllers\ClubController::class, 'index'])->name('club');
Route::POST('/add-logo',[App\Http\Controllers\ClubController::class, 'image'])->name('club.logo');  
Route::POST('/add-logo',[App\Http\Controllers\UserController::class, 'image'])->name('user.logo');
Route::POST('/updateclub', [App\Http\Controllers\ClubController::class, 'update'])->name('club.update');
Route::get('/worksucces', [App\Http\Controllers\HomeController::class, 'index'])->name('worksucces');
Route::POST('/workersadd', [App\Http\Controllers\WorkersController::class, 'addworker'])->name('add.worker');
Route::get('/resultsnew', [App\Http\Controllers\WynikiController::class, 'resultsadd'])->name('resultsadd');
Route::POST('/resultsadding', [App\Http\Controllers\WynikiController::class, 'resultsadding'])->name('add.results');
Route::get('/statsnew', [App\Http\Controllers\StatController::class, 'statadd'])->name('statadd');
Route::POST('/statsadding', [App\Http\Controllers\StatController::class, 'statadding'])->name('add.stats');
Route::get('/statsedit', [App\Http\Controllers\StatController::class, 'statsedit'])->name('statsedit');
Route::get('/statedit/{stats}', [App\Http\Controllers\StatController::class, 'gotoedit'])->name('editing');
Route::put('/statedit/{stats}', [App\Http\Controllers\StatController::class, 'statediting'])->name('statediting');

Route::get('/raportselect', [App\Http\Controllers\RaportController::class, 'index'])->name('raportselect');
Route::POST('/generate', [App\Http\Controllers\RaportController::class, 'generate'])->name('generate');
Route::get('/import', [App\Http\Controllers\ImportController::class, 'getImport'])->name('import');
Route::post('/import_parse', [App\Http\Controllers\ImportController::class, 'store'])->name('import_parse');
Route::post('/import_process', [App\Http\Controllers\ImportController::class, 'processImport'])->name('import_process');

Route::get('/import-t', [App\Http\Controllers\TerminarzController::class, 'getImport'])->name('import-t');
Route::post('/import_terminarz', [App\Http\Controllers\TerminarzController::class, 'store'])->name('import_terminarz');

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::POST('/updates', [App\Http\Controllers\ProfileController::class, 'store'])->name('prof.store');
Route::get('/profile/{id}', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::get('/profiler', [App\Http\Controllers\ProfilerController::class, 'index'])->name('profiler');

Route::get('/clubs', [App\Http\Controllers\ClubsController::class, 'index'])->name('clubs');
Route::get('/stats', [App\Http\Controllers\StatController::class, 'index'])->name('stats');
Route::get('/personel', [App\Http\Controllers\KadraController::class, 'index'])->name('kadra');

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');






Route::get('/terminarz', [App\Http\Controllers\TerminarzController::class, 'terminarz'])->name('terminarz');

Route::get('/tabela', [App\Http\Controllers\ImportController::class, 'tabela'])->name('tabela');






Route::get('/results', [App\Http\Controllers\WynikiController::class, 'wyniki'])->name('results');


Route::get('/error', [App\Http\Controllers\UserController::class, 'error'])->name('error');

Route::POST('/add-photo',[App\Http\Controllers\ProfileController::class, 'imagez'])->name('user.photo');