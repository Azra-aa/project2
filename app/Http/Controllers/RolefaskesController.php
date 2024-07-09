<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faskes;
use App\Models\Kabkota;
use App\Models\JenisFaskes;
use App\Models\Kategori;

class RolefaskesController extends Controller
{
    public function index()
    {
        $list_faskes = Faskes::all();
        return view('rolefaskes.index', compact('list_faskes'));
    }

    public function create()
    {
        $kabkotas = Kabkota::all();
        $jenis_faskes = JenisFaskes::all();
        $kategoris = Kategori::all();
        
        return view('rolefaskes.create', compact('kabkotas', 'jenis_faskes', 'kategoris'));
    }

    // Menyimpan faskes baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'nama_pengelola' => 'required|string|max:45',
            'alamat' => 'required|string|max:100',
            'website' => 'nullable|string|max:45',
            'email' => 'nullable|string|max:45',
            'kabkota_id' => 'required|exists:kabkotas,id',
            'rating' => 'required|integer',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'jenis_faskes_id' => 'required|exists:jenis_faskes,id',
            'kategori_id' => 'required|exists:kategoris,id',
        ]);

        Faskes::create($request->all());

        return redirect()->route('rolefaskes.index')
                         ->with('success', 'Faskes created successfully.');
    }

    // Menampilkan detail faskes
    public function show(Faskes $faskes)
    {
        return view('rolefaskes.show', compact('faskes'));
    }

    // Menampilkan form untuk mengedit faskes
    public function edit($id)
    {
        $faskes = Faskes::find($id);
        return view('rolefaskes.edit', compact('faskes'));
    }

    // Mengupdate faskes di database
    public function update(Request $request, Faskes $faskes)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'nama_pengelola' => 'required|string|max:45',
            'alamat' => 'required|string|max:100',
            'website' => 'nullable|string|max:45',
            'email' => 'nullable|string|max:45',
            'kabkota_id' => 'required|exists:kabkotas,id',
            'rating' => 'required|integer',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'jenis_faskes_id' => 'required|exists:jenis_faskes,id',
            'kategori_id' => 'required|exists:kategoris,id',
        ]);

        $success = $faskes->update($request->all());

        if (!$success) {
            return view('rolefaskes.edit', compact('faskes'));
        }

        return redirect()->route('rolefaskes.index')
                         ->with('success', 'Faskes updated successfully.');
    }

    // Menghapus faskes dari database
    public function destroy(Faskes $faskes)
    {
        $faskes->delete();

        return redirect()->route('rolefaskes.index')
                         ->with('success', 'Faskes deleted successfully.');
    }
}
