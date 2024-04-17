<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TagController;
use App\Http\Controllers\Api\TaskController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\PostPhotoController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Auth\PermissionController;

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
    Route::apiResource('tasks', TaskController::class);
    Route::patch('tags/restore/{tag}', [TagController::class, 'restore'])->withTrashed();
    Route::get('permissions', [PermissionController::class, 'get'])->name('permissions.get');
    Route::patch('users/{user}/role', [UserController::class, 'assignRole'])->name('users.role.update');
});

Route::group([
    'controller' => PostPhotoController::class,
    'as' => 'posts.photo.',
], static function () {
    Route::post('posts/photo/file', 'storeFile')->name('file.store');
    Route::post('posts/photo/base64', 'storeBase64')->name('base64.store');
});
