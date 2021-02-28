<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function register(Request $request){
        $person = $request->all();
        // temp
        dd($person);
        return view('learners.upload', ['person' => $person]);
    }

    public function status(Request $request){
        $person = $request->all();
        if(!true){

            return view('learners.successful', ['person' => $person]);
        }
        else
            return view('learners.failed', ['person' => $person]);
    }
}
