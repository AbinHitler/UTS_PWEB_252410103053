@extends('layouts.app')

@section('content')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">

            <div class="profile-card text-center">

                <div class="profile-avatar mx-auto mb-4">
                    <i class="bi bi-person-fill"></i>
                </div>

                <h2 class="profile-name">{{ $username }}</h2>
                <span class="profile-role">Pengunjung</span>

                <hr class="profile-divider my-4">

                <div class="profile-detail text-start">

                    <div class="profile-item">
                        <div class="profile-item-icon">
                            <i class="bi bi-person-badge"></i>
                        </div>
                        <div>
                            <p class="profile-item-label">Nama Pengunjung</p>
                            <p class="profile-item-value">{{ $username }}</p>
                        </div>
                    </div>

                    <div class="profile-item">
                        <div class="profile-item-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <div>
                            <p class="profile-item-label">Jenis Pengguna</p>
                            <p class="profile-item-value">Pengunjung</p>
                        </div>
                    </div>

                    <div class="profile-item">
                        <div class="profile-item-icon">
                            <i class="bi bi-lightning-charge-fill"></i>
                        </div>
                        <div>
                            <p class="profile-item-label">Nama Aplikasi</p>
                            <p class="profile-item-value">SPORTIVA</p>
                        </div>
                    </div>

                    <div class="profile-item">
                        <div class="profile-item-icon">
                            <i class="bi bi-info-circle"></i>
                        </div>
                        <div>
                            <p class="profile-item-label">Tentang SPORTIVA</p>
                            <p class="profile-item-value">Website katalog toko perlengkapan olahraga. Equip Yourself. Enjoy Every Sport.</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>

@endsection
