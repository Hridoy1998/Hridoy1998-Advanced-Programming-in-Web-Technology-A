@extends('layouts.navbar')
@section('main_pages')

    <form action="{{ route('regSubmit') }}" method="post">
        {{ @csrf_field() }}
        <br>
        <h2>Enter Your First Name :<input type="text" name="frist_name" value="{{ old('frist_name') }}" placeholder="First Name">
        @error('frist_name')
            <span>{{ $message }}</span>
        @enderror</h2>

        <h2>Enter Your Last Name :<input type="text" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name">
        @error('last_name')
            <span>{{ $message }}</span>
        @enderror</h2>

        <h2>Enter Your Date of Birth : <input type="date" name="dob" value="{{ old('dob') }}">
        @error('dob')
            <span>{{ $message }}</span>
        @enderror</h2>

        <h2>Enter Your Email :<input type="email" name="email" value="{{ old('email') }}"placeholder="Email">
        @error('email')
            <span>{{ $message }}</span>
        @enderror</h2>

        <h2>Enter Your Password :<input type="password" name="password" value="{{ old('password') }}"placeholder="Password">
        @error('password')
            <span>{{ $message }}</span>
        @enderror</h2>

        <br>
        <input type="submit" value="confirm"><br>
    </form>

@endsection
