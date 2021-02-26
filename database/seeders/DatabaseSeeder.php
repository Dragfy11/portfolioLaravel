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
        $this->call([
            HomeSeeder::class,
        ]);
        $this->call([
            FooterSeeder::class,
        ]);
        $this->call([
            HeaderSeeder::class,
        ]);
    }
}
