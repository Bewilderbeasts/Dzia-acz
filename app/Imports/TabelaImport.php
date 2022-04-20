<?php

namespace App\Imports;

use App\Models\Tabela;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Auth;

class TabelaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Tabela([
            'user_id' => Auth::id(),
            'team' => $row[0],
            'points' => $row[1],
            'matches' => $row[2],
            'goalsfor' => $row[3],
            'goalsagainst' => $row[4],
            'wins' => $row[5],
            'draws' => $row[6],
            'losses' => $row[7]  
        ]);
    }
}
