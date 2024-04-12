<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RideController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get(
    "/rides", 
    [RideController::class, "index"]
)->name("rides");

Route::get(
    "/rides/new", 
    fn() => view('rides.create')
)->name('newRide')
->middleware("auth");

Route::post(
    "/rides/create", 
    [RideController::class, 'store']
)->name("createRide")
->middleware("auth");

Route::get(
    "/rides/{id}", 
    [RideController::class, "show"]
)->name("getRide");

/**==>> important: first match goes, not "more appropriate"
 * as in rides/1/edit vs rides/edit/1
 */
Route::get(
    "/rides/edit/{id}", 
    [RideController::class, "edit"]
)->name("editRide")
->middleware("auth");

Route::put(
    "/rides/update/{id}", 
    [RideController::class, "update"]
)->name("updateRide")
->middleware("auth");

Route::delete(
    "/rides/delete/{id}",
    [RideController::class, "destroy"]
)->name("deleteRide")
->middleware("auth");

Route::post(
    "/rides/reserve/{rideID}", 
    fn() => view("welcome")
)->name("reserveRide")
->middleware("auth");

Route::get(
    "/login", 
    [UserController::class, "loginForm"]
)->name('loginPage')
->middleware("guest");

Route::post(
    "/users/authenticate", 
    [UserController::class, "authenticate"]
)->name("authenticate")
->middleware("guest");

Route::post(
    "/users/logout",
    [UserController::class, "logout"]
)->name("logout")
->middleware("auth");

Route::get(
    "/users/register", 
    [UserController::class, "register"]
)->name("registerPage")
->middleware("guest");

Route::post(
    "/users/attemptRegistration", 
    [UserController::class, "store"]
)->name('register')
->middleware("guest");