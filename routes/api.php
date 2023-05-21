<?php

use App\Http\Controllers\Users\DeleteUserController;
use App\Http\Controllers\Users\ShowUserController;
use App\Http\Controllers\Users\StoreUserController;
use App\Http\Controllers\Users\UpdateUserController;
use App\Http\Controllers\Users\UploadUserProfilePhotoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/users/{user}', ShowUserController::class)
    ->name('users.show')
    ->whereUuid('user');
Route::delete('/users/{user}', DeleteUserController::class)
    ->name('users.delete')
    ->whereUuid('user');
Route::put('/users/{user}', UpdateUserController::class)
    ->name('users.update')
    ->whereUuid('user');
Route::post('/users', StoreUserController::class)
    ->name('users.store')
    ->whereUuid('user');
Route::post('users/{user}/photo', UploadUserProfilePhotoController::class)
    ->name('users.photo.store')
    ->whereUuid('user');

