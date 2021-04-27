<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Citizen;
use App\Learner;
use App\Instructor;
use DB;

class PagesController extends Controller
{
    public function mock(Request $request){
        $request->session()->forget('test');
        $request->session()->save();
        return view('learners.test.instructions'); 
    }

    public function final(Request $request){
        $request->session()->forget('test');
        $request->session()->save();
        
        $aadhar_no = Citizen::getTrimmedAadharNo($request['aadhar_no']);
        $hashedPassword = Citizen::find($aadhar_no)->password;

        if (!Hash::check($request['password'], $hashedPassword)) {
            return view('learners.failed', ['msg1' => 'Oops! Wrong password',
            'msg2' => 'Please check your credentials']);
        }
        
        $instructorExists  = Instructor::checkIfExists($request['token']);
        if (!$instructorExists) {
            return view('learners.failed', ['msg1' => 'Unauthorized',
            'msg2' => 'Something went wrong']);
        }  

        $name = Citizen::find($aadhar_no)->getFullNameAttribute();
       
        return view('learners.test.instructions', [
            "token" => $request['token'],  
            "aadhar_no" => $aadhar_no, 
            "name"=> $name]);
    }
    

    public function email ($email, $name) {
        Mail::to($email)->send(new SendMailable($name));
    }
}
