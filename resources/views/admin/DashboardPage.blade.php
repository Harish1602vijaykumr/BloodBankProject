@extends('admin.admin_layout')
@section('content')
         <div class="content-space">
              <a href="{{url('blood_page')}}">
                     <h1>No of Pending Request : {{$PendingRequest}}</h1>
              </a>
              <a href="{{url('donor_page')}}">
                     <h1>No of Pending Donor  : {{$PendingDonor}}</h1>
              </a>
              <a href="{{url('donor_list_page')}}">
                     <h1>No of Total Donors : {{$TotalDonors}}</h1>
              </a>
             <a href="{{url('complete_page')}}">
                     <h1>No of Total Request :  {{$TotalRequest}}</h1>
             </a>
             <h1>No of This Month Donors : {{$ThisMonthDonor}}</h1>
             <h1>No of This Month Request : {{$ThisMonthRequest}}</h1>
         </div>
@endsection              
 