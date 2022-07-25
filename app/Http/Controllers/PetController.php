<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Pet;
use App\Models\Customer;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetController extends Controller
{
    // Show the pet details
    public function petDetails(Pet $pet){

        // TODO:: Pet Details

        return view('customer.pet_details', [
            'pet' => Pet::where('id',$pet->id)->first(),
            'customer' => Customer::where('users_id', Auth::user()->id)->first()
        ]);
    }

    // Pet Reservation
    public function petReservation(Pet $pet){

        $customer = Customer::where('users_id', Auth::user()->id)->first();
        Reservation::create([
            'customers_id' => $customer->id,
            'pets_id' => $pet->id,
            'reserved_due' => Carbon::tomorrow()
        ]);

        Pet::where('id', $pet->id)->update([
            'reserve' => 'Reserved'
        ]);

        return redirect('/reservation');
    }
}
