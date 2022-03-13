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
    protected $guarded = [];

    // assigning with value means you can define the default
    // for every post query you perform
    protected $with = ['category', 'author'];

    // Declaring an eloquent relationship
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, fn($query, $search)=>
            $query->where(fn($query) =>
                $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%')
            )
        );

        $query->when($filters['category'] ?? false, function($query, $category){
            $query->whereHas('category', fn ($query) =>
                $query->where('slug', $category)
            );
        });

        $query->when($filters['author'] ?? false, function($query, $author){
            $query->whereHas('author', fn ($query) =>
            $query->where('username', $author)
            );
        });
    }

    //  when leaving an empty array this disables mass
    //  assignment completely
    //    protected $guarded = [];

    public function author() // class names matter, Laravel assumes foreign key is author_id
    {
        return $this->belongsTo(User::class, 'user_id'); //specify in parameters foreign key is not author_id it's user_id
    }
}
