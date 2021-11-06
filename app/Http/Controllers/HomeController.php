<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {

        $categories = Category::orderBy('title')->withCount('posts')->get();
        $posts = Post::latest()->take(9)->get();

        return view( 'home', [
          'posts' => $posts,
          'categories'  => $categories,
        ] );
      }
}
