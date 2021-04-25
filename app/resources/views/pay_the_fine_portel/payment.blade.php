<!DOCTYPE html>
 <html>
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

  <link rel="stylesheet" href="{{ asset('css/learners.css') }}"> 
  <link rel="stylesheet" href="{{ asset('css/style.css') }}"> 
  <link rel="stylesheet" href="{{ asset('css/menustyle.css') }}"> 
  <body>
 
 <div class="container">
  <div class="body">
    <div class="col-lg-12 well form-container">
      
<div class="section">
<h5> Card Details </h1>
		<br>
<form action="complete" method="get">
		<input type="text" name="ch" id="txt" placeholder="Card Holder" required>
		<br>
		<br>
		<input type="text" name="cn" id="txt" placeholder="Card Number" required>
		<br>
		<br>
		<input type="text" name="cvs" id="txt" placeholder="CVS" required>
		<br>
		<br>
		<select name="card" id="txt">
		<option value="">Select Your Card</option>
		<option value="">Master</option>
		<option value="">Visa</option>
		<option value="">Rupay</option>
</select>
<br>
<label>Card Expire On</label><br>
<select name="mm" id="sl">
		<option value="">Select Month</option>
		<?php
		for($i=1;$i<=12;$i++)
		{
          ?>
              <option value="<?php echo $i?>"><?php echo $i?></option>  
		<?php
		}
		?>
</select>
<select name="yy" id="sl">
		<option value="">Select Month</option>
		<?php
		$dy=date("Y");
		for($jk=$dy;$jk<=2050;$jk++)
		{
          ?>
              <option value="<?php echo $jk?>"><?php echo $jk?></option>  
		<?php
		}
		?>
</select>
		<br>
		<br>
		<input type="submit" name="btnpro" id="btn" value="Pay Now">
	</form>
	</br>
	<a href="cancel"><input type="submit"id="btn" value="Cancel"></a><br>
	<?php
	echo "Confirm Your Payment of Rs.","500"," By clicking The Button Pay Now<br>";
	?>
  </center>
  </div>

</body>
</html>