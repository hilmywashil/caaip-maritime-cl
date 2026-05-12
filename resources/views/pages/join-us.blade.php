@extends('layouts.app')

@section('title', 'Jadi Anggota - Corps Alumni Akademi Ilmu Pelayaran')

@push('styles')
    <style>
        :root {
            --primary-blue: #090B62;
            --secondary-blue: #2A348D;
            --accent-yellow: #FFE701;
            --text-dark: #04293B;
            --text-grey: #6b7280;
            --bg-light: #F8F9FA;
        }

        body {
            font-family: 'Google Sans', sans-serif !important;
            background-color: #fff;
            margin: 0;
            padding: 0;
        }

        /* Custom Header for Join Us Page */
        .custom-page-header {
            width: 100%;
            display: flex;
            justify-content: center;
            padding: 20px;
            background: #fff;
            border-bottom: 1px solid #eee;
        }

        .header-inner {
            width: 100%;
            max-width: 1300px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
        }

        .header-inner .logo img {
            width: 80px;
            height: 80px;
        }

        .header-inner .nav-link {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 25px;
        }

        .header-inner .nav-link a {
            text-decoration: none;
            color: #000;
            font-weight: 400;
            transition: all 0.2s;
        }

        .header-inner .nav-link a:hover {
            color: #FFE701;
            transform: translateY(-2px);
        }

        .header-inner .buttons {
            display: flex;
            gap: 25px;
            align-items: center;
        }

        /* Hide the default sticky header initially on this page */
        #headerSticky {
            display: none !important;
        }

        /* Title Section */
        .title-section {
            padding: 80px 20px 40px;
            text-align: center;
            max-width: 900px;
            margin: 0 auto;
        }

        .title-section h1 {
            font-size: 52px;
            font-weight: 800;
            color: var(--primary-blue);
            margin: 0;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .title-section h2 {
            font-size: 26px;
            font-weight: 600;
            color: #000;
            margin: 10px 0;
        }

        .title-section p {
            font-size: 15px;
            color: var(--text-grey);
            line-height: 1.6;
            margin-top: 20px;
        }

        /* Form Container */
        .form-container {
            max-width: 1200px;
            margin: 0 auto 100px;
            padding: 0 20px;
        }

        .form-card {
            background: #fff;
            padding: 20px 0;
        }

        .form-section {
            display: none;
        }

        .form-section.active {
            display: block;
        }

        .form-section-title {
            font-size: 28px;
            font-weight: 800;
            color: var(--text-dark);
            margin-bottom: 40px;
            padding-top: 20px;
        }

        /* Grid Layout */
        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px 45px;
            margin-bottom: 50px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .form-group.full-width {
            grid-column: span 2;
        }

        .form-group label {
            font-size: 15px;
            font-weight: 700;
            color: var(--text-dark);
        }

        .form-group label span {
            color: #ff0000;
            margin-left: 3px;
        }

        /* Input Styles */
        .form-control {
            width: 100%;
            padding: 16px 22px;
            background-color: var(--bg-light);
            border: 1.5px solid #E5E7EB;
            border-radius: 14px;
            font-family: 'Google Sans', sans-serif;
            font-size: 16px;
            color: #333;
            transition: all 0.2s;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--secondary-blue);
            background-color: #fff;
            box-shadow: 0 0 0 5px rgba(42, 52, 141, 0.08);
        }

        /* Radio Group */
        .radio-group {
            display: flex;
            gap: 40px;
            padding: 12px 0;
            flex-wrap: wrap;
        }

        .radio-item {
            display: flex;
            align-items: center;
            gap: 12px;
            cursor: pointer;
            font-size: 15px;
            font-weight: 500;
        }

        .radio-item input[type="radio"] {
            width: 22px;
            height: 22px;
            cursor: pointer;
            accent-color: var(--secondary-blue);
        }

        /* File Upload Style */
        .file-upload-wrapper {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .btn-upload {
            width: fit-content;
            padding: 12px 28px;
            background: #fff;
            border: 1.5px solid #E5E7EB;
            border-radius: 12px;
            font-size: 14px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.2s;
            color: var(--text-dark);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .btn-upload:hover {
            border-color: var(--text-grey);
            background: #F9FAFB;
        }

        .file-info {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .file-name {
            font-size: 14px;
            color: var(--text-grey);
            word-break: break-all;
        }

        /* Navigation Buttons */
        .form-navigation {
            display: flex;
            gap: 25px;
            margin-top: 80px;
        }

        .btn-prev {
            font-family: 'Google Sans', sans-serif;
            flex: 1;
            padding: 20px;
            background-color: #04293B;
            color: #fff;
            border: none;
            border-radius: 12px;
            font-weight: 800;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.2s;
            text-align: center;
            text-decoration: none;
        }

        .btn-prev:hover {
            transform: translateY(-2px);
        }

        .btn-next {
            font-family: 'Google Sans', sans-serif;
            flex: 1;
            padding: 20px;
            background-color: var(--accent-yellow);
            color: #000;
            border: none;
            border-radius: 12px;
            font-weight: 800;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.2s;
            text-align: center;
            text-decoration: none;
        }

        .btn-next:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }

        /* Hide Scroll Top on this page to match image */
        #scrollTop {
            display: none !important;
        }

        @media (max-width: 768px) {
            .header-inner .nav-link {
                display: none;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .form-group.full-width {
                grid-column: span 1;
            }

            .title-section h1 {
                font-size: 38px;
            }
        }
    </style>
@endpush

@section('hero-section')
    <header class="custom-page-header">
        <div class="header-inner">
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets-front/images/logo_caaip.png') }}" alt="Logo CAAIP">
                </a>
            </div>
            <div class="nav-link">
                <a href="{{ route('home') }}" @if(Route::currentRouteName() == 'home') class="active" @endif>Beranda</a>
                <a href="{{ route('about') }}" @if(Route::currentRouteName() == 'about') class="active" @endif>Tentang</a>
                <a href="{{ route('organisasi') }}" @if(Route::currentRouteName() == 'organisasi') class="active"
                @endif>Organisasi</a>
                <a href="{{ route('e-katalog') }}" @if(Route::currentRouteName() == 'e-katalog') class="active"
                @endif>E-Catalog</a>
                <a href="{{ route('berita') }}" @if(Route::currentRouteName() == 'berita') class="active" @endif>Berita</a>
            </div>
            <div class="buttons">
                <a href="{{ route('join-us') }}" class="btn-transparent-border-black">Jadi Anggota</a>
                <a href="{{ route('anggota.login') }}" class="btn-yellow-border-black">Login</a>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <div class="title-section">
        <h1 data-aos="fade-up">JADI ANGGOTA</h1>
        <h2 data-aos="fade-up" data-aos-delay="100">Formulir Pendaftaran Corps Alumni Akademi Ilmu Pelayaran</h2>
        <p data-aos="fade-up" data-aos-delay="200">
            Wadah resmi alumni STIP Jakarta untuk kolaborasi, karier, dan kontribusi nasional.
        </p>
    </div>

    <div class="form-container" data-aos="fade-up" data-aos-delay="300">
        <form action="{{ route('jadi-anggota.store') }}" method="POST" enctype="multipart/form-data" id="multiStepForm">
            @csrf

            <!-- STEP 1: DATA PRIBADI -->
            <div class="form-section active" id="step1">
                <div class="form-section-title">Data Pribadi</div>

                <div class="form-grid">
                    <div class="form-group">
                        <label>Nama Lengkap<span>*</span></label>
                        <input type="text" name="nama_usaha" class="form-control" placeholder="">
                    </div>

                    <div class="form-group">
                        <label>Jenis Kelamin<span>*</span></label>
                        <div class="radio-group">
                            <label class="radio-item">
                                <input type="radio" name="gender" value="laki-laki"> Laki-laki
                            </label>
                            <label class="radio-item">
                                <input type="radio" name="gender" value="perempuan"> Perempuan
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Tempat Lahir<span>*</span></label>
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="">
                    </div>

                    <div class="form-group">
                        <label>Tanggal Lahir<span>*</span></label>
                        <input type="date" name="tanggal_lahir" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Agama<span>*</span></label>
                        <input type="text" name="agama" class="form-control" placeholder="">
                    </div>

                    <div class="form-group">
                        <label>Nomor Telepon (yang terhubung dengan WhatsApp)<span>*</span></label>
                        <input type="text" name="no_telp" class="form-control" placeholder="">
                    </div>

                    <div class="form-group full-width">
                        <label>Alamat Domisili<span>*</span></label>
                        <textarea name="alamat_domisili" class="form-control" style="height: 120px;"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Kode Pos<span>*</span></label>
                        <input type="text" name="kode_pos" class="form-control" placeholder="">
                    </div>

                    <div class="form-group">
                        <label>Email<span>*</span></label>
                        <input type="email" name="email" class="form-control" placeholder="">
                    </div>

                    <div class="form-group full-width">
                        <label>Nomor KTP<span>*</span></label>
                        <input type="text" name="no_ktp" class="form-control" placeholder="">
                    </div>

                    <div class="form-group">
                        <label>Upload Foto KTP<span>*</span></label>
                        <div class="file-upload-wrapper">
                            <input type="file" name="foto_ktp" id="ktp" style="display: none;"
                                onchange="updateFileName(this)">
                            <div class="file-info">
                                <label for="ktp" class="btn-upload">
                                    <i class="fas fa-cloud-upload-alt"></i> Choose File
                                </label>
                                <span class="file-name">No file chosen</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Upload Foto Diri<span>*</span></label>
                        <div class="file-upload-wrapper">
                            <input type="file" name="foto_diri" id="foto" style="display: none;"
                                onchange="updateFileName(this)">
                            <div class="file-info">
                                <label for="foto" class="btn-upload">
                                    <i class="fas fa-cloud-upload-alt"></i> Choose File
                                </label>
                                <span class="file-name">No file chosen</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-navigation">
                    <button type="button" class="btn-next" onclick="nextStep(2)">Berikutnya</button>
                </div>
            </div>

            <!-- STEP 2: PROFILE PERUSAHAAN -->
            <div class="form-section" id="step2">
                <div class="form-section-title">Profile Perusahaan</div>

                <div class="form-grid">
                    <div class="form-group">
                        <label>Nama Usaha<span>*</span></label>
                        <input type="text" name="perusahaan_nama" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Nama Legalitas Usaha<span>*</span></label>
                        <div class="radio-group">
                            <label class="radio-item"><input type="radio" name="legalitas_tipe" value="PT"> PT</label>
                            <label class="radio-item"><input type="radio" name="legalitas_tipe" value="CV"> CV</label>
                            <label class="radio-item"><input type="radio" name="legalitas_tipe" value="PT Perorangan"> PT
                                Perorangan</label>
                        </div>
                    </div>

                    <div class="form-group full-width">
                        <label>Jabatan Dalam Usaha<span>*</span></label>
                        <select name="jabatan" class="form-control">
                            <option value="" selected disabled></option>
                            <option value="Direktur">Direktur</option>
                            <option value="Komisaris">Komisaris</option>
                            <option value="Manager">Manager</option>
                            <option value="Staff">Staff</option>
                        </select>
                    </div>

                    <div class="form-group full-width">
                        <label>Alamat Kantor<span>*</span></label>
                        <textarea name="perusahaan_alamat" class="form-control" style="height: 120px;"></textarea>
                    </div>

                    <div class="form-group full-width">
                        <label>Bidang Usaha (Utama)<span>*</span></label>
                        <input type="text" name="bidang_usaha" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Brand Usaha<span>*</span></label>
                        <input type="text" name="brand_usaha" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Jumlah Karyawan<span>*</span></label>
                        <input type="text" name="jumlah_karyawan" class="form-control">
                    </div>

                    <div class="form-group full-width">
                        <label>Nomor KTP<span>*</span></label>
                        <input type="text" name="perusahaan_no_ktp" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Lama Berdiri<span>*</span></label>
                        <div class="radio-group">
                            <label class="radio-item"><input type="radio" name="lama_berdiri" value="< 1 Tahun">
                                < 1 Tahun</label>
                                    <label class="radio-item"><input type="radio" name="lama_berdiri" value="1 - 2 Tahun"> 1
                                        - 2 Tahun</label>
                                    <label class="radio-item"><input type="radio" name="lama_berdiri" value="2 - 5 Tahun"> 2
                                        - 5 Tahun</label>
                                    <label class="radio-item"><input type="radio" name="lama_berdiri" value="> 5 Tahun"> > 5
                                        Tahun</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Omset Perusahaan PerTahun<span>*</span></label>
                        <div class="radio-group">
                            <label class="radio-item"><input type="radio" name="omset" value="< Rp 1.000.000.000">
                                < Rp 1.000.000.000</label>
                                    <label class="radio-item"><input type="radio" name="omset"
                                            value="Rp 1.000.000.000 - Rp 4.000.000.000"> Rp 1.000.000.000 - Rp
                                        4.000.000.000</label>
                                    <label class="radio-item"><input type="radio" name="omset" value="> Rp 4.000.000.000"> >
                                        Rp 4.000.000.000</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>NPWP Perusahaan<span>*</span></label>
                        <input type="text" name="npwp" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>No. Akta Pendirian<span>*</span></label>
                        <input type="text" name="no_akta" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Unggah Profile Perusahaan<span>*</span></label>
                        <div style="font-size: 12px; color: #666; margin-bottom: 10px;">
                            Mohon unggah Profile Perusahaan dalam bentuk PDF.<br>
                            Profile Perusahaan harus memuat minimal:<br>
                            1. Logo Perusahaan, 2. Kontak Perusahaan, 3. Email Perusahaan, 4. Media Sosial, 5. Website, 6.
                            Logo Brand, 7. Deskripsi Brand, 8. Foto Kegiatan Usaha.
                        </div>
                        <div class="file-upload-wrapper">
                            <input type="file" name="file_profile" id="file_profile" style="display: none;"
                                onchange="updateFileName(this)">
                            <div class="file-info">
                                <label for="file_profile" class="btn-upload"><i class="fas fa-cloud-upload-alt"></i> Choose
                                    File</label>
                                <span class="file-name">No file chosen</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Unggah Logo Perusahaan<span>*</span></label>
                        <div class="file-upload-wrapper">
                            <input type="file" name="file_logo" id="file_logo" style="display: none;"
                                onchange="updateFileName(this)">
                            <div class="file-info">
                                <label for="file_logo" class="btn-upload"><i class="fas fa-cloud-upload-alt"></i> Choose
                                    File</label>
                                <span class="file-name">No file chosen</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-navigation">
                    <button type="button" class="btn-prev" onclick="nextStep(1)">Sebelumnya</button>
                    <button type="button" class="btn-next" onclick="nextStep(3)">Berikutnya</button>
                </div>
            </div>

            <!-- STEP 3: ORGANISASI & DAFTAR -->
            <div class="form-section" id="step3">
                <div class="form-section-title">Organisasi</div>

                <div class="form-grid">
                    <div class="form-group full-width">
                        <label>SFC HIPMI<span>*</span></label>
                        <input type="text" name="sfc_hipmi" class="form-control">
                    </div>

                    <div class="form-group full-width">
                        <label>Apakah anda referensi dari Anggota HIPMI?<span>*</span></label>
                        <div class="radio-group">
                            <label class="radio-item"><input type="radio" name="ref_hipmi" value="Ya"> Ya</label>
                            <label class="radio-item"><input type="radio" name="ref_hipmi" value="Tidak"> Tidak</label>
                        </div>
                    </div>

                    <div class="form-group full-width">
                        <label>Apakah Anda aktif di organisasi selain HIPMI?<span>*</span></label>
                        <div class="radio-group">
                            <label class="radio-item"><input type="radio" name="aktif_org_lain" value="Ya"> Ya</label>
                            <label class="radio-item"><input type="radio" name="aktif_org_lain" value="Tidak"> Tidak</label>
                        </div>
                    </div>
                </div>

                <div class="form-section-title">Daftar</div>
                <div class="form-group full-width" style="margin-bottom: 40px;">
                    <p style="font-size: 14px; font-weight: 600;">Dengan ini saya menyatakan bahwa data yang saya isi adalah
                        benar dan valid<span>*</span></p>
                    <label class="radio-item">
                        <input type="checkbox" name="setuju" style="width: 20px; height: 20px;"> Ya, saya setuju
                    </label>
                </div>

                <div class="form-navigation">
                    <button type="button" class="btn-prev" onclick="nextStep(2)">Sebelumnya</button>
                    <button type="submit" class="btn-next">Kirim Pendaftaran</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script>
        function nextStep(step) {
            // Hide all sections
            document.querySelectorAll('.form-section').forEach(section => {
                section.classList.remove('active');
            });
            // Show target section
            document.getElementById('step' + step).classList.add('active');
            // Scroll to top of form
            window.scrollTo({ top: document.querySelector('.title-section').offsetTop - 50, behavior: 'smooth' });
        }

        function updateFileName(input) {
            const fileName = input.files[0] ? input.files[0].name : "No file chosen";
            input.parentElement.querySelector('.file-name').textContent = fileName;
        }
    </script>
@endpush