@extends('admin.admin_layout')
@section('content')
         <div class="content-space">
                <h1>Donor Request</h1>
                <table class="table">
                     <thead>
                            <tr class="tr">
                                   <th class="line">Donor Name</th>
                                   <th class="line">Donor dob</th>
                                   <th class="line">Bloodgroup</th>
                                   <th class="line">Gender</th>
                                   <th class="line">Mobile</th>
                                   <th class="line">District id</th>
                                   <th class="line">Image</th>
                                   <th class="line">Edit</th>
                                   <th class="line">Action</th>
                                   
                            </tr>
                     </thead>
                     <tbody>
                            @foreach($donor as $donor)
                            <tr class="tr">
                                   <td class="line">{{$donor->donor_name}}</td>
                                   <td class="line">{{$donor->donor_dob}}</td>
                                   <td class="line">{{$donor->bloodgroup}}</td>
                                   <td class="line">{{$donor->gender}}</td>
                                   <td class="line">{{$donor->mobile_no}}</td>
                                   <td class="line">{{$donor->district_id}}</td>
                                   <td class="line">
                                          <a href="{{asset('public/image/')}}/{{$donor['image']}}" >view img</a>
                                   </td>
                                   <td class="line">
                                         <a href="{{url('edit_donor')}}/{{$donor->id}}"> <i class="fa fa-pencil"></i></a>
                                   </td>
                                   <td class="line">
                                         <a href="{{url('accept_donor')}}/{{$donor->id}}"> <i class="fa fa-check"></i></a>
                                   </td>

                                  
                            </tr>
                            @endforeach
                     </tbody>
               </table>
         </div>
@endsection              
 