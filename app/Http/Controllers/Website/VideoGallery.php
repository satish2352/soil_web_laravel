<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Validator;
use Config;
use App\Models\WebVideos;

class VideoGallery extends Controller
{
  
    public function index(Request $request)
    {

        $webvideo_educationallimit=$this->webvideo_educationallimit($request);

        return view('website.pages.video-gallery',compact('webvideo_educationallimit'));
    }
    public function index2(Request $request): mixed
    {

        $webvideo_educationallimit=$this->webvideo_educationallimit($request);

        return view('website.pages.sub-video-gallery',compact('webvideo_educationallimit'));
    }
    public function webvideo_educationallimit(Request $request)
    {
         
            $targetvideo = WebVideos::where('status',0)->where('category','Educational')->orderBy('id', 'DESC')->get();
            return $targetvideo;
    }

}