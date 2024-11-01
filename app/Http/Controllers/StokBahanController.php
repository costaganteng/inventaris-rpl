<?php

namespace App\Http\Controllers;

use App\Models\StokBahan;
use Illuminate\Http\Request;

class StokBahanController extends Controller
{
    public function index()
    {
        $stokBahan = StokBahan::all();
        return view('stok_bahan.index', compact('stokBahan'));
    }

    public function create()
    {
        return view('stok_bahan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_bahan' => 'required',
            'stok_awal' => 'required|integer',
            'stok_tambah' => 'required|integer',
            'stok_keluar' => 'required|integer',
            'stok_sisa' => 'required|integer',
        ]);

        StokBahan::create($request->all());
        return redirect()->route('stok_bahan.index')->with('success', 'Stok Bahan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $stokBahan = StokBahan::find($id);
        return view('stok_bahan.edit', compact('stokBahan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_bahan' => 'required',
            'stok_awal' => 'required|integer',
            'stok_tambah' => 'required|integer',
            'stok_keluar' => 'required|integer',
            'stok_sisa' => 'required|integer',
        ]);

        $stokBahan = StokBahan::find($id);
        $stokBahan->update($request->all());
        return redirect()->route('stok_bahan.index')->with('success', 'Stok Bahan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        StokBahan::destroy($id);
        return redirect()->route('stok_bahan.index')->with('success', 'Stok Bahan berhasil dihapus.');
    }
}
