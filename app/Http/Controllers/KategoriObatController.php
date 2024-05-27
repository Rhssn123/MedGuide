<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKategoriObatRequest;
use App\Http\Requests\UpdateKategoriObatRequest;
use App\Models\KategoriObat;

class KategoriObatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoriso = KategoriObat::all();
        return view('admin.obatA', ['kategoriso' => $kategoriso]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKategoriObatRequest $request)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'kategoriObat' => 'required',
            'nama' => 'required',
        ]);

        KategoriObat::create([
            'kategoriObat' => $validatedData['kategoriObat'],
            'nama' => $validatedData['nama'],
        ]);
        
        // Redirect kembali ke halaman penyakitA
        return redirect('/admin.obatA')->with('success', 'Data berhasil disimpan.');

    }

    /**
     * Display the specified resource.
     */
    public function show(KategoriObat $KategoriObat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KategoriObat $idkategori)
    {
        $kategoriso = KategoriObat::find($idkategori);
        return view('admin.obatAedit', ['kategoriso' => $kategoriso]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKategoriObatRequest $request, KategoriObat $idkategori)
    {
        // Menggunakan parameter $kategoriPenyakit yang sudah diinisialisasi
        $validatedData = $request->validate([
            'kategoriObat' => 'required',
            'nama' => 'required',
        ]);

        // Update data kategori penyakit berdasarkan ID
        $idkategori->update([
            'kategoriObat' => $validatedData['kategoriObat'],
            'nama' => $validatedData['nama'],
        ]);
            return redirect('/admin.obatA')->with('success', 'Kategori penyakit berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idkategori)
    {
        KategoriObat::where('idkategori','=', $idkategori)->delete();
        return redirect('admin.obatA');
    }

    public function showAddForm()
    {
        $kategoriso = KategoriObat::all();
        return view('admin.obatAadd', ['kategoriso' => $kategoriso]);
    }

    public function showEditForm()
    {
        $kategoriso = KategoriObat::all();
        return view('admin.obatAedit', ['kategoriso' => $kategoriso]);
    }
}
