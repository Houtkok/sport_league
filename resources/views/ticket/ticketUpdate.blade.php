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
    <button type="button" class="btn btn-success"><a href="{{url('tickets')}}">Back</a></button>
    <div>
        <form action="{{ url('tickets/'.$tickets->ticket_id.'/update')}}" method="POST">
            @csrf
            @method('PUT')
            <label for="seat_type">Seat Type : </label>
            <select name="seat_type" id="seat_type">
                <option value="Regular">Regular</option>
                <option value="Premium">Premium</option>
                <option value="VIP">VIP</option>
            </select>
            
            <label for="price">price : </label>
            <input type="number" name="price" value="{{$tickets->price}}" >

            <label for="qty">Quantity : </label>
            <input type="number" name="qty" value="{{$tickets->qty}}" >

            <label for="match_id">Player : </label>
            <select name="match_id" id="match_id" required>
                <option value="">Select Match</option>
                    @foreach($schedules as $match)
                        <option value="{{$match->match_id}}">{{$match->match_name}}</option>
                    @endforeach
            </select>
            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>