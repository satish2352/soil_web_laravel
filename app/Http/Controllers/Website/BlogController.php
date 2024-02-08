<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Validator;
use Config;
use App\Models\WebBlog;


class BlogController extends Controller
{
  
    public function index(Request $request)
    {
        
        $frontblogarticlelist =$this->frontblogarticlelist($request);
        
        return view('website.pages.blogs',compact('frontblogarticlelist'));
    }
    public function index2(Request $request)
    {
        
        $frontblogarticlelist =$this->frontblogarticlelist($request);
        
        return view('website.pages.sub-blogs',compact('frontblogarticlelist'));
    }


    public function frontblogarticlelist(Request $request)
    {
         
        if(!empty($request->id)){
            $result = WebBlog::where(['id'=>$request->id,'status'=>'0','articleorschedule' =>'article'])->orderBy('id', 'DESC')->get();

        }else{
            $result = WebBlog::where(['status'=>'0','articleorschedule' =>'article'])->orderBy('id', 'DESC')->get();

        }
        foreach($result as $key=>$value)
        {
            $value->photopath=BLOG_CONTENT_VIEW.$value->photo_one;
        }
        return $result;
    }
    

}