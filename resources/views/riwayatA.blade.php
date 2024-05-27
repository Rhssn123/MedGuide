@extends('profileadmin')

@section('content')
            <div class="dashboard-content">
                <h2>Riwayat</h2>
                <div class="add">
                    <a href="{{ url('/riwayatAadd')}}" class="button" id="btn-add">Tambahkan</a>
                </div>
                <table class="data-table" id="user-table">
                    <thead>
                        <tr>
                            <th>ID Obat</th>
                            <th>ID Customer</th>
                            <th>Kategori Obat</th>
                            <th>Nama Obat</th>
                            <th>Stok Obat</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody id="data-table">
                        <tr>
                            <td>1</td>
                            <td>101</td>
                            <td>Botol</td>
                            <td>Cendo Catarlent</td>
                            <td>10</td>
                            <td>
                                <a href="{{ url('/riwayatAedit')}}"><i class="fas fa-edit"></i></a>
                            </td>
                            <td>
                                <button class="btn-delete"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>                        
                        <tr>
                            <td>2</td>
                            <td>102</td>
                            <td>Botol</td>
                            <td>Wellness Ocucare</td>
                            <td>8</td>
                            <td>
                                <a href="{{ url('/riwayatAedit')}}"><i class="fas fa-edit"></i></a>
                            </td>
                            <td>
                                <button class="btn-delete"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div id="edit-form" style="display: none;">
                    <!-- Form untuk mengedit data -->
                    <label for="edit-id">ID Penyakit:</label>
                    <input type="text" id="edit-id" name="edit-id"><br>
                    <label for="edit-id-obat">ID Obat:</label>
                    <input type="text" id="edit-id-obat" name="edit-id-obat"><br>
                    <label for="edit-name">Nama Obat:</label>
                    <input type="text" id="edit-name" name="edit-name"><br>
                    <label for="edit-customer">ID Customer:</label>
                    <input type="text" id="edit-customer" name="edit-customer"><br>
                    <!-- Dan seterusnya untuk setiap kolom data yang dapat diedit -->
                    <button id="btn-save-edit">Simpan Perubahan</button>
                </div>
                      
            </div>
            <script>
            // Menambahkan event listener untuk tombol tambahkan
            const btnAdd = document.getElementById('btn-add');
            btnAdd.addEventListener('click', () => {
                console.log('Tambahkan');
                // Mendapatkan tabel
                const table = document.getElementById('user-table');
                // Membuat baris baru
                const newRow = document.createElement('tr');
                // Mengisi kolom data
                newRow.innerHTML = `
                    <td>New ID Penyakit</td>
                    <td>New ID Obat </td>
                    <td>New Nama Obat</td>
                    <td>New ID Customer</td>
                    <td>
                        <button class="btn-edit"><i class="fas fa-edit"></i></button>
                    </td>
                    <td>
                        <button class="btn-delete"><i class="fas fa-trash-alt"></i></button>
                    </td>
                `;
                // Menambahkan baris ke tabel
                table.appendChild(newRow);
                });
        
                // Menambahkan event listener untuk tombol edit
                const btnEdit = document.querySelectorAll('.btn-edit');
                btnEdit.forEach(button => {
                    button.addEventListener('click', (event) => {
                        const id = event.target.closest('tr').querySelector('td:first-child').textContent;
                        console.log('Edit data dengan ID:', id);
                        
                        // Mendapatkan data yang akan diedit
                        const row = event.target.closest('tr');
                        const columns = row.querySelectorAll('td');

                        // Menampilkan data yang akan diedit di form atau modal
                        const form = document.getElementById('edit-form');
                        form.style.display = 'block';
                        form.querySelector('#edit-id').value = id;
                        form.querySelector('#edit-id-obat').value = columns[1].textContent;
                        form.querySelector('#edit-name').value = columns[2].textContent;
                        form.querySelector('#edit-customer').value = columns[3].textContent;
                        // Dan seterusnya untuk setiap kolom data

                        // Tampilkan form atau modal
                        // Misalnya:
                        // form.style.display = 'block';
                        // atau
                        // modal.show();
                    });
                });
            
                // Menambahkan event listener untuk tombol "Simpan Perubahan"
                // Menambahkan event listener untuk tombol "Simpan Perubahan"
                const btnSaveEdit = document.getElementById('btn-save-edit');
                btnSaveEdit.addEventListener('click', () => {
                    // Mendapatkan nilai-nilai yang diedit dari form
                    const editedId = document.getElementById('edit-id').value;
                    const editedIdObat = document.getElementById('edit-id-obat').value;
                    const editedName = document.getElementById('edit-name').value;
                    const editedIdCustomer = document.getElementById('edit-customer').value;

                    // Mendapatkan baris yang sesuai dalam tabel berdasarkan ID
                    const row = document.querySelector(`tr[data-id="${editedId}"]`);
                    
                    // Perbarui nilai-nilai dalam baris tersebut
                    if (row) {
                        row.cells[0].textContent = editedId;
                        row.cells[1].textContent = editedIdObat;
                        row.cells[2].textContent = editedName;
                        row.cells[3].textContent = editedIdCustomer;
                        // Dan seterusnya untuk setiap kolom yang ingin diubah
                    }
                    // Perbarui nama dalam elemen HTML
                    const editNameElement = document.getElementById('edited-name');
                    if (editNameElement) {
                        editNameElement.textContent = editedName;
                    }
                    // Sembunyikan kembali form edit setelah perubahan disimpan
                    const form = document.getElementById('edit-form');
                    form.style.display = 'none';
                });

        
                // Mengambil semua tombol delete
                const btnDelete = document.querySelectorAll('.btn-delete');
                // Menambahkan event listener untuk setiap tombol delete
                btnDelete.forEach(button => {
                    button.addEventListener('click', (event) => {
                        const id = event.target.closest('tr').querySelector('td:first-child').textContent;
                        // Di sini Anda dapat menambahkan logika untuk menghapus data dengan ID yang sesuai
                        console.log('Hapus data dengan ID:', id);
                        // Menghapus baris tabel
                        event.target.closest('tr').remove();
                    });
                });
            </script>
            </div>
        </div>

    </div>

@endsection