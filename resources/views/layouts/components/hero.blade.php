<section class="wrapper-page" style="
        background-image:
        linear-gradient(rgba(0,0,0,0.9), rgba(0,0,0,0.5)),
        url('@yield('hero-background', asset('assets-front/images/hero_bg.jpg'))');
    ">
    <div class="page-banner">
        <div class="page-header">
            <div class="header-inner">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets-front/images/logo_caaip.png') }}" alt="Logo CAAIP">
                    </a>
                </div>
                <div class="nav-link">
                    <a href="{{ route('home') }}" @if(Route::currentRouteName() == 'home') class="active" @endif>Beranda</a>
                    <a href="{{ route('about') }}" @if(Route::currentRouteName() == 'about') class="active" @endif>Tentang</a>
                    <a href="{{ route('organisasi') }}" @if(Route::currentRouteName() == 'organisasi') class="active" @endif>Organisasi</a>
                    <a href="{{ route('e-katalog') }}" @if(Route::currentRouteName() == 'e-katalog') class="active" @endif>E-Catalog</a>
                    <a href="{{ route('berita') }}" @if(Route::currentRouteName() == 'berita') class="active" @endif>Berita</a>
                </div>
                <div class="buttons">
                    <a href="{{ route('join-us') }}" class="btn-white">Jadi Anggota</a>
                    <a href="{{ route('anggota.login') }}" class="btn-yellow">Login</a>
                </div>
            </div>
        </div>
        <div class="page-title" data-aos="fade-up">
            <h1>@yield('page-title')</h1>
            <h2>@yield('page-subtitle')</h2>
            <p>@yield('page-description')</p>
            @if (trim($__env->yieldContent('hero-buttons')) == 'show')
                <div class="buttons">
                    <a href="{{ route('about') }}" class="btn-white">Tentang Kami</a>
                    <a href="{{ route('contact') }}" class="btn-yellow">Kontak Kami</a>
                </div>
            @endif
        </div>
    </div>
</section>