@extends('admin.admin_layout')
@section('content')
<div class="content-space">
                <h1>Donor Request</h1>
                <table class="table">
                     <thead>
                            <tr class="tr">
                                   <th class="line"> Name</th>
                                   <th class="line">Bloodgroup</th>
                                   <th class="line">District</th>
                                   <th class="line">Mobile</th>
                                   <th class="line">Address</th>
                                   
                                   
                            </tr>
                     </thead>
                     <tbody>
                            @foreach($bloodList as $bloodList)
                            <tr class="tr">
                                   <td class="line">{{$bloodList->name}}</td>
                                   <td class="line">{{$bloodList->bloodgroup}}</td>
                                   <td class="line">{{$bloodList->district_id}}</td>
                                   <td class="line">{{$bloodList->mobile_no}}</td>
                                   <td class="line">{{$bloodList->address}}</td>
                                  
                            </tr>
                            @endforeach
                     </tbody>
               </table>
         </div>
@endsection              
 