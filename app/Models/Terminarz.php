<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terminarz extends Model
{
    use HasFactory;
    protected $table = 'terminarz';
    protected $fillable = [
    'user_id',  
    'team',
    'team2',
    'date',
];
}
