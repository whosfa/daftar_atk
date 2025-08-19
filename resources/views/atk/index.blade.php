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

<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 grid lg:grid-cols-2 gap-8 lg:gap-16">
        <div class="flex flex-col justify-center">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">We invest in the world’s potential</h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0">
                <a href="{{route('atk.tabel')}}" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Lihat ATK        
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
                <a href="#" class="py-3 px-5 sm:ms-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                    Learn more
                </a>  
            </div>
        </div>
    </div>
</section>

        <form action="{{ route('atk.search') }}" method="GET" class="mb-3 d-flex">
    <input type="text" name="q" class="form-control me-2" placeholder="Cari ATK..." value="{{ request('q') }}">
    <button type="submit" class="btn btn-primary">Cari</button>
</form>


<div class="mb-3">
    <a href="{{ route('atk.index') }}" class="btn btn-secondary">Semua</a>
    @foreach (\App\Models\ATK::getKategoriList() as $kat)
        <a href="{{ route('atk.filter', $kat) }}" class="btn btn-primary">{{ $kat }}</a>
    @endforeach
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
                          {{-- Show --}}
                            <a href="{{ route('atk.show', $atk->id) }}"  style="background: none; border: none; padding: 0; cursor: pointer; outline: none; text-decoration: none; margin-right: 3%;">
                           <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                            </svg>
                            </a>
                        </td>   
                    </tr>
                @endforeach
            </tbody>
        </table>




    <footer class="bottom-0 left-0 z-20 w-full p-4 bg-white border-t border-gray-200 shadow-sm md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800 dark:border-gray-600">
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
