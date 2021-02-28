
<html>
<head>
<title>Successful</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" type="text/css" href="style.css">


       
	   
</head>
 <div class="sidenav">
  <a href="LearnersLicenceForm.html">Apply Learner License</a>
  <a href="#DrivingLicense">Apply Driving License</a>
  <a href="#status">Application Status</a>
  <a href="#resources">Back</a>
</div>

<div class="main">
  <h2>Road Transport Service Application</h2>
  <div >
 
  <?php

if (isset($_POST['submit'])) {
	        $name = $_POST['name'];
			$aadharnumber = $_POST['aadharnumber'];
			$phone = $_POST['phone'];
        echo "welcome $name registretion is successful!!";
		"<br>";
		 echo "  aadharnumber is  $aadharnumber  ";
		 
		
}
echo "";
?>
  <h4> check your message for status...<?php echo"$phone"; ?> </h4>
  <a> From todays date <?php echo"".date("Y/m/d")."<br>"; ?> 
  
  <?php 
  $d=date("Y-m-d", strtotime("+1 week"));
	$dayofweek = date('w', strtotime($d));
	if($dayofweek == 'Sunday')
		$d = date("Y-m-d", strtotime("+1 day"));?>
  
  <?php 
  $sub=substr($name[1],1);
	$y=(int)$sub;
	$y=$y+1;
	$sub=(string)$y;
	$eid='RTO'.$phone; ?>
	
	<?php 
	function generate_password($length)
	{
		$chars =  'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'.
            '0123456789$_';
		$str = '';
		$max = strlen($chars) - 1;
		for ($i=0; $i < $length; $i++)
			$str .= $chars[random_int(0, $max)];
		return $str;
	}
	$pwd=generate_password(10);
	?>
  
</div>

<div class="col-md-10">
	<table border ="1" cellpadding="10" cellspacing="5" align="center">
<tr>
  <td align = "center" colspan="2" ><b>EXAM DETAILS</b></td>
</tr>

<tr>
  <td>Exam Date</td>
  <td><?php echo $d ?></td>
</tr>
<tr>
  <td>Exam Id  </td>
  <td><?php echo $eid ?></td>
</tr>
<tr>
<td>Exam password</td>
<td><?php echo $pwd ?></td>
</tr>
<tr>
<td>Exam Venue</td>
<td> <?php echo " pune " ?></td>
</tr>

<tr>
 <td colspan="2">
  <ul>
  <li>Do not share password and ID</li>
  <li>Please be at 10:00 am on given date and venue </li>
  <li>Bring Aadhar card,2 passport size photographs</br>DOB proof and Address Proof</li>
  </ul>
 </td>
</tr>
</table>

<p align="center"><a href="home.html"><h4 align="center">Exit</h4></a></p>

    <div class="clearfix"></div>
  </div>
</div>
</div>
	
  
  
		
   
</div>
   
</body>
</html>

	   



