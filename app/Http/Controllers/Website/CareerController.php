<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Validator;
use Config;
use App\Models\
{
 Area,WebInternship,WebJobPosting,FrontUsers,UsersInfoForStructures
};

class CareerController extends Controller
{
  
    public function index(Request $request)
    {
       
        $statelist=$this->statelist($request);
       
        return view('website.pages.careers',compact('statelist'));
    }
    public function statelist(Request $request)
    {
        $result = Area::where('location_type', '=', 1)->orderBy('name', 'ASC')->get();

        return $result;
    }


    public function frontinternshipadd(Request $request)
    {
        try
        {
            $internship = new WebInternship();
            $internship->name = $request->name;
            $internship->email = $request->email;
            $internship->mobile = $request->mobile;
            $internship->qualification = $request->qualification;
            $internship->address = $request->address;
            $internship->save();
          
            if ($request->resume)
            {
        
                $imagedataPath=INTERNSHIP_CONTENT_UPLOAD;
                // dd($imagedataPath);
                if ( !is_dir( $imagedataPath) ) 
                {
                    mkdir( $imagedataPath, 0755, true);   
                }
                
                $photoName=$internship->id."_Resume";
                if (!empty($request->resume))
                {     
                    $applpic_ext = $request->file('resume')->getClientOriginalExtension();
                    $fileUploadAttachmentOne = base64_encode(file_get_contents($request->file('resume'))); 
                    $applicantAttachmentOne = base64_decode($fileUploadAttachmentOne);
                    $path2 = $imagedataPath.$photoName.".".$applpic_ext;
                    file_put_contents($path2, $applicantAttachmentOne); 
                    $internship=WebInternship::where('id',$internship->id)->update(['resume'=>$photoName.".".$applpic_ext]);
                   
                }
                
            }
            
            if ($internship)
            {
            return redirect()->back()->with('success', 'Data has been successfully stored.');
        } else {
            return redirect()->back()->with('error', 'Data has not been successfully stored.');
        }
    } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Data has not been successfully stored.');
       
    }

    }
    
    
    
    
    
    public function frontjobpostingadd(Request $request)
    {
        try
        {
            $posting = new WebJobPosting();
            $posting->name = $request->name;
            $posting->email = $request->email;
            $posting->mobile = $request->mobile;
            $posting->qualification = $request->qualification;
            $posting->experience_from = $request->experience_from;
            $posting->experience_to = $request->experience_to;
            $posting->address = $request->address;
            $posting->save();
          
            if ($request->resume)
            {
                $imagedataPath=JOBPOSTING_CONTENT_UPLOAD;
                if ( !is_dir( $imagedataPath) ) 
                {
                    mkdir( $imagedataPath, 0755, true );       
                }
                
                $photoName=$posting->id."_Resume";
                if (!empty($request->resume))
                {     
                    $applpic_ext = $request->file('resume')->getClientOriginalExtension();
                    $fileUploadAttachmentOne = base64_encode(file_get_contents($request->file('resume'))); 
                    $applicantAttachmentOne = base64_decode($fileUploadAttachmentOne);
                    $path2 = $imagedataPath.$photoName.".".$applpic_ext;
                    file_put_contents($path2, $applicantAttachmentOne); 
                    $internship=WebJobPosting::where('id',$posting->id)->update(['resume'=>$photoName.".".$applpic_ext]);
                   
                }
                
            }
            
            if ($posting) {
            return redirect()->back()->with('success', 'Data has been successfully stored.');
        } else {
            return redirect()->back()->with('error', 'Data has not been successfully stored.');
        }
    } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Data has not been successfully stored.');
       
    }

    }
    
    
    
    
    
    
    public function frontdistributorregistration(Request $request)
    {
        try
        {
            $users = new FrontUsers();
            $users->fname = $request->fname;
            $users->mname = $request->mname;
            $users->lname = $request->lname;
            $users->password = $request->password;
            $users->email = $request->email;
            $users->phone = $request->phone;
            $users->alternate_mobile = $request->alternate_mobile;
            $users->state = $request->state;
            $users->district = $request->district;
            $users->taluka = $request->taluka;
            $users->city = $request->city;
            $users->business_address = $request->business_address;
            $users->business_state = $request->business_state;
            $users->business_district = $request->business_district;
            $users->business_tuluka = $request->business_tuluka;
            $users->business_village = $request->business_village;
            $users->where_open_shop = $request->where_open_shop;
            $users->used_sct = $request->used_sct;
            $users->why_want_take_distributorship = $request->why_want_take_distributorship;
            $users->distributorship_exerience = $request->distributorship_exerience;
            $users->experience_farm_garder = $request->experience_farm_garder;
            $users->goal = $request->goal;
            $users->user_type = 'fsc';
            $users->is_deleted = 'no'; // 0 Means Active, 1 Means Delete
            $users->active = 'no'; // 0 Means Active, 1 Means Inactive
            $users->added_by =  ($request->created_by) ? $request->created_by: 'superadmin'; // 0- from Superadmin 1- Distributor
            $users->save();
            
            
        $idLastInserted=$users->id;
        $imagedataPath=FRONT_DISTRIBUTOR_OWN_DOCUMENTS;

            if ( !is_dir( $imagedataPath) ) 
                {
                    mkdir( $imagedataPath, 0755, true );       
                }
        
        $photoName=$idLastInserted."_aadhar_card_image_front";
        $inputfilenametoupload='aadhar_card_image_front';
        
        if (!empty($request->hasFile($inputfilenametoupload)))
        {     
            $filename=$this->processUpload($request, $inputfilenametoupload,$imagedataPath,$photoName);
            $users=FrontUsers::where('id',$idLastInserted)->update(['aadhar_card_image_front'=>$filename]);
        }
        
        $photoName=$idLastInserted."_aadhar_card_image_back";
        $inputfilenametoupload='aadhar_card_image_back';
        if (!empty($request->hasFile($inputfilenametoupload)))
        {     
            $filename=$this->processUpload($request, $inputfilenametoupload,$imagedataPath,$photoName);
            $users=FrontUsers::where('id',$idLastInserted)->update(['aadhar_card_image_back'=>$filename]);
        }
        
        $photoName=$idLastInserted."_pan_card";
        $inputfilenametoupload='pan_card';
        if (!empty($request->hasFile($inputfilenametoupload)))
        {     
            $filename=$this->processUpload($request, $inputfilenametoupload,$imagedataPath,$photoName);
            $users=FrontUsers::where('id',$idLastInserted)->update(['pan_card'=>$filename]);
        }
        
        
        $photoName=$idLastInserted."_light_bill";
        $inputfilenametoupload='light_bill';
        if (!empty($request->hasFile($inputfilenametoupload)))
        {     
            $filename=$this->processUpload($request, $inputfilenametoupload,$imagedataPath,$photoName);
            $users=FrontUsers::where('id',$idLastInserted)->update(['light_bill'=>$filename]);
        }
        
        
        $photoName=$idLastInserted."_shop_act_image";
        $inputfilenametoupload='shop_act_image';
        if (!empty($request->hasFile($inputfilenametoupload)))
        {     
            $filename=$this->processUpload($request, $inputfilenametoupload,$imagedataPath,$photoName);
           
            $users = FrontUsers::where('id',$idLastInserted)->update(['shop_act_image'=>$filename]);
           
        }
        
        $photoName=$idLastInserted."_product_purchase_bill";
        $inputfilenametoupload='product_purchase_bill';
        if (!empty($request->hasFile($inputfilenametoupload)))
        {     
            $filename=$this->processUpload($request, $inputfilenametoupload,$imagedataPath,$photoName);
            $users=FrontUsers::where('id',$idLastInserted)->update(['product_purchase_bill'=>$filename]);
           
        }
        
        
        
                
            if($request->created_by){
                $this->checkLevelofDistributor($request->created_by);
            }
            
            if ($users) {
            return redirect()->back()->with('success', 'Data has been successfully stored.');
        } else {
            return redirect()->back()->with('error', 'Data has not been successfully stored.');
        }
    } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Data has not been successfully stored.');
       
    }

    }
    

    public function processUpload(Request $request, $inputfilenametoupload,$imagedataPath,$photoName)
    {
         if ($request->hasFile($inputfilenametoupload)) 
         {
            $applpic_ext = $request->file($inputfilenametoupload)->getClientOriginalExtension();
            $fileUploadAttachmentOne = base64_encode(file_get_contents($request->file($inputfilenametoupload))); 
            $applicantAttachmentOne = base64_decode($fileUploadAttachmentOne);
            $path2 = $imagedataPath.$photoName.".".$applpic_ext;
            file_put_contents($path2, $applicantAttachmentOne);  
            return $photoName.".".$applpic_ext;
        }
    }

    public function districtlist(Request $request)
    {
        $result = Area::where('location_type', '=', 2)
                    ->where('parent_id', '=', $request->state_id)
                    ->orderBy('name', 'ASC')
                    ->get();

        if ($result->isNotEmpty()) {
            $response = [
                'success' => true,
                'data' => $result,
                'message' => 'District List Get Successfully'
            ];
        } else {
            $response = [
                'success' => false,
                'message' => 'District List Not Found'
            ];
        }

        return response()->json($response);
    }

    public function talukalist(Request $request)
    {
        $result = Area::where('location_type', '=', 3)
                    ->where('parent_id', '=', $request->dist_id)
                    ->orderBy('name', 'ASC')
                    ->get();

        if ($result->isNotEmpty()) {
            $response = [
                'success' => true,
                'data' => $result,
                'message' => 'Taluka List Get Successfully'
            ];
        } else {
            $response = [
                'success' => false,
                'message' => 'Taluka List Not Found'
            ];
        }

        return response()->json($response);
    }


    public function villagelist(Request $request)
{
    $result = Area::where('location_type', '=', 4)
                  ->where('parent_id', '=', $request->taluka_id)
                  ->orderBy('name', 'ASC')
                  ->get();

    if ($result->isNotEmpty()) {
        $response = [
            'success' => true,
            'data' => $result,
            'message' => 'Village List Get Successfully'
        ];
    } else {
        $response = [
            'success' => false,
            'message' => 'Village List Not Found'
        ];
    }

    return response()->json($response);
    }


