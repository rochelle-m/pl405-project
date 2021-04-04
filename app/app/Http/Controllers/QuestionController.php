<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questions;
use App\Learner;
use DB;

class QuestionController extends Controller
{
    public function get_questions(Request $request){
        $questions = $questions = DB::table('questions')->
          select('id', 'img', 'question', 'option1','option2','option3','option4')->
          where('level', 'E')->inRandomOrder()->limit(20)->
          get()->all();
        return view('learners.test.question', ["questions"=> $questions, "index" => 0]);
    }

    public function post_questions(Request $request){
        $types = Learner::where('aadhar_no', $request->aadhar_no)->pluck('type')->all();
        array_push($types,"ALL");   
      
        $questions = DB::table('questions')->
          select('id', 'img', 'question', 'option1','option2','option3','option4')->
          where('level', 'D')->inRandomOrder()->limit(20)->
          whereIn('category', explode (', ',implode(", ",$types)))->get()->all();
       
        return view('learners.test.question', 
          ["details" => $request->all(), "questions"=> $questions, "index" => 0]);
    }

    public function next(Request $request){
        if(isset($request['next'])){
           
        }
        if(isset($request['skip'])){

        }
    }
    
}
