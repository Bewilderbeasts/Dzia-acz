<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kadra extends Model
{
    protected $table = 'kadra';
    protected $fillable = [
        'name',
        'surname',
        'position',
        'number',
        'age',
        'nationality',
        'contract',];
}
