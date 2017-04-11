<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class HomeContentType extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'home_content_id', 'home_category_id'
    ];
}
