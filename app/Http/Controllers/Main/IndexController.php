<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke()
    {
        $products = Product::all();
        $users = User::all();
        $categories = Category::all();
        return view('main.index', compact('products', 'users', 'categories'));
    }
}
