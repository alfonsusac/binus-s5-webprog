@extends('master')
@section('content')

<div style="margin:auto;display:flex;">
    <div class="pd10 leftbody">
        <div style="border-radius:10px;background-image:url({{Storage::url(Auth::user()->cover)}});background-size:cover;width:100px;height:100px;"></div>
    </div>
    <div class="pd10 rightbody">
        <div class="card">{{Auth::user()->name}}</div>
        <div class="card">{{Auth::user()->email}}</div>
        <a href="/changepassword"><div class="button">Change Password</div></a>
        <a href="/logout"><div class="button">Logout</div></a>

    </div>
</div>

@endsection




