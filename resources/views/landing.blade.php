@extends('layouts.app')

@section('content')
<div class="p-5 mb-4 bg-light rounded-3 shadow-sm text-center">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold text-primary">Selamat Datang di StuntSense</h1>
        <p class="col-md-8 fs-4 mx-auto">
            Platform digital berbasis web untuk deteksi dini risiko stunting menggunakan AI, 
            pemantauan gizi anak, serta integrasi layanan Posyandu digital.
        </p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mt-4">
            <a href="{{ url('/login') }}" class="btn btn-primary btn-lg px-4 gap-3">Masuk Aplikasi</a>
            
            <a href="{{ url('/register') }}" class="btn btn-outline-secondary btn-lg px-4">Daftar Akun</a>
        </div>
    </div>
</div>
@endsection