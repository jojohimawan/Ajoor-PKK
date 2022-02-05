@extends('templates.auth')

@section('title', 'Ajoor | Registration')

@section('content')
    <section class="login-user">
      <div class="left p-5">
        <a href="{{ route('home') }}"><img class="mb-5" src="{{ asset('assets/Logo.jpg') }}" alt="" width="48" height="60"></a>

        <h2 class="fw-bold mb-2 freebie-card-title text-start">Buat Akun</h2>
        <p class="text-start mb-5">Buat akun untuk masuk ke Ajoor.</p>
        <form action="{{ route('user.register') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Masukkan username anda" value="{{ old('username') }}" required>
            @error('username')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan email anda" value="{{ old('email') }}" required>
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="mb-5">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Masukkan password anda" required>
            @error('password')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="d-grid gap-2">
              <button type="submit" class="btn btn-success freebie-card-dl-btn mb-3">Buat Akun</button>
              <a href="{{ route('user.login') }}" class="btn btn-success freebie-card-dl-btn register-btn">Login Page</a>
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