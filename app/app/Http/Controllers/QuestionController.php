<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use DB;

class QuestionController extends Controller
{
    public function generate(Request $request){
       
        if( $request->aadhar_no == null){
            $questions = DB::select('SELECT question, option1,option2,option3,option4, correct FROM questions WHERE LEVEL = \'E\' ORDER BY rand() LIMIT 20');
            return view('learners.test.question');
        }
        
        $questions = DB::select('SELECT question, option1,option2,option3,option4, correct FROM questions WHERE LEVEL = \'E\' ORDER BY rand() LIMIT 20');
        return view('learners.test.question', ["details" => $request->all()]);
    }
}
