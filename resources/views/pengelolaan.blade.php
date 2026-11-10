@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="page-header mb-5 text-center">
        <span class="section-label">Katalog</span>
        <h2 class="section-title">Daftar Produk</h2>
        <p class="section-sub">Semua perlengkapan olahraga yang tersedia di SPORTIVA.</p>
    </div>

    <div class="row g-4">
        @foreach($produk as $item)
        <div class="col-sm-6 col-lg-4">
            <div class="product-card h-100">
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

</div>

@endsection
