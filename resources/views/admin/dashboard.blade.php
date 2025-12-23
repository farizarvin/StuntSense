@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar p-3">
            <h5 class="text-muted">Admin Panel</h5>
            <ul class="nav flex-column">
                <li class="nav-item"><a class="nav-link active" href="#">Dashboard Monitoring</a></li>
                <li class="nav-item"><a class="nav-link" href="#">User Management</a></li>
                <li class="nav-item"><a class="nav-link" href="#">CMS (Konten)</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Security Logs</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Pusat Bantuan</a></li>
            </ul>
        </nav>

        <main class="col-md-10 ms-sm-auto px-md-4">
            <h2 class="mt-3">System Overview</h2>
            
            <div class="row mt-4">
                <div class="col-md-3">
                    <div class="card text-white bg-dark mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Total Pengguna</h5>
                            <p class="card-text fs-4">1,250 User</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-secondary mb-3">
                        <div class="card-body">
                            <h5 class="card-title">System Health</h5>
                            <p class="card-text fs-4">API: Online</p>
                        </div>
                    </div>
                </div>
            </div>

            <h4 class="mt-4">CMS - Kelola Konten Terbaru [cite: 103-105]</h4>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>Judul Konten</th>
                            <th>Kategori</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Resep Bubur Hati Ayam</td>
                            <td>Resep MPASI</td>
                            <td><span class="badge bg-warning">Review</span></td>
                            <td>
                                <button class="btn btn-sm btn-info">Edit</button>
                                <button class="btn btn-sm btn-danger">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Tips Mencegah Stunting</td>
                            <td>Artikel</td>
                            <td><span class="badge bg-success">Published</span></td>
                            <td>
                                <button class="btn btn-sm btn-info">Edit</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>
@endsection