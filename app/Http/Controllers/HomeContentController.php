<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Model\HomeContent;
use App\Model\HomeCategory;
use App\Model\HomeContentType;
use App\Model\Image;
use App\Model\HomeImage;
use App\Model\SmallContent;
use App\Model\SmallContentImage;
use App\Model\HomeSmallContent;

class HomeContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
            //dd($request->file('small_img')); exit;
        $homeContent = new HomeContent;
        if($request->input('small_title')) { 
            $homeContent->small_title = $request->input('small_title');
        }
        if($request->input('big_title')) {
            $homeContent->big_title = $request->input('big_title');
        }
        if($request->input('content')) {
            $homeContent->content = $request->input('content');
        }
        if($request->input('slogan')) {
            $homeContent->slogan = $request->input('slogan');
        }
        if($homeContent->save()) {
            $homeCategory_id = HomeCategory::select('id')->where('name', $request->input('homeCategory'))->first()->id; // find id of HomeCategory model
            $homeContentType = new HomeContentType;                 
            $homeContentType->home_content_id = $homeContent->id;
            $homeContentType->home_category_id = $homeCategory_id;
            $homeContentType->save();                           //save content_id and category id of Home page items
            if($request->file('img')[0] != null) {              // check exist upload file
                $files = $request->file('img');
                foreach ($files as $file) {                        //save multiple images uploaded.
                    $destinationPath = public_path().'/home_images';
                    $baseName = $file->getClientOriginalName();     // get base name file
                    $fileName = time() . '-' . $baseName;           //create new name file
                    $upload_success = $file->move($destinationPath, $fileName);
                    if($upload_success) {
                        $upload_image = new Image;                  //save url image
                        $upload_image->image = $destinationPath.'/'.$fileName;
                        $upload_image->save();
                        $homeImage = new HomeImage;                 //save homeimage with content_id and image_id
                        $homeImage->home_content_id = $homeContent->id;
                        $homeImage->image_id = $upload_image->id;
                        $homeImage->save();
                    }
                    
                }
            }
            //Save small_contents
            if($request->input('small_content_title')) {
                $smallContentTitles = $request->input('small_content_title');       //get list small_title
                $smallImages = $request->file('small_img');                         //get list small_image
                $smallContents = $request->input('small_content');                  //get list small_content
                foreach ($smallContentTitles as $key => $value) {
                    $smallContent = new SmallContent;
                    $smallContent->title = $value;
                    $smallContent->content = $smallContents[$key];
                    if($smallContent->save()) {                     //save each small_content
                        if($smallImages[$key] != null) {
                            $file = $smallImages[$key];
                            $destinationPath = public_path().'/small_images';   
                            $baseName = $file->getClientOriginalName();     // get base name file
                            $fileName = time() . '-' . $baseName;           //create new name file
                            $upload_success = $file->move($destinationPath, $fileName);
                            if($upload_success) {
                                $upload_image = new Image;                  //save url image
                                $upload_image->image = $destinationPath.'/'.$fileName;
                                $upload_image->save();                                              //Save image uploaded.
                                $smallContentImage = new SmallContentImage;
                                $smallContentImage->small_content_id = $smallContent->id;
                                $smallContentImage->image_id = $upload_image->id;
                                $smallContentImage->save();                                         //Save small_content and image on SmallContentImage Table
                            }
                        }
                        $homeSmallContent = new HomeSmallContent;                                   //Save small_content and home_content on HomeSmallContent Table
                        $homeSmallContent->home_content_id = $homeContent->id;
                        $homeSmallContent->small_content_id = $smallContent->id;
                        $homeSmallContent->save();
                    }
                    
                }
            }
            
            return redirect()->route('home.items')->with('message', 'successfully!');
            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
