@extends('app')

@section('title')
Instructor Auth
@endsection

@section('imports')
    
<link
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"
        rel="stylesheet"
        id="bootstrap-css"
    />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
   

    <link rel="stylesheet" href="{{ asset('css/learners.css') }}">
@endsection

@section('content')
    
<div class="container">
    <div class="body">
      <div class="col-lg-12 well form-container">
        <h1 class="title">Learner's License</h1>
        <div class="row">
          <form method="post" action="instructions/" id="form">
            @csrf
            <div class="col-sm-12">
              <div class="row">
                <div class="form-group">
                  <label> Candidate's Aadhar Card Number</label>
                  <p class="error" id="aadhar_error"></p>
                  <input
                    type="text"
                    id="aadharnumber"
                    name="aadhar_no"
                    class="form-control"
                    required=""
                    onchange="checkAadhar(this.value)"
                  />
                </div>
              </div>
              <div class="row">
                <div class="form-group">
                  <label>Instructor Token</label>
                  <p class="error" id="token_error"></p>
                  <input
                    type="text"
                    id="token"
                    name="token"
                    class="form-control"
                  />
                
                </div>
              </div>

              <div class="row">
                <div class="form-group">
                  <label>Exam password</label>
                  <input
                    type="Password"
                    id="password"
                    name="password"
                    class="form-control"
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
    <script type="text/javascript" src="{{ asset('scripts/checkIfExists.js') }}"></script>

  </div>
@endsection
    