<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [

        'customers_id',
        'country',
        'province',
        'barangay',
        'street',
        'region',
        'zipcode',

    ];
}
