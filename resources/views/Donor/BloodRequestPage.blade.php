<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Blood request</title>
	<link rel="stylesheet" type="text/css" href="{{asset('public/css/blood.css')}}">
</head>
<body>
             <nav>
                <a href="{{url('/landing_page')}}"><h1>Blood Bank</h1></a>
                
              </nav>
    <form action="{{url('store_blood_request')}}" method="post">
        {{csrf_field()}}          
	<div>
		<label for="blood_group">Blood Group:</label>
        <select id="blood_group" name="bloodgroup" required>
            <option value="">Select Blood Group</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select><br>

        <label for="district">District :</label>
        <select id="district" name="district_id" required>
        	<option value="">select your district</option>
            @foreach($district as $district)
            <option value="{{$district->id}}">{{$district->district_name}}</option>
            @endforeach
        </select><br>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="mobile">Mobile Number:</label>
        <input type="tel" id="mobile" name="mobile_no" pattern="[0-9]{10}" required><br>

        <label for="address">Address:</label>
        <textarea id="address" name="address" required></textarea><br>

        <button type="submit" id="button">Request</button>

        @if(session()->has('success'))
        <div class="trackid">
            {{session()->get('success')}}
            
        </div>
        @endif

	</div>
    </form>

</body>
</html>