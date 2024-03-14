@extends('admin.admin_layout')
@section('content')
<div class="content-space">
                <h1>Blood Request</h1>
                <table class="table">
                     <thead>
                            <tr class="tr">
                                   <th class="line"> Name</th>
                                   <th class="line">Bloodgroup</th>
                                   <th class="line">District</th>
                                   <th class="line">Mobile</th>
                                   <th class="line">Address</th>
                                   <th class="line">Action</th>
                                   
                            </tr>
                     </thead>
                     <tbody>
                            @foreach($blood as $blood)
                            <tr class="tr">
                                   <td class="line">{{$blood->name}}</td>
                                   <td class="line">{{$blood->bloodgroup}}</td>
                                   <td class="line">{{$blood->district_id}}</td>
                                   <td class="line">{{$blood->mobile_no}}</td>
                                   <td class="line">{{$blood->address}}</td>
                                   <td class="line">
                                      <a href="{{url('edit_blood')}}/{{$blood->id}}"><i class="fa fa-pencil"></i></a>
                                   </td>
                            </tr>
                            @endforeach
                     </tbody>
               </table>
         </div>
@endsection              
 