@extends('templates.master')

@section('content')
    <!-- Breadcrumb -->
    <section class="freebie-detail-bk mt-3 mb-5 p-4">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item h5 bk-freebie"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item h5 bk-freebie"><a href="#">{{ $data->category->name }}</a></li>
                    <li class="breadcrumb-item h5 active bk-freebie-aktif" aria-current="page">{{ $data->name }}</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- Breadcrumb End -->

    <!-- Product Detail -->
    <section class="freebie-product mt-5 mb-5 p-5">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6"> <!-- img-->
                    <div class="row mb-4">
                        <img src="{{ asset('image/' . $data->image) }}" class="img-fluid" alt="...">
                    </div>
                    <div class="row mx-auto">
                        <div class="col">
                            <img src="{{ asset('image/' . $data->image) }}" class="img-fluid" alt="...">
                        </div>
                        <div class="col">
                            <img src="{{ asset('image/' . $data->image2) }}" class="img-fluid" alt="...">
                        </div>
                        <div class="col">
                            <img src="{{ asset('image/' . $data->image3) }}" class="img-fluid" alt="...">
                        </div>
                    </div>
                </div> <!-- img-->
                <div class="col-lg-5"> <!-- Product Detail Card -->
                    <div class="card freebie-card p-3">
                        <div class="card-body">
                            @if ($data->type == 1)
                                <button class="btn btn-primary freebie mb-5">FREEBIE</button>  
                            @endif
                            @if ($data->type == 2)
                                <button class="btn btn-primary premium mb-5">PREMIUM</button>  
                            @endif
                            <h2 class="fw-bold mb-2 freebie-card-title">{{ $data->name }}</h2>
                            <h2 class="mb-5 freebie-card-subtitle">{{ $data->category->name }}</h2>
                            @if ($data->type == 1)
                                <h5 class="price mb-1 freebie-card-subprice">IDR 350K</h5>
                                <h2 class="mb-5 fw-bold freebie-card-price">IDR {{ $data->price }}</h2>
                            @endif
                            @if ($data->type == 2)
                                <h2 class="mb-5 fw-bold freebie-card-price">IDR {{ $data->price }}</h2>
                            @endif
                            <a href="#" class="card-link d-grid mb-5">
                                <button class="btn btn-success freebie-card-dl-btn">DOWNLOAD NOW</button>
                            </a>
                            <a href="{{ route('dokumentasi') }}" class="freebie-card-docs text-center">
                                <h5 class="">Pelajari Lisensi Produk</h5>
                            </a>
                        </div>
                    </div>
                </div> <!-- Product Detail Card -->
            </div>
        </div>
    </section>
    <!-- Product Detail End -->

    <!-- Benefit -->
    @if ($data->type == 1)
    <section class="freebie-benefit mt-5 p-5">
        <div class="container">
            <div class="row mb-3">
                <h5 class="fw-bold mx-start freebie-benefit-title">Benefit Aset Freebie</h5>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-1">
                    <ul class="list-group freebie-benefit-list">
                        <li class="list-group-item ps-0"><img src="{{ asset('assets/Tick Square.png') }}" alt=""><p class="ms-2">Project Master</p></li>
                        <li class="list-group-item ps-0"><img src="{{ asset('assets/Tick Square.png') }}" alt=""><p class="ms-2">Quick Start Guide</p></li>
                        <li class="list-group-item ps-0"><img src="{{ asset('assets/Tick Square.png') }}" alt=""><p class="ms-2">Ready to Use</p></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-sm-1">
                    <ul class="list-group freebie-benefit-list">
                        <li class="list-group-item ps-0"><img src="{{ asset('assets/Tick Square Disabled.png') }}" alt=""><p class="ms-2 freebie-benefit-list-disabled">Grid System Design</p></li>
                        <li class="list-group-item ps-0"><img src="{{ asset('assets/Tick Square Disabled.png') }}" alt=""><p class="ms-2 freebie-benefit-list-disabled">Private Group (Design Consulting)</p></li>
                        <li class="list-group-item ps-0"><img src="{{ asset('assets/Tick Square Disabled.png') }}" alt=""><p class="ms-2 freebie-benefit-list-disabled">Free Design Updates</p></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    @endif

    @if ($data->type == 2)
    <section class="freebie-benefit mt-5 p-5">
        <div class="container">
            <div class="row mb-3">
                <h5 class="fw-bold mx-start freebie-benefit-title">Benefit Aset Premium</h5>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-1">
                    <ul class="list-group freebie-benefit-list">
                        <li class="list-group-item ps-0"><img src="{{ asset('assets/Tick Square.png') }}" alt=""><p class="ms-2">Project Master</p></li>
                        <li class="list-group-item ps-0"><img src="{{ asset('assets/Tick Square.png') }}" alt=""><p class="ms-2">Quick Start Guide</p></li>
                        <li class="list-group-item ps-0"><img src="{{ asset('assets/Tick Square.png') }}" alt=""><p class="ms-2">Ready to Use</p></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-sm-1">
                    <ul class="list-group freebie-benefit-list">
                        <li class="list-group-item ps-0"><img src="{{ asset('assets/Tick Square.png') }}" alt=""><p class="ms-2">Grid System Design</p></li>
                        <li class="list-group-item ps-0"><img src="{{ asset('assets/Tick Square.png') }}" alt=""><p class="ms-2">Private Group (Design Consulting)</p></li>
                        <li class="list-group-item ps-0"><img src="{{ asset('assets/Tick Square.png') }}" alt=""><p class="ms-2">Free Design Updates</p></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    @endif
    <!-- Benefit End -->
@endsection