@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Stok Bahan</h1>
    <form action="{{ route('stok_bahan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama Bahan</label>
            <input type="text" name="nama_bahan" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Stok Awal</label>
            <input type="number" name="stok_awal" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Stok Tambah</label>
            <input type="number" name="stok_tambah" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Stok Keluar</label>
            <input type="number" name="stok_keluar" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Stok Sisa</label>
            <input type="number" name="stok_sisa" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('stok_bahan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
