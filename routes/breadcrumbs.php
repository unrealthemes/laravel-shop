<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

// Home > About
// Breadcrumbs::for('about', function ($trail) {
//     $trail->parent('home');
//     $trail->push('About', route('about'));
// });

/**
 * Blog section
 */

// Home > Blog
Breadcrumbs::for('blog', function ($trail) {
    $trail->parent('home');
    $trail->push('Blog', route('getBlog'));
});

// Home > Blog > [Category]
Breadcrumbs::for('category', function ($trail, $category) {
    $trail->parent('blog');
    $trail->push($category->title, route('getPostsByCategory', $category->slug));
});

// Home > Blog > [Category] > [Post]
Breadcrumbs::for('post', function ($trail, $category, $post) {
    $trail->parent('category', $post->category);
    $trail->push($post->title, route('getPost', [$category->slug, $post->slug]));
});

/**
 * Shop section
 */

// Home > Shop
Breadcrumbs::for('shop', function ($trail) {
    $trail->parent('home');
    $trail->push('Shop', route('getShop'));
});

// Home > Shop > [Category]
Breadcrumbs::for('product_category', function ($trail, $category) {
    $trail->parent('shop');
    $trail->push($category->title, route('getProductsByCategory', $category->slug));
});

// Home > Shop > [Category] > [Product]
Breadcrumbs::for('product', function ($trail, $category, $product) {
    $trail->parent('product_category', $product->category);
    $trail->push($product->title, route('getProduct', [$category->slug, $product->slug]));
});
