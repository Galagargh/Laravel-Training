<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class AdminPostController extends Controller
{
    public function index()
    {
        return view('admin.posts.index', [
            'posts' => Post::paginate(50)
        ]);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store()
    {
//        Initial version, below array merge is used to "clean up"
//        code when adding additional validation
//        $attributes = $this->validatePost(new Post());
//        $attributes['user_id'] = auth()->id();
//        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails', 'public');

        // working with use model instead
        // check if there is a post relationship for this user
        // this would automatically specify the user id
        // request()->user()->posts()->create();

        $attributes = array_merge($this->validatePost(),[
            'user_id' => request()->user()->id,
            'thumbnail' => request()->file('thumbnail')->store('thumbnails', 'public')
        ]);

        Post::create($attributes);

        return redirect('/');
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', ['post' => $post]);
    }

    public function update(Post $post)
    {
        $attributes = $this->validatePost($post);

        if (isset($attributes['thumbnail'])) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails', 'public');
        }

        $post->update($attributes);

        return back()->with('success', 'Post Updated!');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return back()->with('success', 'Post Deleted');
    }


    protected function validatePost(?Post $post = null): array
    {
        // If there is a post being passed to this method, then use that post,
        // otherwise the default will always be a new instance of a post
        //
        // this is implemented because of specialised validation rules below
        $post ??= new Post();

        $attributes = request()->validate([
            'title' => 'required',
            'thumbnail' => $post->exists ? ['image'] : ['required|image'],
            'slug' => ['required', Rule::unique('posts', 'slug')->ignore($post)],
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);
        return $attributes;
    }
}
