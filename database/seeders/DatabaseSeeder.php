<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Category::create([
            'name' => 'RELIGIUS',
            'slug' => 'religius'
        ]);
        Category::create([
            'name' => 'PROGRAMMING',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'PERSONALITY',
            'slug' => 'personality'
        ]);
        Category::create([
            'name' => 'ROMANTIC',
            'slug' => 'romantic'
        ]);
        Post::factory(200)->create();
    }
}
