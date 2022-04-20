<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabela extends Model
{
    use HasFactory;
    protected $table = 'tabela';
    protected $fillable = [
    'user_id',	
    'team',
    'points',
    'matches',
    'goalsfor',
    'goalsagainst',
    'wins',
    'draws',
    'losses',
];
}
