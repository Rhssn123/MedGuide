@extends('admin.obatA')

@section('content')
<div class="dashboard-content">
    <h2>Edit Manajemen Obat</h2>
    <form id="edit-form" method="POST" action="{{ url('admin.obatA/') }}">
        @csrf
        <div class="profile">
            <div class="profile-item">
                <div class="label">Kategori Obat:</div>
                <input type="kategoriObat" class="edit-input" id="edit-category" name="kategoriObat">
            </div>
            <div class="profile-item">
                <div class="label">Nama Obat:</div>
                <input type="nama" class="edit-input" id="edit-name" name="nama">
            </div>
            <div class="add">
                <button class="button" id="submit">Save</button>
                <button class="button" type="button" onclick="window.history.back()">Cancel</button>
            </div>
    </form>
</div>
@endsection