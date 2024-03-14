<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <div>
       
         <div>
            <nav>
                <h1>Blood Bank</h1>
            </nav>
         </div>
         
         <div class="sidenav">
            <a href="{{url('/home')}}">Dashboard</a>
            <a href="{{url('/districts_page')}}">Districts</a>
            <a href="{{url('/donor_page')}}">donor request</a>
            <a href="{{url('/donor_list_page')}}">Donor Listing</a>
            <a href="{{url('/blood_page')}}">Blood Request</a>
            <a href="{{url('/complete_page')}}">Complete B.request</a>
            <a href="{{url('/signout')}}">Logout</a>
         </div>
        @yield('content')
    </div>
</body>

</html>