<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar ATK</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

@vite(['resources/css/app.css', 'resources/js/app.js'])

<body style="background: linear-gradient(to top, #91AAEA 0%, #F1F8FF 100%); min-height: 100vh;">

  <!-- ======================== Header ======================== -->
  <header class="fixed top-0 left-0 w-full z-50 px-4 pt-4">
    <!-- Navbar -->
    <nav class="relative bg-transparent backdrop-blur-md border border-white/20 rounded-2xl shadow-lg">
      <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-6 py-4">

        <!-- Logo -->
        <a class="flex items-center space-x-3 rtl:space-x-reverse">
          <span class="self-center text-2xl font-semibold whitespace-nowrap text-black">Daftar ATK</span>
        </a>

        <!-- Login Button -->
        <div class="md:flex items-center space-x-3">
          <a href="{{ route('login') }}"
            class="inline-flex justify-center items-center py-2.5 px-5 text-sm font-medium text-black rounded-full 
                   bg-white hover:bg-gray-100 focus:ring-2 focus:ring-white/50 transition-all duration-200
                   shadow-lg hover:shadow-xl transform hover:scale-105">
            Login as Admin
            <svg class="rotate-[-45deg] w-3.5 h-3.5 ms-2" xmlns="http://www.w3.org/2000/svg"
              fill="none" viewBox="0 0 14 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
        </a>
        </div>

      </div>
    </nav>
  </header>

  <main class="pt-2">
  <!-- ======================== Hero Section ======================== -->
  <section id="hero" class="hero-section">
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:pb-4 lg:py-16">
      <h2 class="hero-welcome">
        Welcome to
      </h2>
      <h1 class="hero-title">
        URTU Office Supplies Inventory
      </h1>
      <p class="hero-description">
        Easy Access to All Your Stationery Needs.
      </p>
    </div>
  </section>


  <!-- ======================== Search Form ======================== -->
  <form action="{{ route('atk.search') }}" method="GET" class="max-w-xl mx-auto">
    <label for="default-search"
      class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-black">Search</label>
    <div class="relative">
      <!-- Input -->
      <input type="search" id="default-search"
        class="block w-full py-3 px-6 ps-14 text-sm text-black placeholder-white/80 
               border border-white/40 rounded-full 
               bg-white/30 backdrop-blur-md 
               focus:ring-blue-500 focus:border-blue-500 
               dark:bg-white/20 dark:border-white/30 dark:placeholder-white/60 
               dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
        placeholder="Search Items..." 
        autocomplete="off"
        spellcheck="false"
        required />

      <!-- Tombol di dalam input -->
      <button type="submit"
        class="absolute left-2 top-2 
               text-white bg-white hover:bg-blue-800 focus:outline-none 
               font-medium rounded-full w-10 h-10 inline-flex items-center justify-center 
               dark:bg-blue-600 dark:hover:bg-blue-700">
        <!-- Ikon di dalam tombol -->
        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
          viewBox="0 0 20 20">
          <path stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
        </svg>
      </button>
    </div>
  </form>

 <!-- ======================== Category Buttons ======================== -->
<div class="flex items-center justify-center mt-2 py-4 md:py-8 flex-wrap">
    <!-- All Categories Button -->
    <a href="{{ route('atk.index') }}"
       id="all-categories"
       class="active rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3"
       style="background-color: #4338ca; color: white; border: 2px solid transparent; transition: background-color 0.2s ease;"
       onmouseover="if(!this.classList.contains('active')) this.style.backgroundColor='#5b63d3'"
       onmouseout="if(!this.classList.contains('active')) this.style.backgroundColor='#6366f1'">
       All Categories
    </a>

    @foreach (\App\Models\ATK::getKategoriList() as $kat)
        <a href="{{ route('atk.filter', $kat) }}"
           class="rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3"
           style="background-color: #64748b; color: white; border: 2px solid transparent; transition: background-color 0.2s ease;"
           onmouseover="if(!this.classList.contains('active')) this.style.backgroundColor='#475569'"
           onmouseout="if(!this.classList.contains('active')) this.style.backgroundColor='#64748b'">
           {{ $kat }}
        </a>
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
                         <td>{{ $atks->firstItem() + $loop->index }}</td> 
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
         <div class="d-flex justify-content-end">
        {{ $atks->links('pagination::bootstrap-5') }}
        </div>



  <!-- ======================== Scripts ======================== -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
  
  <script>
    // Add interactive functionality for button selection
    document.addEventListener('DOMContentLoaded', function() {
      const allCategoriesBtn = document.getElementById('all-categories');
      const categoryBtns = document.querySelectorAll('button:not(#all-categories)');
      
      // Handle "All Categories" button click
      allCategoriesBtn.addEventListener('click', function() {
        // Remove active class from all regular buttons and reset their style
        categoryBtns.forEach(btn => {
          btn.classList.remove('active');
          btn.style.backgroundColor = '#64748b';
        });
        // Add active class and style to "All Categories"
        this.classList.add('active');
        this.style.backgroundColor = '#4338ca';
      });
      
      // Handle regular category button clicks
      categoryBtns.forEach(btn => {
        btn.addEventListener('click', function() {
          // Remove active class from "All Categories" and reset its style
          allCategoriesBtn.classList.remove('active');
          allCategoriesBtn.style.backgroundColor = '#6366f1';
          
          // Remove active class from all other regular buttons and reset their style
          categoryBtns.forEach(b => {
            b.classList.remove('active');
            b.style.backgroundColor = '#64748b';
          });
          
          // Add active class and style to clicked button
          this.classList.add('active');
          this.style.backgroundColor = '#334155';
        });
      });
    });
  </script>

  

</main>
</body>
</html>
