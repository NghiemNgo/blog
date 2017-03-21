<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\Apply;
use App\Model\Post;
use Validator;
use Auth;

/**
 * Description of ApplyController
 *
 * @author nghiemnv
 */
class ApplyController extends Controller{
    
    public function apply($post_id){
        $post = Post::findOrFail($post_id);
        return View('applies.apply', ['post'=>$post, 'user' => Auth::user()]);
    }
    
    public  function store(Request $request){
        
    }
}
