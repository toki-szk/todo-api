<?php

use Illuminate\Http\Request;
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

Route::apiResource('task', TaskController::class);

// Route::middleware('auth:api')->get('/task', function (Request $request) {
//     return $request->user();
// });