<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar ATK</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="mb-0">Daftar ATK</h3>
            <a href="{{ route('login') }}" class="btn btn-primary">Login sebagai Admin</a>
        </div>

        <!-- Tabel data -->
        <h5 class="mt-3">Daftar</h5>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Stok</th>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($atks as $index => $atk)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $atk->nama }}</td>
                        <td>{{ $atk->stok }}</td>
                        <td>{{ $atk->kategori }}</td>
                        <td>{{ $atk->deskripsi }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
