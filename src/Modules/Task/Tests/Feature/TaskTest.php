<?php

namespace Modules\Task\Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Task\Entities\Task;
use Modules\User\Entities\User;
class TaskTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        $user = User::factory()->create();
        $this->actingAs($user);
    }

    /**
     * @test
     */
    public function 一覧を取得できる()
    {
        $tasks = Task::factory()->count(10)->create();
        $response = $this->getJson('api/tasks');

        $response
            ->assertOk()
            ->assertJsonCount($tasks->count());
    }

    /**
     * @test
     */
    public function 登録することができる()
    {
        $data = [
            'title' => 'test投稿'
        ];

        $response = $this->postJson('api/tasks', $data);
        $response
            ->assertCreated()
            ->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function 更新することができる()
    {
        $task = Task::factory()->create();

        $task->title = '書き換え';

        $response = $this->patchJson("api/tasks/{$task->id}", $task->toArray());
        $response
            ->assertOk()
            ->assertJsonFragment($task->toArray());
    }

    /**
     * @test
     */
    public function 削除することができる()
    {
        $tasks = Task::factory()->count(10)->create();

        $response = $this->deleteJson("api/tasks/1");
        $response
            ->assertOk();

        $response = $this->getJson('api/tasks');
        $response->assertJsonCount($tasks->count() - 1);
    }

    /**
     * @test
     */
    public function タイトルが空の場合登録することができない()
    {
        $data = [
            'title' => ''
        ];

        $response = $this->postJson('api/tasks', $data);
        $response
            ->assertStatus(422)
            ->assertJsonValidationErrors([
                'title' => 'タイトルは必ず指定してください。'
            ]);
    }

    /**
     * @test
     */
    public function タイトルが256文字以上の場合は登録することができない()
    {
        $data = [
            'title' => str_repeat('あ', 256)
        ];

        $response = $this->postJson('api/tasks', $data);
        $response
            ->assertStatus(422)
            ->assertJsonValidationErrors([
                'title' => 'タイトルは、255文字以下で指定してください。'
            ]);
    }

}
