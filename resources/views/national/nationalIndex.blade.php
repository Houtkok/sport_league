<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Admin</title>
    <style>
        div{
            border: 1px solid black;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        a{
            display: inline;
            text-decoration: none;
            color: white;
        }
        a:hover{
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
    @if(session('status'))
            <div>{{session('status')}}</div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nationals as $national)
                <tr>
                    <td>{{ $national->national_id }}</td>
                    <td>{{ $national->national_name }}</td>
                    <td>
                        <a class="btn btn-info" href="#">View</a>
                        <a class="btn btn-primary" href="{{ route('nationals.update', ['national_id' => $national->national_id]) }}">Edit</a>
                        <a class="btn btn-danger" href="{{ route('nationals.destroy', ['national_id' => $national->national_id]) }}" 
                            onclick="event.preventDefault(); 
                                     if(confirm('Are you sure you want to delete this national?')) 
                                     { document.getElementById('delete-form-{{ $national->national_id }}').submit(); }">
                            Delete
                        </a>
                        <form id="delete-form-{{ $national->national_id }}" action="{{ route('nationals.destroy', ['national_id' => $national->national_id]) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <button type="button" class="btn btn-success"><a href="{{ url('/nationals/create')}}">Create National</a></button>
    @if(session('status'))
        <div>{{session('status')}}</div>
    @endif
</body>
</html>
