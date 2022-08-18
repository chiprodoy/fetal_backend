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

    /**
     * Set the uid.
     *
     * @param  string  $value
     * @return void
     */
    public function getDescriptionAttribute($value)
    {
        return str_replace(array("\r\n","\r","\n","\\r","\\n","\\r\\n"),"\n",$value);
    }
    /**
     * Set the multimedia.
     *
     * @param  string  $value
     * @return void
     */
    public function getMultimediaAttribute($value)
    {
        if (strpos($value, "http") === 0 ||  strpos($value, "https") === 0) return $value;
        else return route('file.show',$this->slug);
    }

}

class PostStatus{
    const PUBLISH='publish';
    const DRAFT='draft';

}
