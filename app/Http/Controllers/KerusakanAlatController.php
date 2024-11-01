<?php

namespace App\Http\Controllers;

use App\Models\KerusakanAlat;
use Illuminate\Http\Request;

class KerusakanAlatController extends Controller
{
    // Menampilkan daftar kerusakan alat
    public function index()
    {
        $kerusakanAlat = KerusakanAlat::all();
        return view('kerusakan_alat.index', compact('kerusakanAlat'));
    }

    // Menampilkan formulir untuk menambah kerusakan alat
    public function create()
    {
        return view('kerusakan_alat.create');
    }

    // Menyimpan data kerusakan alat ke database
    public function store(Request $request)
    {
        $request->validate([
            'id_alat' => 'required|exists:inventaris,id',
            'spesifikasi' => 'nullable|string',
            'kerusakan' => 'required|string',
            'tgl_kerusakan' => 'required|date',
            'keterangan' => 'nullable|string',
        ]);

        KerusakanAlat::create($request->all());
        return redirect()->route('kerusakan_alat.index')->with('success', 'Data kerusakan alat berhasil ditambahkan.');
    }

    // Menampilkan formulir untuk mengedit kerusakan alat
    public function edit($id)
    {
        $kerusakanAlat = KerusakanAlat::findOrFail($id);
        return view('kerusakan_alat.edit', compact('kerusakanAlat'));
    }

    // Memperbarui data kerusakan alat
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_alat' => 'required|exists:inventaris,id',
            'spesifikasi' => 'nullable|string',
            'kerusakan' => 'required|string',
            'tgl_kerusakan' => 'required|date',
            'keterangan' => 'nullable|string',
        ]);

        $kerusakanAlat = KerusakanAlat::findOrFail($id);
        $kerusakanAlat->update($request->all());
        return redirect()->route('kerusakan_alat.index')->with('success', 'Data kerusakan alat berhasil diperbarui.');
    }

    // Menghapus data kerusakan alat
    public function destroy($id)
    {
        $kerusakanAlat = KerusakanAlat::findOrFail($id);
        $kerusakanAlat->delete();
        return redirect()->route('kerusakan_alat.index')->with('success', 'Data kerusakan alat berhasil dihapus.');
    }
}
