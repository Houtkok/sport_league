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
                <th>Match Time</th>
                <th>Match Name</th>
                <th>Stadium</th>
                <th>Team One</th>
                <th>Team Two</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($schedules as $schedule)
                <tr>
                    <td>{{ $schedule->match_id }}</td>
                    <td>{{ $schedule->match_time }}</td>
                    <td>{{ $schedule->match_name }}</td>
                    <td>{{ $schedule->stadium_id}}</td>
                    <td>{{ $schedule->team_A}}</td>
                    <td>{{ $schedule->team_B}}</td>
                    <td>
                        <a class="btn btn-info" href="#">View</a>
                        <a class="btn btn-primary" href="{{ route('schedules.update', ['match_id' => $schedule->match_id]) }}">Edit</a>
                        <a class="btn btn-danger" href="{{ route('schedules.destroy', ['match_id' => $schedule->match_id]) }}" 
                            onclick="event.preventDefault(); 
                                     if(confirm('Are you sure you want to delete this coach?')) 
                                     { document.getElementById('delete-form-{{ $schedule->match_id }}').submit(); }">
                            Delete
                        </a>
                        <form id="delete-form-{{ $schedule->match_id }}" action="{{ route('schedules.destroy', ['match_id' => $schedule->match_id]) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <button type="button" class="btn btn-success"><a href="{{ url('/schedules/create')}}">Create Schedule</a></button>
    @if(session('status'))
        <div>{{session('status')}}</div>
    @endif
</body>
</html>
