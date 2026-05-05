<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::get('/trips', [TripController::class,'index']);
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('trips',TripController::class);
});

Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (!Auth::attempt($credentials)) {
        return response()->json(['message'=>'Invalid credentials'], 422);
    }

    $user = $request->user();
    return ['token' => $user->createToken('app')->plainTextToken];
});
