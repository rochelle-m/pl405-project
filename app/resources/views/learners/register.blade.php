@extends('app')

@section('title')
  Learners License | Register
@endsection
      
@section('imports')
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
@endsection
       
@section('content')
<div class="container">
  <div class="body">
    <div class="col-lg-12 well form-container">
      <h1 class="title">Register</h1>
      <div class="row">
        <form method="post" action="upload/" id="form">
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
                <label>Name</label>
                <input
                  type="text"
                  id="name"
                  name="name"
                  placeholder="Enter your name"
                  class="form-control"
                  required=""
                  pattern="^[a-zA-Z]+([\s][a-zA-Z]+)+$"
                  readonly
                />
                <input type="hidden" 
                       name="first_name" 
                       id="first"
                       value="" 
               />
                <input type="hidden" 
                       name="middle_name" 
                       id="middle" 
                       value="" 
                />
                <input type="hidden"
                       name="last_name"  
                       id="last"
                       value="" 
                />
              </div>
            </div>

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

            <div class="row">
              <div class="form-group">
                <label>Contact Number</label>
                <input
                  type="text"
                  id="phone"
                  name="phone_number"
                  placeholder="Enter your phone number"
                  class="form-control"
                  pattern="[789][0-9]{9}"
                  required=""
                />
              </div>
            </div>

            <div class="row">
              <div class="form-group">
                <label>Address</label>
                <textarea
                  name="address"
                  id="address"
                  placeholder="Enter your address"
                  rows="3"
                  class="form-control"
                  required=""
                ></textarea>

                <input type="hidden" 
                       name="pincode" 
                       id="pin" 
                       value=""
                >
                <input type="hidden"
                name="street"  
                id="street"
                value="" 
                />
              </div>
            </div>

            <div class="row">
              <div class="form-group">
                <label>Date Of Birth</label>
                <p class="error" id="dob_error"></p>
                <input
                  type="date"
                  name="date_of_birth"
                  id="dob"
                  placeholder="Enter date Here.."
                  rows="3"
                  class="form-control"
                  max="2006-12-31"
                  required=""
                  readonly
                />
              </div>
            </div>

            <div class="row">
              <div class="form-group">
                <label>Gender</label><br />
                <input
                  type="radio"
                  id="female"
                  name="gender"
                  value="female"
                  onclick="javascript: return false;"
                />&nbsp; Female &nbsp; &nbsp;

                <input
                  type="radio"
                  id="male"
                  name="gender"
                  value="male"
                  onclick="javascript: return false;"
                />&nbsp;Male &nbsp; &nbsp;

                <input
                  type="radio"
                  id="other"
                  name="gender"
                  value="other"
                  onclick="javascript: return false;"
                />&nbsp; Other
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

                <!-- <p id="result"></p>  -->
              </div>
            </div>

            <p class="form-group" id="warning"></p>

            <div class="row">
              <div class="form-group">
                <label>Password</label>
                <input
                  type="Password"
                  id="password"
                  name="password"
                  placeholder="Enter password Here.."
                  class="form-control"
                  minlength="8"
                  required
                />
              </div>
            </div>

            <div class="text-center">
              <input
                type="submit"
                name="submit"
                value="Next"
                id="submitbtn"
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

@endsection

