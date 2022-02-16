<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function item(Category $category)
    {
        return view('posts', [
            'title' => "Post by category: $category->slug",
            'posts' => $category-> posts->load('category', 'author'),
        ]);
    }

    public function all() {
    return view('categories', [
        'title' => 'Tulisan Berdasarkan Kategori',
        'categories' => Category::all()
    ]);
}
}
