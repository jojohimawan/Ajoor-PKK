@extends('templates.master')

@section('content')
    <!-- Header -->
    <section class="uikit-header mt-5 mb-5 p-5">
        <div class="container">
            <div class="text-center">
                <h1 class="display-5 fw-bold lh-1 mb-3">Unduh Template</h1>
                <p class="lead">Pilihan Template untuk percepat project terbaik anda</p>
            </div>
        </div>
    </section>    
    <!-- Header End -->

    <!-- Products -->
    <section class="uikit-products mb-5 p-5">
        <div class="container">
            <div class="row"> <!-- Content Row 1 Start Here -->
                <div class="col-lg-4 col-sm-1">
                    <div class="card"> <!-- Content Item 3 Start-->
                        <div class="cardhead">
                            <img src="{{ asset('assets/edutech.png') }}" class="card-img-top" alt="...">
                            <a href="" class="d-flex justify-content-center overlay">
                                <img src="{{ asset('assets/download.png') }}" class="align-self-center">
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">Edutech App</h5>
                                    <p class="card-text">Template</p>
                                </div>
                                <div class="col text-end">
                                    <a href="#" class="btn btn-primary premium">PREMIUM</a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Content Item 3 End-->
                </div>
            </div> <!-- Content Row 1 End Here-->
        
        <!-- </div> -->
        </div>
    </section>
    <!-- Products End -->

@endsection