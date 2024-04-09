<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ride extends Model
{
    use HasFactory;

    protected $fillable = [
        "starting_point", 
        "destination",
        "passenger_space",
        "price_per_passenger",
        "departure_time"
    ];
}
