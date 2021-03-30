@extends('app')

@section('title')
    Road Transport Services
@endsection

@section('imports')
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">  
@endsection

@section('content')
    <div class="sidenav">
        <a href="loginmodule/login/">Login</a>
        <dl>
            <dt>Learner's License</dt>
            <dd><a href="learners/register/">Apply</a></dd>
            <dd><a href="learners/renew">Renew</a></dd>
        </dl>
    
        <a href="permanent_licence/permanent_license">Apply Driving License</a>

		<a href="Vehicle_Registration/Apply">Vehicle Registration</a>
        <a href="learners/test/instructions/">Take a mock learner's test</a>
        {{-- <a href="permanent_license">Apply Driving License</a> --}}

        <a href="#status">Application Status</a>
        <a href="#resources">Study Material</a>
        <hr>
        <a href="learners/test/auth">Learners's Test<small> (restricted) </small></a>
    </div>

        <div class="header">
        <h2>
            {{$title ?? ''}}
        </h2>
        </div>

    <div class="main">
        <img
            src="images/vehicle.jpg"
            style="width: 80%; height: 450px; padding-left: 80px"
        />
    </div>
    <div class="footer">
        <h2>Developed by Department Of Computer Science & Technology, Goa University</h2>

    </div>
@endsection