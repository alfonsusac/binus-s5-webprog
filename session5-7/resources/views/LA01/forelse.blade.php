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
    $foods2 = array(
    );
    @endphp
    @forelse ( $foods as $food )
        <div class="alert alert-info d-inline-block">
            I ate the <?php echo $food;?>!
        </div>
    @empty
        <div class="alert alert-danger d-inline-block">
            I ate nothing!
        </div>
    @endforelse
    </br>
    @forelse ( $foods2 as $food )
        <div class="alert alert-info d-inline-block">
            I ate the <?php echo $food;?>!
        </div>
    @empty
        <div class="alert alert-danger d-inline-block">
            I ate nothing!
        </div>
    @endforelse
@endsection
