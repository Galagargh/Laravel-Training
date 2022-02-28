<?php

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

    \Illuminate\Support\Facades\DB::listen(function ($query) {
        logger($query->sql, $query->bindings);
    });


    return view ('posts', [
        'posts' => Post::with('category')->get()
    ]);

});

//  get post from slug
//Route::get('/posts/{post:slug}
Route::get('/posts/{post:slug}', function (Post $post) {    //post::where('slug', $post)->firstOrFail()

    return view('post', [
        'post' => $post
    ]);
});



Route::get('/categories/{category:slug}', function (Category $category){
    return view('posts', [
        'posts' => $category->posts
    ]);
});


