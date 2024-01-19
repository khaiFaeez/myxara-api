<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InvoiceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'status' => $this->Status_Inv,
            'invoiceNo' => $this->Inv_No,
            'purchaseDate' => $this->Date,
            'shippingPhone' => $this->Ship_Phone,
            'shippingName' => $this->Ship_Name,
            'shippingAddress' => (string) $this->Ship_Add1 . ', ' . $this->Ship_Add2 . ', ' . $this->Ship_poscode . ', ' . $this->Ship_City . ', ' . negeri($this->Ship_State),
            'accounts' => AccountResource::collection($this->whenLoaded('account')),
            'deliveries' => DeliveryResource::collection($this->whenLoaded('delivery')),
            'receipt' => AccountReceiptResource::collection($this->whenLoaded('receipt')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'overdue'=> $this->Overdue_Amt,
            'paid'=> $this->Paid_Total,
            'grand_total' => $this->Grand_Total,
        ];
    }
}
