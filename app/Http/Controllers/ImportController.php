<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\CsvData;
use App\Http\Requests\CsvImportRequest;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\TabelaImport;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Tabela;


class ImportController extends Controller
{
 	public function getImport()
    {
        return view('import');
    }

 /*    public function parseImport(CsvImportRequest $request)
    {

       $path = $request->file('csv_file')->getRealPath();

        if ($request->has('header')) {
            $data = Excel::load($path, function($reader) {})->get()->toArray();
        } else {
            $data = array_map('str_getcsv', file($path));
        }

        if (count($data) > 0) {
            if ($request->has('header')) {
                $csv_header_fields = [];
                foreach ($data[0] as $key => $value) {
                    $csv_header_fields[] = $key;
                }
            }
            $csv_data = array_slice($data, 0, 2);

            $csv_data_file = CsvData::create([
                'csv_filename' => $request->file('csv_file')->getClientOriginalName(),
                'csv_header' => $request->has('header'),
                'csv_data' => json_encode($data)
            ]);
        } else {
            return redirect()->back();
        }

        return view('import_fields', compact( 'csv_header_fields', 'csv_data', 'csv_data_file'));

    } */

    public function store(Request $request)
    {

  

   

    	$file = $request->file('file');



    	Excel::import(new TabelaImport, $file);

    	return back()->withStatus('Plik zaimportowany');
    }

    public function tabela()
    {

    	 $currentidz = Auth::id();

        $user = Auth::user();
$secondaryid = DB::table('userhasworkers')->where('user_id2', '=', $currentidz)->get()->pluck('user_id')->first();

        $tabela = DB::table('tabela')->where('user_id', '=', $secondaryid)->orderBy('points', 'DESC')->get();
       // $bilans = ((int)$tabela->goalsfor - (int)$tabela->goalsagainst);
        return view('tabela', compact('tabela'));
    }

  /*  public function processImport(Request $request)
    {
        $data = CsvData::find($request->csv_data_file_id);
        $csv_data = json_decode($data->csv_data, true);
        foreach ($csv_data as $row) {
            $contact = new Contact();
            foreach (config('app.db_fields') as $index => $field) {
                if ($data->csv_header) {
                    $contact->$field = $row[$request->fields[$field]];
                } else {
                    $contact->$field = $row[$request->fields[$index]];
                }
            }
            $contact->save();
        }

        return view('import_success');
    }
*/
}