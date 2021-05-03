<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Request\CitizenExists;
use App\Citizen;
use App\insurance;
use DB;

class insuranceController extends Controller
{
     public function payinsurance(Request $request)
    {

    	

	    	$a_no = Citizen::getTrimmedAadharNo($request['aadhar_no']);
	    	$v_no = $request['vehicle_no'];
	    	$exists = Citizen::where('aadhar_no', $a_no)->exists();
	    	if($exists){
	    		
	      			insurance::create([
				        'aadhar_no' => $request['aadhar_no'],
				        'vehicle_no' => $request['vehicle_no'],
				        'vehicle_type' => $request['type'],
				    ]);

	      			return view('stripe');
	      		}
		    	else
					return view('learners.failed', ['msg1' => 'Oops! Application Failed',
		            'msg2' => 'Kindly enter valid credentials and try again.']);
  		
    }
}
