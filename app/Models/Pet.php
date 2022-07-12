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
        'price',
        'reserve'

    ];

    /**
     * This is for pet filtering
     */
    public function scopeFilter($query, array $filters){

        if($filters['filter'] ?? false){
            $query->where('type', 'like', '%' . request('filter') .'%')
            ->orWhere('reserve', 'like', '%' . request('filter') .'%')
            ->orWhere('type', 'like', '%' . request('filter') .'%');

        }
    }
}
