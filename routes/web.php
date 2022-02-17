<?php

use Illuminate\Support\Facades\Route;
use App\Models\Project;

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

    return view ('projects', [
        'projects' => Project::all()
    ]);

});

Route::get('basestyle', function () {

    return view('basestyle');

});

Route::get('projects/{project:slug}', function (Project $project) {    //post::where('slug', $post)->firstOrFail()
        return view('project', [
        'project' => $project
    ]);
});

//Route::get('/posts/{post}', function ($id) {
//
//    // Find a post by its slug and pass it to a view called post
//    return view('project', [
//        'project' => Project::findOrFail($id)
//    ]);
//
//});
