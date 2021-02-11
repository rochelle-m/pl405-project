
<!DOCTYPE html>
<html>
<head>
	<title></title>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="sample.css">


</head>
<body>

<div class="container">
    <h1 style="text-align: center;" class="well">Registration Form</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<form method="post" action="success.php">
					<div class="col-sm-12">
						<div class="row">
							<div class="form-group">
								<label>Aadhar Number</label>
								<input type="text" name="aadharnumber"  placeholder="Enter Adhar Number Here.." class="form-control" required="" pattern="[0-9]{12}">
							</div>
							
						</div>
						<div class="row">
							<div class="form-group">
								<label>Name</label>
								<input type="text" name="name" placeholder="Enter Name Here.." class="form-control" required="">
							</div>
							
						</div>	
						<div class="row">				
							<div class="form-group">
								<label>Address</label>
								<textarea name="address" placeholder="Enter Address Here.." rows="3" class="form-control" required=""></textarea>
							</div>	
						</div>

						<div class="row">
							<div class="form-group">
								<label>Dob</label>
								<input type="date" name="dob" placeholder="Enter date Here.." rows="3" class="form-control" min="31-12-2000" required="">
							</div>	
						</div>

						<div class="row">
							<div class="form-group">
								<label>Gender</label><br>
								<input type="radio" name="gender" value="female">&nbsp; Female &nbsp; &nbsp;
	  						
	  							<input type="radio" name="gender" value="male">&nbsp;Male &nbsp; &nbsp;
	  						
	  							<input type="radio" name="gender" value="other">&nbsp; Other
							</div>
						</div>

					<div class="row">
						<div class=" form-group">
							<label>Contact Number</label>
							<input type="text" name="phone" placeholder="Enter Phone Number Here.." class="form-control" pattern="[789][0-9]{9}" required="">
						</div>	
					</div>

					<div class="row">
						<div class=" form-group">
							
							<select name="cars" id="cars">
							    <option value="LMV">LMV</option>
							    <option value="MCWG">MCWG</option>
							    <option value="MCWOG">MCWOG</option>
							    <option value="HPMV">HPMV</option>
							    <option value="HPGMV">HPGMV</option>
							</select>
						</div>	
					</div>

					<div class="row">	
						<div class=" form-group">
							<label>Password</label>
							<input type="Password" name="password" placeholder="Enter password Here.." class="form-control" minlength="8" required>
						</div>
					</div>

					<div class="row">	
						<div class="form-group">
							<label>Confirm Password</label>
							<input type="Password" name="confirmpassword" placeholder="Confirm password Here.." class="form-control" minlength="8" required="">
						</div>
					</div>
					<input type="submit" name="submit"  value="Register" class="btn btn-lg btn-info">				
					</div>
				</form> 
				</div>
	</div>
	</div>
</body>
</html>