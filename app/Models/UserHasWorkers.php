<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserHasWorkers extends Model
{
    protected $table = 'userhasworkers';
	protected $fillable = [
    'user_id',
    'user_id2',
];

}