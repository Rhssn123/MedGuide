@extends('profileadmin')

@section('content')
            <div class="dashboard-content">
                <h2>Manajemen Penyakit</h2>
                <div class="add">
                    <a href="{{ url('/admin.penyakitAadd')}}" class="button" id="btn-add">Tambahkan</a>
                </div>
                <table class="data-table" id="user-table">
                    <thead>
                        <tr>
                            <th>ID Penyakit</th>
                            <th>Kategori Penyakit</th>
                            <th>Nama Penyakit</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody id="data-table">
                        @foreach ($kategorisp as $kategori)
                        <tr>
                            <td>{{ $kategori->idkategori }}</td>
                            <td>{{ $kategori->kategori }}</td>
                            <td>{{ $kategori->nama }}</td>
                            <td>
                                <a href="{{ url('admin.penyakitAedit/' . $kategori->idkategori) }}"><i class="fas fa-edit"></i></a>
                            </td>                            
                            <td>
                                <form action="{{ url('destroy/' . $kategori->idkategori) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn-delete"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        @endforeach                        
                        </tr>
                    </tbody>
                </table>    
            </div>
@endsection