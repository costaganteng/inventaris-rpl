@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Peminjaman</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('peminjaman.create') }}" class="btn btn-primary mb-3">Tambah Peminjaman</a>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Alat</th>
                <th>Peminjam</th>
                <th>Jumlah</th>
                <th>Tanggal Peminjaman</th>
                <th>Kondisi Pinjam</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($peminjaman as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->inventaris->nama }}</td>
                <td>{{ $item->user->name }}</td>
                <td>{{ $item->jumlah }}</td>
                <td>{{ $item->tgl_peminjaman }}</td>
                <td>{{ $item->kondisi_pinjam }}</td>
                <td>
                    <a href="{{ route('peminjaman.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('peminjaman.destroy', $item->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus peminjaman ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
