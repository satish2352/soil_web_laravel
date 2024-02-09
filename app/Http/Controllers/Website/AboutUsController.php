<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Validator;
use Config;
use App\Models\WebAboutUs;

class AboutUsController extends Controller
{
  
    public function index(Request $request)
    {
       
        $aboutuslist_array  = array();
        $aboutuslist_array = $this->frontaboutuslist($request);
      
        return view('website.pages.about-us',compact('aboutuslist_array'));
    }

    public function frontaboutuslist(Request $request)
    {
       
            $result = WebAboutUs::where('status','0')->orderBy('id', 'DESC')->get();
            foreach($result as $key=>$value)
            {
                $value->photopath=ABOUT_US_PHOTO_VIEW.$value->photo_one;
            }
            return $result;
    }

}