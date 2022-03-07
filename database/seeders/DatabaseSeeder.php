<?php

namespace Database\Seeders;


use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // only required if database is not refreshed at start
         User::truncate();
         Post::truncate();
         Category::truncate();

         $user = User::factory()->create([
            'name' => 'John Doe',
         ]);

         // When creating all posts, associate the user column
         // with the user created above
         Post::factory(5)->create([
             'user_id' => $user->id
         ]);

 //
// Manually set seeder values without factory
// Kept for reference
//
//         $user = User::factory()->create();

//         $hobby = Category::create([
//             'name' => 'Hobby',
//             'slug' => 'hobby'
//         ]);
//
//         $family = Category::create([
//             'name' => 'Family',
//             'slug' => 'family'
//         ]);
//
//         $work = Category::create([
//             'name' => 'Work',
//             'slug' => 'work'
//         ]);
//
//         Post::create([
//             'user_id' => $user->id,
//             'category_id' => $family->id,
//             'title' => 'My Family Post',
//             'slug' => 'family-post',
//             'excerpt' => '<p>this is a post about my family</p>',
//             'body' => '<p>family post body</p>'
//         ]);
//
//         Post::create([
//             'user_id' => $user->id,
//             'category_id' => $hobby->id,
//             'title' => 'My Hobby Post',
//             'slug' => 'hobby-post',
//             'excerpt' => '<p>this is a post about my hobby</p>',
//             'body' => '<p>hobby post body</p>'
//         ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $work->id,
//            'title' => 'My Work Post',
//            'slug' => 'work-post',
//            'excerpt' => '<p>this is a post about my work</p>',
//            'body' => '<p>work post body</p>'
//        ]);
    }
}
