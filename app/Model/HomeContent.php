<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class HomeContent extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'small_title', 'big_title', 'content', 'slogan',
    ];
    
    /**
     * Get the type for the HomeContent.
     */
    public function homeContentTypes()
    {
        return $this->hasMany('App\Model\HomeContentType');
    }
}
