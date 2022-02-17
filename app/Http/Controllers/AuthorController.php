<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthorController extends Controller
{
    public function ownProperty(User $author){
    return view('posts', [
        'title' => "Posts by: $author->username",
        'posts' => $author->posts->load('category', 'author'),
            "active" => "category"
    ]);
}
}
