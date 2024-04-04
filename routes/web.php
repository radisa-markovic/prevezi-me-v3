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

Route::get("/rides", fn() => view("mile"))->name("routes");
Route::get("/rides/new", fn() => view('newRide'))->name('newRide');

Route::post("/rides/create", [RideController::class, 'store'])->name("createRide");