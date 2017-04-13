<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class HomeSmallContent extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'content', 'home_content_id',
    ];
}
