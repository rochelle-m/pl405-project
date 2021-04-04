<?php

namespace App\Http\Controllers;
namespace App;

use Illuminate\Http\Request;
use App\Questions;
use DB;

class Test {
    private $score = 0;
    private $questions;
    private $aadhar_no; 
    private $index = 0;
    private $finish = false;

    /**
     * Constructor 
     */
    private function __consruct(){

    }

    /**
     * Create a new test with applicant's aadhar no
     * @param $questions, $aadhar_no
     * @return Test
     */
    public static function createRealTest($aadhar_no, $questions) {
        $instance = new self($questions);
        $instance->aadhar_no = $aadhar_no;
        $instance->questions = $questions;
        return $instance;
    }

    /**
     * Create a new mock test
     * @param  $questions
     * @return Test
     */
    public static function createMockTest($questions) {
        $instance = new self($questions);
        $instance->questions = $questions;
        return $instance;
    }

    public function getCount(){
        return count($this->questions);
    }

    public function setFinish(){
        $this->finish = true;
    }
    
    public function getQuestions(){
        return $this->questions;
    }
    
    public function getIndex(){
        return $this->index;
    }

    public function getScore(){
        return $this->score;
    } 

    public function updateScore($id, $answer){
        if(!$this->finish){
            $correct = Questions::find($id)->correct == $answer;
            $this->score += +$correct;
        }
        
    }

    public function incrementIndex(){
        $this->index += 1;
    }

}

?>