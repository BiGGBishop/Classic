<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Color;
use App\Models\Tag;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $tags = Tag::all();
        $colors = Color::all();
        $categories = Category::all();

        return view('admin.product.create', compact('tags', 'colors', 'categories'));
    }
}
