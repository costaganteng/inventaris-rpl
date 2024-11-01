@extends('layouts.admin_master')

@section('content')
<div class="container">
    <h1>Edit Data Laboratorium</h1>
    <form action="{{ route('jumlah_laboratorium.update', $jumlahLaboratorium->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Hari</label>
            <input type="text" name="hari" class="form-control" value="{{ $jumlahLaboratorium->hari }}" required>
        </div>
        <div class="form-group">
            <label>Tanggal</label>
            <input type="date" name="tgl" class="form-control" value="{{ $jumlahLaboratorium->tgl }}" required>
        </div>
        <div class="form-group">
            <label>Mapel</label>
            <input type="text" name="mapel" class="form-control" value="{{ $jumlahLaboratorium->mapel }}" required>
        </div>
        <div class="form-group">
            <label>Kelas</label>
            <input type="text" name="kelas" class="form-control" value="{{ $jumlahLaboratorium->kelas }}" required>
        </div>
        <div class="form-group">
            <label>Guru</label>
            <input type="text" name="guru" class="form-control" value="{{ $jumlahLaboratorium->guru }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
