<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AccountResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'receiptDate' => $this->Receipt_Date,
            'receiptAmount' => $this->Receipt_Amount,
            'payment' => paymentMode($this->Payment_Mode),
            'bank' => PaymentBankName($this->Payment_Bank),
            'notes' => $this->Notes
        ];
    }
}
