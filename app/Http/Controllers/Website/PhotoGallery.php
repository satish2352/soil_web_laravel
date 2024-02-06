<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Validator;
use Config;
use App\Models\WebGallaryPhoto;


class PhotoGallery extends Controller
{
  
    public function index(Request $request)
    {
        $frontphotogallerylistlimit=$this->frontphotogallerylistlimit($request);

        return view('website.pages.photo-gallery',compact('frontphotogallerylistlimit'));
    }
    public function frontphotogallerylistlimit(Request $request)
    {
        
            $result = WebGallaryPhoto::where('status','0')->orderBy('id', 'DESC')->LIMIT(20)->get();
            foreach($result as $key=>$value)
            {
                $value->photopath=Config::get('DocumentConstant.WEB_GALLARY_PHOTO_VIEW').$value->photo_one;
            }
            return $result;
    }

}