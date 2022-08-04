@extends('master')
@section('content')


<form action="/changepassword" method="post">
    @csrf
    @method('PUT')

    <label for="old_password">Old Password</label><br>
    <input type="password" name="old_password" id=""><br>
    @error('old_password') {{collect($errors->get('old_password'))[0]}}  <br> @enderror

    <br>

    <label for="new_password">New Password</label><br>
    <input type="password" name="new_password" id=""><br>
    @error('new_password') {{collect($errors->get('new_password'))[0]}}  <br> @enderror

    <br>

    <label for="new_password_confirm">Confirm Password</label><br>
    <input type="password" name="new_password_confirm" id=""><br>
    @error('new_password_confirm') {{collect($errors->get('new_password_confirm'))[0]}}  <br> @enderror

    <br>


    <button type="submit">Log-in</button>

    <br>
</form>
@endsection
