<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
         <a href="{{url('/landing_page')}}"><h1>Blood Bank</h1></a>
    </nav>
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
                            @foreach($donorlist as $donorlist)
                            <tr class="tr">
                                   <td class="line">{{$donorlist->donor_name}}</td>
                                   <td class="line">{{$donorlist->donor_dob}}</td>
                                   <td class="line">{{$donorlist->bloodgroup}}</td>
                                   <td class="line">{{$donorlist->gender}}</td>
                                   <td class="line">{{$donorlist->mobile_no}}</td>
                                   <td class="line">{{$donorlist->district_id}}</td>
                                   <td class="line">
                                          <a href="{{asset('public/image/')}}/{{$donorlist['image']}}" >view img</a>
                                   </td>
                                 

                                  
                            </tr>
                            @endforeach
                     </tbody>
               </table>
         </div>
</body>
</html>