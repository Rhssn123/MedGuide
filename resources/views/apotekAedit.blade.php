@extends('apotekA')

@section('content')
<div class="dashboard-content">
    <h2>Edit Manajemen Apotek</h2>
    <form id="edit-form" method="POST" action="{{ url('apotekA/' . $namaapotek->first()->idkategori) }}">
        @csrf <!-- Tambahkan directive CSRF di sini -->
        @method('PUT') <!-- Gunakan metode PUT untuk penyuntingan -->
        <div class="profile">
            <div class="profile-item">
                <div class="label">Nama Apotek:</div>
                <input type="text" class="edit-input" id="edit-name" name="Apotek K24 Jojoran" value="{{ $namaapotek->first()->namaapotek }}">
            </div>
            <div class="profile-item">
                <div class="label">Alamat Apotek:</div>
                <input type="text" class="edit-input" id="edit-address" name="Jl.Raya Menur No.14" value="{{ $namaapotek->first()->alamat }}">
            </div>
            <div class="add">
                <button class="button" id="btn-save">Save</button>
                <button class="button" type="button" onclick="window.history.back()">Cancel</button>
            </div>
    </form>
</div>
@endsection