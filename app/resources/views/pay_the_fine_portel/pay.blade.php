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
      <h1 class="title">Pay Fine Portal</h1>


<div id="tabs">
			<ul>
			    <li><a href="dashboard"><span>Details</span></a></li>
			      <li><a href="pay"><span>Pay</span></a></li>
			    <li><a href="/"><span>Logout</span></a></li>
			</ul>
		</div>
		
<div class="bd">
<center>
<form action="process" method="get">
<input type="submit" name="btn_update" value="Pay Now" id="btn"/>
</form>
</div></div>
<center>
</div>


<script type="text/javascript" src="{{ asset('scripts/checkbox_validations.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/aadhar_helper.js') }}"></script>
</body>
</html>