@extends('layouts.admin_master')

@section('content')
<div class="container">
    <h1>Daftar Peminjaman</h1>
    <a href="{{ route('peminjaman.create') }}" class="btn btn-primary">Tambah Peminjaman</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID Alat</th>
                <th>ID Peminjaman</th>
                <th>Jumlah</th>
                <th>Tanggal Peminjaman</th>
                <th>Kondisi Pinjam</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($peminjaman as $item)
                <tr>
                    <td>{{ $item->id_alat }}</td>
                    <td>{{ $item->id_peminjaman }}</td>
                    <td>{{ $item->jumlah }}</td>
                    <td>{{ $item->tgl_peminjaman }}</td>
                    <td>{{ $item->kondisi_pinjam }}</td>
                    <td>
                        <a href="{{ route('peminjaman.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('peminjaman.destroy', $item->id) }}" method="POST" style="display:inline;">
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
