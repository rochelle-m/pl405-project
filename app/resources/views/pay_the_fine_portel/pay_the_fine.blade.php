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
      <h1 class="title">Pay Fine Portal</h1>
      <div class="row">
        <form method="get" action="dashboard" id="form">
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
                    placeholder="Enter your 12 digit Aadhar Card (UIDAI) number here"
                    class="form-control"
                    required=""
                    pattern="{12}"
                    onchange="checkValidation(this.value)"
                    oninput="checkAadhar(this.value)"
                  />
                </div>
              </div>
			  
			   <div class="col-sm-12">
              <div class="row">
                <div class="form-group">
                  <label>Challan Number</label>
                  <p class="error" id="aadhar_error"></p>
                  <input
                    type="text"
                    id="Challanid"
                    name="Challanid"
                    placeholder="Enter your Challan number here '4037 0600 2450'"
                    class="form-control"
                    required=""
                    pattern="{12}"
                    
                   
                  />
                </div>
              </div>

              <div class="row">
                <div class="form-group">
                  <label>Vehicle Type</label>
                  <select name="vehcile" id="vehicle">
                    <option value="LMV">LMV</option>
                    <option value="MCWG">MCWG</option>
                    <option value="MCWOG">MCWOG</option>
                    <option value="HMV">HMV</option>
                    <option value="HPMV">HPMV</option>
                    <option value="HGMV">HGMV</option>
                   </select>
                </div>
              </div>

              <div class="text-center">
              <input
                type="submit"
                name="pay"
                value="Ok"
                id="submitbtn"
              />
            </div>


              <!-- <div>
                <h1>{{$msg1 ?? ''}}</h1>
              </div>
 -->
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="{{ asset('scripts/checkbox_validations.js') }}"></script>\
<script type="text/javascript" src="{{ asset('scripts/aadhar_helper.js') }}"></script>
</body>
</html>
 

