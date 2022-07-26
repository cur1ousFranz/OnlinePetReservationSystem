<?php

namespace App\Models;

use App\Models\Pet;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [

        'customers_id',
        'pets_id',
        'reserved_due',
        'status',

    ];

    public function pet(){

        return $this->hasMany(Pet::class, 'pets_id');
    }

    public function customer(){

        return $this->belongsTo(Customer::class, 'customers_id');
    }
}
