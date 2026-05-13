@extends('layouts.app')

@section('title', 'Beranda')

@section('hero-background', asset('assets-front/images/hero_bg.jpg'))
@section('page-title', 'MENGHUBUNGKAN ALUMNI')
@section('page-subtitle', 'Membangun Maritim Indonesia')
@section('page-description', 'Wadah resmi alumni STIP Jakarta untuk kolaborasi, karier, dan kontribusi nasional.')
@section('hero-buttons', 'show')

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
                <a href="{{ route('about') }}" class="btn-yellow-text-black">Tentang Kami</a>
            </div>
        </div>
    </section>
    <section class="wrapper-blue-1">
        <div class="pilar-section" data-aos="fade-up">
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
    <section class="wrapper-white-1">
        <div class="program-section" data-aos="fade-up">
            <div>
                <h2>Program dan Layanan</h2>
                <p>Sebagai organisasi alumni yang berorientasi pada dampak nyata, CAAIP menghadirkan berbagai program dan
                    layanan yang dirancang untuk mendukung kesejahteraan anggota, pengembangan karier, serta mempererat
                    hubungan antar alumni.
                </p>
            </div>
            <div class="item-grid">
                <div class="item">
                    <img src="{{ asset('assets-front/images/icons/network-red.png') }}" alt="Program">
                    <div>
                        <h3>Sosial</h3>
                        <p>CAAIP berkomitmen untuk menghadirkan kepedulian yang nyata melalui berbagai program sosial. Mulai
                            dari pemberian beasiswa pendidikan bagi anak yatim/piatu alumni, hingga santunan duka bagi
                            keluarga yang ditinggalkan.</p>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('assets-front/images/icons/promotion-red.png') }}" alt="Program">
                    <div>
                        <h3>Karier</h3>
                        <p>Dalam mendukung perkembangan profesional, CAAIP menyediakan akses informasi lowongan kerja di
                            sektor maritim, baik di dalam maupun luar negeri.</p>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('assets-front/images/icons/economy-red.png') }}" alt="Program">
                    <div>
                        <h3>Ekonomi</h3>
                        <p>CAAIP turut mendorong kemandirian finansial para alumni, khususnya bagi mereka yang telah
                            memasuki masa purnatugas.</p>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('assets-front/images/icons/community-red.png') }}" alt="Program">
                    <div>
                        <h3>Hobi dan Komunitas</h3>
                        <p>Selain aspek profesional dan kesejahteraan, CAAIP juga memahami pentingnya kebersamaan dan
                            keseimbangan hidup.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="wrapper-gold-1">
        <div class="anggota-section" data-aos="fade-up">
            <div>
                <h2>Informasi Anggota</h2>
                <p>CAAIP merupakan rumah bagi para alumni STIP Jakarta yang tersebar di berbagai sektor industri maritim,
                    baik di dalam maupun luar negeri.
                </p>
            </div>
            <div class="grid">
                <div class="item">
                    <img src="{{ asset('assets-front/images/logo_caaip.png') }}" alt="Logo">
                    <div>
                        <h3>Nama Anggota</h3>
                        <p>Jabatan</p>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('assets-front/images/logo_caaip.png') }}" alt="Logo">
                    <div>
                        <h3>Nama Anggota</h3>
                        <p>Jabatan</p>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('assets-front/images/logo_caaip.png') }}" alt="Logo">
                    <div>
                        <h3>Nama Anggota</h3>
                        <p>Jabatan</p>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('assets-front/images/logo_caaip.png') }}" alt="Logo">
                    <div>
                        <h3>Nama Anggota</h3>
                        <p>Jabatan</p>
                    </div>
                </div>
            </div>
            <a href="{{ route('buku-anggota') }}" class="btn-yellow">Lihat Selengkapnya</a>
        </div>
    </section>
    <section class="wrapper-white-1">
        <div class="kegiatan-section" data-aos="fade-up">
            <div>
                <h2>Berita dan Kegiatan Kami</h2>
                <p>CAAIP secara aktif menyelenggarakan berbagai kegiatan yang bertujuan untuk mempererat hubungan antar
                    alumni, meningkatkan kompetensi, serta memberikan kontribusi nyata bagi masyarakat dan industri maritim.
                </p>
            </div>

            <div class="kegiatan-carousel-outer">
                <button class="carousel-arrow carousel-arrow-left" id="kegiatanPrev" aria-label="Sebelumnya"><i
                        class="fa fa-chevron-left"></i></button>

                <div class="kegiatan-carousel-track-wrap">
                    <div class="kegiatan-carousel-track" id="kegiatanTrack">

                        <div class="card">
                            <div class="card-image-wrap">
                                <img src="{{ asset('assets-front/images/about_image.jpg') }}" alt="Judul Berita 1">
                                <div class="card-overlay"></div>
                                <span class="card-badge">Berita</span>
                                <div class="card-content">
                                    <p class="card-date">Oktober 28, 2025</p>
                                    <h2 class="card-title">Judul Berita</h2>
                                    <p class="card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                                        dictum, nulla vitae varius ultricies...</p>
                                    <a class="card-link" href="#">Lihat Lebih Banyak</a>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-image-wrap">
                                <img src="{{ asset('assets-front/images/about_image.jpg') }}" alt="Judul Berita 2">
                                <div class="card-overlay"></div>
                                <span class="card-badge">Berita</span>
                                <div class="card-content">
                                    <p class="card-date">Oktober 28, 2025</p>
                                    <h2 class="card-title">Judul Berita</h2>
                                    <p class="card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                                        dictum, nulla vitae varius ultricies...</p>
                                    <a class="card-link" href="#">Lihat Lebih Banyak</a>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-image-wrap">
                                <img src="{{ asset('assets-front/images/about_image.jpg') }}" alt="Judul Berita 3">
                                <div class="card-overlay"></div>
                                <span class="card-badge">Berita</span>
                                <div class="card-content">
                                    <p class="card-date">Oktober 28, 2025</p>
                                    <h2 class="card-title">Judul Berita</h2>
                                    <p class="card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                                        dictum, nulla vitae varius ultricies...</p>
                                    <a class="card-link" href="#">Lihat Lebih Banyak</a>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-image-wrap">
                                <img src="{{ asset('assets-front/images/about_image.jpg') }}" alt="Judul Berita 4">
                                <div class="card-overlay"></div>
                                <span class="card-badge">Berita</span>
                                <div class="card-content">
                                    <p class="card-date">Oktober 28, 2025</p>
                                    <h2 class="card-title">Judul Berita</h2>
                                    <p class="card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                                        dictum, nulla vitae varius ultricies...</p>
                                    <a class="card-link" href="#">Lihat Lebih Banyak</a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-image-wrap">
                                <img src="{{ asset('assets-front/images/about_image.jpg') }}" alt="Judul Berita 4">
                                <div class="card-overlay"></div>
                                <span class="card-badge">Berita</span>
                                <div class="card-content">
                                    <p class="card-date">Oktober 28, 2025</p>
                                    <h2 class="card-title">Judul Berita</h2>
                                    <p class="card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                                        dictum, nulla vitae varius ultricies...</p>
                                    <a class="card-link" href="#">Lihat Lebih Banyak</a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-image-wrap">
                                <img src="{{ asset('assets-front/images/about_image.jpg') }}" alt="Judul Berita 4">
                                <div class="card-overlay"></div>
                                <span class="card-badge">Berita</span>
                                <div class="card-content">
                                    <p class="card-date">Oktober 28, 2025</p>
                                    <h2 class="card-title">Judul Berita</h2>
                                    <p class="card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                                        dictum, nulla vitae varius ultricies...</p>
                                    <a class="card-link" href="#">Lihat Lebih Banyak</a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-image-wrap">
                                <img src="{{ asset('assets-front/images/about_image.jpg') }}" alt="Judul Berita 4">
                                <div class="card-overlay"></div>
                                <span class="card-badge">Berita</span>
                                <div class="card-content">
                                    <p class="card-date">Oktober 28, 2025</p>
                                    <h2 class="card-title">Judul Berita</h2>
                                    <p class="card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                                        dictum, nulla vitae varius ultricies...</p>
                                    <a class="card-link" href="#">Lihat Lebih Banyak</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <button class="carousel-arrow carousel-arrow-right" id="kegiatanNext" aria-label="Berikutnya"><i
                        class="fa fa-chevron-right"></i></button>
            </div>

            <div class="kegiatan-carousel-dots" id="kegiatanDots"></div>

            <a href="{{ route('buku-anggota') }}" class="btn-yellow-text-black">Lihat Selengkapnya</a>
        </div>
    </section>
    <section class="wrapper-white-1">
        <div class="katalog-section" data-aos="fade-up">
            <div>
                <h2>E-Catalog</h2>
                <p>Sebagai bentuk dukungan terhadap kemandirian ekonomi dan kewirausahaan alumni, CAAIP menghadirkan
                    E-Catalog yang berisi berbagai bisnis yang dimiliki dan dikelola oleh para anggota.
                </p>
            </div>
            <div class="grid">
                <div class="item">
                    <img src="{{ asset('assets-front/images/logo_caaip.png') }}" alt="Logo">
                    <div>
                        <h3>Nama Bisnis</h3>
                        <p>Bidang</p>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('assets-front/images/logo_caaip.png') }}" alt="Logo">
                    <div>
                        <h3>Nama Bisnis</h3>
                        <p>Bidang</p>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('assets-front/images/logo_caaip.png') }}" alt="Logo">
                    <div>
                        <h3>Nama Bisnis</h3>
                        <p>Bidang</p>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('assets-front/images/logo_caaip.png') }}" alt="Logo">
                    <div>
                        <h3>Nama Bisnis</h3>
                        <p>Bidang</p>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('assets-front/images/logo_caaip.png') }}" alt="Logo">
                    <div>
                        <h3>Nama Bisnis</h3>
                        <p>Bidang</p>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('assets-front/images/logo_caaip.png') }}" alt="Logo">
                    <div>
                        <h3>Nama Bisnis</h3>
                        <p>Bidang</p>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('assets-front/images/logo_caaip.png') }}" alt="Logo">
                    <div>
                        <h3>Nama Bisnis</h3>
                        <p>Bidang</p>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('assets-front/images/logo_caaip.png') }}" alt="Logo">
                    <div>
                        <h3>Nama Bisnis</h3>
                        <p>Bidang</p>
                    </div>
                </div>
            </div>
            <a href="{{ route('e-katalog') }}" class="btn-yellow-text-black">Lihat Lebih Banyak</a>
        </div>
    </section>
    <section class="wrapper-image-2">
        <div class="bergabung-section" data-aos="fade-up">
            <h1>“Jadilah bagian dari jaringan alumni maritim terbesar di Indonesia.”</h1>
            <a href="{{ route('buku-anggota') }}" class="btn-yellow">Hubungi Kami</a>
        </div>
    </section>
    <div class="red-bottom-divider"></div>
