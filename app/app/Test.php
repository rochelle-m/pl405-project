<?php

namespace App\Http\Controllers;
namespace App;

use Codedge\Fpdf\Fpdf\Fpdf;
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
                Citizen::where('aadhar_no', $this->aadhar_no)->first()->
                update(['llicense_no' => Carbon::now()->year.$this->aadhar_no, -2 ]);
                $this->generate_pdf();
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

    private function generate_pdf(){
		$pdf = new FPDF();
		$pdf ->AddPage();
		
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(0,15, 'Road Transport Services',0,1,'C');
        $pdf->Cell(0,15, 'e-Learner License',0,1,'C');
        $pdf->Line(50, 45, 210-50, 45);
        $pdf->Ln(10);

		$pdf->image('images/favicon.png',10,10,33,0,'');
		$pdf->SetFont('Arial','',11);
        
        $pdf->SetTextColor(0,250,0);
        $pdf->Cell(0,10, 'Passed',0,1,'R');
		$pdf->Ln(10);


        $pdf->SetTextColor(0,0,0);
		$pdf->Cell(0,10, 'Issue Date:    '.Carbon::now()->format('d-m-Y'),0,1);
		$pdf->Cell(0,11, 'Aadhar Number:   '.$this->aadhar_no,0,1);	
		$pdf->Cell(0,11, 'Name:   '.Citizen::find($this->aadhar_no)->getFullNameAttribute(),0,1);
		
		$pdf->Cell(0,10, 'License Number:  ', Citizen::find($this->aadhar_no)->getLLicenseNo(),0,1);

		array('Content-Type' => 'application/pdf');
		$pdf->output();
    }

}

?>