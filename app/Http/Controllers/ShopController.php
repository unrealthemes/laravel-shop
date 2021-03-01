<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;

class ShopController extends Controller
{
  public function index() {

    $categories = ProductCategory::orderBy('title')/*->withCount('products')*/->get();
    $products = Product::paginate(6);

    return view( 'pages.shop', [
        'products'    => $products,
        'categories'  => $categories,
      ] );
  }

  // public function getPostsByCategory( $slug ) {
  //
  //   $current_category = Category::where( 'slug', $slug )->first();
  //   $categories = Category::orderBy('title')->withCount('posts')->get();
  //
  //   return view( 'pages.blog', [
  //       'posts'             => $current_category->posts()->paginate(4),
  //       'categories'        => $categories,
  //       'current_category'  => $current_category,
  //     ] );
  // }
  //
  // public function getPost( $slug_category, $slug_post ) {
  //
  //   $categories = Category::orderBy('title')->withCount('posts')->get();
  //   $current_category = Category::where( 'slug', $slug_category )->first();
  //   $post = Post::where( 'slug', $slug_post )->first();
  //
  //   return view( 'pages.show-post', [
  //       'post'              => $post,
  //       'categories'        => $categories,
  //       'current_category'  => $current_category,
  //     ] );
  // }
}
