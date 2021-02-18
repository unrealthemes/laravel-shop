<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\ProductCategory;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts_count = Post::all()->count();
        $categories_count = Category::all()->count();
        $products_count = Product::all()->count();
        $product_categories_count = ProductCategory::all()->count();

        return view('admin.home.index', [
            'posts_count'               => $posts_count,
            'categories_count'          => $categories_count,
            'products_count'            => $products_count,
            'product_categories_count'  => $product_categories_count,
        ]);
    }
}
