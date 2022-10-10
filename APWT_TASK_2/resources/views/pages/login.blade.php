 @extends('layouts.navbar')<br>
 @section('main_pages')

    <form action="{{ route('loginSubmit') }}" method="post">
        {{ @csrf_field() }}
        <h2>Username :<input type="text" name="uname" value="{{ old('uname') }}" placeholder="Username">
        @error('uname')
            <span>{{ $message }}</span></h2>
        @enderror
        <h2>Password :<input type="password" name="password" value="{{ old('password') }}" placeholder="Password">
        @error('password')
            <span>{{ $message }}</span></h2>
        @enderror
        <br>
        <input type="submit" value="Login"><br>
    </form>

 @endsection
