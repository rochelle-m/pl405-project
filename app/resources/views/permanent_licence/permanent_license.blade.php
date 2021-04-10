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

  <link rel="stylesheet" href="{{ asset('css/permanent_license.css') }}"> 
  
  <body>
 <div class="sidenav">
         <div>
          <a href="welcome.blade.php">Home</a>
         </div>
</div>
<div class="container">
  <div class="body">
    <div class="col-lg-12 well form-container">
      <h1 class="title">Application For Permanent License</h1>
      <div class="row">
        <form method="post" action="/exam_date" id="form">
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
                  placeholder="Enter your Aadhar card number"
                  class="form-control"
                  required=""
                  pattern="{12}"
                  onchange="checkValidation(this.value)"
                  oninput="checkAadhar(this.value)"
                />
              </div>
            </div>
             
             

            <div class="row">
              <div class="form-group">
                <label>Learner's License Number</label>
                <input
                  type="text"
                  id="text"
                  name="ll_no"
                  placeholder="Enter your Learner's License number"
                  class="form-control"
                  required=""
                />
              </div>
            </div>

             
             

            <div class="row">
              <div class="form-group">
                <label>Vehicle Type</label><br />
                <input type="hidden" id="hdncheckbox" name="type" />

                <span title="Light Motor Vehicle">
                  <input
                    type="checkbox"
                    name="vehicle"
                    value="LMV"
                    class="chk"
                    id="LMV"
                  />
                  <label for="LMV">LMV</label>
                </span>

                <span
                  style="
                    display: inline-block;
                    align-items: center;
                    justify-items: flex-start;
                  "
                >
                  <div title="Motocycle With Gear">
                    <input
                      type="checkbox"
                      name="vehicle"
                      value="MCWG"
                      class="chk"
                      id="MCWG"
                    />
                    <label for="MCWG">MCWG</label>
                  </div>

                  <div title="Motocycle Without Gear">
                    <input
                      type="checkbox"
                      name="vehicle"
                      value="MCWOG"
                      class="chk"
                      id="MCWOG"
                    />
                    <label for="MCWOG">MCWOG</label>
                  </div>
                </span>

                <span title="Heavy Motor Vehicle">
                  <input
                    type="checkbox"
                    name="vehicle"
                    value="HMV"
                    class="chk"
                    id="HGMV"
                  />
                  <label for="HMV">HMV</label>
                </span>

                <span title="Heavy Passenger Vehicle">
                  <input
                    type="checkbox"
                    name="vehicle"
                    value="HPMV"
                    class="chk"
                    id="HPMV"
                  />
                  <label for="HPMV">HPMV/HTV</label>
                </span>

                <span title="Heavy Goods Vehicle">
                  <input
                    type="checkbox"
                    name="vehicle"
                    value="HGMV"
                    class="chk"
                    id="HPGMV"
                  />
                  <label for="HPGMV">HGMV</label>
                </span>
                <br />

                
              </div>
            </div>

            <p class="form-group" id="warning"></p>

            

            <div class="text-center">
              <input
                type="submit"
                name="submit"
                value="Apply"
                id="applybtn"
              />
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="aadhar_helper.js"></script>
<script type="text/javascript" src="{{ asset('scripts/checkbox_validations.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/aadhar_helper.js') }}"></script>
</body>
</html>
 

