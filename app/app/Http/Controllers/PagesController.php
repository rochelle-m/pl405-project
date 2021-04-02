<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Citizen;
use App\Learner;
use App\Instructor;
use DB;

class PagesController extends Controller
{
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

    public function mock(Request $request){
        return view('learners.test.instructions'); 
    }

    public function final(Request $request){
    
        $aadhar_no = str_replace(' ', '', $request['aadhar_no']);
        if(strcmp(Citizen::find($aadhar_no)->password, $request['password'])){
            return view('learners.failed', ['msg1' => 'Oops! Wrong password',
            'msg2' => 'Please check your credentials']);
        }

        $instructor  = Instructor::find($request['token']);
        if ($instructor == null) {
            return view('learners.failed', ['msg1' => 'Unauthorized',
            'msg2' => 'Something went wrong']);
        }  

        $name = Citizen::find($aadhar_no)->getFullNameAttribute();
       
        return view('learners.test.instructions', [
            "token" => $request['token'],  
            "aadhar_no" => $aadhar_no, 
            "name"=> $name]);
    }
    
}
