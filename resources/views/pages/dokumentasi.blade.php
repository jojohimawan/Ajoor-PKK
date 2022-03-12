@extends('templates.master')

@section('content')
    <!-- Header -->
        <section class="uikit-header mt-5 mb-5 p-5">
            <div class="container">
                <div class="text-center">
                    <h1 class="display-5 fw-bold lh-1 mb-3">Pelajari Dokumentasi Ajoor</h1>
                    <p class="lead">Membantu kamu untuk mempelajari knowledge base Ajoor<br>
                        supaya maksimal dalam menggunakan produk Ajoor</p>
                </div>
            </div>
        </section>    
    <!-- Header End -->

    <!-- Docs -->
        <section class="docs p-5">
            <div class="container">
                <div class="row justify-content-between mb-5">
                    <div class="col-lg-5 col-sm-1">
                        <h2 class="fw-bold mb-3 freebie-card-title">Boleh digunakan untuk<br>
                            projek apa saja?</h2>
                        <h5 class="freebie-card-docs">Semua tipe produk Ajoor bisa digunakan<br>untuk semua projek baik komersil ataupun<br>
                            non komersil tanpa harus<br>
                            menyertakan atribusi.</h5>
                    </div>
                    <div class="col-lg-5 col-sm-1">
                        <h2 class="fw-bold mb-3 freebie-card-title">Apakah Boleh Diperjual<br>Belikan Kembali?</h2>
                        <h5 class="freebie-card-docs">Diperbolehkan untuk menjual belikan<br> kembali produk dari Ajoor dengan syarat<br> harus dimodifikasi minimal 50% dari<br> desain original.</h5>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-lg-5 col-sm-1">
                        <h2 class="fw-bold mb-3 freebie-card-title">Bagaimana Cara Berterima<br>
                            Kasih?</h2>
                        <h5 class="freebie-card-docs">Dengan membeli dan menggunakan<br> produk Ajoor secara semestinya. Serta<br>tidak melakukan pembajakan :)</h5>
                    </div>
                    <div class="col-lg-5 col-sm-1">
                        <h2 class="fw-bold mb-3 freebie-card-title">Apakah Ada Rencana Untuk<br>Kedepannya?</h2>
                        <h5 class="freebie-card-docs">Ajoor akan menambahkan lebih banyak produk untuk designer, developer, maupun business owner. Kami juga akan terus mengimprove fitur supaya nyaman digunakan oleh pengguna kami.</h5>
                    </div>
                </div>
            </div>
        </section>
    <!-- Docs End -->

    <!-- Header -->
        <section class="uikit-header mt-5 mb-5 p-5">
            <div class="container">
                <div class="text-center">
                    <h1 class="display-5 fw-bold lh-1 mb-3">Pricelist Ajoor</h1>
                    <p class="lead">Detail Tipe Produk dan Range Harga Produk Ajoor</p>
                </div>
            </div>
        </section>    
    <!-- Header End -->

    <!-- Pricing Card -->
        <section class="pricingcard p-5">
            <div class="container">
                <div class="row justify-content-around">
                    <div class="col-lg-4 sol-sm-1">
                        <div class="card pricing-card p-3">
                            <div class="card-body">
                                <button class="btn btn-primary freebie mb-5">FREEBIE</button>
                                <h5 class="mb-1">Mulai dari</h5>
                                <h1 class="mb-4 fw-bold">IDR 0,-</h1>
                                <h5 class="mb-1">Benefit</h5>
                                <ul class="list-group freebie-benefit-list">
                                    <li class="list-group-item ps-0"><img src="{{ asset('assets/Tick Square.png') }}" alt=""><p class="ms-2 fw-normal">Project Master</p></li>
                                    <li class="list-group-item ps-0"><img src="{{ asset('assets/Tick Square.png') }}" alt=""><p class="ms-2 fw-normal">Quick Start Guide</p></li>
                                    <li class="list-group-item ps-0"><img src="{{ asset('assets/Tick Square.png') }}" alt=""><p class="ms-2 fw-normal">Ready to Use</p></li>
                                    <li class="list-group-item ps-0"><img src="{{ asset('assets/Tick Square Disabled.png') }}" alt=""><p class="ms-2 fw-normal freebie-benefit-list-disabled">Grid System Design</p></li>
                                    <li class="list-group-item ps-0"><img src="{{ asset('assets/Tick Square Disabled.png') }}" alt=""><p class="ms-2 fw-normal freebie-benefit-list-disabled">Private Group (Design Consulting)</p></li>
                                    <li class="list-group-item ps-0"><img src="{{ asset('assets/Tick Square Disabled.png') }}" alt=""><p class="ms-2 fw-normal freebie-benefit-list-disabled">Free Design Updates</p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 sol-sm-1">
                        <div class="card pricing-card pricing-premium p-3">
                            <div class="card-body">
                                <button class="btn btn-primary premium mb-5">PREMIUM</button>
                                <h5 class="mb-1">Mulai dari</h5>
                                <h1 class="mb-4 fw-bold">IDR 250K,-</h1>
                                <h5 class="mb-1">Benefit</h5>
                                <ul class="list-group freebie-benefit-list">
                                    <li class="list-group-item ps-0"><img src="{{ asset('assets/Tick Square.png') }}" alt=""><p class="ms-2 fw-normal">Project Master</p></li>
                                    <li class="list-group-item ps-0"><img src="{{ asset('assets/Tick Square.png') }}" alt=""><p class="ms-2 fw-normal">Quick Start Guide</p></li>
                                    <li class="list-group-item ps-0"><img src="{{ asset('assets/Tick Square.png') }}" alt=""><p class="ms-2 fw-normal">Ready to Use</p></li>
                                    <li class="list-group-item ps-0"><img src="{{ asset('assets/Tick Square.png') }}" alt=""><p class="ms-2 fw-normal">Grid System Design</p></li>
                                    <li class="list-group-item ps-0"><img src="{{ asset('assets/Tick Square.png') }}" alt=""><p class="ms-2 fw-normal">Private Group (Design Consulting)</p></li>
                                    <li class="list-group-item ps-0"><img src="{{ asset('assets/Tick Square.png') }}" alt=""><p class="ms-2 fw-normal">Free Design Updates</p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- Pricing Card End -->
@endsection