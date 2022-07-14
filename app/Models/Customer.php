<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
