<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;

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
    $posts = Post::latest();

    if(request('search')){
        $posts
            ->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('body', 'like', '%' . request('search') . '%');
    }

    // logging
//    \Illuminate\Support\Facades\DB::listen(function ($query) {
//        logger($query->sql, $query->bindings);
//    });

    // Eager loading as part of a new query
    //
    return view ('posts', [
        'posts' => $posts->get(),
        'categories' => Category::all()
    ]);

})->name('home');

//  get post from slug
//Route::get('/posts/{post:slug}
Route::get('/posts/{post:slug}', function (Post $post) {    //post::where('slug', $post)->firstOrFail()

    return view('post', [
        'post' => $post,
    ]);
});

// when working on an existing model, but wanting to eager load,
// use load to solve n+1 problem when loading

Route::get('/categories/{category:slug}', function (Category $category){
    return view('posts', [
        'posts' => $category->posts,
        'currentCategory' => $category,
        'categories' => Category::all()
    ]);
})->name('category');

Route::get('/authors/{author:username}', function (User $author){
    return view('posts', [
        'posts' => $author->posts,
        'categories' => Category::all()
    ]);
});


