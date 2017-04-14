<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Model\Image;
use File;

class ImageController extends Controller
{
    //save Small Image  
    public function saveImage($file) {
        $destinationPath = public_path().'/images';   
        $baseName = $file->getClientOriginalName();     // get base name file
        $fileName = time() . '-' . $baseName;           //create new name file
        $upload_success = $file->move($destinationPath, $fileName);
        if($upload_success) {
            $upload_image = new Image;                  //save url image
            $upload_image->image = $fileName;
            $upload_image->save();
            return $upload_image->id;
        }
        return FALSE;
    }
    
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
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * fists: get id
     * seconds, move uploaded file to source
     * thirds: delete old file
     * finally: update
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($file, $id)
    {
        $destinationPath = public_path().'/images';   
        $baseName = $file->getClientOriginalName();     // get base name file
        $fileName = time() . '-' . $baseName;           //create new name file
        $upload_success = $file->move($destinationPath, $fileName);
        if($upload_success) {
            $upload_image = Image::findOrFail($id);
            if($upload_image->image) {
                File::delete('images/' . $upload_image->image); // delete old file
            }
            //save url image
            $upload_image->image = $fileName;
            $upload_image->save();
            return $upload_image->id;
        }
        return FALSE;
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
