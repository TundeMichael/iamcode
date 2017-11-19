<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Post extends PostModel
{
    public function posts()
    {
        return $this->belongsTo(Category::class);
    }
}
