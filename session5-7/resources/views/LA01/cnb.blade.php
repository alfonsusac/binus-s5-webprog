@extends('LA01.layout')
@section('content')
        <div class="alert alert-danger">
            Ten manslaughters play hide and seek!
        </div>
        @for ( $i = 0; $i < 10; $i++ )
            @if ( $i == 5 )
                @continue
            @endif
            @if ( $i == 8 )
                @break
            @endif
            <div class="alert alert-warning d-inline-block">
                There is manslaughter number <?php echo $i+1;?>.
            </div>
        @endfor
        <div class="alert alert-danger">
            Where is the 6th and the rest of the manslaughter?
        </div>
@endsection
