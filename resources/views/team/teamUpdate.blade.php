@include('manubar') 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Admin</title>
</head>
<body>
    <div>
        <button type="button" class="btn btn-success"><a href="{{url('teams')}}">Back</a></button>
        <form action="{{ url('teams/'.$teams->team_id.'/update')}}" method="POST">
            @csrf
            @method('PUT')
            <label for="team_name">Name : </label>
            <input type="text" name="team_name" value="{{$teams->team_name}}" >
    
            <label for="coach_id">Coach : </label>
            <select name="coach_id" id="coach_id" required>
                <option value="">Select Coach</option>
                    @foreach($coachs as $coach)
                        <option value="{{$coach->coach_id}}">{{$coach->coach_name}}</option>
                    @endforeach
            </select>
            <label for="player_id">Player : </label>
            <select name="player_id" id="player_id" required>
                <option value="">Select Player</option>
                    @foreach($players as $player)
                        <option value="{{$player->player_id}}">{{$player->player_fname}}{{$player->player_lname}}</option>
                    @endforeach
            </select>
            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>