@endsection

@push('scripts')
    <script>
        (function () {
            const track = document.getElementById('kegiatanTrack');
            const dotsEl = document.getElementById('kegiatanDots');
            const btnPrev = document.getElementById('kegiatanPrev');
            const btnNext = document.getElementById('kegiatanNext');

            const GAP = 25; // harus sama dengan gap di CSS

            const cards = track.querySelectorAll('.card');
            const total = cards.length;

            let current = 0;

            /* ── Berapa card yang tampil sesuai lebar layar ── */
            function getVisible() {
                const w = window.innerWidth;
                if (w <= 480) return 1;
                if (w <= 768) return 2;
                if (w <= 1024) return 3;
                return 4;
            }

            /* ── Hitung lebar 1 step ── */
            function stepWidth() {
                const VISIBLE = getVisible();
                const trackW = track.parentElement.offsetWidth;
                return (trackW + GAP) / VISIBLE;
            }

            /* ── Maksimum index yang bisa dicapai ── */
            function getMaxStep() {
                return Math.max(0, total - getVisible());
            }

            /* ── Rebuild dots sesuai maxStep ── */
            function buildDots() {
                dotsEl.innerHTML = '';
                const maxStep = getMaxStep();
                for (var i = 0; i <= maxStep; i++) {
                    var dot = document.createElement('button');
                    dot.className = 'dot' + (i === current ? ' active' : '');
                    dot.setAttribute('aria-label', 'Slide ' + (i + 1));
                    dot.dataset.idx = i;
                    dot.addEventListener('click', function () { goTo(+this.dataset.idx); });
                    dotsEl.appendChild(dot);
                }
            }

            /* ── Geser track ── */
            function goTo(idx) {
                const maxStep = getMaxStep();
                current = ((idx % (maxStep + 1)) + (maxStep + 1)) % (maxStep + 1); // loop
                track.style.transform = 'translateX(-' + (current * stepWidth()) + 'px)';
                dotsEl.querySelectorAll('.dot').forEach(function (d, i) {
                    d.classList.toggle('active', i === current);
                });
            }

            /* ── Recalculate on resize ── */
            window.addEventListener('resize', function () {
                buildDots();
                // Clamp current agar tidak melebihi maxStep baru
                if (current > getMaxStep()) current = getMaxStep();
                goTo(current);
            });

            /* ── Arrow buttons ── */
            btnPrev.addEventListener('click', function () { goTo(current - 1); });
            btnNext.addEventListener('click', function () { goTo(current + 1); });

            /* ── Swipe support (mobile) ── */
            var touchStartX = 0;
            track.addEventListener('touchstart', function (e) {
                touchStartX = e.touches[0].clientX;
            }, { passive: true });
            track.addEventListener('touchend', function (e) {
                var dx = e.changedTouches[0].clientX - touchStartX;
                if (Math.abs(dx) > 40) goTo(dx < 0 ? current + 1 : current - 1);
            });

            /* ── Init ── */
            buildDots();
            goTo(0);
        })();
    </script>
@endpush