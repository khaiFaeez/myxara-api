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
            'ReceiptDate' => $this->Receipt_Date,
            'ReceiptAmount' => $this->Receipt_Amount,
            'Payment' => paymentMode($this->Payment_Mode),
            'Bank' => PaymentBankName($this->Payment_Bank),
            'Notes' => $this->Notes
        ];
    }
}
