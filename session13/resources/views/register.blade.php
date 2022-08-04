@extends('master')
@section('content')

<form action="/register" method="post" enctype="multipart/form-data">
    @csrf

    <label for="nama">Nama</label><br>
    <input type="nama" name="nama" id=""><br>
    @error('nama') {{collect($errors->get('nama'))[0]}}  <br> @enderror

    <br>

    <label for="email">Email</label><br>
    <input type="text" name="email" id=""><br>
    @error('email') {{collect($errors->get('email'))[0]}}  <br> @enderror

    <br>

    <label for="password">Password</label><br>
    <input type="password" name="password" id=""><br>
    @error('password') {{collect($errors->get('password'))[0]}}  <br> @enderror

    <br>

    <label for="confirmpassword">Confirm Password</label><br>
    <input type="password" name="confirmpassword" id=""><br>
    @error('confirmpassword') {{collect($errors->get('confirmpassword'))[0]}}  <br> @enderror

    <br>

    <label for="cover">Profile Picture</label><br>
    <input type="file" name="cover" id=""><br>
    @error('cover') {{collect($errors->get('cover'))[0]}}  <br> @enderror

    <br>

    <button type="submit">Register</button>

    <br>
</form>
@endsection
