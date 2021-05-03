<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Citizen;
use App\Lost;
use Lang;

class LostController extends Controller
{
    public function manage (Request $request) {
        $aadhar_no = Citizen::getTrimmedAadharNo($request['aadhar_no']);
        $citizen = Citizen::find($aadhar_no);
        if($citizen != null) {
            Lost::new($aadhar_no, $request['fir'], $request['reason']);
            return view('learners.successful', [
                'msg1' => Lang::get('response.successful.msg2')
            ]);
        }
        return view('learners.failed', [
            'msg1' => Lang::get('response.failed.msg3')
        ]);
        
    }
}
