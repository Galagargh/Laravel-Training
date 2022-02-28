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

    // Declaring an eloquent relationship
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //  when leaving an empty array this disables mass
    //  assignment completely
    //    protected $guarded = [];
}
