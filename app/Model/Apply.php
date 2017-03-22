<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    protected $fillable = [
        'user_id', 'post_id', 'cv_url', 'name', 'phone', 'email', 'current_address'
    ];
}
