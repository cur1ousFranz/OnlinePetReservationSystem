<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use App\Models\Customer;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    // Signup form
    public function signup(){

        return view('signup');
    }

    // Store created account
    public function signupStore(Request $request){

        $formFields = $request->validate([

            'username' => ['required', Rule::unique('users', 'username')],
            'email' => ['required', 'email', Rule::unique('contacts', 'contact_email')],
            'password' => ['required', 'confirmed', 'min:6']

        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create([
            'username' => $formFields['username'],
            'password' => $formFields['password'],
            'role' => 'customer'
        ]);

        $customer = Customer::create([
            'users_id' => $user->id
        ]);

        Contact::create([
            'customers_id' => $customer->id,
            'contact_email' => $formFields['email']
        ]);

        Address::create([
            'customers_id' => $customer->id
        ]);

        return back();
    }

    // Sign in user
    public function signin(Request $request){

        $formFields = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = DB::table('users')->where('username', $formFields['username'])->first();

        // Check if the user is a teacher
        if(Auth::attempt($formFields)){
            if($user->role == "customer"){
                $request->session()->regenerate();
                return redirect('/home');
            }
        }

        // Check if the user is a student
        if(Auth::attempt($formFields)){
            if($user->role == "admin"){
                $request->session()->regenerate();
                return redirect('/dashboard');
            }

        }

        return back()->withErrors(['username' => 'Invalid credentials'])->onlyInput('username');
    }

    // Signout User
    public function signout(Request $request){

        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');

    }


}
