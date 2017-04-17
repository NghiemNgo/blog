<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'description', 'requires', 'salary'
    ];
    
     /**
     * The categories that belong to the post.
     */
    public function categories()
    {
        return $this->belongsToMany('App\Model\Category', 'tags', 'post_id', 'category_id');
    }
}
