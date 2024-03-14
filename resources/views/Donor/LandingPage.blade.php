<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/landing.css')}}">
    
</head>
<body>
    <div class="Landing_container">
        <h1>Blood Bank</h1>

        <a href="{{url('/register_page')}}">
            <button>Register as donor</button>
        </a><br>

        <a href="{{url('/request_page')}}">
            <button>Blood Request</button>
        </a><br>
        
        <a href="{{url('/login_page')}}">
            <button>Admin Login</button>
        </a><br>
        <a href="{{url('/donor_available_page')}}">
            <button>Track your Request</button>
        </a><br>
    </div>
</body>
</html>