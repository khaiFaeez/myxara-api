<?php

use Illuminate\Support\Facades\DB;

if (! function_exists('negeri')) {
    function negeri($negeriId){
        return DB::table('Negeri')
            ->find($negeriId)
            ?->Negeri;
    }
}

if (! function_exists('paymentMode')) {
    function paymentMode($mode){
        return DB::table('Payment_Mode')
            ->find($mode)
            ?->payment_mode;
    }
}

if (! function_exists('PaymentBankName')) {
    function PaymentBankName($bank){
        return DB::table('Payment_Bank')
            ->find($bank)
            ?->Bank_Name;
    }
}
