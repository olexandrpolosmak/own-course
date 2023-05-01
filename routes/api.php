<?php

use App\Http\Controllers\Users\DeleteUserController;
use App\Http\Controllers\Users\ShowUserController;
use App\Http\Controllers\Users\StoreUserController;
use App\Http\Controllers\Users\UpdateUserController;
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
    ->whereNumber('user');
Route::delete('/users/{user}', DeleteUserController::class)
    ->name('users.delete')
    ->whereNumber('user');
Route::put('/users/{user}', UpdateUserController::class)
    ->name('users.update')
    ->whereNumber('user');
Route::post('/users', StoreUserController::class)
    ->name('users.store')
    ->whereNumber('user');

