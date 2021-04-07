<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Citizen;
use App\Learner;

class PermanentLicenseController extends Controller
{
    //
    public function apply(Request $request)
    {

    	{

	    	$i_aadhar_no = $request['aadhar_no'];
	    	$i_license_no = $request['license_no'];
	    	$exists = Citizen::where('aadhar_no', $i_aadhar_no)->exists();
	    	if($exists){
	    		$license_no = DB::table('citizens')->
	      			select('license_no')->
	      			where('aadhar_no', $i_aadhar_no);

	      		if($i_license_no == $license_no){
	      			Citizen::create([
				        'aadhar_no' => $request['aadhar_no'],
				        'license_no' => $request['license_no'],
				        'vehicle_type' => $request['type'],
				         ]);

			   			return view('permanent_license.exam_date');
	      		}


	    	}
	    	
	    	
	      //$user = Citizen::where('adhar_no', $i_aadhar_no)->learner_license()
	    
	   		
   		}

      

       {  
	  		// return view('learners.failed', ['msg1' => 'Oops! Application Failed',
	    //         'msg2' => 'Kindly enter valid credentials and try again.']);
  		}
    }


}
