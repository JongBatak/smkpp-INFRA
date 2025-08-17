<div class="min-h-screen bg-gradient-to-b from-gray-50 to-white py-28">
    <div class="container mx-auto px-4">
        <!-- Header Section -->
        <div class="text-center mb-16">
            <span class="text-orange-500 font-semibold tracking-wider uppercase text-xs sm:text-sm">Tentang Kami</span>
            <h1 class="text-3xl sm:text-5xl font-bold mt-2">
                <span class="text-orange-400">SMK </span>Prestasi Prima
            </h1>
            <div class="mt-4 h-1 w-24 mx-auto bg-orange-500 rounded-full"></div>
        </div>
    </div>

    <div class="container mx-auto px-4">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col lg:flex-row gap-12 items-stretch">
                
                <!-- Konten Teks -->
                <div class="flex-1">
                    <div class="bg-white rounded-2xl shadow-xl p-6 sm:p-10 space-y-12 border border-gray-100">
                        
                        <!-- Visi -->
                        <div>
                            <h2 class="text-2xl font-bold text-orange-600 mb-6">Visi</h2>
                            <div class="prose prose-orange max-w-none text-gray-700 leading-relaxed">
                                @if(isset($tentangs->visi))
                                    {!! $tentangs->visi !!}
                                @else
                                    <p class="text-gray-500">Belum Ada Data</p>
                                @endif
                            </div>
                        </div>

                        <!-- Misi -->
                        <div>
                            <h2 class="text-2xl font-bold text-orange-600 mb-6">Misi</h2>
                            <div class="prose prose-orange max-w-none text-gray-700 leading-relaxed">
                                @if(isset($tentangs->misi))
                                    {!! $tentangs->misi !!}
                                @else
                                    <p class="text-gray-500">Belum Ada Data</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gambar -->
                <div class="lg:w-1/2">
                    <div class="rounded-2xl overflow-hidden shadow-2xl h-full">
                        @if(isset($tentangs->cover) && $tentangs->cover)
                            <img src="{{ asset('storage/' . $tentangs->cover) }}" class="w-full h-full object-cover select-none transition-transform duration-500 hover:scale-105" loading="lazy">
                        @else
                            <img src="{{ asset('assets/images/sekolah_pt.png') }}" class="w-full h-full object-cover select-none transition-transform duration-500 hover:scale-110" loading="lazy">
                        @endif
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
