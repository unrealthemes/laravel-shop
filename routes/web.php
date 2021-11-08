<?php

use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ContactsController;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

// Shop
Route::get( '/shop', [ ShopController::class, 'index' ] )->name('getShop');
Route::get( '/products/category/{slug}', [ ShopController::class, 'getProductsByCategory' ] )->name('getProductsByCategory');
Route::get( '/products/category/{slug_category}/{slug_product}', [ ShopController::class, 'getProduct' ] )->name('getProduct');

// Blog
Route::get( '/blog', [ BlogController::class, 'index' ] )->name('getBlog');
Route::get( '/blog/category/{slug}', [ BlogController::class, 'getPostsByCategory' ] )->name('getPostsByCategory');
Route::get( '/blog/category/{slug_category}/{slug_post}', [ BlogController::class, 'getPost' ] )->name('getPost');

// Contacts
Route::get( '/contacts', [ ContactsController::class, 'index' ] )->name('getContacts');
Route::post('submit-contacts-form', [ ContactsController::class, 'submit' ]  )->name('submitContactsForm');

// Admin panel
Route::middleware(['role:admin'])->prefix('admin_panel')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin'); // /admin

    Route::resource('category', CategoryController::class);
    Route::resource('post', PostController::class);

    Route::resource('product_category', ProductCategoryController::class);
    Route::resource('product', ProductController::class);
});
 