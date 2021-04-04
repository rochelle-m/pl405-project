@extends('app')

@section('title')
    Road Transport Services
@endsection

@section('content')

    <div class="home">
        
        <div class="sidenav">
            <a href="loginmodule/login/">Login</a>
            <dl>
                <dt>Learner's License</dt>
                <dd><a href="learners/register/">Apply</a></dd>
                <!-- <dd><a href="learners/renew">Renew</a></dd> -->
                <dd>
                    <a href="learners/test/instructions/">Take a mock learner's test</a>
                </dd>
            </dl>
        
            <!-- <a href="permanent_licence/permanent_license">Apply Driving License</a> -->
    
            <!-- <a href="Vehicle_Registration/Apply">Vehicle Registration</a> -->
            {{-- <a href="permanent_license">Apply Driving License</a> --}}
    
            <!-- <a href="#status">Application Status</a> -->
            <a href="#resources">Study Material</a>
            <hr>
            <!-- <a href="learners/test/auth">Learners's Test<small> (restricted) </small></a> -->
        </div>
    
        
            <header>
                <h2>{{$title ?? ''}}</h2>
            </header>
            <main>
                <img src="images/vehicle.jpg" alt="">
            </main>
            <footer>
                <h2>Developed by Department Of Computer Science & Technology, Goa University</h2>
            </footer>  
       
    </div>

@endsection