<?php

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
});

// Signup Form
Route::get('/signup', [UserController::class, 'signup']);
// Signup Input Store
Route::post('/signup/store', [UserController::class, 'signupStore']);
// Sigin User
Route::post('/signin', [UserController::class, 'signin']);
// Signout User
Route::get('/signout', [UserController::class, 'signout']);

/**
 * CustomerController
 */
Route::get('/home', [CustomerController::class, 'home']);

/**
 * Admin Controller
 */
// Dashboard Page
Route::get('/dashboard', [AdminController::class, 'dashboard']);
// Pets Page
Route::get('/pets', [AdminController::class, 'pets']);
// Store Pet
Route::post('/pets/store', [AdminController::class, 'petStore']);
