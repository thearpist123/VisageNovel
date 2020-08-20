
<!DOCTYPE html>
<html>
<head>
    <title>Gheeruh</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
            <!-- Styles -->
        <style>

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 25px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                flex:1;
            }
            .links {
                margin-bottom:3em;
                margin-top:3em;
                display:flex;
            }        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
</head>
<body>
  

@if (Route::has('login'))
<div class="top-right">
    @auth
        <a href="{{ url('/') }}">Home</a>
    @else
        <a href="{{ route('login') }}">Login</a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
        @endif
    @endauth
</div>
@endif
<div class="container">
    <div class="links">
        <a href="/tasks">Task list</a>
        <a href="/projects">Project list</a>
        <a href="/users">User list</a>
    </div>
    @yield('content')
</div>
   
</body>
</html>