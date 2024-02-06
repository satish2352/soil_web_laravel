<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Validator;
use Config;


class AboutUsController extends Controller
{
  
    public function index(Request $request)
    {
       
        $aboutuslist_array =[];
      
        return view('website.pages.about-us',compact('aboutuslist_array'));
    }

}