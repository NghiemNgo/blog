<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Redis;

class UserApiController extends Controller
{
    public function get($id) {
        if(Redis::exists("user".$id)) {
            $user = Redis::get("user".$id);
            return $user;
        }
        $user = User::find($id);
        if($user) {
            $user = json_encode($user);
            Redis::set("user".$id, $user);
            return $user;
        }
        return "not found";
    }
}
