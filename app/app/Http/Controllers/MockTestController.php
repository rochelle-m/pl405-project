<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MockTestController extends Controller
{
    public function index() 
    {
        return view('mock-tests.test');
    }
}
