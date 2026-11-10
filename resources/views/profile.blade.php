@extends('layouts.app')

@section('title', 'Profil')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
        <div class="card kotak">
            <div class="card-body p-4">
                <h1 class="h4 mb-0">{{ $namaUser }}</h1>
                <p class="text-muted">Pengelola kos</p>

                <table class="table mb-0">
                    @foreach ($dataKos as $judul => $isi)
                        <tr>
                            <td>{{ $judul }}</td>
                            <td>{{ $isi }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection