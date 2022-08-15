@extends('LA01.layout')
@section('content')
        @for ( $i = 0; $i < 10; $i++ )
            <div class="alert alert-danger d-inline-block">
                There is <?php echo $i;?> manslaughter!
            </div>
        @endfor
@endsection
