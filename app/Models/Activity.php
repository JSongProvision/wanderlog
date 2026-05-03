<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = ['day_id','time', 'name', 'notes', 'is_done'];
    protected $casts = ['is_done' => 'boolean'];

    public function day()
    {
        return $this->belongsTo(Day::class);
    }
    
}
