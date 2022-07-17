<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{

    // Customer home page with the list of pets
    public function home(){

        $pet = Pet::filter(request(['filter']))->get();

        return view('customer.home', compact('pet'));
    }

    // Show the pet details
    public function petDetails(Pet $pet){

        // TODO:: Pet Details
        $pet = Pet::where('id',$pet->id)->first();

        return view('customer.pet_details', compact('pet'));
    }

    // Customer profile update
    public function profileUpdate(Request $request, Customer $customer){

        // TODO:::::::::::::
        dd($customer);
    }
}
