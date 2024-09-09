<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Validator;
use Config;
use App\Models\
{
WebCoverPhoto,Enquiry,Principles,WebAboutUs,WebVisionMission,WebGallaryPhoto,WebVideos,FrontProduct,Area,WebBlog,Counter,WebTestiminials
};
use Illuminate\Support\Facades\Http; 

class IndexController extends Controller
{
  
    public function index(Request $request)
    {
        // $baseUrl = "https://finalapi.soilchargertechnology.com/api/";

        // $frontsliderlist = $this->fetchApiData($baseUrl . 'frontsliderlist', 'get');
        // dd($frontsliderlist);
        // $frontsliderlist = isset($frontsliderlist['data']) ? array_reverse($frontsliderlist['data']) : [];

        // $aboutuslist_array = $this->fetchApiData($baseUrl . 'frontaboutuslist', 'get');
        // $aboutuslist_array = isset($aboutuslist_array['data']) ? $aboutuslist_array['data'] : [];

        // $frontphotogallerylistlimit = $this->fetchApiData($baseUrl . 'frontphotogallerylistlimit', 'get');
        // $frontphotogallerylistlimit = isset($frontphotogallerylistlimit['data']) ? $frontphotogallerylistlimit['data'] : [];


        $fronttestimonialslist=array();
        $fronttestimonialslist = $this->fronttestimonialslist();
        $counter_list=$this->counter_list();
        $frontblogarticlelist=$this->frontblogarticlelist($request);
        // $frontproductlist=$this->frontproductlist($request);
        $statelist=$this->statelist($request);
        $webvideo_educationallimit=$this->webvideo_educationallimit($request);
        $frontphotogallerylistlimit=$this->frontphotogallerylistlimit($request);
        $frontmissionlist=$this->frontmissionlist($request);
        $frontvisionlist=$this->frontvisionlist($request);
        $frontsliderlist=$this->frontsliderlist($request);
        $webmarquee_array=[];
        $firstmethodlist_array=$this->firstrulelist($request);
        $secondrulelist=$this->secondrulelist($request);
        $thirdmeditationlist=$this->thirdmeditationlist($request);
        $aboutuslist_array = $this->frontaboutuslist($request);
        $fronhreftphotogallerylistlimit_data =[];
        $fronhreftphotogallerylistlimit_data['title']="";
        return view('website.pages.index', compact(
            'fronttestimonialslist',
            'fronhreftphotogallerylistlimit_data',
            'counter_list',
            'frontblogarticlelist',
            'statelist',
            // 'frontproductlist',
            'webvideo_educationallimit',
            'frontphotogallerylistlimit',
            'frontmissionlist',
            'frontvisionlist',
            'frontsliderlist',
            'webmarquee_array',
            'firstmethodlist_array',
            'secondrulelist',
            'thirdmeditationlist',
            'aboutuslist_array'
        ));
    }


    public function firstrulelist(Request $request)
    {
        
        $result = Principles::select('first_method','first_method_heading')->get();
        return $result;
    }


    public function thirdmeditationlist(request $request)
    {
        
            $result = Principles::select('third_meditation','third_meditation_heading')->get();
            return $result;
    }


    public function secondrulelist(request $request)
    {
        
            $result = Principles::select('second_rule','second_rule_heading')->get();
            return $result;

    }


    public function frontsliderlist(Request $request)
    {
        
            $result = WebCoverPhoto::where('status','0')->orderBy('id', 'DESC')->get();
            foreach($result as $key=>$value)
            {
                $value->photopath=WEB_COVER_PHOTO_VIEW.$value->photo_one;
            }
            return $result;

    }


    public function frontvisionlist(Request $request)
    {
            $result = WebVisionMission::where('status','0')->where('record_for','Vision')->orderBy('id', 'DESC')->get();
            foreach($result as $key=>$value)
            {
                $value->photopath=WEB_VISIONMISSION_PHOTO_VIEW.$value->photo_one;
            }
            return $result;
    }

    public function frontmissionlist(Request $request)
    {
        
            $result = WebVisionMission::where('status','0')->where('record_for','Mission')->orderBy('id', 'DESC')->get();
            foreach($result as $key=>$value)
            {
                $value->photopath=WEB_VISIONMISSION_PHOTO_VIEW.$value->photo_one;
            }
            return $result;
    }

    public function frontphotogallerylistlimit(Request $request)
    {
        
            $result = WebGallaryPhoto::where('status','0')->orderBy('id', 'DESC')->LIMIT(20)->get();
            foreach($result as $key=>$value)
            {
                $value->photopath=WEB_GALLARY_PHOTO_VIEW.$value->photo_one;
            }
            return $result;
    }
    public function webvideo_educationallimit(Request $request)
    {
         
            $targetvideo = WebVideos::where('status',0)->where('category','Educational')->orderBy('id', 'DESC')->LIMIT(8)->get();
            return $targetvideo;
    }

    public function frontproductlist(Request $request)
    {
        
                if(!empty($request->prod)){
                    $result = FrontProduct::join('tbl_product_details','tbl_product_details.id','=','front_product.product_id')
                    ->join('tbl_product','tbl_product.id','=','tbl_product_details.product_id')
                    ->where('front_product.is_deleted','no')
                    ->where('tbl_product.is_deleted','no')
                    ->where('tbl_product.id',$request->prod)
                    ->where('tbl_product_details.is_deleted','no')
                    ->select('front_product.*','tbl_product.id','tbl_product.title','tbl_product.photo_one')
                    ->get();
                }else{
                    $result = FrontProduct::join('tbl_product_details','tbl_product_details.id','=','front_product.product_id')
                    ->join('tbl_product','tbl_product.id','=','tbl_product_details.product_id')
                    ->where('front_product.is_deleted','no')
                    ->where('tbl_product.is_deleted','no')
                    ->where('tbl_product_details.is_deleted','no')
                    ->select('front_product.*','tbl_product.id','tbl_product.title','tbl_product.photo_one')
                    ->get();
                }

            foreach($result as $key=>$value)
            {
                $value->photopath=FRONTPRODUCT_CONTENT_VIEW.$value->photo;
                $value->productphotopath=PRODUCT_CONTENT_VIEW.$value->photo_one;
            }
            
            
            return $result;
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
    public function statelist(Request $request)
    {
        $result = Area::where('location_type', '=', 1)->orderBy('name', 'ASC')->get();

        return $result;
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

    public function counter_list()
    {
            $result = Counter::where('is_deleted','no')->orderBy('id', 'DESC')->get();
            return $result;
    }
 
    public function fronttestimonialslist()
    {
            $result = WebTestiminials::where('status','0')->orderBy('id', 'DESC')->take(10)->get();
            foreach($result as $key=>$value)
            {
                $value->photopath=TESTIMONIALS_CONTENT_VIEW.$value->photo_one;
            }
            return $result;

    }

    // private function fetchApiData($url, $method)
    // {
    //     try {
    //         $response = null;

    //         switch ($method) {
    //             case 'post':
    //                 $response = Http::post($url);
    //                 break;
    //             case 'put':
    //                 $response = Http::put($url);
    //                 break;
    //             default:
    //                 $response = Http::get($url);
    //                 break;
    //         }

    //         return $response->json();
    //     } catch (\Exception $e) {
    //       return [
    //             'error' => true,
    //             'message' => $e->getMessage(),
    //         ];
    //     }
    // }

}