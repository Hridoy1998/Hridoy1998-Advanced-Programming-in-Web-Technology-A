@extends('layouts.navbar')
@section('main_pages')

@foreach ($agent as $a )

<h3>Name : {{ $a->first_name ." ".$a->last_name}}</h3>
<h3>Username : {{ $a->username }}</h3>
<h3>ID : {{ $a->id }}</h3>
<h3>Date of Birth : {{ $a->dob }}</h3>
<h3>Email : {{ $a->email }}</h3>
<h3>Password : {{ $a->password }}</h3>

@endforeach

@endsection
