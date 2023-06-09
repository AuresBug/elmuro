<?php

namespace Database\Seeders;

use Database\Seeders\PostSeeder;
use Database\Seeders\RolesAndPermissionsSeeder;
use Database\Seeders\UserSeeder;
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
        // \App\Models\User::factory(10)->create();

        // Run a specific seeder...
        $this->call([
            RolesAndPermissionsSeeder::class,
            UserSeeder::class,
            PostSeeder::class,
            // CommentSeeder::class,
        ]);

    }
}
