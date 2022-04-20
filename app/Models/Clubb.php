<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clubb extends Model
{
    use HasFactory;

    protected $table = 'club';
    protected $fillable = [
        'clubname',
        'localization',
        'lnumber',
        'phone',
        'street',
        'town',
        'postcode',
        'city',];
}
