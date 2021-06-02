<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;

use App\Learner;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home')->with([
            'learner_types' => Learner::where('aadhar_no', '=', Auth::user()->aadhar_no)->pluck("status", "type"),
            'learner_exists' => Learner::where('aadhar_no', '=', Auth::user()->aadhar_no)->exists()
        ]);
    }
}
