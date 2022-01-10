<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Task\Database\Seeders\TaskDatabaseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TaskDatabaseSeeder::class);
    }
}
