<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserHasRoles extends Model
{
    protected $table = 'userhasroles';
	protected $fillable = [
   'user_id',
'role_id',
];

public function users()
    {
        return $this->hasMany('App\User', 'userhasroles', 'user_id', 'role_id')->withTimestamps;
    }
}