<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = [

        'image',
        'type',
        'gender',
        'age',
        'color',
        'height',
        'weight',
        'breed',

    ];
}
