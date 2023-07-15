<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\InvoiceCollection;
use App\Http\Resources\InvoiceResource;
use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        return InvoiceResource::collection(Invoice::get());
    }

    public function show(Invoice $invoice)
    {
        return new InvoiceResource($invoice);
    }
}
