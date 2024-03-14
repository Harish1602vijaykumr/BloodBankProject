@extends('admin.admin_layout')
@section('content')
         <div class="content-space">
                <form action="{{url('district_store')}}" method="post">
                    {{csrf_field()}}
                    <h2>Add District</h2>

                    <label for="">District Name :</label>
                    <input type="text" name="district_name"><br>
                    
                    <label for="">District Code :</label>
                    <input type="text" name="district_code"><br>

                    <button type="submit">Add</button>
                    
                </form>
         </div>
@endsection              
 