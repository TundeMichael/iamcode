<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        if (App::environment('local')) {
            $this->call(PostGeoTestDataSeeder::class);
        }
    }
}
