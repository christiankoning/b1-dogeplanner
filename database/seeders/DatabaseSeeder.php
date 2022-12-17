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
        // \App\Models\plannedWalk::factory(10)->create();
        // \App\Models\User::factory(10)->create();
        // \App\Models\Walk::factory(10)->create();
        // \App\Models\Privilege::factory(2)->create();
        // \App\Models\Dog::factory(8)->create();
        \App\Models\Product::factory(5)->create();
    }
}
