@extends('layout')
@section('body')
    <div class="heading-2">Book Detail</div><hr>
    <div class="book-detail"><b>Title: </b>{{$data[0]->title}}</div>
    <div class="book-detail"><b>Author: </b>{{$data[0]->detail->author}}</div>
    <div class="book-detail"><b>Publisher: </b>{{$data[0]->detail->publisher}}</div>
    <div class="book-detail"><b>Year: </b>{{$data[0]->detail->year}}</div>
    <div class="book-detail"><b>Description: </b></div>
    <div class="book-detail">{{$data[0]->detail->description}}</div>
@endsection
