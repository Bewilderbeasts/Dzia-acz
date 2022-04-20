<?php

namespace App\Models;


class Data extends Model
{
    protected $table = 'data';
protected $fillable = [
    'name',
    'surname',
    'phone',
    'housenr',
    'street',
    'town',
    'town',
    'city',
];

}