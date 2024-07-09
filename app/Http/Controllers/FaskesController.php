<?php

namespace App\Http\Controllers;

use App\Models\Faskes; 
use Illuminate\Http\Request;

class FaskesController extends Controller
{
    public function faskes()
    {
        $list_faskes = Faskes::all();
        return view('admin.faskes.index', compact('list_faskes'));
    }

    // Menampilkan form untuk membuat faskes baru
    public function create()
    {
        return view('admin.faskes.create');
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

        return redirect()->route('admin.faskes.index')
                         ->with('success', 'Faskes created successfully.');
    }

    // Menampilkan detail faskes
    public function show(Faskes $faskes)
    {
        return view('admin.faskes.show', compact('faskes'));
    }

    // Menampilkan form untuk mengedit faskes
    public function edit(int $id)
    {
        $faskes = Faskes::find($id);
        return view('admin.faskes.edit', compact('faskes'));
    }

    // Mengupdate faskes di database
    public function update(Request $request,int $id)
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

        $faskes = Faskes::find($id);
        $success = $faskes->update($request->all());

        if (!$success) {
            return view('admin.faskes.edit', compact('faskes'));
        }

        return redirect()->route('admin.faskes.index')
                         ->with('success', 'Faskes updated successfully.');
    }

    // Menghapus faskes dari database
    public function destroy(int $id)
    {
        $faskes = Faskes::find($id);    
        $faskes->delete(); 
        
        return redirect()->route('admin.faskes.index')
                         ->with('success', 'Faskes deleted successfully.');
    }
}
