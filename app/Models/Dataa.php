<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dataa extends Model
{
    use HasFactory;

    protected $table = 'data';
    protected $fillable = [
        'user_id',
        'name',
        'surname',
        'phone',
        'housenr',
        'street',
        'town',
        'town',
        'city',];
}
