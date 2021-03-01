<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Citizen;

class PagesController extends Controller
{
    public function register(Request $request){
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

    public function status(Request $request){
        $person = $request->all();

        $Citizen = Citizen::create($person);
 
        // fix this
      
        if($Citizen){
            return view('learners.successful', ['msg1' => 'Registration Successful !',
            'msg2' => 'Check your email for details']);
        }
        else{

            return view('learners.failed', ['msg1' => 'Oops! Registration Failed',
            'msg2' => 'Sorry for the inconvinience. Please Try Again Later.', 
            'msg3' => '']);
        }
    }
}
