<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;

class TripController extends Controller
{
    public function index()
    {
        return Trip::orderBy('start_date')->get();
    }

    public function store(Request $request)
    {
        $trip = Trip::create($request->all());
        return $trip;
    }

    public function show(Trip $trip)
    {
        return $trip;
    }

    public function update(Request $request, Trip $trip)
    {
        $trip->update($request->all());
        return $trip;
    }

    public function destroy(Trip $trip)
    {
        $trip->delete();
        return response()->noContent();
    }
}

