@extends('layout')
@section('body')
    <div class="heading-2"> Book List</div><hr>
    @foreach ($data as $d)
        <a href="/book/{{$d->id}}">
            <div class="book-item" style="border-radius:20px;padding:20px;margin-bottom:10px">
                <div class="heading-3 book-title" style="padding:0px;">{{$d->id}}. {{$d->title}}</div>
                <div class="book-author" style="padding:0px;">{{$d->detail->author}}</div>
            </div>
        </a>
    @endforeach
    <div class="pagination" style="display:flex;flex-direction:row; justify-content:center; align-items:center; padding-top:20px">
        @if ( empty($data->previousPageUrl()) )
            <div class="navbar-item" style="padding:10px;display:flex;">Prev</div>
        @else
            <a href="{{ $data->previousPageUrl() }}"><div class="navbar-item" style="width:30px"><span class="material-icons-round">arrow_back</span>Prev</div></a>
        @endif
        <div style="padding:10px 10px 10px 20px;">Page: {{ $data->currentPage() }}</div>
        @if ( empty($data->nextPageUrl()) )
            <div class="navbar-item" style="padding:10px;display:flex;">Next</div>
        @else
            <a href="{{ $data->nextPageUrl() }}"><div class="navbar-item" style="width:30px">Next<span class="material-icons-round">arrow_forward</span></div></a>
        @endif
    </div>
@endsection
