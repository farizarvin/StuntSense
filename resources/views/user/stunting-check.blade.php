@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mb-4">Deteksi Stunting (AI Analysis)</h3>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card shadow-sm">
                <div class="card-body">
                    <form>
                        {{-- Baris 1: Tanggal & Jenis Kelamin --}}
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Tanggal Pengukuran</label>
                                <input type="date" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Jenis Kelamin</label>
                                <select class="form-select" required>
                                    <option value="" selected disabled>Pilih Jenis Kelamin</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>

                        {{-- Baris 2: Umur & Tinggi Badan --}}
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Umur (bulan)</label>
                                <input type="number" class="form-control" placeholder="Contoh: 24" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Tinggi Badan (cm)</label>
                                <input type="number" step="0.1" class="form-control" required>
                            </div>
                        </div>

                        {{-- Baris 3: Berat Badan --}}
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Berat Badan (kg)</label>
                                <input type="number" step="0.1" class="form-control" required>
                            </div>
                        </div>

                        {{-- Upload Foto --}}
                        <div class="mb-3">
                            <label class="form-label fw-bold">Upload Foto Anak (Full Body)</label>
                            <input class="form-control" type="file" id="formFile">
                            <div class="form-text text-danger">
                                *Pastikan foto seluruh badan terlihat jelas. Gunakan panduan garis bantu di layar kamera.
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 py-2">
                            Mulai Analisis AI
                        </button>
                    </form>

                    {{-- Hasil Analisis (Hidden by default) --}}
                    <div class="alert alert-success mt-4 d-none" id="resultArea">
                        <h5>Hasil Analisis:</h5>
                        <p>Status Prediksi: <strong>Normal</strong> (Akurasi: 95%)</p>
                        <p>Rekomendasi: <em>Pertahankan gizi seimbang dan rutin kontrol ke Posyandu.</em></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection