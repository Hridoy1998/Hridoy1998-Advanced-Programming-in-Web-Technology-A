@extends('layouts.navbar')
@section('main_pages')
    <h2>Contact</h2>
    <p>This is our Contact page</p>
    <br>
    <table>
        <tr>
            <td><h2>||ID              ||</h2></td>
            <td><h2>||Name            ||</h2></td>
            <td><h2>||Username        ||</h2></td>
            <td><h2>||Date of Birth   ||</h2></td>
            <td><h2>||Email           ||</h2></td>
            <td><h2>||Password||</h2></td>
        </tr>
        @foreach ($agents as $s)
        <tr>
            <td>{{ $s->id ."   ||"}}</td>
            <td><a href="{{ route('Agent',['id'=>$s->id]) }}">{{ $s->first_name." ". $s->last_name." ||"}}</a></td>
            <td>{{ $s->username ." ||"}}</td>
            <td>{{ $s->dob ." ||"}}</td>
            <td>{{ $s->email ." ||"}}</td>
            <td>{{ $s->password }}</td>

        </tr>
        @endforeach
    </table>
@endsection

