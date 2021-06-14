<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            font-family: 'Nunito', sans-serif;
        }
        h1{
            font-size: 96px !important;
            text-align: center;
        }
        h2{
            font-size: 44px !important;
            text-align: center;
        }
        h3{
            font-size: 28px;
            margin: 40px 0 !important;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Server Details</title>
</head>
<body>
    <h1>{{$server->name}}</h1>
    <h2>{{$server->region}}</h2>
    <div class="container">
        <h3>Game Accounts inside this server</h3>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Character Name</th>
                <th scope="col">Character Role</th>
                <th scope="col">Level</th>
                <th scope="col">Server</th>
            </tr>
            </thead>
            <tbody>
                @foreach($server->gameaccounts as $gameaccount)
                <tr>
                    <th scope="row">{{$gameaccount->id}}</th>
                    <td>{{$gameaccount->name}}</td>
                    <td>{{$gameaccount->role}}</td>
                    <td>{{$gameaccount->level}}</td>
                    <td>{{$gameaccount->server->name}} - {{$gameaccount->server->region}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>