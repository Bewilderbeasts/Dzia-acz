<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolasHasUsers extends Model
{
    use HasFactory;

    use HasFactory;
protected $table = 'rolashasusers';
protected $fillable = [
    'user_id',
    'role_id',
    ];

}
