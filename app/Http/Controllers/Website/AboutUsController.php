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

    public function fetchAddressData($method, $url, $data = false)
    {

        $curl = curl_init();

        switch ($method) {
            case 'POST':
                curl_setopt($curl, CURLOPT_POST, 1);

                if ($data) {
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                }
                break;
            case 'PUT':
                curl_setopt($curl, CURLOPT_PUT, 1);
                break;
            default:
                if ($data) {
                    $url = sprintf('%s?%s', $url, http_build_query($data));
                }
        }

        // Optional Authentication:
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_USERPWD, 'username:password');

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($curl);

        curl_close($curl);

        return $result;
        

       

    }

    public function getAddressAPI(){

        // Initialize cURL session
        $ch = curl_init();

        // Set the URL for the POST request
        curl_setopt($ch, CURLOPT_URL, "https://finalapi.soilchargertechnology.com/api/address_list_web");

        // Set the HTTP method to POST
        curl_setopt($ch, CURLOPT_POST, true);

        // Disable SSL verification (if necessary)
        // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        // Set options to return the response as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Execute the cURL request
        $response = curl_exec($ch);

        // Check for cURL errors
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }

        // Close the cURL session
        curl_close($ch);

        // Output the response
        $address_list = json_decode($response, true);
        $address_list = $address_list['data'][0];
dd($address_list);
        return $address_list;
    }

  
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