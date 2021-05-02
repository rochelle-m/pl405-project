@extends('app')

@section('title')
    Road Transport Services
@endsection

@section('content')

    <div class="home">
        
        <div class="sidenav">
            <a href="/">Logout</a>
            <dl>
                <dt>Learner's License</dt>
                <dd><a href="learners/register/">Apply</a></dd>
                <dd><a href="learners/renew">Renew</a></dd>
                <dd>
                    <a href="learners/test/instructions/">Take a mock learner's test</a>
                </dd>
            </dl>
        
            <dl>
                <dt>Driving License</dt>
                <a href="permanent_licence/permanent_license">Apply</a>
                <a href="/license/lost">Lost license</a>
            </dl>

            
    
            <a href="Vehicle_Registration/Apply">Vehicle Registration</a>

            <dl>
                <dt>Vehicle Insurance</dt>
                <dd><a href="Insurance/applyInsurance">Apply</a></dd>
                <!-- <dd><a href="">Renew</a></dd> -->
            </dl>
    
            <a href="#status">Application Status</a>
            <a href="#resources">Study Material</a>
            <hr>
            <a href="learners/test/auth">Learners's Test<small> (restricted) </small></a>
        </div>
    
        
            <header>
                <h2>{{$title ?? 'Road Transport Services'}}</h2>
                <span style="color: white; float: right; margin-top: -50px; padding: 6px;cursor: pointer">
                    Get notified
                </span>
            </header>

            <main>
                <img src="images/vehicle.jpg" alt="">
            </main>
            <footer>
                <h2>Developed by Department Of Computer Science & Technology, Goa University</h2>
            </footer>  
       
    </div>

@endsection