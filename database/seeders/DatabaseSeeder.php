<?php

namespace Database\Seeders;

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
        \App\Models\Setting::factory()
        ->create();
        \App\Models\Category::factory()
        ->count(7)
        ->create();
        \App\Models\Post::factory()
        ->count(18)
        ->create();
        \App\Models\Code::factory()
        ->count(85)
        ->create();
        \App\Models\Example::factory()
        ->count(27)
        ->create();
        // \App\Models\User::factory(10)->create();
    }
}
