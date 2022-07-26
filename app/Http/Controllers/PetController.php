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

        return view('customer.pet_details', [
            'pet' => Pet::where('id',$pet->id)->first(),
            'customer' => Customer::where('users_id', Auth::user()->id)->first()
        ]);
    }

    // Pet Reservation
    public function petReservation(Pet $pet){

        // Validating if the pet is already in reservations list
        $reservation_list = Reservation::get();
        foreach($reservation_list as $list){
            if($list->pets_id === $pet->id){

                abort(403, "Unauthorized action");

            }
        }

        $customer = Customer::where('users_id', Auth::user()->id)->first();
        Reservation::create([
            'customers_id' => $customer->id,
            'pets_id' => $pet->id,
            'reserved_due' => Carbon::tomorrow(),
            'status' => 'Pending'
        ]);

        Pet::where('id', $pet->id)->update([
            'reserve' => 'Reserved'
        ]);

        return redirect('/reservation');
    }
}
