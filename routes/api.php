<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API;

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
Route::controller(API\UserController::class)->group(function () {
    Route::get('/users/{id}', 'getUserDetail')->name('user.get-user-detail');
    Route::get('/users', 'getUserList')->name('user.get-user-list');
    Route::delete('/users/{id}', 'deleteUser')->name('user.delete-user');
    Route::post('/users', 'createUser')->name('user.create-user');
    Route::patch('/users/{id}', 'updateUser')->name('user.update-user');
});
