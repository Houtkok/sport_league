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
        <button type="button" class="btn btn-success"><a href="{{url('stadiums')}}">Back</a></button>
        <form action="{{ url('stadiums/'.$stadiums->stadium_id.'/update')}}" method="POST">
            @csrf
            @method('PUT')
            <label for="stadium_name">Name : </label>
            <input type="text" name="stadium_name" value="{{$stadiums->stadium_name}}" >
            <label for="capacity">Name : </label>
            <input type="text" name="capacity" value="{{$stadiums->capacity}}" >
            <label for="location">Name : </label>
            <input type="text" name="location" value="{{$stadiums->location}}" >
            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>