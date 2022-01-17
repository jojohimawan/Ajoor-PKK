@extends('templates.master')

@section('content')
    <!-- Header -->
    <section class="uikit-header mt-5 mb-5 p-5">
        <div class="container">
            <div class="text-center">
                <h1 class="display-5 fw-bold lh-1 mb-3">Unduh UI Kit</h1>
                <p class="lead">Pilihan UI Kit untuk percepat project terbaik anda</p>
            </div>
        </div>
    </section>    
    <!-- Header End -->

    <!-- Products -->
    <section class="uikit-products mb-5 p-5">
      <div class="container">
          <div class="row"> <!-- Content Row 1 Start Here -->
            <div class="col-lg-4 col-sm-1">
              <div class="card"> <!-- Content Item 1 Start-->
                <div class="cardhead">
                  <img src="{{ asset('assets/telemedic.png') }}" class="card-img-top" alt="...">
                  <a href="" class="d-flex justify-content-center overlay">
                    <img src="{{ asset('assets/download.png') }}" class="align-self-center">
                  </a>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title">Telemedic App</h5>
                      <p class="card-text">UI Kit</p>
                    </div>
                    <div class="col text-end">
                      <a href="#">
                        <button class="btn btn-primary freebie">FREEBIE</button>  
                      </a>
                    </div>
                  </div>
                </div>
              </div> <!-- Content Item 1 End-->
            </div>
            {{-- <div class="col-lg-4 col-sm-1">
              <div class="card"> <!-- Content Item 2 Start-->
                <div class="cardhead">
                  <img src="{{ asset('assets/healthico.png') }}" class="card-img-top" alt="...">
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
            </div> --}}
            {{-- <div class="col-lg-4 col-sm-1">
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
            </div> --}}
          </div> <!-- Content Row 1 End Here-->

          {{-- <div class="row"> <!-- Content Row 2 Start Here -->

          </div> <!-- Content Row 2 End Here-->

          <div class="row"> <!-- Content Row 3 Start Here -->

          </div> <!-- Content Row 3 End Here--> --}}

      </div>
    </section>
    <!-- Products End -->

    <!-- Pagination -->
    <div class="uikit-pagination">
      <div class="container">
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center">
            <li class="page-item">
              <a class="page-link pageicon" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li class="page-item active"><a class="page-link aktif" href="#">1</a></li>
            <li class="page-item"><a class="page-link nonaktif" href="#">2</a></li>
            <li class="page-item"><a class="page-link nonaktif" href="#">3</a></li>
            <li class="page-item"><a class="page-link nonaktif" href="#">4</a></li>
            <li class="page-item"><a class="page-link nonaktif" href="#">5</a></li>
            <li class="page-item">
              <a class="page-link pageicon" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- Pagination End -->
@endsection