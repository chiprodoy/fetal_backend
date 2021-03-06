<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * The categories that belong to the post.
     */
    public function categories()
    {
        return $this->belongsToMany(PostCategory::class);
    }
}
