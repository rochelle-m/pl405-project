<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Learner; 

class LearnerController extends Controller
{
    public function index() 
    {
        if(!Learner::where('aadhar_no', '=', Auth::user()->aadhar_no)->exists()){
            return view('learners.apply');
        }
        return redirect('/home');
    }

    private function isGearedAndNonGeared($arr){
        return in_array('mcwog', $arr) && in_array('mcwg', $arr);
    }

    public function apply(Request $request) 
    {
        $types = $request->all()['vehicle-type'];
        if ($this->isGearedAndNonGeared($types)){
            unset($types[array_search('mcwog',$types,true)]);
        }

        foreach ($types as $type) {
            Learner::create([
                "aadhar_no" => Auth::user()->aadhar_no,
                "type" => $type,     
            ]); 
        }
    }
}
