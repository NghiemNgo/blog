<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\Post;
use App\Model\Category;
use App\Model\Tag;
use Validator;
use DB;

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
        $categories = Category::all();
        return view('posts.create', ['categories' => $categories]);
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
            'title' => 'required|max:255|min:7',
            'description' => 'required',
            'requires' => 'required',
            'salary' => 'required|numeric'
        ]);

        if ($validator->fails()) {
            return redirect('post/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        $listCategories = $request->input('listCategories'); //get list tags categories of post.
        //save new categories;
        $this->saveNewCategories($listCategories);
        
        $post = new Post;
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->requires = $request->input('requires');
        $post->salary = $request->input('salary');
        if($post->save())
        {
            //save tags;
            $this->saveTags($listCategories, $post->id);
            
            return redirect()->route('post.show', ['id' => $post->id]);
        }
        return redirect()->route('post.create');
    }
    public function show($id)
    {
        $post = Post::findOrFail($id);
        $tags = DB::table('tags')->select('category_id')->where('post_id', $id);
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
    
    public function saveNewCategories($listCategories)
    {
        if($listCategories != null){
            $categories = Category::all()->pluck('name')->toArray(); // get all categories in db 
            $newCategories = array_diff($listCategories, $categories);// compare two array to get new categories.
            foreach ($newCategories as $value){
                $category = new Category;
                $category->name = $value;
                $category->save();
            }
        }
        return True;
    }
    
    public function saveTags($listCategories, $post_id)
    {
        if($listCategories != null){
                $categories = Category::all()->pluck('name', 'id')->toArray();
                foreach($listCategories as $key => $value){
                    $tag = new Tag;
                    $tag->post_id = $post_id;
                    $tag->category_id = array_search($value, $categories);
                    $tag->save();
                }
        }
        return True;
    }
}
