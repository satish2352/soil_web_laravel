<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Validator;
use Config;


class OurTeamController extends Controller
{
  
    public function index(Request $request)
    {
       
        return view('website.pages.our-team');
    }

}