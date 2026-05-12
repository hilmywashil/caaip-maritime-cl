@extends('layouts.app')

@section('title', 'Berita')

@section('hero-background', asset('assets-front/images/foto_6.jpg'))
@section('page-title', 'BERITA DAN KEGIATAN')
@section('page-subtitle', 'Corps Alumni Akademi Ilmu Pelayaran')
@section('page-description', 'Wadah resmi alumni STIP Jakarta untuk kolaborasi, karier, dan kontribusi nasional.')
@section('hero-buttons', 'hide')

@section('content')
    @include('layouts.components.hero')
    <section class="wrapper-white-1">
        <div class="berita-page-section" data-aos="fade-up">
            <div class="left">
                <div class="item">
                    <div class="image">
                        <a href="#">
                            <img src="{{ asset('assets-front/images/about_image.jpg') }}" alt="Berita">
                        </a>
                    </div>
                    <div class="content">
                        <a href="#">
                            <h2>Peran Alumni Maritim dalam Mendukung Indonesia sebagai Poros Maritim Dunia</h2>
                        </a>
                        <p class="date">12 Januari 2090</p>
                        <p>Alumni pelayaran memiliki peran strategis dalam memperkuat sektor transportasi laut dan logistik
                            nasional. Melalui pengalaman global dan kompetensi yang dimiliki, alumni CAAIP turut
                            berkontribusi dalam meningkatkan daya saing maritim Indonesia di kancah internasional.</p>
                        <a href="#" class="btn">Baca Selengkapnya <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div class="image">
                        <a href="#">
                            <img src="{{ asset('assets-front/images/about_image.jpg') }}" alt="Berita">
                        </a>
                    </div>
                    <div class="content">
                        <a href="#">
                            <h2>Peran Alumni Maritim dalam Mendukung Indonesia sebagai Poros Maritim Dunia</h2>
                        </a>
                        <p class="date">12 Januari 2090</p>
                        <p>Alumni pelayaran memiliki peran strategis dalam memperkuat sektor transportasi laut dan logistik
                            nasional. Melalui pengalaman global dan kompetensi yang dimiliki, alumni CAAIP turut
                            berkontribusi dalam meningkatkan daya saing maritim Indonesia di kancah internasional.</p>
                        <a href="#" class="btn">Baca Selengkapnya <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div class="image">
                        <a href="#">
                            <img src="{{ asset('assets-front/images/about_image.jpg') }}" alt="Berita">
                        </a>
                    </div>
                    <div class="content">
                        <a href="#">
                            <h2>Peran Alumni Maritim dalam Mendukung Indonesia sebagai Poros Maritim Dunia</h2>
                        </a>
                        <p class="date">12 Januari 2090</p>
                        <p>Alumni pelayaran memiliki peran strategis dalam memperkuat sektor transportasi laut dan logistik
                            nasional. Melalui pengalaman global dan kompetensi yang dimiliki, alumni CAAIP turut
                            berkontribusi dalam meningkatkan daya saing maritim Indonesia di kancah internasional.</p>
                        <a href="#" class="btn">Baca Selengkapnya <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="right">
                <a href="#" class="btn-yellow-text-black">BERITA POPULER</a>
                <hr class="divider-line">
                <div class="item">
                    <div class="content">
                        <a href="#">
                            <h2>Peran Alumni Maritim dalam Mendukung Indonesia sebagai Poros Maritim Dunia</h2>
                        </a>
                        <p class="date">12 Januari 2090</p>
                        <p>Alumni pelayaran memiliki peran strategis dalam memperkuat sektor transportasi laut dan logistik
                            nasional. Melalui pengalaman global dan kompetensi yang dimiliki, alumni CAAIP turut
                            berkontribusi dalam meningkatkan daya saing maritim Indonesia di kancah internasional.</p>
                        <a href="#" class="btn">Baca Selengkapnya <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <hr class="divider-line">
                <div class="item">
                    <div class="content">
                        <a href="#">
                            <h2>Peran Alumni Maritim dalam Mendukung Indonesia sebagai Poros Maritim Dunia</h2>
                        </a>
                        <p class="date">12 Januari 2090</p>
                        <p>Alumni pelayaran memiliki peran strategis dalam memperkuat sektor transportasi laut dan logistik
                            nasional. Melalui pengalaman global dan kompetensi yang dimiliki, alumni CAAIP turut
                            berkontribusi dalam meningkatkan daya saing maritim Indonesia di kancah internasional.</p>
                        <a href="#" class="btn">Baca Selengkapnya <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <hr class="divider-line">
            </div>
        </div>
    </section>
    <section class="wrapper-pagination-white">
        <div class="pagination-section" data-aos="fade-up">
            <a href="#" class="page-number"><i class="fa fa-chevron-left"></i></a>
            <a href="#" class="page-number active">1</a>
            <a href="#" class="page-number">2</a>
            <a href="#" class="page-number">3</a>
            <a href="#" class="page-number">4</a>
            <a href="#" class="page-number">...</a>
            <a href="#" class="page-number">9</a>
            <a href="#" class="page-number">10</a>
            <a href="#" class="page-number"><i class="fa fa-chevron-right"></i></a>
        </div>
    </section>
@endsection