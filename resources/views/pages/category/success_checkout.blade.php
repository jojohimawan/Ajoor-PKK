@extends('templates.master')

@section('content')
<div class="container-fluid" style="margin-top: 10%;">
    <div class="row align-items-center">
        <div class="col align-self-center">
            <div class="text-center">
                <img src="{{ asset('assets/illustration_checkout.png') }}" class="img-fluid text-center sukses-co mb-5" alt="">
            </div>          
            <h2 class="fw-bold mb-2 freebie-card-title mb-2 text-center">Checkout Berhasil</h2>
            <p class="text-center mb-5">Silahkan mulai membuat project terbaik anda<br>
                dengan aset dari kami.</p>
        </div>
        
        @if ($data->type == 1)
            <a href="{{ asset('data/'. $data->name .'.fig') }}" class="text-center co-home">
                <button class="btn" type="submit">Silahkan Download Aset Anda</button>
            </a>
        @endif
        @if ($data->type == 2)
            <a href="https://chat.whatsapp.com/BBU3yiN3Jv33fQghUyT1Zf" class="text-center co-home">
                <button class="btn" type="submit">Grup Whatsapp</button>
            </a>
        @endif
        {{-- <a href="" class="text-center co-home">
            <button class="btn" type="submit">HOME</button>
        </a> --}}
    </div>
</div>
@endsection