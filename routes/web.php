<?php

use App\Http\Controllers\RideController;
use Illuminate\Support\Facades\Route;

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

Route::get("/rides", [RideController::class, "index"])->name("rides");
Route::get("/rides/new", fn() => view('newRide'))->name('newRide');

Route::post(
    "/rides/create", 
    [RideController::class, 'store']
)->name("createRide");

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
)->name("editRide");

Route::put(
    "/rides/update/{id}", 
    [RideController::class, "update"]
)->name("updateRide");

Route::delete(
    "/rides/delete/{id}",
    [RideController::class, "destroy"]
)->name("deleteRide");