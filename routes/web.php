<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/count', [UserController::class, 'count']);

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/count', [PostController::class, 'count']);
