<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Post extends PostModel
{
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
}
