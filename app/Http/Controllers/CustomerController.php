<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{

    public function home(){

        $pet = DB::table('pets')->get();

        return view('customer.home', compact('pet'));
    }

    public function petDetails(Pet $pet){

        // TODO:: Pet Details


        return view('customer.pet_details');
    }
}
