<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DeliveryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'trackingNo' => $this->Tracking_No,
            'poslajuTrackingUrl' => $this->Poslaju_Track,
            'remarks' => $this->Remarks,
        ];
    }
}
