<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Category extends Model
{
    public function categories()
    {
        return $this->hasMany(Post::class);
    }
}
