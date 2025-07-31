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
                <a href="{{ route('admin.create') }}" class="btn btn-primary">Tambah</a>

                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger">Logout</button>
                </form>
                
            </div>
        </div>
        
       
        
     

        <!--tabel data-->
        <h5 class="mt-3">Daftar</h5>
        <table class="table mt-3">

            <head>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Stok</th>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                </tr>
            </head>
            <tbody>
                @foreach ($atks as $index => $atks)
                                <tr>
                                    <td>{{$index + 1}}</td>
                                    <td>{{$atks->nama}}</td>
                                    <td>{{$atks->stok}}</td>
                                    <td>{{$atks->kategori}}</td>
                                    <td>{{$atks->deskripsi}}</td>
                                   
                                    <td>
                                        {{-- Hapus --}}
                                        <form action="{{ route('admin.destroy' , $atks->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-link text-danger p-0">Hapus</button>
                                        </form>

                                        {{-- Edit --}}
                                        <a href="{{ route('admin.edit', $atks->id) }}" class="text-warning ms-2 me-2">Edit</a>
                                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>