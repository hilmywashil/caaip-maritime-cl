@extends('layouts.app')

@section('title', 'E-Catalog')

@section('hero-background', asset('assets-front/images/foto_5.png'))
@section('page-title', 'E-CATALOG')
@section('page-subtitle', 'Corps Alumni Akademi Ilmu Pelayaran')
@section('page-description', 'Wadah resmi alumni STIP Jakarta untuk kolaborasi, karier, dan kontribusi nasional.')
@section('hero-buttons', 'hide')

@section('content')
    @include('layouts.components.hero')
    <section class="wrapper-white-1">
        <div class="katalog-section" data-aos="fade-up">
            <div class="grid">
                <a href="#">
                    <div class="item">
                        <img src="{{ asset('assets-front/images/logo_caaip.png') }}" alt="Logo">
                        <div>
                            <h3>Nama Bisnis</h3>
                            <p>Bidang</p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="item">
                        <img src="{{ asset('assets-front/images/logo_caaip.png') }}" alt="Logo">
                        <div>
                            <h3>Nama Bisnis</h3>
                            <p>Bidang</p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="item">
                        <img src="{{ asset('assets-front/images/logo_caaip.png') }}" alt="Logo">
                        <div>
                            <h3>Nama Bisnis</h3>
                            <p>Bidang</p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="item">
                        <img src="{{ asset('assets-front/images/logo_caaip.png') }}" alt="Logo">
                        <div>
                            <h3>Nama Bisnis</h3>
                            <p>Bidang</p>
                        </div>
                    </div>
                </a>
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