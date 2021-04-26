<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">  
 <style>
	div, td {
		color: black;
	}
</style>

</head>
<body>

        <div align="center" font-style="bold">
        <p>Successfully Applied for Permanent License Test!!</p> </div>

<div>
		 <?php 
           $d=date("Y-m-d", strtotime("+4 week"));
         $dayofweek = date('w', strtotime($d));
     if($dayofweek == 'Sunday')
       $d = date("Y-m-d", strtotime("+1 day"));?>
		  <table border ="1" cellpadding="30" cellspacing="10" align="center">
		<tr>
		  <td align = "center" colspan="2" ><b>EXAM DETAILS</b></td>
		</tr>   
			<tr>
		  <td>Exam Date : </td>
		  <td><?php echo $d ?></td>
		</tr>
		<tr>
		<td>Exam Time : </td>
		  <td>10 Am</td>
		</tr>

		</div>  

</body>
</html>