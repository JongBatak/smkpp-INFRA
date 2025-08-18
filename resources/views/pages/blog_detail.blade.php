<div class="min-h-screen bg-gradient-to-br from-orange-50 to-white">
    <!-- Header Image Section -->
    <div class="relative h-96 overflow-hidden">
        @if (isset($blog->gambar) && $blog->gambar)
            <img src="{{ Storage::url($blog->gambar) }}" alt="{{ $blog->judul }}" class="w-full h-full object-cover select-none" draggable="false">
        @else
            <div class="w-full h-full bg-gradient-to-r from-orange-400 to-orange-600 flex items-center justify-center">
                <div class="text-center text-white">
                    <svg class="mx-auto h-24 w-24 mb-4 opacity-75" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                    </svg>
                    <p class="text-xl font-medium">Header Image</p>
                </div>
            </div>
        @endif

        <!-- Overlay Gradient -->
        <div class="absolute inset-0 bg-gradient-to-t from-gray-800/60 via-transparent to-transparent"></div>

        <!-- Category Badge -->
        @if (isset($blog->kategori) && $blog->kategori)
            <div class="absolute bottom-6 right-6">
                <span class="inline-flex items-center px-4 py-2 rounded-full text-sm font-medium bg-orange-500 text-white shadow-lg">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z" />
                    </svg>
                    {{ $blog->kategori ?? 'Uncategorized' }}
                </span>
            </div>
        @endif
    </div>

    <!-- Content Container -->
    <div class="max-w-4xl mx-auto px-6 py-12">
        <!-- Article Header -->
        <article class="bg-white rounded-2xl shadow-xl overflow-hidden border border-orange-100">
            <div class="p-8 md:p-12">
                <!-- Title -->
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">
                    {{ $blog->judul ?? 'Blog Post Title' }}
                </h1>

                <!-- Meta Information -->
                <div class="flex flex-wrap items-center gap-6 text-gray-600 mb-8 pb-8 border-b border-orange-100">
                    <!-- Author -->
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-br from-orange-400 to-orange-600 rounded-full flex items-center justify-center mr-3">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Penulis</p>
                            <p class="font-semibold text-gray-900">{{ $blog->penulis ?? 'Admin' }}</p>
                        </div>
                    </div>

                    <!-- Date -->
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-br from-orange-400 to-orange-600 rounded-full flex items-center justify-center mr-3">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Dipublikasikan</p>
                            <p class="font-semibold text-gray-900">
                                {{ isset($blog->created_at) ? $blog->created_at->format('d F Y') : date('d F Y') }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Content -->
                <div
                    class="prose prose-lg max-w-none prose-headings:text-orange-600 prose-a:text-orange-600 prose-strong:text-gray-900">

                    <div class="content-area text-sm sm:text-lg">
                        {!! $blog->konten ?? '<p>Konten blog akan ditampilkan di sini. Pastikan untuk mengisi konten melalui Filament CMS.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>' !!}
                    </div>
                </div>
            </div>
        </article>

        <!-- Share Section -->
        <div class="mt-8 bg-white rounded-2xl shadow-lg p-6 border border-orange-100">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Bagikan Artikel:</h3>
            <div class="flex gap-4">
                <a href="#" class="flex items-center justify-center w-12 h-12 bg-orange-500 hover:bg-orange-600 text-white rounded-full transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                    </svg>
                </a>
                <a href="#" class="flex items-center justify-center w-12 h-12 bg-blue-600 hover:bg-blue-700 text-white rounded-full transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                    </svg>
                </a>
                <a href="#" class="flex items-center justify-center w-12 h-12 bg-green-500 hover:bg-green-600 text-white rounded-full transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.085" />
                    </svg>
                </a>
            </div>
        </div>

        <!-- Navigation -->
        <div class="mt-8 flex justify-between items-center">
            <a href="javascript:window.history.back()" class="inline-flex items-center ps-3 pe-5 py-4 bg-orange-500 hover:bg-orange-600 text-white font-semibold rounded-lg transition-colors">
                <svg class="w-5 h-5 " fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                Kembali
            </a>
        </div>
    </div>
</div>

@push('styles')
    <style>
        /* Styling untuk content area jika prose tidak bekerja */
        .content-area h1,
        .content-area h2,
        .content-area h3,
        .content-area h4,
        .content-area h5,
        .content-area h6 {
            color: #ea580c !important;
            font-weight: 700 !important;
            margin-top: 2rem !important;
            margin-bottom: 1rem !important;
            line-height: 1.3 !important;
        }

        .content-area h1 {
            font-size: 2.25rem !important;
        }

        .content-area h2 {
            font-size: 1.875rem !important;
        }

        .content-area h3 {
            font-size: 1.5rem !important;
        }

        .content-area h4 {
            font-size: 1.25rem !important;
        }

        .content-area h5 {
            font-size: 1.125rem !important;
        }

        .content-area h6 {
            font-size: 1rem !important;
        }

        .content-area p {
            margin-bottom: 1.5rem !important;
            line-height: 1.7 !important;
            color: #374151 !important;
        }

        .content-area ul,
        .content-area ol {
            margin: 1.5rem 0 !important;
            padding-left: 2rem !important;
        }

        .content-area ul li,
        .content-area ol li {
            margin-bottom: 0.5rem !important;
            line-height: 1.6 !important;
            color: #374151 !important;
        }

        .content-area ul li {
            list-style-type: disc !important;
        }

        .content-area ol li {
            list-style-type: decimal !important;
        }

        .content-area a {
            color: #ea580c !important;
            text-decoration: none !important;
        }

        .content-area a:hover {
            color: #c2410c !important;
            text-decoration: underline !important;
        }

        .content-area blockquote {
            border-left: 4px solid #fb923c !important;
            background: #fff7ed !important;
            padding: 1rem 1.5rem !important;
            font-style: italic !important;
            margin: 2rem 0 !important;
        }

        .content-area img {
            border-radius: 0.75rem !important;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1) !important;
            max-width: 100% !important;
            height: auto !important;
            margin: 2rem 0 !important;
        }

        /* Prose styling jika plugin tersedia */
        .prose h1,
        .prose h2,
        .prose h3,
        .prose h4,
        .prose h5,
        .prose h6 {
            color: #ea580c !important;
            font-weight: 700 !important;
        }

        .prose a {
            color: #ea580c !important;
            text-decoration: none !important;
        }

        .prose a:hover {
            color: #c2410c !important;
            text-decoration: underline !important;
        }

        .prose blockquote {
            border-left: 4px solid #fb923c !important;
            background: #fff7ed !important;
            padding: 1rem 1.5rem !important;
            font-style: italic !important;
        }

        .prose img {
            border-radius: 0.75rem !important;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1) !important;
        }
    </style>
@endpush

@push('scripts')
    <script>
        // Smooth scroll untuk anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Share functionality
        function shareArticle(platform) {
            const url = window.location.href;
            const title = document.querySelector('h1').textContent;

            let shareUrl = '';

            switch (platform) {
                case 'twitter':
                    shareUrl =
                        `https://twitter.com/intent/tweet?url=${encodeURIComponent(url)}&text=${encodeURIComponent(title)}`;
                    break;
                case 'facebook':
                    shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(url)}`;
                    break;
                case 'whatsapp':
                    shareUrl = `https://wa.me/?text=${encodeURIComponent(title + ' ' + url)}`;
                    break;
            }

            if (shareUrl) {
                window.open(shareUrl, '_blank', 'width=600,height=400');
            }
        }
    </script>
@endpush
