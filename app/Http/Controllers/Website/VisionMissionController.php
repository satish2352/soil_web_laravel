<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Validator;
use Config;
use App\Models\WebVisionMission;

class VisionMissionController extends Controller
{
  
    public function index(Request $request)
    {

       $frontmissionlist=$this->frontmissionlist($request);
        $frontvisionlist=$this->frontvisionlist($request);
        
        return view('website.pages.vision-mission',compact('frontmissionlist','frontvisionlist'));
    }
    public function frontvisionlist(Request $request)
    {
            $result = WebVisionMission::where('status','0')->where('record_for','Vision')->orderBy('id', 'DESC')->get();
            foreach($result as $key=>$value)
            {
                $value->photopath=Config::get('DocumentConstant.WEB_VISIONMISSION_PHOTO_VIEW').$value->photo_one;
            }
            return $result;
    }

    public function frontmissionlist(Request $request)
    {
        
            $result = WebVisionMission::where('status','0')->where('record_for','Mission')->orderBy('id', 'DESC')->get();
            foreach($result as $key=>$value)
            {
                $value->photopath=Config::get('DocumentConstant.WEB_VISIONMISSION_PHOTO_VIEW').$value->photo_one;
            }
            return $result;
    }

}