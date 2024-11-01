<?php

namespace App\Http\Controllers;

use App\Models\JumlahLaboratorium;
use Illuminate\Http\Request;

class JumlahLaboratoriumController extends Controller
{
    public function index()
    {
        $jumlahLaboratorium = JumlahLaboratorium::all();
        return view('jumlah_laboratorium.index', compact('jumlahLaboratorium'));
    }

    public function create()
    {
        return view('jumlah_laboratorium.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'hari' => 'required|string|max:15',
            'tgl' => 'required|date',
            'mapel' => 'required|string|max:100',
            'kelas' => 'required|string|max:50',
            'guru' => 'required|string|max:100',
        ]);

        JumlahLaboratorium::create($request->all());
        return redirect()->route('jumlah_laboratorium.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $jumlahLaboratorium = JumlahLaboratorium::find($id);
        return view('jumlah_laboratorium.edit', compact('jumlahLaboratorium'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'hari' => 'required|string|max:15',
            'tgl' => 'required|date',
            'mapel' => 'required|string|max:100',
            'kelas' => 'required|string|max:50',
            'guru' => 'required|string|max:100',
        ]);

        $jumlahLaboratorium = JumlahLaboratorium::find($id);
        $jumlahLaboratorium->update($request->all());
        return redirect()->route('jumlah_laboratorium.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        JumlahLaboratorium::destroy($id);
        return redirect()->route('jumlah_laboratorium.index')->with('success', 'Data berhasil dihapus.');
    }
}
