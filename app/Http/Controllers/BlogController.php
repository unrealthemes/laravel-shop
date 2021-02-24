<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class BlogController extends Controller
{
    public function index() {

      $categories = Category::orderBy('title')->withCount('posts')->get();
      $posts = Post::all();

      return view( 'pages.blog', [
          'posts'       => $posts,
          'categories'  => $categories,
        ] );
    }

    public function getPostsByCategory( $slug ) {

      $current_category = Category::where( 'slug', $slug )->first();
      $categories = Category::orderBy('title')->withCount('posts')->get();

      return view( 'pages.blog', [
          'posts'       => $current_category->posts,
          'categories'  => $categories,
        ] );

    }
}
