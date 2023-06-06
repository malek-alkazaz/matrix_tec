<?php

namespace Tests\Unit;

use App\Models\Project;
use App\Services\CostService;
use PHPUnit\Framework\TestCase;

class calcProjectCostWithCurrencyTest extends TestCase
{
    protected $costService;
    public function setUp(): void{
        parent::setUp();
        $this->costService = app()->make(CostService::class);
    }


    public function testcalcProjectCostWithCurrency()
    {
        $project = Project::find(1);
        $Currency = 'EUR';
        $totalCost = 0;
        foreach ($project->costs as $cost) {
            $totalCost += CurrencyHelper::convertCurrency($cost->amount, $cost->currency, $Currency);
        }
        $this->assertEquals(2497, $totalCost);
    }
}
