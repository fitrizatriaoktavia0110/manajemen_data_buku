<?php

namespace App\Http\Controllers;

use App\Models\Penerbit;
use Illuminate\Http\Request;

class PenerbitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allPenerbit = Penerbit::all();
        return view('penerbit.index', compact('allPenerbit'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penerbit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // buat validasi data
        $validatedData = $request->validate([
            'nama_penerbit' => 'required|string|max:100',
        ]);

        // simpan data ke database
        Penerbit::create($validatedData);

        return redirect()->route('penerbit.index')->with('success', 'Penerbit berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Penerbit $penerbit)
    {
        return view('penerbit.show', compact('penerbit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penerbit $penerbit)
    {
        return view('penerbit.edit', compact('penerbit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penerbit $penerbit)
    {
        // buat validasi data
        $validatedData = $request->validate([
            'nama_penerbit' => 'required|string|max:100',
        ]);

        // update data di database
        $penerbit->update($validatedData);

        return redirect()->route('penerbit.index')->with('success', 'Penerbit berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penerbit $penerbit)
    {
        // hapus data dari database
        $penerbit->delete();

        return redirect()->route('penerbit.index')->with('success', 'Penerbit berhasil dihapus.');
    }
}
