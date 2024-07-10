<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faskes;

class WelcomeController extends Controller
{
    public function index(Request $request)
    {
        $jenis_faskes_id = $request->input('jenis_faskes_id');
        $query = Faskes::query();

        if ($jenis_faskes_id) {
            $query->where('jenis_faskes_id', $jenis_faskes_id);
        }

        $list_faskes = $query->get();

        return view('welcome', compact('list_faskes', 'jenis_faskes_id'));
    }

    public function create()
    {
        // Menampilkan form untuk membuat faskes baru
        return view('create_faskes');
    }

    public function store(Request $request)
    {
        // Validasi data input
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

        // Membuat faskes baru
        Faskes::create($request->all());

        // Redirect ke halaman utama dengan pesan sukses
        return redirect()->route('welcome')->with('success', 'Faskes created successfully.');
    }
    
}
