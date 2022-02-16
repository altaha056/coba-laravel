<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;

Route::get('/',
    [HomeController::class, 'welcome'
]);

Route::get('/home',
    [HomeController::class, 'home'
]);

Route::get('/about',
    [AboutController::class, 'index'
]);

Route::get('/blog',
    [PostController::class, 'index'
]);

Route::get('/posts/{post:slug}',
    [PostController::class, 'show'
]);

Route::get('/categories/{category:slug}',
    [CategoryController::class, 'item'
]);

Route::get('/categories',
    [CategoryController::class, 'all'
]);

Route::get('/authors/{author:username}',
    [AuthorController::class, 'ownProperty'
]);