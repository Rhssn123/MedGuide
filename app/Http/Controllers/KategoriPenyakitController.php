<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreKategoriPenyakitRequest;
use App\Http\Requests\UpdateKategoriPenyakitRequest;
use App\Models\KategoriPenyakit;

class KategoriPenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategorisp = KategoriPenyakit::all();
        return view('admin.penyakitA', ['kategorisp' => $kategorisp]);
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
     * 
     * 
     */
    public function store(StoreKategoriPenyakitRequest $request)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'kategori' => 'required',
            'nama' => 'required',
        ]);

        KategoriPenyakit::create([
            'kategori' => $validatedData['kategori'],
            'nama' => $validatedData['nama'],
        ]);
        
        // Redirect kembali ke halaman penyakitA
        return redirect('/admin.penyakitA')->with('success', 'Data berhasil disimpan.');

    }

    /**
     * Display the specified resource.
     */
    public function show(KategoriPenyakit $kategoriPenyakit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KategoriPenyakit $idkategori)
    {
        $kategorisp = KategoriPenyakit::find($idkategori);
        return view('admin.penyakitAedit', ['kategorisp' => $kategorisp]);
    }


    /**
     * Update the specified resource in storage.
     */

     public function update(UpdateKategoriPenyakitRequest $request, KategoriPenyakit $idkategori)
    {
        // Menggunakan parameter $kategoriPenyakit yang sudah diinisialisasi
        $validatedData = $request->validate([
            'kategori' => 'required',
            'nama' => 'required',
        ]);

        // Update data kategori penyakit berdasarkan ID
        $idkategori->update([
            'kategori' => $validatedData['kategori'],
            'nama' => $validatedData['nama'],
        ]);
            return redirect('/admin.penyakitA')->with('success', 'Kategori penyakit berhasil diperbarui!');
    }
    /**
     * Remove the specified resource from storage.
     */

     
    public function destroy($idkategori)
    {
        KategoriPenyakit::where('idkategori','=', $idkategori)->delete();
        return redirect('admin.penyakitA');
    }

    public function showAddForm()
    {
        $kategorisp = KategoriPenyakit::all();
        return view('admin.penyakitAadd', ['kategorisp' => $kategorisp]);
    }

    public function showEditForm()
    {
        $kategorisp = KategoriPenyakit::all();
        return view('admin.penyakitAedit', ['kategorisp' => $kategorisp]);
    }

}
