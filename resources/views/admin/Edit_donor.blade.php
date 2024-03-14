@extends('admin.admin_layout')
@section('content')
    <div class="content-space">
            <div class="inner-container">
                <h2 class="h2_heading" >Edit</h2>
                  <form action="{{url('/store_donor_edit')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                        <label for="name">Name:</label>

                        <input type="hidden" name="id" value="{{$donor->id}}">
                        <input type="text" id="name" name="donor_name" class="edit_input" value="{{$donor->donor_name}}" required>

                        <label for="dob">Date of Birth:</label>
                        <input type="date" id="dob" name="donor_dob" class="edit_input" value="{{$donor->donor_dob}}" required>

                        <label for="blood_group">Blood Group:</label>
                        <select id="blood_group" name="bloodgroup"  class="select_drop"  required>
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
                        <input type="text" id="mobile" name="mobile_no"class="edit_input" pattern="[0-9]{10}" value="{{$donor->mobile_no}}" required>


                        <label class="gender_lable">Gender:</label>
                        <label for="male" class="gender_lable"><input type="radio" class="gender_input" id="male" name="gender" value="male" required> Male</label>
                        <label for="female" class="gender_lable"><input type="radio" class="gender_input" id="female" name="gender" value="female" required> Female</label>
                        <label for="other" class="gender_lable"><input type="radio" class="gender_input" id="other" name="gender" value="other" required> Other</label><br>

                        <label for="address">Address:</label>
                        <textarea id="address" name="address" class="textarea" required>{{$donor->address}}</textarea>

                        <label for="district">District:</label>
                        <select name="district_id" class="select_drop" id="district">
                            <option value="">select districts</option>
                            @foreach($district as $district)
                            <option value="{{$district->id}}">{{$district->district_name}}</option>
                            @endforeach
                        </select>

                    

                        <label for="image">Image:</label>
                        <input type="file" id="image"class="edit_input" name="image"  required>

                        @if (count($errors)>0)
                                <div class="text-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                        @endif
                       
            

                <button type="submit" class="edit_button">Submit Request</button>
            </form>
            </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            const bg = {{ Js::from($donor['bloodgroup']) }};
            $("#blood_group").val(bg);

            const district = {{ Js::from($donor['district_id']) }};
            console.log(district);
            $("#district").val(district);

            const gender = "<?php echo $donor->gender ?>";
            $('input[name="gender"][value="' + gender + '"]').prop('checked', true);
        });
    </script>
@endsection