<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // when using mass assignment for creating posts,
    // only the following properties of the entry can be fillable
    // protected $fillable = ['title', 'excerpt', 'body'];

    //  guarded works in the opposite way, so the only thing
    //  defined here is what cannot be fillable
    protected $guarded = ['id'];

    // assigning with value means you can define the default
    // for every post query you perform
    protected $with = ['category', 'author'];

    // Declaring an eloquent relationship
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter($query) //Post::newQuery()->filter()
    {
        if(request('search')){
            $query
                ->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('body', 'like', '%' . request('search') . '%');
        }
    }

    //  when leaving an empty array this disables mass
    //  assignment completely
    //    protected $guarded = [];

    public function author() // class names matter, Laravel assumes foreign key is author_id
    {
        return $this->belongsTo(User::class, 'user_id'); //specify in parameters foreign key is not author_id it's user_id
    }
}
