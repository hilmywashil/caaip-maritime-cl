<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Maritime Indonesia</title>
    @include('layouts.components.link')
</head>

<body>

    <header class="header-sticky" id="headerSticky">
        <div class="header-inner">
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets-front/images/logo_caaip.png') }}" alt="Logo CAAIP">
                </a>
            </div>
            <div class="nav-link">
                <a href="{{ route('home') }}">Beranda</a>
                <a href="#">Organisasi</a>
                <a href="#">E-Catalog</a>
                <a href="#">Berita</a>
            </div>
            <div class="buttons">
                <a href="#" class="btn-transparent-border-black">Jadi Anggota</a>
                <a href="#" class="btn-yellow-border-black">Login</a>
            </div>
        </div>
    </header>

    @yield('hero-section')

    @yield('content')

    <div id="scrollTop">
        <svg width="50" height="50">
            <circle cx="25" cy="25" r="22"></circle>
        </svg>
        <i class="fa-solid fa-arrow-up"></i>
    </div>

    @include('layouts.components.script')
</body>

</html>