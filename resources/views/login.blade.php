@extends('layouts.app')

@section('title', 'Masuk')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6 col-lg-4">
        <div class="card kotak">
            <div class="card-body p-4">
                <h1 class="h4 text-center">Kos Zahirah</h1>
                <p class="text-center text-muted">Silakan masuk dulu</p>

                <form action="{{ route('login.cek') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn tombol w-100">Masuk</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection