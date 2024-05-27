<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreApotekRequest;
use App\Http\Requests\UpdateApotekRequest;
use App\Models\Apotek;

class ApotekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $namaApotek = Apotek::all();
        return view('apotekA', ['namaApotek' => $namaApotek]);
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
    public function store(StoreApotekRequest $request)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'namaapotek' => 'required',
            'alamat' => 'required',
        ]);

        Apotek::create([
            'namaapotek' => $validatedData['namaapotek'],
            'alamat' => $validatedData['alamat'],
        ]);
        
        // Redirect kembali ke halaman penyakitA
        return redirect('/apotekA')->with('success', 'Data berhasil disimpan.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Apotek $Apotek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Apotek $idkategori)
    {
        $namaApotek = Apotek::find($idkategori);
        return view('apotekAedit', ['namaApotek' => $namaApotek]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateApotekRequest $request, Apotek $idkategori)
    {
        // Menggunakan parameter $kategoriPenyakit yang sudah diinisialisasi
        $validatedData = $request->validate([
            'namaapotek' => 'required',
            'alamat' => 'required',
        ]);

        // Update data kategori penyakit berdasarkan ID
        $idkategori->update([
            'namaapotek' => $validatedData['namaapotek'],
            'alamat' => $validatedData['alamat'],
        ]);
            return redirect('/apotekA')->with('success', 'Kategori penyakit berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idkategori)
    {
        Apotek::where('idkategori','=', $idkategori)->delete();
        return redirect('apotekA');
    }

    public function showAddForm()
    {
        $namaApotek = Apotek::all();
        return view('apotekAadd', ['namaApotek' => $namaApotek]);
    }

    public function showEditForm()
    {
        $namaApotek = Apotek::all();
        return view('apotekAedit', ['namaApotek' => $namaApotek]);
    }
}
