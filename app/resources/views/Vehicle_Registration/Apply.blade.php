<!DOCTYPE html>
<html>
<body>
 
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
  
<!-- create the form -->
<!-- Add the data entry bits -->
<div class="container">
  <div class="body">
    <div class="col-lg-12 well form-container">
      <h1 class="title">Application For Vehicle Registretion</h1>
      <div class="row">
	  
        <br>
        <form  method="POST" id="form" >
         
          @csrf
          <div class="col-sm-12">
            <div class="row">
              <div class="form-group">
			 
			 
                <label>Aadhar Number</label>
                <p class="error" id="aadhar_error"></p>
                <input
                  type="text"
                  id="aadharnumber"
                  name="aadhar_no"
                  placeholder="Enter your Aadhar card number"
                  class="form-control"
                  required=""
                  pattern="{12}"
                  onchange="checkValidation(this.value)"
                  oninput="checkAadhar(this.value)"
                />
              </div>
            </div>
             
             

            <div class="row">
              <div class="form-group">
                <label>Name of Owner</label>
                <input
                  type="text"
                  id="fname"
                  name="fname"
                  placeholder="Full name"
                  class="form-control"
                  required=""
                />
              </div>
            </div>
			
			<div class="row">
              <div class="form-group">
                <label>Mobile Number</label>
                <input
                  type="text"
                  id="mob"
                  name="mob"
                  placeholder="Mobile Number"
				  pattern="[0-9]{10}"
                  class="form-control"
                  required=""
                />
              </div>
            </div>
			
			<div class="row">
              <div class="form-group">
                <label>Email</label>
                <input
                  type="email"
                  id="email"
                  name="email"
                  placeholder="email@email.com"
                  class="form-control"
                  required=""
                />
              </div>
            </div>
			
			
			
			<label> -----------------------Vehicle Information-------------------- </label>
			
			<div class="row">
              <div class="form-group">
                <label>Chassis Number / VIN number Please enter the full 17 digits  </label>
                <input
                  type="text"
                
                  name="Chassis"
                  placeholder="Only numbers are Acceptable"
				  pattern="[0-9]{17}"
                  class="form-control"
                  required=""
				  size="17"
				  maxlength="17"
                />
              </div>
            </div>
             
			 <div class="row">
              <div class="form-group">
                <label> Engine Number </label>
                <input
                  type="text"
                  id="Engine_Number"
                  name="Engine Number"
				  placeholder="Example of it :- EGHP00000MK9"
                  pattern="[A-Za-z0-9]{12}"
                  class="form-control"
                  required=""
				  size="12"
				  maxlength="12"
                />
              </div>
            </div>
			
			<div class="row">
              <div class="form-group">
                <label>  Model</label>
                <input
                  type="text"
                  id="Model"
                  name="Model"
                  placeholder="Model"
				
                  class="form-control"
                  required=""
                />
              </div>
            </div>
			
			<div class="row">
              <div class="form-group">
                <label>  Company Name </label>
                <input
                  type="text"
                  id="Company"
                  name="Company"
                  placeholder="Company"
                  class="form-control"
				  
                  required=""
                />
              </div>
            </div>
			
			<div class="row">
              <div class="form-group">
                <label>  Color </label>
                <input
                  type="text"
                  id="Color"
                  name="Color"
				 
                  placeholder="Color"
                  class="form-control"
                  required=""
                />
              </div>
            </div>
             
			 <div class="row">
              <div class="form-group">
                <label> Fuel type  </label>
                <br>
				
				<input type="radio" id="Petrol" name="Fuel_type" value="Petrol">
				<label for="Petrol">Petrol</label><br>
				<input type="radio" id="CNG" name="Fuel_type" value="CNG">
				<label for="CNG">CNG</label><br>
				<input type="radio" id="Diesel" name="Fuel_type" value="Diesel">
				<label for="Diesel">Diesel</label><br>
              </div>
            </div>
             
			<label> --------------------Dealer Information--------------------------------- </label>
           
			<div class="row">
              <div class="form-group">
                <label>  Dealer Name </label>
                <input
                  type="text"
                  id="Dealer_Name"
                  name="Dealer_Name"
                  placeholder="Dealer Name"
				 
                  class=""
                  required=""
                />
              </div>
            </div>
		   
		   			<div class="row">
              <div class="form-group">
                <label>  Dealer City  </label>
                <input
                  type="text"
                  id="Name"
                  name="Dealer_City"
                  
                  class="form-control"
                  required=""
                />
              </div>
            </div>
			
			
			
			
			

            <p class="form-group" id="warning"></p>
          <div class="text-center">
  <INPUT type="submit" value="Apply" name="Apply"  formaction={{url('/Vehicle_Registration/Apply/status')}}>
<INPUT type="submit" value="PDF" name="PDF"  formaction={{url('/Vehicle_Registration/Apply/pdf')}} >
            <!--div class="text-center">
              <input
                type="submit"
                name="submit"
                value="Apply"
                id="applybtn"
              />
            </div-->

            
          </div>
        
      </div>
    </div>
  </div>
</div>




<!-- close the form -->
</form>
<script language="Javascript">
<!--
function OnButton1()
{
    document.Form1.action = "Apply/status"
    document.Form1.target = "_blank";    // Open in a new window
    document.Form1.submit();             // Submit the page
    return true;
}

function OnButton2()
{
    document.Form1.action = "Apply/pdf"
    document.Form1.target = "_blank";    // Open in a new window
    document.Form1.submit();             // Submit the page
    return true;
}
-->
</script>
<noscript>You need Javascript enabled for this to work</noscript>


<script src="aadhar_helper.js"></script>
<script type="text/javascript" src="{{ asset('scripts/checkbox_validations.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/aadhar_helper.js') }}"></script>
</body>
</html>