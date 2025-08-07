<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar ATK</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="mb-0">Daftar ATK</h3>
            <a href="{{ route('login') }}" class="btn btn-primary">Login sebagai Admin</a>
        </div>  

        <!-- Tabel data -->
         
        <table class="table">
            <thead class="thead-dark">
                <tr class="table-success">
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
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $atk->nama }}</td>
                        <td>{{ $atk->stok }}</td>
                        <td>{{ $atk->kategori }}</td>
                        <td>
                        <a href="{{ route('atk.show', $atk->id) }}" class="btn btn-info btn-sm">Show</a>
                        </td>   
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <footer class="fixed bottom-0 left-0 z-20 w-full p-4 bg-white border-t border-gray-200 shadow-sm md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800 dark:border-gray-600">
    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
    </span>
    <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
        <li>
            <a href="#" class="hover:underline me-4 md:me-6">About</a>
        </li>
        <li>
            <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
        </li>
        <li>
            <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
        </li>
        <li>
            <a href="#" class="hover:underline">Contact</a>
        </li>
    </ul>
</footer>
</body>
</html>
