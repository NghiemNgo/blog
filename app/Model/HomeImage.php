<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class HomeImage extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'home_content_id', 'image_id',
    ];
}
