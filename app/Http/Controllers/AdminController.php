<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Pet;
use App\Models\Reservation;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    /**
     * Admin Dashboard Page
     */
    public function dashboard(){

        return view('admin.dashboard');
    }

    /**
     * Admin Pet Page
     */
    public function pets(){

        // Query with filtering and pagination
        $pets = Pet::filter(request(['filter']))->paginate(10);

        return view('admin.pet', compact('pets'));
    }

    /**
     * Storing Created Pet
     */
    public function petStore(Request $request){

        $formFields = $request->validate([

            'image' => ['required', 'mimes:png,jpg,jpeg'],
            'type' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'color' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'breed' => 'required',
            'price' => 'required',

        ]);

        $formFields['image'] = $formFields['image']->store('profiles', 'public');
        $formFields['reserve'] = 'Available';
        $formFields['age'] = ucwords($formFields['age']);
        $formFields['color'] = ucwords($formFields['color']);
        $formFields['breed'] = ucwords($formFields['breed']);

        Pet::create($formFields);

        return back();
    }

    /**
     * Pet Details Update
     */
    public function petUpdate(Request $request, Pet $pet){

        $formFields = [
            'image' => '',
            'type' => $request->input('type'),
            'gender' => $request->input('gender'),
            'age' => $request->input('age'),
            'color' => $request->input('color'),
            'height' => $request->input('height'),
            'weight' => $request->input('weight'),
            'breed' => $request->input('breed'),
            'price' => $request->input('price'),

        ];

        // Check if the user upload new image of pet
        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('profiles', 'public');
        }

        // This is to prevent updating without any changes
        // if there is no changes in pet's data, save method
        // will not run the query
        $pet = Pet::find($pet->id);

        $pet->image = $formFields['image'] != '' ? $formFields['image'] : $pet->image;
        $pet->type = $formFields['type'];
        $pet->gender = $formFields['gender'];
        $pet->age = $formFields['age'];
        $pet->color = $formFields['color'];
        $pet->height = $formFields['height'];
        $pet->weight = $formFields['weight'];
        $pet->breed = $formFields['breed'];
        $pet->price = $formFields['price'];

        $pet->save();

        return back();

    }

    // Pet Reservation List
    public function reservationList(){

        return view('admin.reservation_lists', [
            'pet_list' => Reservation::with('customer')->where('status', 'Pending')->latest()->paginate(5)
        ]);
    }

    // Pet Reservation Claim
    public function claim(Pet $pet){

        // Setting the status of reserved pet unto Claimed
        $reserve_pet = Reservation::where('pets_id', $pet->id)->first();
        $reserve_pet->update([
            'status' => "Claimed"
        ]);

        return back();
    }

    // Pet Reservation History
    public function history(){

        return view('admin.reservation_history');
    }

}
