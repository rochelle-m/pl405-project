<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Request\CitizenExists;
use App\Citizen;
use App\Learner;
use App\Http\Resources\Citizen as CitizenResource;

class CitizenController extends Controller
{
    public function store(Request $request)
    {
       
        // * add validations here

        $Citizen = Citizen::create($request->all());

        return (new CitizenResource($Citizen))
                ->response()
                ->setStatusCode(201);
    }

    public function citizen_exists(Request $request){     
        return ([
            'exists' => Citizen::where('aadhar_no',str_replace(' ', '', $request['aadhar_no']))->exists()
        ]);         
    }

    public function gate(Request $request){
        $person = $request->all();

        if(Citizen::where('email', $person['email'] )->exists()){
            return view('learners.failed', ['msg1' => 'Oops!',
            'msg2' => 'This email already exists.']);
        }

        if(Citizen::where('aadhar_no', str_replace(' ', '', $person["aadhar_no"]))->exists()){
            return view('learners.failed', ['msg1' => 'Oops! Registration Failed',
            'msg2' => 'This Aadhar card number already exists.']);
        }

        return view('learners.upload', ['person' => $person]);
    }

    public function register(Request $request){
        $person = $request->all();
        $Citizen = Citizen::create($person);
 
        // fix this
      
        if($Citizen){

            $type_of_license =  $person['type'];
            $type_of_license = str_replace('[', '', $type_of_license);
            $type_of_license = str_replace(']', '', $type_of_license);
            
            $type_of_license = str_replace('"', '', $type_of_license);
            $arr = explode(',', $type_of_license);

            foreach($arr as $item) {
                Learner::create(['aadhar_no'=>$person['aadhar_no'],'type'=> $item]);
            }


            return view('learners.successful', ['msg1' => 'Registration Successful!',
            'msg2' => 'You will be redirected to the payments page']);
        }
        else{

            return view('learners.failed', ['msg1' => 'Oops! Registration Failed',
            'msg2' => 'Sorry for the inconvinience. Please try again.', 
            'msg3' => '']);
        }
    }

}
