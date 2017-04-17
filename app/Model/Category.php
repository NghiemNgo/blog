<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name'
    ];
    
     /**
     * The posts that belong to the category.
     */
    public function posts()
    {
        return $this->belongsToMany('App\Model\Post', 'tag', 'post_id', 'category_id');
    }
}
