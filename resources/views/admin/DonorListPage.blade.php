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
                                   
                                   
                            </tr>
                     </thead>
                     <tbody>
                            @foreach($donorList as $donorList)
                            <tr class="tr">
                                   <td class="line">{{$donorList->donor_name}}</td>
                                   <td class="line">{{$donorList->donor_dob}}</td>
                                   <td class="line">{{$donorList->bloodgroup}}</td>
                                   <td class="line">{{$donorList->gender}}</td>
                                   <td class="line">{{$donorList->mobile_no}}</td>
                                   <td class="line">{{$donorList->district_id}}</td>
                                   <td class="line">
                                          <a href="{{asset('public/image/')}}/{{$donorList['image']}}" >view img</a>
                                   </td>
                                 

                                  
                            </tr>
                            @endforeach
                     </tbody>
               </table>
         </div>
@endsection              
 