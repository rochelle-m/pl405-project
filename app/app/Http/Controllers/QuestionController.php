<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questions;
use App\Learner;
use App\Test;
use Session;
use DB;

class QuestionController extends Controller
{
    public function get_questions(Request $request){
      
      $questions = $questions = DB::table('questions')->
      select('id', 'img', 'question', 'option1','option2','option3','option4')->
      where('level', 'E')->inRandomOrder()->limit(20)->
      get()->all();

      $test = Test::createMockTest($questions);

      $request->session()->put('test', $test);
      $request->session()->save();

      return view('learners.test.question', ["questions"=> $questions, 'test' => $test]);
    }

    public function post_questions(Request $request){
      
      if(Session::has('test') ){
       
        $test = Session::get('test');
        
        $test->incrementIndex();
        $test->updateScore($request['id'], $request['answer']);
        
        if(isset($request['finish'])){
          $test->setFinish();
          $request->session()->flush();
          $percentage = $test->getScore()/$test->getCount() * 100;
          
            if($percentage > 74){
              return view('learners.successful', ['msg1' => 'Comgratulations! You have obtained '.$test->getScore().'/'.$test->getCount(),
              'msg2' => 'Woohoo']); 
          }
          return view('learners.failed', ['msg1' => 'Sorry! You have obtained '.$test->getScore().'/'.$test->getCount(),
          'msg2' => 'Try again']);
        }
        return view('learners.test.question', 
          ["details" => $request->all(), "questions"=> $test->getQuestions()]);
      }
      

        $types = Learner::where('aadhar_no', $request->aadhar_no)->pluck('type')->all();
        array_push($types,"ALL");   
      
        $questions = DB::table('questions')->
          select('id', 'img', 'question', 'option1','option2','option3','option4')->
          where('level', 'D')->inRandomOrder()->limit(20)->
          whereIn('category', explode (', ',implode(", ",$types)))->get()->all();

        $test = Test::createRealTest($request->aadhar_no, $questions);

        $request->session()->forget('test');
        $request->session()->put('test', $test);
        $request->session()->save();

        return view('learners.test.question', 
          ["details" => $request->all(), "questions"=> $questions, 'test' => $test]);
    }
    
}
