<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Citizen;
use App\Learner;
use App\Instructor;
use DB;

class PagesController extends Controller
{
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
