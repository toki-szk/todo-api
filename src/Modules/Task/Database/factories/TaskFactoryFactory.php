<?php
namespace Modules\Task\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Task\Entities\TaskFactory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        ];
    }
}

