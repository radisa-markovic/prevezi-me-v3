<?php

namespace App\Http\Controllers;

use App\Models\Ride;
use Illuminate\Http\Request;

class RideController extends Controller
{
    //
    public function store(Request $request)
    {
        //store into DB
        //get data from the request
        $formFields = $request->validate([
            "starting_point" => ["bail", "required", "min:1", "max:100"],
            "destination" => "bail|required|min:1|max:100",
            "passenger_space" => "bail|required|min:1"
        ]);

        Ride::create($formFields);
        return redirect(route('rides'));
    }
}
