<?php

namespace App\Imports;

use App\Models\Terminarz;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Auth;


class TerminarzImport implements ToModel
{
   /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Terminarz([
            'user_id' => Auth::id(),
            'team' => $row[0],
            'team2' => $row[1],
            'date' => $row[2],
        ]);
    }
}
