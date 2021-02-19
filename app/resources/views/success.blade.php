
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

          echo "welcome $name registretion is successful!!";
      echo "  aadharnumber is  $aadharnumber  ";
  }
  echo "";
  ?>
    <h4> check your message for status... </h4>
    
  
      
    
  </div>
    
  </body>
</html>

	   



