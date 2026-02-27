<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create a handful of projects and for each generate a couple of tasks
        \App\Models\Project::factory(5)
            ->create()
            ->each(function (\App\Models\Project $project) {
                // ensure activities exist, TaskFactory will create new activity if needed
                \App\Models\Task::factory(2)->create([
                    'project_id' => $project->id,
                ]);
            });
    }
}
