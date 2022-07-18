<?php

namespace App\Models;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'customers_id',
        'contact_number',
        'contact_email',

    ];

    public function customer(){

        return $this->belongsTo(Customer::class, 'customers_id');
    }
}
