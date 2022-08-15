@extends('layout')
@section('body')
    <div class="heading-2">{{$data[0]->category}}</div><hr>
    @if ($data[0]->book->isEmpty())
        Data is empty.
    @else
        @foreach ($data[0]->book as $d)
        <a href="/book/{{$d->id}}">
            <div class="book-item" style="border-radius:20px;padding:20px;margin-bottom:10px">
                <div class="heading-3 book-title" style="padding:0px;">{{$d->id}}. {{$d->title}}</div>
                <div class="book-author" style="padding:0px;">{{$d->detail->author}}</div>
            </div>
        </a>
        @endforeach
    @endif
@endsection


