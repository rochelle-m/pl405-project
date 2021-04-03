<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Request\CitizenExists;
use App\Citizen;
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


    public function login(Request $request)
{
    $password = \DB::table('citizens')->where('email','email')->value('password');
    
     $email = $request->input('email');
     $password = $request->input('password');

     $user = Citizen::where('email', '=', $email)->first();
     if (!$user) {
        return response()->json(['success'=>false, 'message' => 'Login Fail, please check email id']);
     }
     if (!Hash::check($password, $user->password)) {
        return response()->json(['success'=>false, 'message' => 'Login Fail, pls check password']);
     }
        return response()->json(['success'=>true,'message'=>'success', 'data' => $user])
}
}
