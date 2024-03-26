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
                <th>Seat Type</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Match</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tickets as $ticket)
                <tr>
                    <td>{{ $ticket->ticket_id }}</td>
                    <td>{{ $ticket->seat_type }}</td>
                    <td>{{ $ticket->price }}</td>
                    <td>{{ $ticket->qty }}</td>
                    <td>{{ $ticket->match_id }}</td>
                    <td>
                        <a class="btn btn-info" href="#">View</a>
                        <a class="btn btn-primary" href="{{ route('tickets.update', ['ticket_id' => $ticket->ticket_id]) }}">Edit</a>
                        <a class="btn btn-danger" href="{{ route('tickets.destroy', ['ticket_id' => $ticket->ticket_id]) }}" 
                            onclick="event.preventDefault(); 
                                     if(confirm('Are you sure you want to delete this ticket?')) 
                                     { document.getElementById('delete-form-{{ $ticket->ticket_id }}').submit(); }">
                            Delete
                        </a>
                        <form id="delete-form-{{ $ticket->ticket_id }}" action="{{ route('tickets.destroy', ['ticket_id' => $ticket->ticket_id]) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <button type="button" class="btn btn-success"><a href="{{ url('/tickets/create')}}">Create</a></button>
    @if(session('status'))
        <div>{{session('status')}}</div>
    @endif
</body>
</html>
