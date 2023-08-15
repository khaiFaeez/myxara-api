<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AccountReceiptResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'receiptDate' => $this->receipt_date,
            'image' => $this->Uploads,
            'paid' => $this->Payment_Paid,
            'remarks' => $this->Remarks,
        ];
    }
}
