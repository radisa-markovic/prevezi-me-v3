<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Ride;
use Illuminate\Http\Request;

class RideController extends Controller
{
    //
    public function index()
    {
        $rides = Ride::orderBy('created_at','desc')->get();
        return view("rides.index", ['rides' => $rides]);
    }

    public function store(Request $request)
    {
        //store into DB
        //get data from the request
        $formFields = $request->validate([
            "starting_point" => ["bail", "required", "min:1", "max:100"],
            "destination" => "bail|required|min:1|max:100",
            "passenger_space" => "bail|required|min:1",
            "price_per_passenger"=> "bail|required|min:3|max:7"
        ]);

        $formFields["departure_time"] = Carbon::createFromFormat(
            "Y-m-d H:i",
            $request["departure_time"] . " " . $request['departureHour'] . ":" . $request['departureMinute']
        ); 

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
        // dd($request);
        /**
         * ==>>
         * because it's required but not sent,
         * this will fail silently on "price_per_passenger"
         * due to in not originally being sent.
         * After the create form was amended,
         * it became possible to update the ride
         */
        $formFields = $request->validate([
            "starting_point" => ["bail", "required", "min:1", "max:100"],
            "destination" => "bail|required|min:1|max:100",
            "passenger_space" => "bail|required|min:1",
            "price_per_passenger"=> "bail|required|min:3|max:7"
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
