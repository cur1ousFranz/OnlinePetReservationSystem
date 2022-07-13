<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{

    public function home(){

        $pet = Pet::filter(request(['filter']))->get();

        return view('customer.home', compact('pet'));
    }

    public function petDetails(Pet $pet){

        // TODO:: Pet Details
        $pet = Pet::where('id',$pet->id)->first();

        return view('customer.pet_details', compact('pet'));
    }
}
