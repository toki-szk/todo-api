<?php

use Illuminate\Support\Facades\Route;
use Modules\Task\Http\Controllers\TaskController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'auth:sanctum'], function() {
    Route::apiResource('tasks', TaskController::class);
    Route::patch('tasks/update-done/{task}', [TaskController::class, 'updateDoneTask']);
});