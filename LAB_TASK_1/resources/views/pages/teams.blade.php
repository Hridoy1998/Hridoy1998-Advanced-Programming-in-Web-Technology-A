<h1>AIUB</h1>
@include('layouts.navbar')

<h2>Teams</h2>
<p>This is our teams page</p>

<h1>Welcome to your profile {{$name}}</h1>
<p>ID: {{$id}}</p>
<p>DOB: {{$dob}}</p>

<h2>Friends</h2>
@foreach($names as $n)
<li>{{$n}}</li>
@endforeach
