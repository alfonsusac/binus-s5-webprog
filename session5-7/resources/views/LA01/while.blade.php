@extends('LA01.layout')
@section('content')
        @php
            $occurence = 0;
            $times = 1;
        @endphp
        @while ( $occurence < 2 )
            <div class="alert alert-light">
                Digging for the <?php echo $times;?>th time!
            </div>
            @if ( $times % 2 )
                @php
                    $occurence = $occurence + 1
                @endphp
                <div class="alert alert-success">
                    Found <?php echo $occurence;?> gold!
                </div>
            @endif
            @php
                $times = $times + 1
            @endphp
        @endwhile
@endsection
