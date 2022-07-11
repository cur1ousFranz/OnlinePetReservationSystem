<?php

namespace App\Http\Controllers;

use App\Models\Pet;
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

        $pets = Pet::get();

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

        Pet::create($formFields);

        return back();
    }
}
