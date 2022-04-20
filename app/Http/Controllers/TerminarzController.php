<?php
namespace App\Http\Controllers;




use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\CsvData;
use App\Http\Requests\CsvImportRequest;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\TerminarzImport;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Terminarz;
use Carbon\Carbon;



class TerminarzController extends Controller
{
 	public function getImport()
    {
        return view('terminarzimport');
    }


    public function store(Request $request)
    {

  $this->validate($request, [
        'file' => 'required|mimes:csv,txt',
    ]);

        
    	$file = $request->file('file');

    	Excel::import(new TerminarzImport, $file);

    	return back()->withStatus('Plik zaimportowany');
    }

    public function terminarz()
    {

    	 $currentidz = Auth::id();
        $user = Auth::user();
        $secondaryid = DB::table('userhasworkers')->where('user_id2', '=', $currentidz)->get()->pluck('user_id')->first();

        $terminarz = DB::table('terminarz')->where('user_id', '=', $secondaryid)->orderBy('date')->where('date', '>=', Carbon::now())->take(7)->get();
        return view('terminarz', compact('terminarz'));
    }

}