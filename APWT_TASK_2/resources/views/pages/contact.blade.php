@extends('layouts.navbar')
@section('main_pages')
    <h2>Contact</h2>
    <p>This is our Contact page</p>
    <br>
    <table>
        <tr>
            <td><h2>Agent Name ||</h2></td>
            <td><h2>Agent ID ||</h2></td>
            <td><h2>Agent Date of Birth</h2></td>
        </tr>
        @foreach ($agents as $s)
        <tr>
            <td><a href="{{ route('Agent',['name'=>$s->name,'id'=>$s->id,'dob'=>$s->dob])}}">{{  $s->name }}</a></td>
            <td>{{  $s->id }}</td>
            <td>{{ $s->dob }}</td>

        </tr>
        @endforeach
    </table>
@endsection

