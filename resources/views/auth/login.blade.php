<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('public/css/login.css')}}">

</head>
<body>
     <nav>
         <a href="{{url('/landing_page')}}"><h1>Blood Bank</h1></a>
    </nav>
	<div class="container">
		<h1>Blood Bank</h1>
        <form method="POST" action="{{ route('login') }}">
            {{csrf_field()}}
            <label>Email :</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required><br/>

            <label>Password :</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required><br/>

            <button type="submit" id="login">Login</button>
        </form>
	</div>

</body>
</html>

