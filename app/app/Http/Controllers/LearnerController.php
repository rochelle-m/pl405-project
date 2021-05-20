<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LearnerController extends Controller
{
    public function index() 
    {
        return view('learners.apply');
    }

    public function apply(Request $request) 
    {
        $types = $request->all()['vehicle-type'];
        // TODO Add types
    }
}
