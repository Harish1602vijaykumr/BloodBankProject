<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <nav>
       <a href="{{url('/landing_page')}}"><h1>Blood Bank</h1></a>      
    </nav>
    <form action="{{url('check_status')}}" method="post">
        {{csrf_field()}}
        <div>
            <label for="">Code :</label>
            <input type="text" name="track_id"><br>

            <button  type="submit">Check</button>
        </div>
        @if(session()->has('error'))
        <div style="color:red">
            {{session()->get('error')}}
        </div>
        @endif
    </form>
</body>
</html>