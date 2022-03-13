<?php

Route::get('/categories/{category:slug}', function (Category $category){
    return view('posts', [
        'posts' => $category->posts,
        'currentCategory' => $category,
        'categories' => Category::all()
    ]);
})->name('category');

Route::get('/authors/{author:username}', function (User $author){
    return view('posts.index', [
        'posts' => $author->posts
    ]);
});