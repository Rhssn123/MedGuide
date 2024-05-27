@extends('apotekA')

@section('content')
<div class="dashboard-content">
    <h2>Edit Manajemen Apotek</h2>
    <form id="edit-form" method="POST" action="{{ url('apotekA/') }}">
        @csrf
        <div class="profile">
            <div class="profile-item">
                <div class="label">Nama Apotek:</div>
                <input type="namaapotek" class="edit-input" id="edit-name" name="namaapotek">
            </div>
            <div class="profile-item">
                <div class="label">Alamat Apotek:</div>
                <input type="alamat" class="edit-input" id="edit-address" name="alamat">
            </div>
            <div class="add">
                <button class="button" id="submit">Save</button>
                <button class="button" type="button" onclick="window.history.back()">Cancel</button>
            </div>
    </form>
</div>
@endsection