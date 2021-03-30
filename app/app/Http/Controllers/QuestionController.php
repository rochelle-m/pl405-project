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
            return view('learners.test.question', ["questions"=> $questions]);
        }

        $types = DB::select('SELECT type from learners where aadhar_no = \''.$request['aadhar_no'].'\'');
        $types2 = array();
        foreach($types as $item){
            array_push($types2, $item->type);
        }
        
        array_walk($types2, function(&$x) {$x = "'$x'";});

        $questions = DB::select("SELECT id, question, option1,option2,option3,option4, correct FROM questions WHERE LEVEL = 'D' AND category in (".implode(", ",$types2).")  ORDER BY rand() LIMIT 20");
        
        return view('learners.test.question', ["details" => $request->all(), "questions"=> $questions, "index" => 0]);
    }

    public function next(Request $request){
        if(isset($request['next'])){
           
        }
        if(isset($request['skip'])){

        }
    }
    
}
