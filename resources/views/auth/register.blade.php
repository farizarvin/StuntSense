@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow">
            <div class="card-header bg-success text-white">Registrasi Akun Baru & Profil Anak</div>
            <div class="card-body">
                <form>
                    <h5 class="mb-3">Data Ibu</h5>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Nama Lengkap Ibu</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Email / No HP</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Password</label>
                            <input type="password" class="form-control">
                        </div>
                    </div>

                    <hr>

                    <h5 class="mb-3">Data Profil Anak</h5>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Nama Anak</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Jenis Kelamin</label>
                            <select class="form-select">
                                <option>Laki-laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Berat Lahir (kg)</label>
                            <input type="number" step="0.1" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Tinggi Lahir (cm)</label>
                            <input type="number" step="0.1" class="form-control">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success w-100 mt-3">Daftar & Masuk</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection