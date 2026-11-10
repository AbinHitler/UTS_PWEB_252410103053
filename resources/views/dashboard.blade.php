@extends('layouts.app')

@section('content')

<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <p class="hero-welcome">
                    <i class="bi bi-hand-wave me-2"></i>Selamat datang, <strong>{{ $username }}</strong>!
                </p>
                <h1 class="hero-title">Find Your<br><span class="hero-highlight">Sports Gear.</span></h1>
                <p class="hero-desc">
                    SPORTIVA hadir untuk memenuhi kebutuhan perlengkapan olahraga kamu. Temukan produk pilihan berkualitas untuk mendukung aktivitas sehari-hari.
                </p>
                <a href="{{ route('pengelolaan', ['username' => $username]) }}" class="btn btn-primary-sportiva">
                    <i class="bi bi-grid me-2"></i>Lihat Semua Produk
                </a>
            </div>
            <div class="col-lg-5 text-center d-none d-lg-block">
                <div class="hero-icon-wrap">
                    <i class="bi bi-trophy-fill hero-icon"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-produk">
    <div class="container">
        <div class="section-header text-center mb-5">
            <span class="section-label">Produk Unggulan</span>
            <h2 class="section-title">Pilihan Terbaik untuk Kamu</h2>
            <p class="section-sub">Beberapa produk olahraga populer yang tersedia di SPORTIVA.</p>
        </div>

        <div class="row g-4 justify-content-center">
            @foreach($produkPilihan as $item)
            <div class="col-sm-6 col-lg-4">
                <div class="product-card">
                    <div class="product-img-wrap">
                        <img
                            src="{{ asset('images/products/' . $item['gambar']) }}"
                            alt="{{ $item['nama'] }}"
                            class="product-img"
                            onerror="this.src='{{ asset('images/products/placeholder.jpg') }}'; this.onerror=null;"
                        >
                        <span class="product-badge">{{ $item['kategori'] }}</span>
                    </div>
                    <div class="product-body">
                        <h5 class="product-name">{{ $item['nama'] }}</h5>
                        <p class="product-desc">{{ $item['deskripsi'] }}</p>
                        <p class="product-price">Rp {{ number_format($item['harga'], 0, ',', '.') }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-5">
            <a href="{{ route('pengelolaan', ['username' => $username]) }}" class="btn btn-outline-sportiva">
                <i class="bi bi-arrow-right me-2"></i>Lihat Semua Produk
            </a>
        </div>
    </div>
</section>

@endsection
