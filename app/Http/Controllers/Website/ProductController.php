<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Validator;
use Config;
Use App\Models\FrontProduct;

class ProductController extends Controller
{
  
    public function index(Request $request)
    {

        $frontproductlist=$this->frontproductlist($request);

        return view('website.pages.products',compact('frontproductlist'));
    }
    public function index2(Request $request)
    {

        $frontproductlist=$this->frontproductlist($request);

        return view('website.pages.sub-product',compact('frontproductlist'));
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

}