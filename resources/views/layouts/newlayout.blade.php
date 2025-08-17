<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'SMK Prestasi Prima')</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans">

  <!-- Navbar Orange -->
  <nav class="absolute top-0 left-0 w-full z-50 bg-orange-600 shadow-md">
    <div class="max-w-7xl mx-auto px-6 lg:px-12 flex justify-between items-center h-20">
      
      <!-- Logo -->
      <div class="flex items-center space-x-3">
        <img src="{{ asset('assets/images/smk.png') }}" alt="Logo" class="h-12 w-12">
        <span class="font-bold text-white text-xl drop-shadow-md">SMK Prestasi Prima</span>
      </div>
      
      <!-- Menu -->
      <ul class="hidden md:flex space-x-10 text-white font-semibold text-lg">
        
        <!-- Tentang -->
        <li class="relative group">
          <button class="flex items-center transition hover:text-gray-100 hover:underline underline-offset-4">
            Tentang <span class="ml-1 text-sm">▼</span>
          </button>
          <!-- Dropdown dengan warna orange -->
          <ul class="absolute left-0 mt-3 w-52 bg-orange-600/95 backdrop-blur-md rounded-lg shadow-lg 
                     opacity-0 invisible group-hover:opacity-100 group-hover:visible 
                     translate-y-2 group-hover:translate-y-0 transition-all duration-300">
            <li><a href="{{ route('profil.guru') }}" class="block px-5 py-3 text-white hover:bg-orange-500 rounded-t-lg">Profil Guru</a></li>
            <li><a href="#" class="block px-5 py-3 text-white hover:bg-orange-500">Rank Murid</a></li>
            <li><a href="#" class="block px-5 py-3 text-white hover:bg-orange-500 rounded-b-lg">Sekolah</a></li>
          </ul>
        </li>
        
        <!-- Program -->
        <li>
          <a href="#" class="transition hover:text-gray-100 hover:underline underline-offset-4">Program</a>
        </li>
        
        <!-- Dokumentasi -->
        <li class="relative group">
          <button class="flex items-center transition hover:text-gray-100 hover:underline underline-offset-4">
            Dokumentasi <span class="ml-1 text-sm">▼</span>
          </button>
          <ul class="absolute left-0 mt-3 w-52 bg-orange-600/95 backdrop-blur-md rounded-lg shadow-lg 
                     opacity-0 invisible group-hover:opacity-100 group-hover:visible 
                     translate-y-2 group-hover:translate-y-0 transition-all duration-300">
            <li><a href="#" class="block px-5 py-3 text-white hover:bg-orange-500 rounded-t-lg">Galeri</a></li>
            <li><a href="#" class="block px-5 py-3 text-white hover:bg-orange-500">Blog</a></li>
            <li><a href="#" class="block px-5 py-3 text-white hover:bg-orange-500 rounded-b-lg">Piagam</a></li>
          </ul>
        </li>
        
        <!-- Pendaftaran -->
        <li>
          <a href="#" class="transition hover:text-gray-100 hover:underline underline-offset-4">Pendaftaran</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Konten Dinamis -->
  <main class="pt-20">
    @yield('content')
  </main>

</body>
</html>
