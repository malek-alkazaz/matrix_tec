<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
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
            'name' => $this->name,
            'description' => $this->description,
            'costs' => collect($this->costs)->map(function ($cost) {
                return [
                    'id' => $cost->id,
                    'name' => $cost->name,
                    'description' => $cost->description,
                    'amount' => $cost->amount,
                    'currency_id' => $cost->currency_id,
                ];
            }),
        ];
    }
}
