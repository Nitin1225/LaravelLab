<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{$pageTitle}}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/validate.js')}}"></script>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="about">Nitin Kumar</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="@if($functionName=='home') active @endif"><a href="{{route('home')}}">Home</a></li>
                <li class="@if($functionName=='projects') active @endif"><a href="{{route('projects')}}">Projects</a></li>
                <li class="@if($functionName=='faq') active @endif"><a href="{{route('faq')}}">FAQ</a></li>
                <li class="@if($functionName=='about') active @endif"><a href="{{route('about')}}">About Me</a></li>
                <li class="@if($functionName=='register') active @endif"><a href="{{route('register')}}">Register</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        @yield('containerContent')
    </div>
</body>
</html>