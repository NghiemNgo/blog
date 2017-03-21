<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\Post;
use Validator;

/**
 * Description of PostController
 *
 * @author nghiemnv
 */
class PostController extends Controller{
    
    public function index()
    {
        $posts = Post::all();
        return view('welcome', ['posts' => $posts]);
    }
    //put your code here
    public function create()
    {
        return view('posts.create');
    }
     /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:posts|max:255|min:7',
            'description' => 'required',
            'requires' => 'required',
            'salary' => 'required|numeric'
        ]);

        if ($validator->fails()) {
            return redirect('post/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        $post = new Post;
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->requires = $request->input('requires');
        $post->salary = $request->input('salary');
        $post->save();
        return redirect()->route('post.show', ['id' => $id]);
        //$name = $request->input('name');

        //
    }
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', ['post' => $post]);
    }
    
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', ['post' => $post]);
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:posts|max:255|min:7',
            'description' => 'required',
            'requires' => 'required',
            'salary' => 'required|numeric'
        ]);

        if ($validator->fails()) {
            return redirect()->route('post.edit', ['id' => $id])
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $post = Post::findOrFail($id);
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->requires = $request->input('requires');
        $post->salary = $request->input('salary');
        $post->save();
        return redirect()->route('post.show', ['id' => $id]);
    }
    
    public function delete($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('post.index');
    }
}
