@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<h1 class="h3">Halo, {{ $namaUser }}</h1>
<p class="text-muted">Ini ringkasan data kos.</p>

<div class="row g-3">
    @foreach ($kartuInfo as $kartu)
        <div class="col-12 col-md-4">
            @include('partials.stat-card', ['kartu' => $kartu])
        </div>
    @endforeach
</div>

<a href="{{ route('kamar', ['username' => $namaUser]) }}" class="btn tombol mt-4">Lihat Data Kamar</a>
@endsection