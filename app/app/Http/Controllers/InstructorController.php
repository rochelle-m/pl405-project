<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instructor;

class InstructorController extends Controller
{
    public function token(Request $request){     
        return ([
            'exists' => Instructor::where('id', $request['token'])->exists()
        ]);         
    }
}
