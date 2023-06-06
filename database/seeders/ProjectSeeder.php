<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 5; $i++) {
            $project = new Project();
            $project->name = 'مشروع #' . $i;
            $project->description = 'وصف المشروع #' . $i;
            $project->save();
        }
    }
}
