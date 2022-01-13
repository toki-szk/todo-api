<?php

namespace Modules\Task\Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Task\Entities\Task;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class TaskTest extends TestCase
{
    use RefreshDatabase;
    // use DatabaseMigrations;
    /**
     * @test
     */

    public function 一覧を取得()
    {
        $tasks = Task::factory()->count(1)->create();
        dd($tasks);
        $this->assertTrue(true);
    }
}
