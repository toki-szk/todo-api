<?php

namespace Modules\Task\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Task\Database\Seeders\TaskTableSeeder;

class TaskDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(TaskTableSeeder::class);
    }
}
