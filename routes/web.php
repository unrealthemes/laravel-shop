<?php

use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('getHome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Shop
Route::get( '/shop', [ ShopController::class, 'index' ] )->name('getShop');
Route::get( '/category/{slug}', [ ShopController::class, 'getProductsByCategory' ] )->name('getProductsByCategory');
Route::get( '/category/{slug_category}/{slug_product}', [ ShopController::class, 'getProduct' ] )->name('getProduct');

// Blog
Route::get( '/blog', [ BlogController::class, 'index' ] )->name('getBlog');
Route::get( '/category/{slug}', [ BlogController::class, 'getPostsByCategory' ] )->name('getPostsByCategory');
Route::get( '/category/{slug_category}/{slug_post}', [ BlogController::class, 'getPost' ] )->name('getPost');

// Admin panel
Route::middleware(['role:admin'])->prefix('admin_panel')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin'); // /admin

    Route::resource('category', CategoryController::class);
    Route::resource('post', PostController::class);

    Route::resource('product_category', ProductCategoryController::class);
    Route::resource('product', ProductController::class);
});
