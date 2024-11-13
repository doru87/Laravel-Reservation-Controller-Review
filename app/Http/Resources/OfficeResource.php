<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OfficeResource extends JsonResource
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
            'user_id' => $this->user_id,
            'hidden' => $this->hidden,
            'approval_status' => $this->approval_status,
            'price_per_day' => $this->price_per_day,
            'monthly_discount' => $this->monthly_discount,
            // Add other relevant fields here
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
