<?php

namespace Tests\Unit;

use App\Models\Project;
use App\Services\CostService;
use PHPUnit\Framework\TestCase;

class calcProjectCostTest extends TestCase
{
    protected $costService;
    public function setUp(): void{
        parent::setUp();
        $this->costService = app()->make(CostService::class);
    }

    public function testCalcProjectCost(){

        $project = Project::find(1);
        $defaultCurrency = 'USD';
        $totalCost = 0;
        foreach ($project->costs as $cost) {
            $totalCost += CurrencyHelper::convertCurrency($cost->amount, $cost->currency, $defaultCurrency);
        }
        $this->assertEquals(2684, $totalCost);
    }
}
