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
use Session;

/**
 * Description of ApplyController
 *
 * @author nghiemnv
 */
class ApplyController extends Controller{
    
    public function apply($post_id){
        $post = Post::findOrFail($post_id);
        if(Auth::user()){
            return View('applies.apply', ['post'=>$post, 'user' => Auth::user()]);
        }
        return View('auth.login');
        
    }
    
    public  function store(Request $request){
        //dd($request->file('upload_cv')); exit;
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255|min:7',
            'email' => 'required|email',
            'phone' => 'required|min:9|numeric',
            'current_address' => 'required',
            'file' => 'max:3072'
        ]);

        if ($validator->fails()) {
            return redirect()->route('apply', ['id' => $request->input('post_id')])
                        ->withErrors($validator)
                        ->withInput();
        }
        if(!$request->file('upload_cv')){
            return redirect()->route('apply', ['id' => $request->input('post_id')])
                        ->withErrors(array("upload_cv"=>"File can't be blank"))
                        ->withInput();
        }
        $file = $request->file('upload_cv');
        $destinationPath = public_path().'/uploads';
        $extension = $file->getClientOriginalExtension();
        $fileName = time() . '.' . $extension;
        $upload_success = $file->move($destinationPath, $fileName);
        if ($upload_success) {
            $apply = new Apply;
            $apply->name = $request->input('name');
            $apply->email = $request->input('email');
            $apply->phone = $request->input('phone');
            $apply->current_address = $request->input('current_address');
            $apply->cv_url = $destinationPath.'/'.$fileName;
            $apply->post_id = $request->input('post_id');
            $apply->user_id = Auth::user()->id;
            if($apply->save()){
                return redirect()->route('post.index')->with('message', 'successfully!');
            } else {
                    return redirect()->route('apply', ['id' => $request->input('post_id')])
                        ->withErrors(array("error"=>"Something is wrong, Please try again!"))
                        ->withInput();
            }
                
        }
        return redirect()->route('apply', ['id' => $request->input('post_id')])
                        ->withErrors(array("error"=>"Something is wrong, Please try again!"))
                        ->withInput();
        
    }
}
