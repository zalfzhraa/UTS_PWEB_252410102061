@extends('layouts.app')

@section('title', 'Data Kamar')

@section('content')
<h1 class="h3">Data Kamar</h1>
<p class="text-muted">Login sebagai {{ $namaUser }}</p>

<div class="card kotak">
    <div class="table-responsive">
        <table class="table table-hover mb-0">
            <thead>
                <tr>
                    <th>No Kamar</th>
                    <th>Lantai</th>
                    <th>Tipe</th>
                    <th>Penghuni</th>
                    <th>Harga</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($daftarKamar as $kamar)
                    <tr>
                        <td>{{ $kamar['nomor'] }}</td>
                        <td>{{ $kamar['lantai'] }}</td>
                        <td>{{ $kamar['tipe'] }}</td>
                        <td>{{ $kamar['penghuni'] ?? '-' }}</td>
                        <td>Rp {{ number_format($kamar['harga'], 0, ',', '.') }}</td>
                        <td>
                            @if ($kamar['status'] == 'Lunas')
                                <span class="badge bg-success">Lunas</span>
                            @elseif ($kamar['status'] == 'Belum Bayar')
                                <span class="badge bg-danger">Belum Bayar</span>
                            @else
                                <span class="badge bg-secondary">Kosong</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection