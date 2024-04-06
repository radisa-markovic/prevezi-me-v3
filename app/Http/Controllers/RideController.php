<?php

namespace App\Http\Controllers;

use App\Models\Ride;
use Illuminate\Http\Request;

class RideController extends Controller
{
    //
    public function index()
    {
        $rides = Ride::all();
        return view("rides.index", ['rides' => $rides]);
    }

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

    public function show(Request $request)
    {
        $ride = Ride::findOrFail($request->id);
        return view("rides.show", ['ride' => $ride]);
    }

    public function edit(Request $request)
    {
        
        $ride = Ride::findOrFail($request->id);

        return view("rides.edit", ['ride' => $ride]);
    }

    public function update(Request $request)
    {
        $formFields = $request->validate([
            "starting_point" => ["bail", "required", "min:1", "max:100"],
            "destination" => "bail|required|min:1|max:100",
            "passenger_space" => "bail|required|min:1"
        ]);

        Ride::findOrFail($request->id)->update($formFields);

        // return back()->with('message', 'Listing updated successfully!');
        return redirect(route('rides'));
    }

    public function destroy()
    {
        Ride::destroy(request()->id);

        // return back()->with('message', 'Listing updated successfully!');
        return redirect(route('rides'));
    }
}
