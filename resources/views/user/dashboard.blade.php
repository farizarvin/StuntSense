@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-3">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active">Dashboard</a>
            <a href="{{ route('user.check') }}" class="list-group-item list-group-item-action">Deteksi Stunting (AI)</a>
            <a href="/user/nutrition" class="list-group-item list-group-item-action">Tracking Nutrisi</a>
            <a href="/user/education" class="list-group-item list-group-item-action">Edukasi & Resep</a>
            <a href="#" class="list-group-item list-group-item-action">Pusat Bantuan</a>
        </div>
    </div>

    <div class="col-md-9">
        <h3>Halo, Bunda!</h3>
        
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card text-white bg-info mb-3">
                    <div class="card-header">Status Gizi Terakhir</div>
                    <div class="card-body">
                        <h2 class="card-title">Normal</h2>
                        <p class="card-text">Berdasarkan pengukuran terakhir.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-8">
                <div class="card border-warning mb-3">
                    <div class="card-header bg-warning text-dark">Jadwal Imunisasi Terdekat</div>
                    <div class="card-body text-dark">
                        <h5 class="card-title">Imunisasi DPT-HB-Hib 1</h5>
                        <p class="card-text">Tanggal: 25 Desember 2025 di Posyandu Melati</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">Grafik Pertumbuhan (BB/TB)</h5>
                <div class="alert alert-secondary text-center" style="height: 200px; line-height: 200px;">
                    [Area Grafik Visualisasi Data]
                </div>
            </div>
        </div>
    </div>
</div>
@endsection