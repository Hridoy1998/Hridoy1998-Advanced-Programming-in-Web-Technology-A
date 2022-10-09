@extends('layouts.navbar')
@section('main_pages')

@foreach ($product as $a )

<h3>Product Name : {{ $a->name }}</h3>
<h3>Product ID : {{ $a->id }}</h3>
<h3>Product Date of Birth : {{ $a->dob }}</h3>

@endforeach

@endsection
