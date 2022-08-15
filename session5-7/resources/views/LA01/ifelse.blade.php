@extends('LA01.layout')
@section('content')
        @php
          $nilai = 45;
        @endphp
        @if (($nilai >= 0) and ($nilai < 50))
            <div class="alert alert-danger d-inline-block">
            Sorry, you didn't pass (Nilai: <?php echo $nilai;?>)
            </div>
        @else
            <div class="alert alert-success d-inline-block">
                I don't know if you passed or not (Nilai: <?php echo $nilai;?>)
            </div>
        @endif
        @php
        $nilai = 65;
        @endphp
        @if (($nilai >= 0) and ($nilai < 50))
            <div class="alert alert-danger d-inline-block">
            Sorry, you didn't pass (Nilai: <?php echo $nilai;?>)
            </div>
        @else
            <div class="alert alert-success d-inline-block">
                I don't know if you passed or not (Nilai: <?php echo $nilai;?>)
            </div>
        @endif
@endsection
