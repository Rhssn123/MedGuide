@extends('admin.obatA')

@section('content')
<div class="dashboard-content">
    <h2>Edit Manajemen Obat</h2>
    <form id="edit-form" method="POST" action="{{ url('admin.obatA/' . $kategoriso->first()->idkategori) }}">
        @csrf <!-- Tambahkan directive CSRF di sini -->
        @method('PUT') <!-- Gunakan metode PUT untuk penyuntingan -->
        <div class="profile">
            <div class="profile-item">
                <div class="label">Kategori Obat:</div>
                <input type="text" class="edit-input" id="edit-category" name="Tablet" value="{{ $kategoriso->first()->kategoriObat }}">
            </div>
            <div class="profile-item">
                <div class="label">Nama Obat:</div>
                <input type="text" class="edit-input" id="edit-name" name="Matovit Fifty" value="{{ $kategoriso->first()->nama }}">
            </div>
            <div class="add">
                <button class="button" id="btn-save">Save</button>
                <button class="button" type="button" onclick="window.history.back()">Cancel</button>
            </div>
    </form>
</div>
@endsection