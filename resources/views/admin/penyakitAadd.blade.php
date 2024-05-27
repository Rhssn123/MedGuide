@extends('admin.penyakitA')

@section('content')
<div class="dashboard-content">
    <h2>Edit Manajemen Penyakit</h2>
    <form id="edit-form" method="POST" action="{{ url('admin.penyakitA/') }}">
        @csrf <!-- Tambahkan directive CSRF di sini -->
        <div class="profile">
            <div class="profile-item">
                <div class="label">Kategori Penyakit:</div>
                <input type="kategori" class="edit-input" id="edit-category" name="kategori">
            </div>
            <div class="profile-item">
                <div class="label">Nama Penyakit:</div>
                <input type="nama" class="edit-input" id="edit-name" name="nama">
            </div>
            <div class="add">
                <button class="button" type="submit">Save</button> 
                <button class="button" type="button" onclick="window.history.back()">Cancel</button>
            </div>
        </div>
    </form>
</div>
@endsection
