<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

    <div class="container py-2">
        <div class="mb-0">
            <a href="{{ url()->previous() }}" class="btn btn-outline-secondary mb-3">← Kembali</a>
        </div>

        <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Tambah ATK</h4>
        </div>
        <div class="card-body">
        <form  action="{{ route('admin.store') }}"  method="POST" enctype="multipart/form-data">
            @csrf
            
                <div class="mb-3">
                <div class="col-md-6 mb-3 mt-4">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama ATK" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="number" name="stok" class="form-control" placeholder="Masukkan Stok" required>
                </div>

          
                <label>Kategori</label>
                <select name="kategori" class="form-control" required>
                    <option value="" disabled selected>Pilih Kategori</option>
                    @foreach (\App\Models\ATK::getKategoriList() as $kat)
                        <option value="{{ $kat }}">{{ $kat }}</option>
                    @endforeach
                </select>

                <div class="col-md-6 mb-3">
                    <label for="deksripsi" class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" placeholder="Deskripsi ATK"></textarea>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file" name="gambar" class="form-control">
                </div>  
                </div> 
                 <div class="mt-4 text-end">
                    <button type="submit" class="btn btn-primary">Tambah ATK</button>
                </div>
        </form>
        </div>
        </div>
    </div>
</body>
</html>