@extends('layouts.navbar')
@section('main_pages')

    <h1>Welcome to your profile {{$name}}</h1>
    <p>ID: {{$id}}</p>
    <p>DOB: {{$dob}}</p>

    <h2>Friends</h2>

    @foreach($names as $n)
    <li>{{$n}}</li>
    @endforeach

    <h2>Products</h2>
    <p>This is My Profile page</p>

@endsection
