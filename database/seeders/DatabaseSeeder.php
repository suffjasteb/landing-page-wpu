<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // bikin manual


        // Category::create([
        //     'name' => 'landing page',
        //     'slug' => 'landing-page',
        // ]);

        // Post::create([
        //     'name' => 'judul Artikel 1',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'judul-artikel-1',
        //     'body' => 'Of course, manually specifying the attributes for each model seed is cumbersome. Instead, you can use model factories to conveniently generate large amounts of database records. First, review the model factory documentation to learn how to define your factories.',
        // ]);

        // panggil seeder nya import
        $this->call([CategorySeeder::class, UserSeeder::class]);

        // bikin 100 post
        Post::factory(100)->recycle([

            Category::all(),
            User::all(),
            
        ])->create();

    }
};