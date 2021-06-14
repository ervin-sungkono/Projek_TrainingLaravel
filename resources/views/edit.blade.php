<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Edit Character Data</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
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
        <div class="container">
            <h1>Edit Character Data</h1>
            <form action="{{route('gameaccount.update',$gameaccount->id)}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                  <label class="form-label">Character Name</label>
                  <input name="game_name" class="form-control" value="{{$gameaccount->name}}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Character Role</label>
                    <select name="game_role" class="form-control" required>
                        <option disabled value=""> -- Select a Role -- </option>
                        <option value="Warrior" <?php if($gameaccount->role=="Warrior") echo 'selected="selected"'; ?>>Warrior</option>
                        <option value="Archer" <?php if($gameaccount->role=="Archer") echo 'selected="selected"'; ?>>Archer</option>
                        <option value="Mage" <?php if($gameaccount->role=="Mage") echo 'selected="selected"'; ?>>Mage</option>
                        <option value="Rogue" <?php if($gameaccount->role=="Rogue") echo 'selected="selected"'; ?>>Rogue</option>
                        <option value="Gunner" <?php if($gameaccount->role=="Gunner") echo 'selected="selected"'; ?>>Gunner</option>
                        <option value="Paladin" <?php if($gameaccount->role=="Paladin") echo 'selected="selected"'; ?>>Paladin</option>
                    </select>
                  </div>
                <div class="mb-3">
                  <label class="form-label">Character Level</label>
                  <input name="game_level" class="form-control" type="number" min="1" value="{{$gameaccount->level}}" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </body>
</html>