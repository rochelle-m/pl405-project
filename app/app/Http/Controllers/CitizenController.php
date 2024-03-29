<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Request\CitizenExists;
use App\Citizen;
use App\Learner;
use App\Http\Resources\Citizen as CitizenResource;
use Illuminate\Support\Facades\Hash;


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

    public function login(Request $request)
{
    $password = \DB::table('citizens')->where('email','email')->value('password');
    
     $email = $request->input('email');
     $password = $request->input('password');

     $user = Citizen::where('email', '=', $email)->first();
     if (!$user) {
        return view('loginmodule.login',['msg1' => 'Oops! Login failed.']);
     }
     if (!Hash::check($password, $user->password)) {
        return view('loginmodule.login',['msg1' => 'Oops! Login failed.']);
        // response()->json(['success'=>false]);
     }
        return view('loginmodule.home');
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
        $citizen = Citizen::new($person);
 
        // fix this
      
        if($citizen){

            $type_of_license =  $person['type'];
            $type_of_license = str_replace('[', '', $type_of_license);
            $type_of_license = str_replace(']', '', $type_of_license);
            
            $type_of_license = str_replace('"', '', $type_of_license);
            $arr = explode(',', $type_of_license);

            foreach($arr as $item) {
                Learner::create(['aadhar_no'=>$person['aadhar_no'],'type'=> $item]);
            }
            return view('learners.payment');
        }
        else{

            return view('learners.failed', ['msg1' => 'Oops! Registration Failed',
            'msg2' => 'Sorry for the inconvinience. Please try again.', 
            'msg3' => '']);
        }
    }

 public function emailcheck(Request $request)
{
    $password = \DB::table('citizens')->where('email','email')->value('password');
    
     $email = $request->input('email');
     //$password = $request->input('password');

     $user = Citizen::where('email', '=', $email)->first();
     if (!$user) {
        return view('loginmodule.enteremail',['msg1' => 'Oops! Email dose not exist']);
     }
     // if (!Hash::check($password, $user->password)) {
     //    return view('loginmodule.login',['msg1' => 'Oops! Login failed.']);
     //    // response()->json(['success'=>false]);
     // }
        return view('loginmodule.enteremail',['msg1' => 'Password reset link send to your mail']);
}

}
