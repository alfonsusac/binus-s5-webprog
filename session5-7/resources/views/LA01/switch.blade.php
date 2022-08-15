@extends('LA01.layout')
@section('content')
    @php
    $nilai = 75;
    @endphp
    @switch($nilai)
    @case(0)
        <div class="alert alert-danger d-inline-block">Tidak ikut ujian (Nilai: <?php echo $nilai;?>)</div>
    @break
    @case(75)
        <div class="alert alert-success d-inline-block">Lumayan (Nilai: <?php echo $nilai;?>)</div>
    @break
    @case(100)
        <div class="alert alert-success d-inline-block">Sempurna (Nilai: <?php echo $nilai;?>)</div>
    @break
    @default
        <div class="alert alert-dark d-inline-block">Nilai tidak valid (Nilai: <?php echo $nilai;?>)</div>
    @endswitch
@endsection

