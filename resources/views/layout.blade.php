<!doctype html>
<html >
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        
        <ul>
            <li><a href="{{url("/my")}}">Home</a></li>
            <li><a href="contact">Contact</a></li>
            <li><a href="about">About us</a></li>
        </ul>
        @yield('content')
    </body>
</html>
