<nav class="navbar navbar-expand-lg navbar-sportiva sticky-top">
    <div class="container">

        <a class="navbar-brand sportiva-brand" href="{{ route('dashboard', ['username' => request()->query('username')]) }}">
            <i class="bi bi-lightning-charge-fill me-1"></i>SPORTIVA
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarMenu"
                aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}"
                       href="{{ route('dashboard', ['username' => request()->query('username')]) }}">
                        <i class="bi bi-house-door me-1"></i>Dashboard
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('pengelolaan') ? 'active' : '' }}"
                       href="{{ route('pengelolaan', ['username' => request()->query('username')]) }}">
                        <i class="bi bi-grid me-1"></i>Daftar Produk
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('profile') ? 'active' : '' }}"
                       href="{{ route('profile', ['username' => request()->query('username')]) }}">
                        <i class="bi bi-person me-1"></i>Profile
                    </a>
                </li>

                <li class="nav-item ms-lg-2">
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-logout">
                            <i class="bi bi-box-arrow-right me-1"></i>Logout
                        </button>
                    </form>
                </li>

            </ul>
        </div>

    </div>
</nav>
