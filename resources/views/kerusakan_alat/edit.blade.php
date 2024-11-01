@extends('layouts.admin_master')

@section('content')
<div class="container">
    <h1>Edit Kerusakan Alat</h1>
    <form action="{{ route('kerusakan_alat.update', $kerusakanAlat->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="id_alat" class="form-label">ID Alat</label>
            <input type="number" class="form-control" id="id_alat" name="id_alat" value="{{ $kerusakanAlat->id_alat }}" required>
        </div>
        <div class="mb-3">
            <label for="spesifikasi" class="form-label">Spesifikasi</label>
            <textarea class="form-control" id="spesifikasi" name="spesifikasi">{{ $kerusakanAlat->spesifikasi }}</textarea>
        </div>
        <div class="mb-3">
            <label for="kerusakan" class="form-label">Kerusakan</label>
            <textarea class="form-control" id="kerusakan" name="kerusakan" required>{{ $kerusakanAlat->kerusakan }}</textarea>
        </div>
        <div class="mb-3">
            <label for="tgl_kerusakan" class="form-label">Tanggal Kerusakan</label>
            <input type="date" class="form-control" id="tgl_kerusakan" name="tgl_kerusakan" value="{{ $kerusakanAlat->tgl_kerusakan }}" required>
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <textarea class="form-control" id="keterangan" name="keterangan">{{ $kerusakanAlat->keterangan }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
</div>
@endsection
