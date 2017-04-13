<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Model\HomeContent;
use App\Model\HomeCategory;
use App\Model\HomeContentType;
use App\Model\Image;
use App\Model\HomeImage;
use App\Model\SmallContentImage;
use App\Model\HomeSmallContent;
use App\Http\Controllers\ImageController;
use Validator;
use DB;

class HomeContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = DB::table('home_content_types')
            ->join('home_contents', 'home_content_types.home_content_id', '=', 'home_contents.id')
            ->join('home_categories', 'home_content_types.home_category_id', '=', 'home_categories.id')
            ->leftJoin('home_images', 'home_images.home_content_id', '=', 'home_contents.id')
            ->leftJoin('images', 'images.id', '=', 'home_images.image_id')
            ->select('home_contents.*', 'home_categories.name as home_category_name', 'home_categories.id as home_category_id', 
                    'images.id as home_image_id', 'images.image as home_image_url')
            ->get();
        $groupByItems = array();
        foreach ($items as $item) {
            $groupByItems[$item->id][] = $item;
        }
        $homeContents = DB::table('home_content_types')
            ->join('home_contents', 'home_content_types.home_content_id', '=', 'home_contents.id')
            ->join('home_categories', 'home_content_types.home_category_id', '=', 'home_categories.id')
            ->select('home_contents.*', 'home_categories.id as home_category_id', 'home_categories.name as home_category_name')->get();
        //dd($homeContents);
        $smallItems = DB::table('home_small_contents')
                ->leftJoin('small_content_images', 'small_content_images.home_small_content_id', '=', 'home_small_contents.id')
                ->leftJoin('images', 'small_content_images.image_id', '=', 'images.id')
                ->get();
        $groupBySmallItems = array();
        foreach ($smallItems as $smallItem) {
            $groupBySmallItems[$smallItem->home_content_id][] = $smallItem;
        }
        return view('home2', ['homeContents' => $homeContents, 'groupBySmallItems' => $groupBySmallItems,'groupByItems'=> $groupByItems]);
        //return view('homeContent.index', ['homeContents' => $homeContents, 'groupBySmallItems' => $groupBySmallItems,'groupByItems'=> $groupByItems]);
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
        $rules = [];
        if($request->file('img') != null) {
            $img = $request->file('img');
            $imgCount = count($img) - 1;
            foreach(range(0, $imgCount) as $index) {
                $rules['img.' . $index] = 'required|mimes:jpeg,jpg,png|max:2048';
            }
        }
        if($request->file('small_img') != null) {
            $smallImg = $request->file('small_img');
            $smallImgCount = count($smallImg) - 1;
            foreach(range(0, $smallImgCount) as $index) {
                $rules['small_img.' . $index] = 'required|mimes:jpeg,jpg,png|max:2048';
            }
        }
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('home.items')
                        ->withErrors(array('error'=>'Image must be required and type of image are jpeg, jpg, png and max file 2m'))
                        ->withInput();
        }
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
                foreach ($files as $file) {
                    //save multiple images uploaded.
                    $imageId = (new ImageController)->saveImage($file);
                    if($imageId != false) {
                        $homeImage = new HomeImage;                 //save homeimage with content_id and image_id
                        $homeImage->home_content_id = $homeContent->id;
                        $homeImage->image_id = $imageId;
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
                    $homeSmallContent = new HomeSmallContent;
                    $homeSmallContent->title = $value;
                    $homeSmallContent->content = $smallContents[$key];
                    $homeSmallContent->home_content_id = $homeContent->id;
                    if($homeSmallContent->save()) {                     //save each small_content
                        if($smallImages[$key] != null) {
                            $imageId = (new ImageController)->saveImage($smallImages[$key]);
                            if($imageId != false) {
                                  //Save image uploaded.
                                $smallContentImage = new SmallContentImage;
                                $smallContentImage->home_small_content_id = $homeSmallContent->id;
                                $smallContentImage->image_id = $imageId;
                                $smallContentImage->save();             //Save small_content and image on SmallContentImage Table
                            }
                        }
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
        $homeContent = HomeContent::findOrFail($id);
        return view('homeContent.edit', ['$homeContent' => $homeContent]);
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
    
    //Save small_content and home_content on HomeSmallContent Table
    public function homeSmallContent($homeContentId, $smallContentId) {
        $homeSmallContent = new HomeSmallContent;                                   
        $homeSmallContent->home_content_id = $homeContentId;
        $homeSmallContent->small_content_id = $smallContentId;
        if($homeSmallContent->save()) {
            return $homeSmallContent->id;
        }
        return FALSE;
    }
}
