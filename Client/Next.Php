<!DOCTYPE html>
<html>
<head>
<title>Road Transport Services</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="style.css">
 <style>
     body {
        font-family: "Lato", sans-serif;
    }

    .sidenav {
        height: 100%;
        width: 160px;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        padding-top: 20px;
    }

    .sidenav a {
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        font-size: 20px;
        color: #818181;
        display: block;
    }

    .sidenav a:hover {
        color: #f1f1f1;
    }
	
	.previous {
  background-color: #f1f1f1;
  color: black;
}

.next {
  background-color: #4CAF50;
  color: white;
}

    .main {
        margin-left: 160px; /* Same as the width of the sidenav */
        font-size: 28px; /* Increased text to enable scrolling */
        padding: 0px 10px;
    }

	.normal{
	 margin-left: 160px; /* Same as the width of the sidenav */
	 font-size: 17px;
	padding: 0px 10px;
	}
    @media screen and (max-height: 450px) {
        .sidenav {
            padding-top: 15px;
        }
        .sidenav a {
            font-size: 18px;
        }
    }
</style>
</head>

    <body>
        
        <div class="sidenav">
            <a href="http://localhost:8000/register">Apply Learner License</a>
			<a href="http://localhost:8000/LLRenew">Renew lerning license</a>
            <a href="#DrivingLicense">Apply Driving License</a>
            <a href="#status">Application Status</a>
            <a href="#resources">Study Material</a>
        </div>

        <div class="main">
            <h2>Road Transport Service Application</h2>
        
        </div>
		
		
		  <?php 
           $d=date("Y-m-d", strtotime("+1 week"));
	       $dayofweek = date('w', strtotime($d));
	   if($dayofweek == 'Sunday')
		   $d = date("Y-m-d", strtotime("+1 day"));?>
  
		
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

</div>	
<script>


  function checkForm(form)
  {
    ...
    if(!form.terms.checked) {
      alert("Please indicate that you accept the Terms and Conditions");
      form.terms.focus();
      return false;
    }
    return true;
  }

</script>

<div  class="normal">
I decleard that I am 18 years old .
<p>
I am Indian .
<p>
I am physially Fit for drive vehical.
<p>

<input type="text"  name="location"><br><br>
  <label for="location">location:-</label>
<p>
<?php echo "Today is " . date("Y/m/d") . "<br>";?>


<form ... onsubmit="return checkForm(this);">
...
<p><input type="checkbox" required name="terms"> I accept the <u>Terms and Conditions</u></p>
<p><input type="submit"></p>
</form>
</div>
	 <div class="main">

<div class="razorpay-embed-btn" data-url="https://pages.razorpay.com/pl_GDHySC8xb8V2TZ/view" data-text="Pay Now" data-color="#528FF0" data-size="large">
  <script>
    (function(){
      var d=document; var x=!d.getElementById('razorpay-embed-btn-js')
      if(x){ var s=d.createElement('script'); s.defer=!0;s.id='razorpay-embed-btn-js';
      s.src='https://cdn.razorpay.com/static/embed_btn/bundle.js';d.body.appendChild(s);} else{var rzp=window['__rzp__'];
      rzp && rzp.init && rzp.init()}})();
  </script>
</div>

</div>
    
    </body>

</html>