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
        <form action="{{ url('nationals/'.$national->national_id.'/update')}}" method="POST">
            <button type="button" class="btn btn-success"><a href="{{url('national')}}">Edit</a></button>
            @csrf
            @method('PUT')
            <label for="national_name">Name : {{$national->national_name}}</label>
            <input type="text" name="national_name" value="{{$national->national_name}}" >
            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>