<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cost;
use App\Models\Currency;
use App\Models\Project;

class CostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $currencies = Currency::all();
        $projects = Project::all();

        foreach ($projects as $project) {
            for ($i = 1; $i <= 5; $i++) {
                $cost = new Cost();
                $cost->project_id = $project->id;
                $cost->name = 'تكلفة #' . $i;
                $cost->description = 'وصف التكلفة #' . $i;
                $cost->amount = rand(100, 1000);
                $cost->currency_id = $currencies->random()->id;
                $cost->save();
            }
        }
    }
}
