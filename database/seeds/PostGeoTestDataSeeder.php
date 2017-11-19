<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Category;
use App\User;

class PostGeoTestDataSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        User::create([
            'id' => 9000,
            'name' => 'Foo User`',
            'login_type' => 'default',
            'email' => 'dretnan@logicaladdress.com',
            'password' => bcrypt('yahweh'),
        ]);
        Category::create(array('id' => 9000, 'title' => 'Geo Test'));
        Category::create(array('id' => 9001, 'title' => 'Geo Test 1'));
        Category::create(array('id' => 9002, 'title' => 'Geo Test 2'));
        Category::create(array('id' => 9003, 'title' => 'Geo Test 3'));
        Post::create(array('category_id' => 9000,
            'user_id' => 9000, 'media_url' => 'google.com', 'gps' => 0,
            'description' => 'test description 1',
            'location' => '45.3681,7.7681'));
        Post::create(array('category_id' => 9000,
            'user_id' => 9000, 'media_url' => 'google.com', 'gps' => 0,
            'description' => 'test description 2',
            'location' => '45.3681,7.7681'));

        Post::create(array('category_id' => 9001,
            'user_id' => 9000, 'media_url' => 'google.com', 'gps' => 0,
            'description' => 'test description 3',
            'location' => '45.3681,7.7681'));
        Post::create(array('category_id' => 9001,
            'user_id' => 9000, 'media_url' => 'google.com', 'gps' => 0,
            'description' => 'test description 4',
            'location' => '45.3681,7.7681'));

        Post::create(array('category_id' => 9002,
            'user_id' => 9000, 'media_url' => 'google.com', 'gps' => 0,
            'description' => 'test description 5',
            'location' => '45.3681,7.7681'));
        Post::create(array('category_id' => 9002,
            'user_id' => 9000, 'media_url' => 'google.com', 'gps' => 0,
            'description' => 'test description 6',
            'location' => '45.3681,7.7681'));

        Post::create(array('category_id' => 9003,
            'user_id' => 9000, 'media_url' => 'google.com', 'gps' => 0,
            'description' => 'test description 7',
            'location' => '45.3681,7.7681'));
        Post::create(array('category_id' => 9003,
            'user_id' => 9000, 'media_url' => 'google.com', 'gps' => 0,
            'description' => 'test description 8',
            'location' => '45.3681,7.7681'));
        
    }

}
