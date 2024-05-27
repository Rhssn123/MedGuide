<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRiwayatRequest;
use App\Http\Requests\UpdateRiwayatRequest;
use App\Models\Riwayat;

class RiwayatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $riwayats = Riwayat::all();
        return view('riwayatA', ['riwayats' => $riwayats]);
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
    public function store(StoreRiwayatRequest $request)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'idpengguna' => 'required',
            'idobat' => 'required',
            'ketegoriobat' => 'required',
            'nama' => 'required',
            'stok' => 'required',
        ]);

        Riwayat::create([
            'idpengguna' => $validatedData['idpengguna'],
            'idobat' => $validatedData['idobat'],
            'ketegoriobat' => $validatedData['ketegoriobat'],
            'nama' => $validatedData['nama'],
            'stok' => $validatedData['stok'],
        ]);
        
        // Redirect kembali ke halaman penyakitA
        return redirect('/admin.obatA')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Riwayat $riwayat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Riwayat $idpengguna)
    {
        $riwayats = Riwayat::find($idpengguna);
        return view('apotekA', ['riwayats' => $riwayats]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRiwayatRequest $request, Riwayat $idpengguna)
    {
        // Menggunakan parameter $kategoriPenyakit yang sudah diinisialisasi
        $validatedData = $request->validate([
            'idpengguna' => 'required',
            'idobat' => 'required',
            'ketegoriobat' => 'required',
            'nama' => 'required',
            'stok' => 'required',
        ]);

        // Update data kategori penyakit berdasarkan ID
        $idpengguna->update([
            'idpengguna' => $validatedData['idpengguna'],
            'idobat' => $validatedData['idobat'],
            'ketegoriobat' => $validatedData['ketegoriobat'],
            'nama' => $validatedData['nama'],
            'stok' => $validatedData['stok'],
        ]);
            return redirect('/apotekA')->with('success', 'Kategori penyakit berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Riwayat $idpengguna)
    {
        Riwayat::where('idpengguna','=', $idpengguna)->delete();
        return redirect('apotekA');
    }

    public function showAddForm()
    {
        $riwayats = Riwayat::all();
        return view('apotekAadd', ['riwayats' => $riwayats]);
    }

    public function showEditForm()
    {
        $riwayats = Riwayat::all();
        return view('apotekAedit', ['riwayats' => $riwayats]);
    }
}
