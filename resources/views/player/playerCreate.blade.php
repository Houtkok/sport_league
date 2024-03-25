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
    <button type="button" class="btn btn-success"><a href="{{url('players')}}">Back</a></button>
    <div>
        <form action="{{ url('/players/create')}}" method="POST">
            @csrf
            <label for="player_id">ID : </label>
            <input type="text" name="player_id" value="{{old('name')}}" >
            <label for="player_fname">First Name : </label>
            <input type="text" name="player_fname" value="{{old('name')}}" >
            <label for="player_lname">Last Name : </label>
            <input type="text" name="player_lname" value="{{old('name')}}" >
            <label for="dob">Date of birth : </label>
            <input type="date" name="dob" value="{{old('name')}}" >
            <label for="position">Position : </label>
            <input type="text" name="position" value="{{old('name')}}" >
            <label for="national_id">National : </label>
            <select name="national_id" id="national_id" required>
                <option value="">Select National</option>
                    @foreach ($nationals as $national)
                        <option value="{{$national->national_id}}">{{$national->national_name}}</option>
                    @endforeach
            </select>

            <button type="submit">Save</button>
        </form>
    </div>
</body>
</html>