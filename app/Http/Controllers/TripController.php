<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;
use App\Http\Requests\StoreTripRequest;
use App\Http\Resources\TripResource;

class TripController extends Controller
{
    public function index()
    {
        return TripResource::collection(Trip::with('days.activities')->orderBy('start_date')->get()
        );
    }

    public function store(StoreTripRequest $request)
    {
        $trip = Trip::create($request->validated());
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

