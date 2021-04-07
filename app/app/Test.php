<?php

namespace App\Http\Controllers;
namespace App;

use Illuminate\Http\Request;
use App\Questions;
use App\Learner;
use App\Citizen;
Use \Carbon\Carbon;
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
     * Create a new test with applicant's aadhar no and questions
     * @param $questions, $aadhar_no
     * @return Test
     */
    public static function createRealTest($aadhar_no, $types) {
        $instance = new self();
        $instance->aadhar_no = $aadhar_no;
        $instance->questions = DB::table('questions')->
            select('id', 'img', 'question', 'option1','option2','option3','option4')->
            where('level', 'D')->inRandomOrder()->limit(20)->
            whereIn('category', explode (', ',implode(", ",$types)))->get()->all();

        return $instance;
    }

    /**
     * Create a new mock test with questions
     * @param  $questions
     * @return Test
     */
    public static function createMockTest() {
        $instance = new self();
        $instance->questions = DB::table('questions')->
        select('id', 'img', 'question', 'option1','option2','option3','option4')->
        where('level', 'E')->inRandomOrder()->limit(20)->
        get()->all();
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

    private function saveResults($result){
        if($this->aadhar_no != null){
            Learner::where('aadhar_no', $this->aadhar_no)->
            update(['issue_date' => Carbon::now()->format('Y-m-d'), 'status' => $result]);

            if(!strcmp($result, 'Passed')){
                $citizen = Citizen::find($this->aadhar_no);
                $citizen->update(['llicense_no' => "2021"+substr($this->aadhar_no, -2) ]);
                $citizen->save();
            }

        }
    }
    
    public function getIndex(){
        return $this->index;
    }

    public function getScore(){
        return $this->score;
    } 

    /**
     * Percentage of score is calculated and success or failure string is conditionally returned
     * @return string
     */
    public function getResultView(){
        $percentage = $this->getScore()/$this->getCount() * 100;
        if($percentage > 74){
            $this->saveResults("Passed");
            return "successful";
        }
        $this->saveResults("Failed");
        return "failed";
    }

    /**
     * answer is checked and score is changed accordingly
     * @param $id, $answer
     * @return string
     */
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