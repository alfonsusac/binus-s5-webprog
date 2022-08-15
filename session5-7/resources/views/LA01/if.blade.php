@extends('LA01.layout')
@section('content')
        @php
          $nilai = 55;
        @endphp
        @if (($nilai >= 0) and ($nilai < 50))
           <div class="alert alert-danger d-inline-block">
              Sorry, you didn't pass (Nilai: <?php echo $nilai;?> Less than 50 more than or equal to zero)
           </div>
        @endif
        <div class="alert alert-info d-inline-block">
            If the score is more than 0 and less than 50, the red alert on top of me will appear
        </div>

@endsection
