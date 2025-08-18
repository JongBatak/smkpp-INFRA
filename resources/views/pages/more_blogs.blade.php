<div class="w-full max-w-4xl mx-auto p-4 py-32 bg-gray-800">
    <div class="text-center mb-12 pt-8">
        <span class="text-orange-500 font-semibold tracking-wider uppercase text-sm">Artikel Sekolah</span>
        <h1 class="text-4xl text-white lg:text-5xl font-bold mt-2">Blog</h1>
    </div>

    @if ($more_blogs->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($more_blogs as $blog)
                <a href="{{ route('pages.blog.show', ['id' => $blog->id]) }}">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="aspect-video bg-gray-200 overflow-hidden">
                            <img src="{{ asset("storage/" . ($blog->gambar)) }}" alt="{{ $blog->judul }}" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300 select-none">
                        </div>
                        <div class="p-4 sm:p-6">
                            <h3 class="text-lg font-bold text-gray-900 mb-3 leading-tight transition-colors duration-200">
                                {{ $blog->judul }}
                            </h3>
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                </svg>
                                <span>{{ isset($blog->created_at) ? $blog->created_at->format('d F Y') : date('d F Y') }}</span>
                                <span class="mx-2 select-none">•</span>
                                <span>{{ $blog->kategori }}</span>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    @else
    <div class="w-full">
        <div class="flex items-center justify-center min-h-96">
            <div class="text-center text-gray-500 max-w-md mx-auto">
                <svg class="w-20 h-20 mx-auto mb-8 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                <h3 class="text-xl sm:text-2xl font-semibold mb-4 text-white">Belum Ada Data</h3>
                <p class="text-gray-400 leading-relaxed mb-6 text-xs sm:text-sm">Data blog belum tersedia saat ini.<br>Informasi akan ditampilkan setelah data dimasukkan ke sistem.</p>
                <div class="inline-flex items-center px-4 py-2 bg-orange-800 text-gray-200 rounded-lg  text-xs sm:text-sm font-medium">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                    </svg>
                    Silakan hubungi administrator
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
