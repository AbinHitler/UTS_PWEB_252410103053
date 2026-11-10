@extends('layouts.app')

@section('content')
<div class="login-wrapper">
    <div class="login-card">

        <div class="login-header text-center mb-4">
            <div class="login-logo-icon mb-3">
                <i class="bi bi-lightning-charge-fill"></i>
            </div>
            <h1 class="login-brand">SPORTIVA</h1>
            <p class="login-tagline">Equip Yourself. Enjoy Every Sport.</p>
        </div>

        <p class="login-desc text-center mb-4">
            Selamat datang! Masukkan nama kamu untuk mulai menjelajahi katalog perlengkapan olahraga kami.
        </p>

        <form action="{{ route('login.proses') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="username" class="form-label fw-semibold">
                    <i class="bi bi-person-circle me-1"></i>Nama Pengunjung
                </label>
                <input
                    type="text"
                    id="username"
                    name="username"
                    class="form-control form-control-sportiva @error('username') is-invalid @enderror"
                    placeholder="Masukkan nama kamu..."
                    value="{{ old('username') }}"
                    maxlength="50"
                    autocomplete="off"
                >
                @error('username')
                    <div class="invalid-feedback">
                        <i class="bi bi-exclamation-circle me-1"></i>{{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary-sportiva w-100 mt-2">
                <i class="bi bi-arrow-right-circle me-2"></i>Masuk ke SPORTIVA
            </button>
        </form>

    </div>
</div>
@endsection
