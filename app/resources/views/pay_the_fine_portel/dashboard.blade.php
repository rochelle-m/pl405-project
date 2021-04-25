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

<table border="1" width="900" id="customers">
		<tr>
			<th>Challen No</th>
			<th>Name</th>
			<th>Address</th>
			<th>Phone</th>
			<th>Amount</th>
			<th>Date</th>
			<th>Resion</th>
			<th>Pending Payment</th>
		</tr>


 <tr>
    <td>403706002243</td>
    <td>ellon</td>
    <td>229 vithhal vadi </td>	
	 <td>90302230</td>
	 <td>500</td>  
	 <td>24/04/2021</td>  
	 <td>Not waring Mask</td>  
	 <td>Pending</td> 
  </tr>

  </table>
</div>
</div>


<script type="text/javascript" src="{{ asset('scripts/checkbox_validations.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/aadhar_helper.js') }}"></script>
</body>
</html>