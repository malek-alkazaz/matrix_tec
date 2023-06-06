<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Currency;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currencies = [
            ['name' => 'الدولار الأمريكي', 'code' => 'USD','rate' => 1],
            ['name' => 'اليورو', 'code' => 'EUR','rate' => 0.93],
            ['name' => 'الدرهم الأماراتي', 'code' => 'AED','rate' => 3.67],
            ['name' => 'الريال السعودي', 'code' => 'SAR','rate' => 3.75],
        ];

        foreach ($currencies as $currency) {
            Currency::create($currency);
        }
    }
}
