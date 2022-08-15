@extends('LA01.layout')
@section('content')
    @php
        $foods = array(
            "1" => "borgar",
            "2" => "sosig",
            "3" => "baget",
            "4" => "krosong",
            "5" => "banaanen",
            "6" => "tomaaten",
        );
    @endphp
    @foreach ( $foods as $food )
        <div class="alert alert-info d-inline-block">
            I ate the <?php echo $food;?>!
        </div>
    @endforeach
@endsection
