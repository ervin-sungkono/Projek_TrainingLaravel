<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Insert Server Data</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            nav{
                width: 100%;
                position: fixed !important;
                z-index: 1;
                padding: 0 20px;
            }
            body {
                font-family: 'Nunito', sans-serif;
                background-image: linear-gradient(rgb(0,0,0,0.4),rgb(0,0,0,0.4)),url(https://www.kibrispdr.org/data/wallpaper-hd-games-1.jpg);
                background-size: cover;
            }
            label,h1 {
                color: white;
            }
            h1{
                text-align: center;
            }
            .container{
                width: 100vw;
                height: 100vh;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }
            form{
                background-color: #18191A;
                padding: 30px 50px;
                border-radius: 3%;
            }
        </style>
        <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
    <body class="antialiased">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('gameaccount.home')}}">Character</a>
                </li>
                <li class="nav-item">      
                    <a class="nav-link" href="{{route('gameaccount.list')}}">View Characters</a>
                </li>
                <li class="nav-item">      
                    <a class="nav-link active" href="{{route('server.home')}}">Server</a>
                </li>
                <li class="nav-item">      
                    <a class="nav-link" href="{{route('server.list')}}">View Servers</a>
                </li>
             </ul>
        </nav>
        <div class="container">
            <h1>Insert Server Data</h1>
            <form action="{{route('server.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                  <label class="form-label">Server Name</label>
                  <input name="server_name" class="form-control" required value="">
                </div>
                <div class="mb-3">
                  <label class="form-label">Server Region</label>
                  <input name="server_region" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </body>
</html>