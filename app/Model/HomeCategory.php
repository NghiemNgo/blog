<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class HomeCategory extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];
    
     /**
     * Get the HomeContent for the HomeCategory.
     */
    public function homeContentTypes()
    {
        return $this->hasMany('App\Model\HomeContentType');
    }
}
