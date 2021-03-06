<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />  
        <link rel="shortcut icon" href="{{ asset('images/favicon.png')}}" type="image/png">
        <link
            href="https://fonts.googleapis.com/css2?family=Oswald&display=swap"
            rel="stylesheet"
        />
        @yield('imports')
    </head>
    <body>
        @yield('content')
    </body>
</html>
