<?php

namespace App\Http\Controllers;

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

        return view('admin.pet');
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

        ]);

        // TODO:: INSERT DATA TO DATABSAE

        dd($formFields);

        return back();
    }
}
