<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Seed the database with project data.
     */
    public function run(): void
    {
        Project::factory(10)->create();
    }
}
