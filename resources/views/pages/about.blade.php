@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('hero-background', asset('assets-front/images/hero_bg.jpg'))
@section('page-title', 'TENTANG CAAIP')
@section('page-subtitle', 'Corps Alumni Akademi Ilmu Pelayaran')
@section('page-description', 'Mengenal lebih dekat peran, visi, dan kontribusi CAAIP sebagai wadah resmi alumni STIP Jakarta.')
@section('hero-buttons', 'hide')

@section('content')
    @include('layouts.components.hero')
    <section class="wrapper-white-1">
        <div class="about-section" data-aos="fade-up">
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
            </div>
        </div>
    </section>
    <section class="wrapper-blue-1">
        <div class="visi-section" data-aos="fade-up">
            <div class="left">
                <img src="{{ asset('assets-front/images/foto_5.jpg') }}" alt="">
            </div>
            <div class="right">
                <h2>Visi & Misi</h2>
                <div>
                    <p>“Terwujudnya ikatan alumni yang solid, berintegritas, dan sejahtera, serta menjadi pilar utama
                        dalam kemajuan maritim Indonesia.”
                    </p>

                </div>
                <a href="#misi" class="btn-yellow">Misi CAAIP</a>
            </div>
        </div>
    </section>
    <div class="red-bottom-divider"></div>
    <section class="wrapper-white-1" id="misi">
        <div class="pilar-section-about" data-aos="fade-up">
            <div>
                <h2>Misi CAAIP - 3 Pilar Utama</h2>
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
    <section class="nilai-section">
        <div class="left">
            <h2 data-aos="fade-up">Nilai-Nilai Organisasi</h2>
            <p data-aos="fade-up">Dalam setiap langkahnya, CAAIP menjunjung tinggi nilai-nilai utama yang menjadi landasan
                organisasi, yaitu
                solidaritas, integritas, kolaborasi, dan kontribusi. Nilai-nilai ini menjadi pedoman dalam membangun
                hubungan antar anggota serta dalam menjalankan berbagai program yang berdampak bagi masyarakat luas. Untuk
                memperkuat arah pengembangan organisasi, CAAIP juga memiliki rencana strategis yang berfokus pada tiga aspek
                utama, yaitu penguatan karier alumni melalui jejaring profesional dan peluang kerja global, peningkatan
                kesejahteraan anggota melalui perlindungan sosial dan dukungan ekonomi, serta dukungan terhadap transformasi
                almamater menjadi institusi pendidikan maritim kelas dunia.</p>
        </div>
        <div class="right">
            <h2 data-aos="fade-up">Strategic Plan</h2>
            <p data-aos="fade-up">Lebih dari sekadar organisasi alumni, CAAIP berperan sebagai penghubung strategis antara
                alumni, dunia
                industri, dan institusi pendidikan. Peran ini memungkinkan terciptanya sinergi yang berkelanjutan dalam
                membuka peluang, meningkatkan kompetensi, serta mendorong inovasi di sektor maritim. Dengan jaringan alumni
                yang luas dan tersebar di berbagai sektor, CAAIP memiliki potensi besar untuk menjadi organisasi yang
                adaptif, inovatif, dan memberikan dampak nyata.</p>
        </div>

    </section>
    <section class="wrapper-image-3">
        <div class="bergabung-section" data-aos="fade-up">
            <h1>“Bersama CAAIP, mari membangun masa depan maritim Indonesia.”</h1>
            <a href="{{ route('contact') }}" class="btn-yellow">Kontak Kami</a>
        </div>
    </section>
    <div class="red-bottom-divider"></div>
@endsection