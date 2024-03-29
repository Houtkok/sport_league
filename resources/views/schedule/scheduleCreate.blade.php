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
        <button type="button" class="btn btn-success"><a href="{{url('schedules')}}">Back</a></button>
        <form action="{{ url('/schedules/create')}}" method="POST">
            @csrf
            <label for="match_time">Math Time : </label>
            <input type="date" name="match_time" value="{{old('name')}}" >
            <label for="match_name">Math Name : </label>
            <input type="text" name="match_name" value="{{old('name')}}" >
            <label for="stadium_id">Stadium : </label>
            <select name="stadium_id" id="stadium_id" required>
                <option value="">Select Stadium</option>
                    @foreach($stadiums as $stadium)
                        <option value="{{$stadium->stadium_id}}">{{$stadium->stadium_name}}</option>
                    @endforeach
            </select>
            <label for="team_A">Team A : </label>
            <select name="team_A" id="team_A" required>
                <option value="">Select Team</option>
                    @foreach($teams as $team)
                        <option value="{{$team->team_id}}">{{$team->team_name}}</option>
                    @endforeach
            </select>

            <label for="team_B">Team B : </label>
            <select name="team_B" id="team_B" required>
                <option value="">Select Team</option>
                    @foreach($teams as $team)
                        <option value="{{$team->team_id}}">{{$team->team_name}}</option>
                    @endforeach
            </select>
            
            <button type="submit">Save</button>
        </form>
    </div>
</body>
</html>