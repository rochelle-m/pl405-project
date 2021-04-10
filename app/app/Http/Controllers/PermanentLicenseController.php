<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Citizen;
use App\permanent_license;
use DB;

class PermanentLicenseController extends Controller
{
    //
    public function apply(Request $request)
    {

    	

	    	$i_aadhar_no = $request['aadhar_no'];
	    	$i_license_no = $request['ll_no'];
	    	$exists = Citizen::where('aadhar_no', $i_aadhar_no)->exists();
	    	if($exists){
	    		$license_no = DB::table('citizens')->
	      			where('aadhar_no', $i_aadhar_no)->value('llicense_no');


	      		if($i_license_no == $license_no){
	      			permanent_license::create([
				        'aadhar_no' => $request['aadhar_no'],
				        'license_no' => $request['ll_no'],
				        'vehicle_type' => $request['type'],
				    ]);

			   		return view('permanent_license.exam_date');
	      		}


	    	}
	    	  	
	      
	  		return view('learners.failed', ['msg1' => 'Oops! Application Failed',
	            'msg2' => 'Kindly enter valid credentials and try again.']);
  		
    }


}
