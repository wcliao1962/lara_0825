<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Comment;
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
        Comment::truncate();
        Post::truncate();
        User::truncate();

        foreach(range(1,5) as $item){
            User::factory()
                ->has(Post::factory(rand(1,6))
                    ->hasComments(rand(1,6)))->create();
        }

//        User::factory(5)
//            ->has(Post::factory(5)
//                ->hasComments(5))->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

//        $this->call(
//            PostSeeder::class,
//        );
    }
}
