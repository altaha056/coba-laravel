<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function item(Category $category)
    {
        return view('posts', [
            'title' => "Post by category: $category->name",
            'posts' => $category-> posts->load('category', 'author'),
            'active' => 'category',
        ]);
    }

    public function all() {
    return view('categories', [
        'title' => 'All Categories',
        'categories' => Category::all(),
        'active' => 'category'
    ]);
}
}
