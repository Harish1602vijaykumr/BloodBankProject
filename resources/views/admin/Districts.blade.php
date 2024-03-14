@extends('admin.admin_layout')
@section('content')
         <div class="content-space">
              <h2>District Lists</h2>
              <a href="{{url('/create_district_page')}}"><button class="create-district">Create District</button></a>
               <table class="table">
                     <thead>
                            <tr class="tr">
                                   <th class="line">District Name</th>
                                   <th class="line">District Code</th>
                                   <th class="line">Status</th>
                                   <th class="line">Action</th>
                            </tr>
                     </thead>
                     <tbody>
                            @foreach($district as $district)
                            <tr class="tr">
                                   <td class="line">{{$district->district_name}}</td>
                                   <td class="line">{{$district->district_code}}</td>
                                   <td class="line">{{$district->status}}</td>
                                   <td class="line">{{$district->action}}</td>
                                  
                            </tr>
                            @endforeach
                     </tbody>
               </table>
         </div>
@endsection              
         
       
    