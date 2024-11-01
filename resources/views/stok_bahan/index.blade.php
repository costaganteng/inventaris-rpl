@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Stok Bahan</h1>
    <a href="{{ route('stok_bahan.create') }}" class="btn btn-primary">Tambah Stok Bahan</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Bahan</th>
                <th>Stok Awal</th>
                <th>Stok Tambah</th>
                <th>Stok Keluar</th>
                <th>Stok Sisa</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stokBahan as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama_bahan }}</td>
                <td>{{ $item->stok_awal }}</td>
                <td>{{ $item->stok_tambah }}</td>
                <td>{{ $item->stok_keluar }}</td>
                <td>{{ $item->stok_sisa }}</td>
                <td>
                    <a href="{{ route('stok_bahan.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('stok_bahan.destroy', $item->id) }}" method="POST" style="display:inline-block;">
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
