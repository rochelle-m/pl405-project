<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function register(Request $request){
        $person = $request->all();
        return view('learners.upload', ['person' => $person]);
    }
}
