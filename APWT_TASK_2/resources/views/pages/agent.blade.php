@extends('layouts.navbar')
@section('main_pages')

@foreach ($agent as $a )

<h3>Agent Name : {{ $a->name }}</h3>
<h3>Agent ID : {{ $a->id }}</h3>
<h3>Agent Date of Birth : {{ $a->dob }}</h3>

@endforeach

@endsection
