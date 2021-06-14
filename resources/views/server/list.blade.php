<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Server List</title>
    <style>
        nav{
            z-index: 1;
            position: sticky !important;
            padding: 0 20px;
        }
        h1{
            text-align: center;
            padding: 30px 0;
        }
        h1,th,td{
            color: white;
        }
        body{
            background-color: #18191A !important;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
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
                    <a class="nav-link" href="{{route('server.home')}}">Server</a>
                </li>
                <li class="nav-item">      
                    <a class="nav-link active" href="{{route('server.list')}}">View Servers</a>
                </li>
             </ul>
    </nav>
    <div class="container">
        <h1>Server List</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Server Name</th>
                <th scope="col">Server Region</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach($servers as $server)
                <tr>
                    <th scope="row">{{$server->id}}</th>
                    <td>{{$server->name}}</td>
                    <td>{{$server->region}}</td>
                    <td style="display: flex;">
                        <a href="{{route('server.detail', $server->id)}}" class="btn btn-info" style="margin-right:20px;">Info</a>
                        <a href="{{route('server.edit', $server->id)}}" class="btn btn-success" style="margin-right:10px;">Edit</a>
                        <form action="{{route('server.delete', $server->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" style="margin-left: 10px;">Delete</a>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>