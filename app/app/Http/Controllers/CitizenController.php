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
        
        if( Citizen::where('aadhar_no',str_replace(' ', '', $request['aadhar_no']))->exists()){
            return response()->json([
                'exits' => $request->all()
            ]);
        }
        else{
            return response()->json([
                'exits' => $request->all()
            ]);
        }
    }
}
