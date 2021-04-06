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
  
  <body>
 
 <div class="container">
  <div class="body">
    <div class="col-lg-12 well form-container">
      <h1 class="title">Email</h1>
      <div class="row">
        <form method="get" action="/resetpassword" id="form">
          @csrf
          <div class="col-sm-12">
              <div class="row">
              <div class="form-group">
                <label>Email</label>
                <input
                  type="email"
                  id="email"
                  name="email"
                  placeholder="Enter your email address"
                  class="form-control"
                  required
                />
              </div>
            </div>
          
              <div class="text-center">
                <input
                  type="submit"
                  name="resetpassword"
                  value="Reset"
                  id="submitbtn"
                  onclick="resetpassword();"
                />
              </div>


          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>
 

