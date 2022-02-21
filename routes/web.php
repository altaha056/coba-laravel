<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;

Route::get(
    '/',
    [
        HomeController::class, 'home'
    ]
);

Route::get(
    '/home',
    [
        HomeController::class, 'home'
    ]
);

Route::get(
    '/about',
    [
        AboutController::class, 'index'
    ]
);

Route::get(
    '/posts',
    [
        PostController::class, 'index'
    ]
);

Route::get(
    '/posts/{post:slug}',
    [
        PostController::class, 'show'
    ]
);



Route::get(
    '/categories',
    [
        CategoryController::class, 'all'
    ]
);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
