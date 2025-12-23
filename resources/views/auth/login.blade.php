@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">Login StuntSense</div>
            <div class="card-body">
                <form action="/user/dashboard"> <div class="mb-3">
                        <label>Email / Nomor HP</label>
                        <input type="text" class="form-control" placeholder="Masukkan Email atau No HP">
                    </div>
                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Masuk</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection