@extends('templates.auth')

@section('content')
    <section class="login-user">
      <div class="left p-5">
        <a href="{{ route('home') }}"><img class="mb-5" src="{{ asset('assets/Logo.jpg') }}" alt="" width="48" height="60"></a>

        @if(session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        @if(session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        <h2 class="fw-bold mb-2 freebie-card-title text-start">Masuk Akun</h2>
        <p class="text-start mb-5">Masuk untuk unduh aset.</p>
        <form action="{{ route('user.login') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan email anda" aria-describedby="emailHelp" autofocus required value="{{ old('email') }}">
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="mb-5">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan password anda" required>
          </div>
          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-success freebie-card-dl-btn mb-3">Masuk Akun</button>
            <a href="{{ route('user.register') }}" class="btn btn-success freebie-card-dl-btn register-btn">Daftar</a>
            {{-- <button class="btn btn-success freebie-card-dl-btn register-btn">Daftar</button> --}}
          </div>
        </form>
      </div>
      <div class="right">
        <img src="{{ asset('assets/Group 3.png') }}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="480" height="480" loading="lazy">
        <h2 class="fw-bold mt-5 mb-3 freebie-card-title text-center">Design Less,<br>Develop More</h2>
        <p class="text-center mb-5">Kami menyediakan ratusan aset desain pilihan<br>
          untuk project terbaik para desainer,<br> 
          developer, dan business owner.</p>
      </div>
  </section>
@endsection