@extends('layouts.admin_master')

@section('content')
<div class="container">
    <h1>Daftar Kerusakan Alat</h1>
    <a href="{{ route('kerusakan_alat.create') }}" class="btn btn-primary">Tambah Kerusakan Alat</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID Alat</th>
                <th>Spesifikasi</th>
                <th>Kerusakan</th>
                <th>Tanggal Kerusakan</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kerusakanAlat as $item)
                <tr>
                    <td>{{ $item->id_alat }}</td>
                    <td>{{ $item->spesifikasi }}</td>
                    <td>{{ $item->kerusakan }}</td>
                    <td>{{ $item->tgl_kerusakan }}</td>
                    <td>{{ $item->keterangan }}</td>
                    <td>
                        <a href="{{ route('kerusakan_alat.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('kerusakan_alat.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
