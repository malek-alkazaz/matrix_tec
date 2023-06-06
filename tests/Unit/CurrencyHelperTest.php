<?php

namespace Tests\Unit;

use App\Models\Currency;
use App\Helpers\CurrencyHelper;
use Illuminate\Http\Request;
use PHPUnit\Framework\TestCase;

class CurrencyHelperTest extends TestCase
{
    protected $currencyHlp;
    public function setUp(): void{
        parent::setUp();
        $this->currencyHlp = app()->make(CurrencyHelper::class);
    }
    public function testCurrencyHelper(){

        $request = new Request([
            'fromCurrency' => 'USD',
            'toCurrency' => 'EUR',
            'amount' => 100,
        ]);
        $f_currency = Currency::where('code', $request->fromCurrency)->firstOrFail();

        if(isset($f_currency->deleted_at)){
            $rate = $f_currency->rate / Currency::where('code', $request->toCurrency)->firstOrFail()->rate;
            $result = round($request->amount / $rate);
            $this->assertEquals(93.02, $result);
        }else{
            $rate = Currency::where('code',$request->fromCurrency)->firstOrFail()->rate / Currency::where('code', $request->toCurrency)->firstOrFail()->rate;
            $result = round($request->amount / $rate);
            $this->assertEquals(93.02, $result);
        }
    }
}
