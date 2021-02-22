<!DOCTYPE html>
<html>
  <head>
    <title></title>

    <link
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"
      rel="stylesheet"
      id="bootstrap-css"
    />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
      .title {
        font-size: 3vw;
        margin: 4rem 0;
      }
      .form-group {
        width: 90%;
        margin: 0 auto;
        padding: 1rem;
      }
    </style>
<script type="text/javascript">
   $(document).ready(function(){

  var tmp = [];
  $(".chk").on("change", function() {
    tmp = [];
    $(".chk").each(function() {
        if($(this).prop("checked") == true)
        {
          tmp.push($(this).attr("id"));
        }
    });
    $("#hdncheckbox").val(JSON.stringify(tmp));
    $("#result").text($("#hdncheckbox").val());
    console.log($("#hdncheckbox").val())
  });
});
</script>
  </head>
  <body style="background-color: black;">
    <div class="container">
      <h1 style="text-align: center; color: white" class="title">Registration Form</h1>
      <div class="col-lg-12 well">
        <div class="row">
          <form method="post" action="upload.php" id="form">
            <div class="col-sm-12">
              <div class="row">
                <div class="form-group">
                  <label>Aadhar Number</label>
                  <input
                    type="text"
                    id="aadharnumber"
                    name="aadharnumber"
                    placeholder="Enter Aadhar Number Here.."
                    class="form-control"
                    required=""
                    pattern="[0-9]{12}"
                    oninput="checkAadhar(this.value)"
                  />
                </div>
              </div>
              <div class="row">
                <div class="form-group">
                  <label>Name</label>
                  <input
                    type="text"
                    id="name"
                    name="name"
                    placeholder="Enter Name Here.."
                    class="form-control"
                    required=""
                    pattern="^[a-zA-Z]+([\s][a-zA-Z]+)+$"
                  />
                </div>
              </div>
              <div class="row">
                <div class="form-group">
                  <label>Address</label>
                  <textarea
                    name="address"
                    id="address"
                    placeholder="Enter Address Here.."
                    rows="3"
                    class="form-control"
                    required=""
                  ></textarea>
                </div>
              </div>

              <div class="row">
                <div class="form-group">
                  <label>Dob</label>
                  <input
                    type="date"
                    name="dob"
                    id="dob"
                    placeholder="Enter date Here.."
                    rows="3"
                    class="form-control"
                    max="2006-12-31"
                    required=""
                  />
                </div>
              </div>

              <div class="row">
                <div class="form-group">
                  <label>Gender</label><br />
                  <input type="radio" id="female" name="gender" value="female" />&nbsp;
                  Female &nbsp; &nbsp;

                  <input type="radio" id="male" name="gender" value="male" />&nbsp;Male
                  &nbsp; &nbsp;

                  <input type="radio" id="other" name="gender" value="other" />&nbsp; Other
                </div>
              </div>

              <div class="row">
                <div class="form-group">
                  <label>Contact Number</label>
                  <input
                    type="text"
                    id="phone"
                    name="phone"
                    placeholder="Enter Phone Number Here.."
                    class="form-control"
                    pattern="[789][0-9]{9}"
                    required=""
                  />
                </div>
              </div>

              <div class="row">
                <div class="form-group">
                	<label>Vehicle Type</label><br />
                	<input type='hidden' id='hdncheckbox' />

                	<input type="checkbox" name="vehicle" value="LMV" class="chk" id="LMV">
                	<label for="lmv">LMV</label>&nbsp;&nbsp;&nbsp;&nbsp;
                	
                	<input type="checkbox" name="vehicle" value="MCWG" class="chk" id="MCWG">
                	<label for="MCWG">MCWG</label>&nbsp;&nbsp;&nbsp;&nbsp;
        
                	<input type="checkbox" name="vehicle" value="HMV" class="chk" id="HGMV">
                	<label for="HPGMV">HMV</label>&nbsp;&nbsp;&nbsp;&nbsp;

                	<input type="checkbox" name="vehicle" value="HPMV" class="chk" id="HPMV">
                	<label for="HPMV">HPMV/HTV</label>&nbsp;&nbsp;&nbsp;&nbsp;
                	
                	<input type="checkbox" name="vehicle" value="HGMV" class="chk" id="HPGMV">
                	<label for="HPGMV">HGMV</label>
                	<br>
                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                	<input type="checkbox" name="vehicle" value="MCWOG" class="chk" id="MCWOG">
                	<label for="MCWOG">MCWOG</label>

                	 <p id="result"></p> 
                </div>
              </div>

              <div class="row">
                <div class="form-group">
                  <label>Password</label>
                  <input
                    type="Password"
                    id="password"
                    name="password"
                    placeholder="Enter password Here.."
                    class="form-control"
                    minlength="8"
                    required
                  />
                </div>
              </div>

              <div class="row">
                <div class="form-group">
                  <label>Confirm Password</label>
                  <input
                    type="Password"
                    name="confirmpassword"
                    id="confirmpassword"
                    placeholder="Confirm password Here.."
                    class="form-control"
                    minlength="8"
                    required=""
                  />
                </div>
              </div>
              <div class="text-center">
                <input 
                	style="background-color: black ; 
                	color: white; width: 100px; 
                	height: 50px" 
                	type="submit"
                	name="submit"
                	value="Next" 
                />
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="aadhar_fetch.js"></script>

<!--
    <?php
    include('connect.php');
    extract($_REQUEST);
    if(isset($save))
    {
        $sql= mysqli_query($conn,"select * from citizens where aadharnumber='$aadhar_no'");
        
          $sql= "insert into citizens(name,aadharnumber,email,gender,address,dob,phone,password) values ('$first_name',$aadhar_no','$email','$gender','$street',$date_of_birth','$phone_number','$password')";
          if(mysqli_query($conn,$sql))
          {
            echo '<script>alert("Registered")</script>';  
            //header("location:abc.php");
          }

          else
          {
            echo '<script>alert("Not Registered")</script>'; 
           //header("location:abc.php");
          } 
        
    }

  ?>
-->
  </body>
</html>
