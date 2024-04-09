<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\TagController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group([
    'middleware' => 'auth:sanctum'
], static function () {
    Route::apiResource('posts', PostController::class);
    Route::apiResource('tags', TagController::class);
    Route::patch('tags/restore/{id}', [TagController::class, 'restore']);
});
