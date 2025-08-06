<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="mb-0">Daftar ATK</h3>
            
            <div class="d-flex align-items-center">
        
                {{-- Tombol Tambah --}}
                <a href="{{ route('admin.create') }}" class="btn btn-primary ms-2 me-2">Tambah</a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>    
            </div>
        </div>

        

        <div class="mb-3">
            <form action="{{ route('admin.index') }}" method="GET" class="me-2 me-2">
                <input type="text" name="q" class="form-control" placeholder="Cari ATK..." value="{{ request('q') }}">
            </form>
        </div>
        
        <!--tabel data-->
       
        <table class="table">
            <thead>
                <tr class="table-danger">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Stok</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($atks as $index => $atk)
                                <tr>
                                    <td>{{$index + 1}}</td>
                                    <td>{{$atk->nama}}</td>
                                    <td>{{$atk->stok}}</td>
                                    <td>{{$atk->kategori}}</td> 
                                <td>
                                        {{-- Hapus --}}
                                        <form action="{{ route('admin.destroy' , $atk->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-link text-danger p-0">Hapus</button>
                                        </form>

                                        {{-- Edit --}}
                                        <a href="{{ route('admin.edit', $atk->id) }}" class="text-warning ms-2 me-2">Edit</a>

                                        {{-- Show --}}
                                        <a href="{{ route('atk.show', $atk->id) }}" class="btn btn-info btn-sm">Show</a>
                                </td>
                                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>