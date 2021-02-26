<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('getHome'));
});

// Home > About
// Breadcrumbs::for('about', function ($trail) {
//     $trail->parent('home');
//     $trail->push('About', route('about'));
// });

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
