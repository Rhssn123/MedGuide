@extends('riwayatA')

@section('content')
<div class="dashboard-content">
    <h2>Edit Manajemen Riwayat</h2>
    <form id="edit-form">
        <div class="profile">
            <div class="profile-item">
                <div class="label">Kategori Obat:</div>
                <input type="text" class="edit-input" id="edit-category" value="">
            </div>
            <div class="profile-item">
                <div class="label">Nama Obat:</div>
                <input type="text" class="edit-input" id="edit-name" value="">
            </div>
            <div class="profile-item">
                <div class="label">Stok Obat:</div>
                <input type="text" class="edit-input" id="edit-stock" value="">
            </div>
            <div class="add">
                <button class="button" id="btn-save">Save</button>
                <button class="button" id="btn-cancel">Cancel</button>
            </div>
    </form>
</div>

<script>
    document.getElementById('btn-cancel').addEventListener('click', function() {
        // Redirect to previous page or close the edit form
        window.history.back();
    });

    document.getElementById('edit-form').addEventListener('submit', function(event) {
        event.preventDefault();
        // Get updated data from input fields
        var category = document.getElementById('edit-category').value;
        var name = document.getElementById('edit-name').value;
        var stock = document.getElementById('edit-stock').value;
        // Send data to server to update profile
        // You can use AJAX or fetch API to send data to server
        // Example: fetch('update_profile.php', { method: 'POST', body: new FormData(this) })
        //           .then(response => response.json())
        //           .then(data => { console.log(data); });
        alert('Profile updated successfully!');
    });
</script>
@endsection