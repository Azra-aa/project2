<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function provinsi()
    {
        $list_provinsis = Provinsi::all();
        return view('admin.provinsi.index', compact('list_provinsis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.provinsi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:45',
            'ibukota' => 'required|max:45',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        Provinsi::create($request->all());

        return redirect()->route('admin.provinsi.index')
                         ->with('success', 'Provinsi created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Provinsi $provinsi)
    {
        return view('admin.provinsi.show', compact('provinsi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $provinsi = Provinsi::find($id);
        return view('admin.provinsi.edit', compact('provinsi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,int $id)
    {
        $request->validate([
            'nama' => 'required|max:45',
            'ibukota' => 'required|max:45',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        $provinsi = Provinsi::find($id);
        $provinsi->update($request->all());

        return redirect()->route('admin.provinsi.index')
                         ->with('success', 'Provinsi updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $provinsi = Provinsi::find($id);
        $provinsi->delete();
                
        return redirect()->route('admin.provinsi.index')
                         ->with('success', 'Provinsi deleted successfully.');
    }
}
