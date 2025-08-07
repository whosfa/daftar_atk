<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <a href="{{ url()->previous() }}" class="btn btn-secondary mb-3">← Kembali</a>

    <h2>Edit</h2>
    <form action="{{ route('admin.update', $atks->id) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $atks->nama }}" required>
        </div>

        <div class="mb-3">
            <label for="stok" class="form-label">Stok</label>
            <textarea name="stok" type="number" class="form-control" required>{{ $atks->stok }}</textarea>
        </div>

        <div class="mb-3">
            <label class="block">Gambar</label>
            <input type="file" name="gambar" class="w-full border rounded p-2">
            @if ($atks->gambar)
                <p class="text-sm mt-1">Gambar saat ini:</p>
                <img src="{{ asset('uploads/atk/' . $atks->gambar) }}" class="w-32 h-24 object-cover mt-1">
            @endif
        </div>
        

        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <input type="text" name="kategori" class="form-control" value="{{ $atks->kategori }}" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <input type="" name="deskripsi" class="form-control" value="{{ $atks->deskripsi }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

</body>
</html>
