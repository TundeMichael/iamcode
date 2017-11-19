<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Category;
use App\User;

class PostGeoTestDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => 9000,
            'name' => 'Foo User`',
            'login_type' => 'default',
            'email' => 'dretnan@logicaladdress.com',
            'password' => bcrypt('yahweh'),
        ]);
        Category::create(array('id' => 9000, 'title' => 'Geo Test'));
        Post::create(array('category_id' => 9000, 
            'user_id' => 9000, 'media_url' => 'google.com', 'gps' => 0,
            'description' => 'test description 1', 
            'location' => '45.3681,7.7681'));
        Post::create(array('category_id' => 9000, 
            'user_id' => 9000, 'media_url' => 'google.com', 'gps' => 0, 
            'description' => 'test description 2', 
            'location' => '45.3681,7.7681'));
    }
}
