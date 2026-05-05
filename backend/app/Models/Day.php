<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    protected $fillable = ['trip_id', 'date', 'location', 'notes'];
    protected $casts = ['date' => 'date'];

    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }
    
    public function activities()
    {
        return $this->hasMany(Activity::class);
    }
}
