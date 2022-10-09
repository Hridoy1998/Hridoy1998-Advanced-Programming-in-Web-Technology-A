<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>navber</title>
</head>
<body>
        <h1>AIUB</h1>
        <a class="btn btn-primary" href="{{route('home')}}">Home</a>||
        <a class="btn btn-primary" href="{{route('login')}}">Log In</a>||
        <a class="btn btn-primary" href="{{route('reg')}}">Registration</a>||
        <a class="btn btn-primary" href="{{route('product')}}">My Profile</a>||
        <a class="btn btn-primary" href="{{route('teams')}}">Our teams</a>||
        <a class="btn btn-primary" href="{{route('about')}}">About us</a>||
        <a class="btn btn-primary" href="{{route('contact')}}">Contact us</a>||
        <a class="btn btn-primary" href="{{route('Pro_list')}}">Product List</a>

    @yield('main_pages')
    <br><br>

    <div>Copy Rigt @copy AIUB 2022</div>


</body>
</html>
