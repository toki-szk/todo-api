<?php

namespace Modules\Task\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Task\Entities\Task;

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
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realText(rand(15, 40)),
            'is_done' => $this->faker->boolean(10),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
