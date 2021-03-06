<!DOCTYPE html>
<html>
    <head>
        <title>Road Transport Services</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">    
    </head>

    <body>
        <div class="sidenav">
            <a href="learners/register/">Apply Learner's License</a>
            <a href="learners/renew">Renew Learner's License</a>
            <a href="#DrivingLicense">Apply Driving License</a>
            <a href="#status">Application Status</a>
            <a href="#resources">Study Material</a>
            <hr>
            <a href="learners/test">Learners's Test<small> (restricted) </small></a>
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
    </body>
</html>