public function checkLevelofDistributor($distributorId_who_going_to_add_new_dist,$newCreatedDistributor)
    {
        try {
        
            $details = UsersInfoForStructures::where('user_id',$distributorId_who_going_to_add_new_dist)->first();
        
            \Log::info('line 3485');
            \Log::info($details);

            if($details->user_type =='fsc')
            {
                $fsclist = UsersInfoForStructures::where('added_by',$distributorId_who_going_to_add_new_dist)->where('user_type','fsc')->get(); 
                \Log::info('$fsclist count to check fsc to bsc ');
                \Log::info($fsclist);
                if(count($fsclist)>=5)
                {
                    $data=[
                            'user_type'=>'bsc',
                        ];
                    $dataNew=Dist_Promotion_Demotion::insert(array('user_id_need_to_promote_demote'=>$distributorId_who_going_to_add_new_dist,'user_type_new'=>'bsc','user_type_old'=>'fsc'));
                    // UsersInfoForStructures::where(['user_id'=>$distributorId_who_going_to_add_new_dist])->update([
                    //     'user_type'=>'bsc'
                    // ]);
                }
                
            }
            if($details->user_type =='bsc')
            {
            
                $dsc_id_to_update = UsersInfoForStructures::where('user_id',$distributorId_who_going_to_add_new_dist)->where('user_type','bsc','added_by')->first();   

                $data=[
                        'user_type'=>'dsc',
                    ];
                $dataNew=Dist_Promotion_Demotion::insert(array('user_id_need_to_promote_demote'=>$dsc_id_to_update->added_by,'user_type_new'=>'dsc','user_type_old'=>'bsc'));
                // UsersInfoForStructures::where(['user_id'=>$dsc_id_to_update->added_by])->update([
                //     'user_type'=>'dsc'
                // ]);
                
            }


        } catch(Exception $e) {
            \Log::info('line 3522 in checl level');
            \Log::info($e);

            return response()->json([
                    "data" => '',
                    "result" => false,
                    "error" => true,
                    "message" =>$e->getMessage()." ".$e->getCode()
                ]);
        
        }
    }
}