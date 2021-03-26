<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use DB;

class QuestionController extends Controller
{
    public function generate(Request $request){

        $questions = DB::select('SELECT * FROM questions');;
       
        if( $request->method() == "GET"){
                return view('learners.test.question');
        }
        
        return view('learners.test.question', ["details" => $request->all()]);
    }
}
