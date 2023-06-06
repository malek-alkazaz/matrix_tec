<?php

namespace Tests\Unit;

use Illuminate\Http\Request;
use App\Services\CostService;
use PHPUnit\Framework\TestCase;

class convertCurrencyTest extends TestCase
{
    protected $costService;
    public function setUp(): void{
        parent::setUp();
        $this->costService = app()->make(CostService::class);
    }

    public function testConvertCurrency()
    {
        $request = new Request([
            'fromCurrency' => 'USD',
            'toCurrency' => 'EUR',
            'amount' => 100,
        ]);
        $result = $this->costService->convertCurrency($request);
        $this->assertEquals(93, $result);
    }
}
