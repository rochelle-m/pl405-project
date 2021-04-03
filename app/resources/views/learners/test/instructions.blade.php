@extends('app')

@section('title')
  Learners License Test | Instructions
@endsection

@section('imports')
<link
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"
rel="stylesheet"
id="bootstrap-css"
/>
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
        <h1 class="title">Test Instructions</h1>
        <div class="row">
            <ul class="instructions">
             
                <li>
                    20 questions will be displayed one by one 
                </li>
                <li>
                   You will be provided with 4 options of which you must select one
                </li>
                <li>
                    Each question has a 30 second time limit, if no options is selected, the question is passed and you will be awarded 0 points for that question
                </li>
                <li>
                    Click on the yellow skip button if you wish to skip a question
                </li>
                <li>
                  Click on the yellow green button after you have selected your option and you are satisfied with your answer
              </li>
              <li>
                  After you finish the test, your percentage and result will be displayed
              </li>
              <p>
                  All the best {{$name ?? ''}}
              </p>
            </ul>
        </div>
        <div class="/learners/test">
          <form method="post" action="/learners/test">
          @csrf
          <input name="name" value="{{$fname ?? ''}} {{ $lname ?? ''}}" hidden></input>
          <input name="aadhar_no" value="{{$aadhar_no ?? ''}}" hidden></input>
          <input name="token" value="{{$token ?? ''}}" hidden></input>
          <input
            type="submit"
            name="submit"
            value="Proceed to Test"
            id="submitbtn"
          />
        </form>
          </div>
      </div>
    </div>
  </div>
@endsection