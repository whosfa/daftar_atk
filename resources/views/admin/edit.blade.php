<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit ATK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container py-2">
    <div class="mb-0">
        <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">← Kembali</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Edit ATK</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.update', $atks->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <div class="col-md-6 mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{ $atks->nama }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="number" name="stok" class="form-control" value="{{ $atks->stok }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <input type="text" name="kategori" class="form-control" value="{{ $atks->kategori }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control" value="{{ $atks->deskripsi }}" required>
                    </div>

                    <div class="col-12 mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" name="gambar" class="form-control">
                        @if ($atks->gambar)
                            <div class="mt-2">
                                <p class="mb-3">Gambar saat ini:</p>
                                <img src="{{ asset('uploads/atk/' . $atks->gambar) }}" alt="Gambar ATK" class="img-thumbnail" style="max-height: 150px;">
                            </div>
                        @endif
                    </div>
                </div>
                <div class="mt-4 text-end">
                    <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
