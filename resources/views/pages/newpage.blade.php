@extends('layouts.newlayout')

@section('title', 'Beranda - SMK Prestasi Prima')

@section('content')
  <!-- Hero Section -->
  <section class="relative h-screen flex items-center bg-cover bg-center" 
           style="background-image: url('{{ asset('assets/images/sekolah_ls.png') }}');">
    <div class="absolute inset-0 bg-black/40"></div> <!-- Overlay -->
    
    <div class="relative text-left text-white max-w-2xl px-6 lg:px-16">
      
      <!-- Baris 1 -->
    <h1 class="text-xl md:text-2xl font-semibold tracking-wide uppercase mb-2">
        ! SELAMAT DATANG DI SITUS RESMI
    </h1>

      
      <!-- Baris 2 -->
      <h2 class="text-4xl md:text-5xl font-extrabold text-orange-500 mb-3">
        SMK PRESTASI PRIMA
      </h2>
      
      <!-- Baris 3 -->
      <p class="italic font-bold text-xs md:text-sm mb-6 text-white">
        "IF BETTER IS POSSIBLE, GOOD IS NOT ENOUGH"
      </p>
      
      <!-- Tombol -->
      <div class="flex space-x-3">
        <a href="#" 
           class="bg-orange-500 hover:bg-orange-600 text-white px-5 py-2.5 rounded-full shadow font-semibold flex items-center space-x-1 text-sm md:text-base">
          <span>Join Now</span>
          <span>→</span>
        </a>
        <a href="#" 
           class="bg-transparent border border-white text-white px-5 py-2.5 rounded-full shadow font-semibold text-sm md:text-base hover:bg-white/10">
          Tonton Video
        </a>
      </div>
    </div>
  </section>
@endsection
