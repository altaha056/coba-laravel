<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ["title" => "welcome page"]);
});
Route::get('/home', function () {
    return view('home', ["title" => "homepage"]);
});

Route::get('/about', [AboutController::class, 'index']);

Route::get('/blog', [PostController::class, 'index']);

Route::get( 'posts/{post:slug}', [PostController::class, 'show']);

Route::get('categories/{category:slug}', function(Category $category){return view('category', [
    'title'=> $category->name,
    'posts'=>$category->posts,
    'category' => $category->name]);
});
