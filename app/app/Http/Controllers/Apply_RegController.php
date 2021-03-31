<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf;

class Apply_RegController extends Controller
{
    public function generate_pdf(Request $request){
        date("d/m/Y");

		$name = $request['mob'];
		$num = $request['mob'];
		$add= $request['aadhar_no'];
		$C = $request['Engine_Number'];
		$Engine= $request['Engine_Number'];
		$Model= $request['Model'];
		$Company= $request['Company'];
		$Color= $request['Color'];
		$Fuel= $request['Fuel_type'];
		$Dealer= $request['Dealer_Name'];
		$DCity= $request['Dealer_City'];
		$email= $request['email'];

	
		function generate_password()
		{
			$chars =  'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'.
				'0123456789$_';
			$str = '';
			$max = strlen($chars) - 1;
			for ($i=0; $i < 10; $i++)
				$str .= $chars[random_int(0, $max)];
			return $str;
		}
		$pwd=generate_password();

		$d=date("Y-m-d", strtotime("+1 week"));
				$dayofweek = date('w', strtotime($d));
			if($dayofweek == 'Sunday')
			$d = date("Y-m-d", strtotime("+1 day"));
   		$Cdate=date("Y-m-d");
	
		$pdf = new FPDF();
		$pdf ->AddPage();
		
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(0,15, 'RTO Registretion of vehical',0,1,'C');
	
	
		$pdf->image('images/favicon.png',10,10,33,0,'');
		// $pdf->image('click.png',175,10,33,0,'','status.blade.php');
		$pdf->Cell(0,10, 'Check Status' ,0,1,'R');
		$pdf->SetFont('Arial','',11);
		$pdf->Ln(10);
		$pdf->Cell(0,11, 'Application Number',0,1);
		$pdf->Cell(0,10, $pwd ,1,1);
		
		$pdf->Cell(0,11, 'Owner Name:-',0,1);
		$pdf->Cell(0,10, $name ,1,1);
		
		$pdf->Cell(0,10, 'Mobile:-',0,1);
		$pdf->Cell(0,10, $num ,1,1);
		$pdf->Cell(0,10, 'addhar:-',0,1);
		$pdf->Cell(0,10, $add ,1,1);
		
		$pdf->Cell(0,10, 'email:-',0,1);
		$pdf->Cell(0,10, $email ,1,1);
		$pdf->SetFont('Arial','',15);
	
		$pdf->Cell(0,25, '-----------------------Vehicle Information-------------------- ',0,1 ,'C');
		$pdf->SetFont('Arial','',11);
		
		$pdf->Cell(0,10, 'Chassis Number:-',0,1);
		$pdf->Cell(0,10, $C ,1,1);
		
		$pdf->Cell(0,10, 'Engine Number:-',0,1);
		$pdf->Cell(0,10, $Engine ,1,1);
		
		$pdf->Cell(0,10, 'Model:-',0,1);
		$pdf->Cell(0,10, $Model ,1,1);
		
		$pdf->Cell(0,10, 'Company Name:-',0,1);
		$pdf->Cell(0,10, $Company ,1,1);
		
		$pdf->Cell(0,10, 'Color:-',0,1);
		$pdf->Cell(0,10, $Color ,1,1);
		
		$pdf->Cell(0,10, 'Fuel type:-',0,1);
		$pdf->Cell(0,10, $Fuel ,1,1);
		
		$pdf->Line(10,244,200,244);
		$pdf->Ln(10);
		$pdf->SetFont('Arial','',20);
		$pdf->Cell(0,23, '--------------------Dealer Information---------------------------',0,1 ,'C');
		$pdf->SetFont('Arial','',13);
		
		$pdf->Cell(0,10, 'Dealer Name:-',0,1);
		$pdf->Cell(0,10, $Dealer ,1,1);
		
		$pdf->Cell(0,10, 'Dealer City:-',0,1);
		$pdf->Cell(0,10, $DCity ,1,1);
		
		$pdf->Line(160,80,195,80);
		$pdf->Ln(5);
		$pdf->Cell(140,5,'',0,0);
		$pdf->Cell(50,10,':Signature',0,1,'C');
		$pdf->Cell(0,10,$d,0,1,'R');
		$pdf->Cell(0,10,$Cdate,0,0,'L');	   

		$headers = array('Content-Type' => 'application/pdf');
		$pdf->output();
    }
}

