<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\Contact;
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

        $formFields = $request->validate([
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'civil_status' => 'required',
            'nationality' => 'required',
            'contact_number' => 'required',
        ]);

        $customer->update([
            'first_name' => $formFields['first_name'],
            'middle_name' => $formFields['middle_name'],
            'last_name' => $formFields['last_name'],
            'age' => $formFields['age'],
            'gender' => $formFields['gender'],
            'civil_status' => $formFields['civil_status'],
            'nationality' => $formFields['nationality']
        ]);

        Contact::where('customers_id', $customer->id)->update([
            'contact_number' => $formFields['contact_number']
        ]);

        return redirect('/profile');
    }
}
