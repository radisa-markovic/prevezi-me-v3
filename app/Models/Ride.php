<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ride extends Model
{
    use HasFactory;

    protected $fillable = [
        "starting_point", 
        "destination",
        "passenger_space",
        "price_per_passenger",
        "departure_time",
        "description",
    ];

    /**==>> important to be plural, otherwise seeder throws error */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, "user_rides")->withPivot("is_driver");
    }

    public function getDriver()
    {
        // dd($this->users()->wherePivot("is_driver", 1)->first());
        return $this->users()
                    ->wherePivot("is_driver", "=", 1)
                    ->first();
    }

    public function loggedInUserIsDriver()
    {
        return $this
            ->users()
            ->where(
                "user_id", 
                auth()->user()->id
            )
            ->first()
            ->pivot->is_driver === 1;
    }
}
