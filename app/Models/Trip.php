<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    // Columns that can be set via Trip::create([...]) or $trip->fill([...])
    // Without this list, mass assignment is BLOCKED for safety.
    protected $fillable = [
        'name', 'country', 'start_date', 'end_date', 'notes',
    ];

    // Tell Eloquent how to convert raw column values when read.
    // Without 'date', $trip->start_date is a string. With it, it's a Carbon object.
    protected $casts = [
        'start_date' => 'date',
        'end_date'   => 'date',
    ];

    public function days()
    {
        return $this->hasMany(Day::class)->orderBy('date');
    }
}
