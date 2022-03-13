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
                                <h2 class="mb-5 fw-bold freebie-card-price">IDR {{ number_format($data->price) }}</h2>
                            @endif
                            
                            @if ($data->type == 1)
                                <a href="{{ route('user.success', $data->id) }}" class="card-link d-grid mb-5">
                                    <button class="btn btn-success freebie-card-dl-btn">DOWNLOAD NOW</button>
                                </a>
                            @endif
                            @if ($data->type == 2)
                                <a class="card-link d-grid mb-5" disabled>
                                    <button type="button" class="btn btn-success freebie-card-dl-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">BUY NOW</button>
                                </a>
                            @endif

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

    <!-- Modal -->
    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header header-premium">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Pembayaran</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="{{ route('user.success', $data->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12 col-sm-1">
                                <ul class="list-group freebie-benefit-list">
                                    <li class="list-group-item ps-0"><img src="{{ asset('assets/Tick Square.png') }}" alt=""><p class="ms-2">Grid System Design</p></li>
                                    <li class="list-group-item ps-0"><img src="{{ asset('assets/Tick Square.png') }}" alt=""><p class="ms-2">Private Group (Design Consulting)</p></li>
                                    <li class="list-group-item ps-0"><img src="{{ asset('assets/Tick Square.png') }}" alt=""><p class="ms-2">Free Design Updates</p></li>
                                </ul>
                            </div>
                            <h5 class="mt-3 mb-3">Transfer Pembayaran</h5>
                            <ul style="list-style-type:none">
                                <li><img src="{{ asset('assets/mandiri-logo.png') }}" alt="bank" width="150"></li>
                                <li>
                                    <h6 class="mt-4">PT Ajoor Indonesia</h6>
                                </li>
                                <li>
                                    <h6 class="mt-3">0796545800984</h6>
                                </li>
                            </ul>
                            <h5 class="text-end fw-bold freebie-card-price">Total : IDR {{ number_format($data->price) }}</h5>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="container">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="col-md-5 btn btn-success freebie-card-dl-btn">Buy Now</button>
                            </div>
                        </div>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection