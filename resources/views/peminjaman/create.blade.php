@extends('layouts.admin_master')

@section('content')
<div class="container">
    <h1>Tambah Peminjaman</h1>
    <form action="{{ route('peminjaman.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="id_alat" class="form-label">ID Alat</label>
            <input type="number" class="form-control" id="id_alat" name="id_alat" required>
        </div>
        <div class="mb-3">
            <label for="id_peminjaman" class="form-label">ID Peminjaman</label>
            <input type="number" class="form-control" id="id_peminjaman" name="id_peminjaman" required>
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" required>
        </div>
        <div class="mb-3">
            <label for="tgl_peminjaman" class="form-label">Tanggal Peminjaman</label>
            <input type="date" class="form-control" id="tgl_peminjaman" name="tgl_peminjaman" required>
        </div>
        <div class="mb-3">
            <label for="kondisi_pinjam" class="form-label">Kondisi Pinjam</label>
            <select class="form-control" id="kondisi_pinjam" name="kondisi_pinjam" required>
                <option value="Baik">Baik</option>
                <option value="Rusak">Rusak</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('peminjaman.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
