<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SmallContentImage extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'small_content_id', 'image_id',
    ];
}
