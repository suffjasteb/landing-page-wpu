<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // 3 kategori
        // Category::factory(3)->create();

         Category::create([
            'name' => 'landing page',
            'slug' => 'landing-page',
        ]);
         Category::create([
            'name' => 'web design',
            'slug' => 'web-design',
        ]);
         Category::create([
            'name' => 'web page',
            'slug' => 'web-page',
        ]);
         Category::create([
            'name' => 'blog page',
            'slug' => 'blog-page',
        ]);
    }
}
