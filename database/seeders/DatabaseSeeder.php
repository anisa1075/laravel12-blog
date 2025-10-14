<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\CategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([CategorySeeder::class, UserSeeder::class, PostSeeder::class]);

        // User::factory(10)->create();
        //  Post::factory(20)->recycle([Category::all(), User::all()])->create();

        // User::factory()->create([
        //     'username' => 'anisaluthfia',
        //     'name' => 'Anisa',
        //     'email' => 'anisa@gmail.com',
        // ]);
    }
}
