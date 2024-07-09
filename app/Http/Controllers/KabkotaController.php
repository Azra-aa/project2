<?php

namespace App\Http\Controllers;

use App\Models\Kabkota;
use Illuminate\Http\Request;

class KabkotaController extends Controller
{
    // Menampilkan daftar kabkota
    public function kabkota()
    {
        $list_kabkotas = Kabkota::all();
        return view('admin.kabkota.index', compact('list_kabkotas'));
    }

    // Menampilkan form untuk membuat kabkota baru
    public function create()
    {
        return view('admin.kabkota.create');
    }

    // Menyimpan kabkota baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'provinsi_id' => 'required|exists:provinsis,id',
        ]);

        Kabkota::create($request->all());

        return redirect()->route('admin.kabkota.index')
                         ->with('success', 'Kabkota created successfully.');
    }

    // Menampilkan detail kabkota
    public function show(Kabkota $kabkota)
    {
        return view('admin.kabkota.show', compact('kabkota'));
    }

    // Menampilkan form untuk mengedit kabkota
    public function edit(int $id)
    {
        $kabkota = Kabkota::find($id);
        return view('admin.kabkota.edit', compact('kabkota'));
    }

    // Mengupdate kabkota di database
    public function update(Request $request,int $id)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'provinsi_id' => 'required|exists:provinsis,id',
        ]);

        $kabkota = Kabkota::find($id);
        $kabkota->update($request->all());

        return redirect()->route('admin.kabkota.index')
                         ->with('success', 'Kabkota updated successfully.');
    }

    // Menghapus kabkota dari database
    public function destroy(int $id)
    {
        $kabkota = Kabkota::find($id);
        $kabkota->delete();

        return redirect()->route('admin.kabkota.index')
                         ->with('success', 'Kabkota deleted successfully.');
    }
}
