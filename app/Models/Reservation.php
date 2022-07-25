<?php

namespace App\Models;

use App\Models\Pet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [

        'customers_id',
        'pets_id',
        'reserved_due',

    ];

    public function pet(){

        return $this->hasMany(Pet::class, 'pets_id');
    }
}
