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
    @if(session('status'))
            <div>{{session('status')}}</div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last name</th>
                <th>Date Of birth</th>
                <th>Position</th>
                <th>National</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($players as $player)
                <tr>
                    <td>{{ $player->player_id }}</td>
                    <td>{{ $player->player_fname }}</td>
                    <td>{{ $player->player_lname }}</td>
                    <td>{{ $player->dob }}</td>
                    <td>{{ $player->position }}</td>
                    <td>{{ $player->national_id  }}</td>
                    <td>
                        <a class="btn btn-info" href="#">View</a>
                        <a class="btn btn-primary" href="{{ route('players.update', ['player_id' => $player->player_id]) }}">Edit</a>
                        <a class="btn btn-danger" href="{{ route('players.destroy', ['player_id' => $player->player_id]) }}" 
                            onclick="event.preventDefault(); 
                                     if(confirm('Are you sure you want to delete this player?')) 
                                     { document.getElementById('delete-form-{{ $player->player_id }}').submit(); }">
                            Delete
                        </a>
                        <form id="delete-form-{{ $player->player_id }}" action="{{ route('players.destroy', ['player_id' => $player->player_id]) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <button type="button" class="btn btn-success"><a href="{{ url('/players/create')}}">Create Player</a></button>
    @if(session('status'))
        <div>{{session('status')}}</div>
    @endif
</body>
</html>
