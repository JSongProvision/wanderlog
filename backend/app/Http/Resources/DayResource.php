<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\ActivityResource;

class DayResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
          'id' => $this->id,
          'date' => $this->date->toDateString(),
          'location' => $this->location,
          'notes' => $this->notes,
          'activities' => ActivityResource::collection($this->whenLoaded('activities')),
        ];
    }
}
