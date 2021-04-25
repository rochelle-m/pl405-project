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
	  
	

<p>Online Payment Services Supported</p>
<div class="razorpay-embed-btn" data-url="https://pages.razorpay.com/pl_GhLnKjKE7L1S8C/view" data-text="Pay Now" data-color="#528FF0" data-size="large">
      <script>
      (function(){
      var d=document; var x=!d.getElementById('razorpay-embed-btn-js')
      if(x){ var s=d.createElement('script'); s.defer=!0;s.id='razorpay-embed-btn-js';
      s.src='https://cdn.razorpay.com/static/embed_btn/bundle.js';d.body.appendChild(s);} else{var rzp=window['__rzp__'];
      rzp && rzp.init && rzp.init()}})();
      </script>
    </div>
<hr>
<h4>Choose Your Payment Method</h4>
<form action="payment" method="get">
<select name="bank" id="txt">
<option value="">Select Your bank</option>
 <option value="">Select Your bank</option>
 <option value="">Select Your bank</option>
 <option value="">Select Your bank</option>
 <option value="">Select Your bank</option>
 <option value="">Select Your bank</option>
</select>
<input type="submit" name="ok" id="btn" value="Proceed">
</form>
<a href="cancel.php"><input type="submit"id="btn" value="Cancel"></a>
</div>
</body>
</html>