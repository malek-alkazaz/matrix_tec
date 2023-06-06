<?php

namespace App\Helpers;

use App\Models\Currency;

class CurrencyHelper
{
    public static function convertCurrency($amount, $fromCurrency, $toCurrency)
    {
        if(isset($fromCurrency->deleted_at)){
            $rate = $fromCurrency->rate / Currency::where('code', $toCurrency)->firstOrFail()->rate;
            return round($amount / $rate);
        }else{
            $rate = Currency::where('code', $fromCurrency->code)->firstOrFail()->rate / Currency::where('code', $toCurrency)->firstOrFail()->rate;
            return round($amount / $rate);
        }
    }
}
