<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Admin</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form{
            border: 1px solid black;
            border-radius: 5px;
            padding: 60px;
            margin: 40px;
        }
    </style>
</head>
<body>
    <button type="button" class="btn btn-success"><a href="{{url('coach')}}">Edit</a></button>
    <div>
        <form action="{{ url('coach/'.$coach->coach_id.'/update')}}" method="POST">
            @csrf
            @method('PUT')
            <label for="coach_name">Name : {{$coach->coach_name}}</label>
            <input type="text" name="coach_name" value="{{$coach->coach_name}}" >
            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>