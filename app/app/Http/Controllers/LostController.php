<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Citizen;

class LostController extends Controller
{
    public function manage (Request $request) {
        $aadhar_no = Citizen::getTrimmedAadharNo($request['aadhar_no']);
        $exists = Citizen::find($aadhar_no)->exists();
        if($exists) {
            dd($request['reason']);
        }
        
    }
}
