<!DOCTYPE html>
<html>
    <head>
        <title>Road Transport Services</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">    
    </head>

    <body>
        <div class="sidenav">
            <a href="learners/register/">Apply Learner License</a>
            <a href="#DrivingLicense">Apply Driving License</a>
            <a href="#status">Application Status</a>
            <a href="#resources">Study Material</a>
        </div>

        <div class="main">
            <h2 style="text-align: center; padding-top: 30px">
                {{$title ?? ''}}
            </h2>
            <img
                src="images/vehicle.jpg"
                style="width: 80%; height: 450px; padding-left: 80px"
            />
        </div>
    </body>
</html>
