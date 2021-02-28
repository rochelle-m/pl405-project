<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
