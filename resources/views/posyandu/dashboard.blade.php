@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Dashboard Posyandu Wilayah Mawar</h2>
    
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card bg-primary text-white text-center p-3">
                <h3>50</h3>
                <small>Total Balita Terdaftar</small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-danger text-white text-center p-3">
                <h3>5</h3>
                <small>Terindikasi Stunting</small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-success text-white text-center p-3">
                <h3>12</h3>
                <small>Agenda Kegiatan Bulan Ini</small>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Manajemen Jadwal Kegiatan</span>
                    <button class="btn btn-sm btn-primary">+ Tambah Jadwal</button>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Kegiatan</th>
                                <th>Tanggal</th>
                                <th>Layanan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Posyandu Mawar - Vitamin A</td>
                                <td>20 Jan 2025</td>
                                <td>Imunisasi</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Input Data Balita (Manual)</div>
                <div class="card-body">
                    <p class="text-muted small">Digunakan jika Ibu tidak memiliki aplikasi.</p>
                    <form>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Cari Nama Anak...">
                            <button class="btn btn-outline-secondary">Cari</button>
                        </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection