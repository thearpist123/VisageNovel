
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
            }
        </style>
</head>
<body>
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