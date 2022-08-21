<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Routing\Route;

class Post extends Model
{
    use HasFactory;

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['file_url'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['multimedia'];

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
     * Get url file.
     *
     * @return bool
     */
    public function getFileUrlAttribute()
    {
        return route('file.show',$this->slug);
    }

}

class PostStatus{
    const PUBLISH='publish';
    const DRAFT='draft';

}
