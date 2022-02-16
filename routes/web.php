<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome', ["title" => "welcome page"]);
});
Route::get('/home', function () {
    return view('home', ["title" => "homepage"]);
});

Route::get('/about',                        [AboutController::class, 'index']);

Route::get('/blog',                         [PostController::class, 'index']);

Route::get('/posts/{post:slug}',            [PostController::class, 'show']);

Route::get('/categories/{category:slug}',   [CategoryController::class, 'item']);

Route::get('/categories',                   [CategoryController::class, 'all']);

Route::get('/authors/{author:username}',    [AuthorController::class, 'ownProperty']);