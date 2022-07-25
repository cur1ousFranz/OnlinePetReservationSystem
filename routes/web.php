<?php

use App\Models\Pet;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->middleware('guest');

// Signup Form
Route::get('/signup', [UserController::class, 'signup'])->middleware('guest');
// Signup Input Store
Route::post('/signup/store', [UserController::class, 'signupStore'])->middleware('guest');
// Sigin User
Route::post('/signin', [UserController::class, 'signin'])->name('login')->middleware('guest');


Route::group(['middleware' => 'auth'], function(){

    // Signout User
    Route::get('/signout', [UserController::class, 'signout']);

    // CUSTOMER MIDDLEWARE - CONTROLLER
    Route::group(['middleware' => 'customer'], function(){

        // Home Page
        Route::get('/home', [CustomerController::class, 'home']);
        // Customer Profile
        Route::get('/profile', function (){

            return view('customer.profile', [
                'customer' => Customer::with('contact')->where('users_id', Auth::user()->id)->first()
            ]);
        });

        // Customer Profile Edit
        Route::get('/profiles/{customer}/edit', function(Customer $customer){

            return view('customer.profiles_edit', compact('customer'));
        });

         // Customer Profile Update
         Route::patch('/profiles/{customer}/update', [CustomerController::class, 'profileUpdate']);

        // View Details of Pet
        Route::get('/pets/{pet}', [PetController::class, 'petDetails']);

        // Pet Reservation
        Route::get('/pets/{pet}/reservation', [PetController::class, 'petReservation']);

        // Customer Reservations
        Route::get('/reservation', [CustomerController::class, 'reservation']);


    });

    // ADMIN MIDDLEWARE - CONTROLLER
    Route::group(['middleware' => 'admin'], function(){

        // Dashboard Page
        Route::get('/dashboard', [AdminController::class, 'dashboard']);
        // Pets Page
        Route::get('/pets', [AdminController::class, 'pets']);
        // Store Pet
        Route::post('/pets/store', [AdminController::class, 'petStore']);
        // Pet Edit Details Page
        Route::get('/pets/{pet}/edit', function(Pet $pet){
            return view('admin.pet_edit', compact('pet'));
        });
        // Pet Edit Store
        Route::put('/pets/{pet}', [AdminController::class, 'petUpdate']);
        // // Pet Delete
        Route::get('/pets/{pet}/destroy', function(Pet $pet){

            $pet->delete();
            return back();
        });

    });

});


