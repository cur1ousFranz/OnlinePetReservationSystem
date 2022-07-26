<?php

namespace App\Models;

use App\Models\Reservation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'first_name',
        'middle_name',
        'last_name',
        'age',
        'gender',
        'civil_status',
        'nationality',
    ];

    public function contact(){

        return $this->hasOne(Contact::class, 'customers_id');
    }

    public function reservation(){

        return $this->hasMany(Reservation::class, 'customers_id');
    }
}
