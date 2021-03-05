<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
      rel="stylesheet" 
      id="bootstrap-css">

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link rel="stylesheet" 
      type="text/css" 
      href="login.css">

</head>
<body>
<div class="sidenav">
         <div>
         	<a href="home.php">Home</a>
         </div>
</div>

<div class="main">
   <div class="col-md-6 col-sm-12">
      <div class="login-form">
         <form>
            <div class="form-group">
               <label class="lable">Email</label>
               <input type="text" 
                      class="form-control" 
                      placeholder="Enter the email here">
            </div>
            <div class="form-group">
               <label class="lable">Password</label>
               <input type="password" 
                      class="form-control" 
                      placeholder="Enter the password">
            </div>

            <a class="forgotpassword" href="">Forgot password?</a>
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
