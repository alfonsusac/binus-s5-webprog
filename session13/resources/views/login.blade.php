
@extends('master')
@section('content')
<form action="/login" method="post">
    @csrf
    <label for="email">Email</label><br>
    <input type="text" name="email" id=""><br>
    @error('email') {{collect($errors->get('email'))[0]}}  <br> @enderror

    <br>

    <label for="password">Password</label><br>
    <input type="password" name="password" id=""><br>
    @error('password') {{collect($errors->get('password'))[0]}}  <br> @enderror

    <br>

    <button type="submit">Log-in</button>

    <br>
</form>
@endsection




