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
      <h1 class="title">Vehicle Registration</h1>
      <div class="row">
       
            <div class="row">
              <div class="form-group">
                
             
				<div class="container">
					<h3 class="tittle"></h3>
					<div class="student-grids">
						<div class="col-md-6 student-grid">
						
							<ul type="circle"><br><br>
								<li><a href = "Apply.blade.php"><h4>Apply for Registration</h4></a></li><br><br>
								<li><a href = "reg_status.php"><h4>Check Registration Status</h4></a></li><br><br>
							</ul>
						
						</div>
						<div class="">
							<img src="images/reg1.jpg" class="img-responsive">
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
		
                

                
              </div>
            </div>

            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="aadhar_helper.js"></script>
<script type="text/javascript" src="{{ asset('scripts/checkbox_validations.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/aadhar_helper.js') }}"></script>
</body>
</html>