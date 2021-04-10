
<!DOCTYPE html>
 <html>
 
 <?php 
           $d=date("Y-m-d", strtotime("+1 week"));
         $dayofweek = date('w', strtotime($d));
        if($dayofweek == 'Sunday')
       $d = date("Y-m-d", strtotime("+1 day"));?>
   
   <?php
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
	echo $pwd;
	?>
	<?php 
	$str ="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'
            '0123456789";
	$str = str_shuffle($str);
	
     ?>	
 
 <link
  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"
  rel="stylesheet"
  id="bootstrap-css"
  />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link
  href="https://fonts.googleapis.com/css2?family=Oswald&display=swap"
  rel="stylesheet"
  />

  <link rel="stylesheet" href="{{ asset('css/permanent_license.css') }}"> 
  
  <body>
 <div class="sidenav">
         <div>
          <a href="welcome.blade.php">Home</a>
         </div>
</div>
<div class="container">
  <div class="body">
    <div class="col-lg-12 well form-container">
      <h1 class="title">Application For Vehicle Registretion </h1>
	  <h5 >Application is Under Process</h5>
	  <h5 > <?php echo "Application  " . date("Y/m/d") . "<br>";?> </h5>
      <h5> Inspection Date:- <?php echo $d ?> </h5>
	  <?php echo $pwd ?>
	  <div class="row">
	  
	</html>  
   