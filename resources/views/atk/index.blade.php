<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar atk</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="mb-0">Daftar ATK</h3>

        <!--tabel data-->
        <table class="table mt-3">

            <head>
                <tr>
                    <th>No</th>
                    <th>Nama ATK</th>
                    <th>Kategori</th>
                    <th>Stok</th>
                    <th>Deskripsi</th>
                </tr>
            </head>
            <tbody>
            
            </tbody>
        </table>
        <div class="ms-auto">
            @auth
                @if (auth()->user()->is_admin)
                    <a href="{{ route('admin.index') }}" class="btn btn-outline-primary">Admin Panel</a>
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger ms-2">Logout</button>
                    </form>
                @else
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger">Logout</button>
                    </form>
                @endif
            @else
                <a href="{{ route('login') }}" class="btn btn-primary">Login sebagai Admin</a>
            @endauth
        </div>
    </div>
    </div>
</body>
</html>