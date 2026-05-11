@extends('layouts.app')

@section('title', 'Beranda')

@section('hero-section')
    <section class="wrapper-page">
        <div class="page-banner">
            <div class="page-header">
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
                        <a href="#" class="btn-white">Jadi Anggota</a>
                        <a href="#" class="btn-yellow">Login</a>
                    </div>
                </div>
            </div>
            <div class="page-title">
                <h1 data-aos="fade-up">MENGHUBUNGKAN ALUMNI</h1>
                <h2>Membangun Maritim Indonesia</h2>
                <p>Wadah resmi alumni STIP Jakarta untuk kolaborasi, karier, dan kontribusi nasional.</p>
                <div class="buttons">
                    <a href="#" class="btn-white">Tentang Kami</a>
                    <a href="#" class="btn-yellow">Kontak Kami</a>
                </div>
            </div>
        </div>
    </section>
    <section class="wrapper-white-1">
        <div class="about-section">
            <div class="left">
                <img src="{{ asset('assets-front/images/about_image.jpg') }}" alt="">
            </div>
            <div class="right">
                <h2>Tentang CAAIP</h2>
                <div>
                    <p>CAAIP (Corps Alumni Akademi Ilmu Pelayaran) merupakan organisasi resmi yang menaungi para alumni STIP
                        Jakarta sebagai wadah untuk mempererat tali silaturahmi, membangun jejaring profesional, serta
                        menciptakan sinergi lintas generasi dalam mendukung kemajuan industri maritim Indonesia. Lebih dari
                        sekadar organisasi alumni, CAAIP hadir sebagai ekosistem kolaboratif yang menghubungkan pengalaman,
                        kompetensi, dan semangat pengabdian para pelaut Indonesia.
                    </p>
                    <p>
                        Dengan latar belakang anggota yang tersebar
                        di berbagai sektor maritim, baik nasional maupun internasional, CAAIP memiliki peran strategis dalam
                        memperkuat posisi alumni sebagai sumber daya manusia unggul yang mampu bersaing di tingkat global.
                        Melalui berbagai program dan inisiatif, CAAIP berkomitmen untuk terus mendorong pertumbuhan karier,
                        kesejahteraan anggota, serta kontribusi nyata bagi pembangunan bangsa.
                    </p>
                </div>
                <a href="#" class="btn-yellow-text-black">Tentang Kami</a>
            </div>
        </div>
    </section>
    <section class="wrapper-blue-1">
        <div class="pilar-section">
            <div>
                <h2>3 PILAR UTAMA CAAIP</h2>
                <p>Sebagai fondasi utama dalam menjalankan peran dan kontribusinya, CAAIP berpegang pada tiga pilar
                    strategis
                    yang menjadi arah gerak organisasi dalam menciptakan dampak nyata bagi alumni, almamater, dan bangsa.
                </p>
            </div>
            <div class="cards">
                <div class="card-blue">
                    <img src="{{ asset('assets-front/images/icons/anchor-yellow.png') }}" alt=Anchor Icon">
                    <div>
                        <h3>Bakti Almamater</h3>
                        <p>Sebagai bentuk tanggung jawab terhadap institusi asal, CAAIP aktif berkontribusi dalam
                            pengembangan kualitas STIP Jakarta.</p>
                    </div>
                </div>
                <div class="card-white">
                    <img src="{{ asset('assets-front/images/icons/navy-red.png') }}" alt=Navy Icon">
                    <div>
                        <h3>Bakti Anggota</h3>
                        <p>Fokus pada peningkatan kesejahteraan dan solidaritas antar alumni, CAAIP berkomitmen untuk
                            menjadi rumah yang saling mendukung bagi setiap anggotanya.</p>
                    </div>

                </div>
                <div class="card-blue">
                    <img src="{{ asset('assets-front/images/icons/indonesia-yellow.png') }}" alt=Indonesia Icon">
                    <div>
                        <h3>Bakti Negeri</h3>
                        <p>CAAIP berkomitmen untuk memberikan kontribusi nyata dalam pembangunan sektor maritim Indonesia.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <div class="red-bottom-divider"></div>
@endsection