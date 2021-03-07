<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
      rel="stylesheet" 
      id="bootstrap-css">

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link rel="stylesheet" href="{{ asset('css/login.css') }}">

</head>
<body>
<div class="sidenav">
         <div>
         	<a href="welcome.blade.php">Home</a>
         </div>
</div>

<div class="main">
   <div class="col-md-6 col-sm-12">
      <div class="login-form">
         <form>
            <div class="form-group">
               <label class="lable">Email</label>
               <input type="email" 
                      name="email" 
                      class="form-control" 
                      placeholder="Enter the email here"
                      required>
            </div>
            <div class="form-group">
               <label class="lable">Password</label>
               <input type="password" 
                      name="email" 
                      class="form-control" 
                      placeholder="Enter the password"
                      minlength="8"
                      required>
            </div>

            <a class="forgotpassword" href="mailto:abc@example.com?subject = Feedback&body = Message  forgotpassword.blade.php">Forgot password?</a>
            <br>
            <br>
            <button type="submit" 
                    class="btn btn-black">
                    Login
            </button>
         </form>
      </div>
   </div>
</div>

</body>
</html>
