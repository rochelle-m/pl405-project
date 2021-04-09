<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questions;
use App\Learner;
use App\Test;
use Session;
use DB;
use Lang;

class QuestionController extends Controller
{
    public function get_questions(Request $request){
      
      $request->session()->forget('test');
      $request->session()->save();
      $test = Test::createMockTest();

      $request->session()->put('test', $test);
      $request->session()->save();

      return view('learners.test.question', [
          "questions"=> $test->getQuestions(), 
          'test' => $test
        ]);
    }

    public function post_questions(Request $request){ 
      $test = Session::get('test');
          
      if($test != null){      
        $test->incrementIndex();

        if(isset($request['finish'])){
          $test->updateScore($request['id'], $request['answer']);
          $test->setFinish();
          $view = $test->getResultView();   
          $score = $test->getFinalScoreString();
          
          $request->session()->forget('test');
          $request->session()->save();
          
          return view('learners.'.$view, [
            'msg1' => Lang::get('response.'.$view.'.msg1').$score
          ]);
        }
        $test->updateScore($request['id'], $request['answer']);
        return view('learners.test.question', 
          ["details" => $request->all(), "questions"=> $test->getQuestions()]);
      }

      $types = Learner::where('aadhar_no', $request->aadhar_no)->pluck('type')->all();
      array_push($types,"ALL");   

      $test = Test::createRealTest($request->aadhar_no, $types);
      $request->session()->put('test', $test);
      $request->session()->save();

      return view('learners.test.question', [
          "details" => $request->all(), 
          "questions"=> $test->getQuestions(), 
          'test' => $test
      ]);
    }
    
}
