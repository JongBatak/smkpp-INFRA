@extends('layouts.newlayout')

@section('title', 'Profil Guru - SMK Prestasi Prima')

@section('content')
<section class="max-w-7xl mx-auto px-6 lg:px-12 py-16">
    <h1 class="text-3xl md:text-4xl font-bold text-orange-600 mb-12 text-center uppercase">
        Direktori Guru & Tenaga Kependidikan
    </h1>

    <!-- Grid Kartu Guru -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">

    <!-- Kartu Guru -->
    @foreach(range(1,6) as $i)
    <div class="flex flex-col md:flex-row items-center bg-white rounded-2xl shadow-md overflow-hidden 
        transition-all duration-300 hover:bg-orange-600 hover:text-white 
        hover:shadow-xl transform hover:-translate-y-2 cursor-pointer max-w-md mx-auto">

        <!-- Foto Guru -->
        <div class="p-4 flex-shrink-0">
            <img src="{{ asset('assets/images/contoh-logoguru.jpg') }}" 
                 alt="Guru" 
                 class="w-40 h-40 object-cover shadow-md rounded-lg">
        </div>

        <!-- Info Guru -->
        <div class="p-6 flex-1">
            <h2 class="text-xl font-bold">Elvi Irawanti, M.Pd</h2>
            <p class="text-base">Kepala Sekolah</p>
            <p class="text-sm mt-2">
                <span class="font-semibold">NIK:</span> 83937293729
            </p>
            <p class="text-sm">
                <span class="font-semibold">Riwayat Pendidikan:</span> S3 Sistem Pendidikan
            </p>
        </div>
    </div>
    @endforeach

</div>

</section>
@endsection
