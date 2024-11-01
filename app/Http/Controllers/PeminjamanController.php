<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    // Menampilkan daftar peminjaman
    public function index()
    {
        $peminjaman = Peminjaman::all();
        return view('peminjaman.index', compact('peminjaman'));
    }

    // Menampilkan formulir untuk menambah peminjaman
    public function create()
    {
        return view('peminjaman.create');
    }

    // Menyimpan data peminjaman ke database
    public function store(Request $request)
    {
        $request->validate([
            'id_alat' => 'required|exists:inventaris,id',
            'id_peminjaman' => 'required|exists:users,id',
            'jumlah' => 'required|integer',
            'tgl_peminjaman' => 'required|date',
            'kondisi_pinjam' => 'required|in:Baik,Rusak',
        ]);

        Peminjaman::create($request->all());
        return redirect()->route('peminjaman.index')->with('success', 'Peminjaman berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        return view('peminjaman.edit', compact('peminjaman'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_alat' => 'required|exists:inventaris,id',
            'id_peminjaman' => 'required|exists:users,id',
            'jumlah' => 'required|integer',
            'tgl_peminjaman' => 'required|date',
            'kondisi_pinjam' => 'required|in:Baik,Rusak',
        ]);

        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->update($request->all());
        return redirect()->route('peminjaman.index')->with('success', 'Peminjaman berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->delete();
        return redirect()->route('peminjaman.index')->with('success', 'Peminjaman berhasil dihapus.');
    }
}
