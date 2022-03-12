@extends('templates.master')

@section('content')
    <!-- Hero -->
    <section class="hero mb-5">
      <div class="container col-xxl-12 mt-5 mb-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-lg-6 col-sm-1">
            <img src="{{ asset('assets/Group 3.png') }}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="480" height="480" loading="lazy">
          </div>
          <div class="col-lg-6">
            <p class="title">Halo, Designer</p>
            <h1 class="display-5 fw-bold lh-1 mb-3">Pilih. Unduh. Modifikasi. Mulai Project Dengan Cepat</h1>
            <p class="lead">Ajoor menyediakan pilihan aset desain terbaik siap pakai untuk kebutuhan project anda.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
              <button type="button" class="btn text-white btnhero me-md-2">Jelajahi Ajoor</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero End -->
    
    <!-- Keunggulan -->
    <section class="keunggulan mt-5 mb-5 p-5">
      <div class="container">
        <div class="text-center">
          <h2 class="fw-bold col-lg-6 col-sm-1 mx-auto mb-5">Percepat Pengerjaan Project
            Hanya Dengan 3 Langkah Mudah
          </h2>
        </div>
        <div class="row mt-5">
          <div class="col-lg-4 col-sm-1 text-center">
            <figure class="figure">
              <img src="{{ asset('assets/Group 7.png') }}" class="figure-img img-fluid">
              <figcaption class="figure-caption text-center">
                <h5 class="mt-4 mb-2">1. Pilih</h5>
                <p>Pilih aset desain yang<br>
                  akan digunakan.</p>
              </figcaption>
            </figure>
          </div>
          <div class="col-lg-4 col-sm-1 text-center">
          <figure class="figure">
            <img src="{{ asset('assets/Group 10.png') }}" class="figure-img img-fluid">
              <figcaption class="figure-caption text-center">
                <h5 class="mt-4 mb-2">2. Unduh</h5>
                <p>Unduh aset pilihan<br>
                  pada device.</p>
              </figcaption>
            </figure>
          </div>
          <div class="col-lg-4 col-sm-1 text-center">
          <figure class="figure">
            <img src="{{ asset('assets/Group 9.png') }}" class="figure-img img-fluid">
            <figcaption class="figure-caption text-center">
              <h5 class="mt-4 mb-2">3. Gunakan/Modifikasi</h5>
              <p>Siap diaplikasikan pada<br>
                project atau dimodifikasi.</p>
            </figcaption>
          </figure>
          </div>
        </div>
      </div>
    </section>
    <!-- Keunggulan End -->

    <!-- Aset Pilihan -->
    <section class="produk mt-5 mb-5 p-5">
      <div class="container">
        <div class="text-start">
          <h2 class="fw-bold col-lg-6 col-sm-1 mx-start mb-5">
            Beberapa Aset Pilihan
          </h2>
        </div>
        <div class="row"> <!-- Contents Start Here -->
          @foreach ($getProduct as $item)
            <div class="col-lg-4 col-sm-1">
              <div class="card"> <!-- Content Item 1 Start-->
                <div class="cardhead">
                  <img src="{{ asset('image/' . $item->image) }}" class="card-img-top" alt="..." height="250px">
                  <a href="" class="d-flex justify-content-center overlay">
                    <img src="{{ asset('assets/detail.png') }}" class="align-self-center">
                  </a>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title">{{ $item->name }}</h5>
                      <p class="card-text">{{ $item->category->name }}</p>
                    </div>
                    <div class="col text-end">
                      @if ($item->type == 1)
                        <button class="btn btn-primary freebie">FREEBIE</button>  
                      @endif
                      @if ($item->type == 2)
                        <button class="btn btn-primary premium">PREMIUM</button>  
                      @endif
                    </div>
                  </div>
                </div>
              </div> <!-- Content Item 1 End-->
            </div>
            {{-- <div class="col-lg-4 col-sm-1">
              <div class="card"> <!-- Content Item 2 Start-->
                <div class="cardhead">
                  <img src="./Assets/healthico.png" class="card-img-top" alt="...">
                  <a href="" class="d-flex justify-content-center overlay">
                    <img src="{{ asset('assets/download.png') }}" class="align-self-center">
                  </a>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title">Health Icon</h5>
                      <p class="card-text">Icon Set</p>
                    </div>
                    <div class="col text-end">
                      <a href="#" class="btn btn-primary freebie">FREEBIE</a>
                    </div>
                  </div>
                </div>
              </div> <!-- Content Item 2 End-->
            </div>
            <div class="col-lg-4 col-sm-1">
              <div class="card"> <!-- Content Item 3 Start-->
                  <div class="cardhead">
                    <img src="./Assets/edutech.png" class="card-img-top" alt="...">
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
            </div> --}}
          @endforeach
        </div> <!-- Contents End Here-->
      </div>
    </section>
    <!-- Aset Pilihan End -->

    <!-- Mengapa -->
    <section class="mengapa mt-5 mb-5 p-5">
      <div class="container">
        <div class="row mb-5">
          <div class="text-center">
            <h2 class="fw-bold col-lg-6 col-sm-1 mx-auto mb-5">Mengapa Pakai Aset Desain Dari Ajoor?
            </h2>
          </div>
        </div>
        <div class="row justify-content-between">
          <div class="col-lg-6 col-sm-1">
            <img src="{{ asset('assets/whyimage.png') }}" class="img-fluid" alt="...">
          </div> 
            <div class="col-lg-5 col-sm-1 why">
              <div class="row mb-3">
                <h5 class="mt-4 mb-2">Up To Date</h5>
                <p>Ratusan aset desain terbaik yang siap digunakan pada project</p>
              </div>
              <div class="row mb-3">
                <h5 class="mt-4 mb-2">Well Organized</h5>
                <p>Sangat mudah dimodifikasi dan seluruh layer tersusun rapih sehingga mudah dimengerti</p>
              </div>
              <div class="row mb-3">
                <h5 class="mt-4 mb-2">Tersedia Bantuan</h5>
                <p>Gabung ke grup privat untuk konsultasi desain supaya project anda lebih aesthetic.</p>
              </div>
            </div>
        </div>
      </div>
    </section>
    <!-- Mengapa End -->

    <!-- Data -->
    <section class="dataajoor mt-5 mb-5 p-5">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-3 stats">
            <div class="text-start">
              <h2 class="fw-bold">Statistik Ajoor</h2>
            </div>
          </div>
          <div class="col-lg-5 data">
            <div class="row">
              <div class="col col-lg-4 col-sm-1 border-end border-1 text-center">
                <h2 class="fw-bold">1500+</h2>
                <p>Download</p>
              </div>
              <div class="col col-lg-4 col-sm-1 border-end border-1 text-center">
                <h2 class="fw-bold">45+</h2>
                <p>Negara</p>
              </div>
              <div class="col col-lg-4 col-sm-1 text-center">
                <h2 class="fw-bold">500+</h2>
                <p>Aset</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Data End -->
@endsection