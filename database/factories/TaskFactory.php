<?php

namespace Database\Factories;

use App\Models\Task;
use App\Models\Project;
use App\Models\Activity;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'task' => $this->faker->sentence(6),
            'begindate' => $this->faker->date(),
            'enddate' => $this->faker->date(),
            'user_id' => User::factory(),
            'project_id' => Project::factory(),
            'activity_id' => Activity::factory(),
        ];
    }
}
