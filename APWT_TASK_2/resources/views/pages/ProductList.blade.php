@extends('layouts.navbar')
@section('main_pages')
<br>
<table>
    <tr>
        <td><h2>Product Name||</h2></td>
        <td><h2>Product ID||</h2></td>
        <td><h2>Product Date</h2></td>
    </tr>
    @foreach ($agents as $s)
    <tr>
        <td><a href="{{ route('ProductList',['id'=>$s->id,'name'=>$s->name,'dob'=>$s->dob]) }}">{{  $s->name }}</a></td>
        <td>{{  $s->id }}</td>
       <td>{{ $s->dob }}</td>

    </tr>
    @endforeach
</table>

@endsection
