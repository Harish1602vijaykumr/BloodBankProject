<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Doner Request</title>
	<link rel="stylesheet" type="text/css" href="{{asset('public/css/donor.css')}}">
</head>
<body>
       
            <nav>
                <a href="{{url('/landing_page')}}"><h1>Blood Bank</h1></a>
                
            </nav>
         <form action="{{url('store_donor_request')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
         <div class="page-container">
                <div>
                <h2>Blood Donation Request Form</h2>

                <label for="name">Name:</label>
                <input type="text" id="name" name="donor_name" value="{{old('donor_name')}}" required>

                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="donor_dob" value="{{old('donor_dob')}}" required>

                <label for="blood_group">Blood Group:</label>
                <select id="blood_group" name="bloodgroup"  required>
                    <option value="">Select Blood Group</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>

                <label for="mobile">Mobile Number:</label>
                <input type="text" id="mobile" name="mobile_no" pattern="[0-9]{10}" value="{{old('mobile_no')}}" required>


                <label>Gender:</label>
                <label for="male"><input type="radio" id="male" name="gender" value="male" required> Male</label>
                <label for="female"><input type="radio" id="female" name="gender" value="female" required> Female</label>
                <label for="other"><input type="radio" id="other" name="gender" value="other" required> Other</label>

                <label for="address">Address:</label>
                <textarea id="address" name="address" required>{{old('address')}}</textarea>

                <label for="district">District:</label>
                <select name="district_id">
                    <option value="">select districts</option>
                    @foreach($district as $district)
                    <option value="{{$district->id}}">{{$district->district_name}}</option>
                    @endforeach
                </select>

            

                <label for="image">Image:</label>
                <input type="file" id="image" name="image"  required>

                @if (count($errors)>0)
                           <div class="text-danger">
                              <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                              </ul>
                           </div>
                 @endif
                        
            

                <button type="submit">Submit Request</button>
            </div>
         </div>
         </form>
</body>
</html>