<div class="min-h-screen bg-white py-28">
    <div class="container mx-auto px-4">
        <!-- Header Section -->
        <div class="text-center mb-16">
            <span class="text-orange-500 font-semibold tracking-wider uppercase text-xs sm:text-sm">MANAJEMEN STAF</span>
            <h1 class="text-3xl sm:text-5xl font-bold mt-2">Profil Guru</h1>
        </div>
    </div>
    <!-- Carousel Section -->
    <div class="max-w-7xl mx-auto">
        <div class="swiper teacher-carousel">
            <div class="swiper-wrapper items-center">
                @forelse($manajemens as $manajemen)
                    <div class="swiper-slide p-4 h-full">
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-300 hover:scale-105">
                            <div class="aspect-w-1 aspect-h-1">
                                <img src="{{ asset('storage/' . $manajemen->profile) }}" alt="&nbsp;{{ $manajemen->name }}" title="&nbsp;{{ $manajemen->name }}" class="w-full h-80 sm:h-96 lg:h-full object-cover select-none" draggable="false">
                            </div>
                            <div class="px-2 py-4 text-center h-30">
                                <h3 class="sm:text-xl font-bold text-gray-800 mb-2">{{ $manajemen->name }}</h3>
                                <p class=" text-xs sm:text-sm text-orange-500 font-medium">{{ $manajemen->role }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="w-full">
                        <div class="flex items-center justify-center min-h-96">
                            <div class="text-center text-gray-500 max-w-md mx-auto">
                                <svg class="w-24 h-24 mx-auto mb-8 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                                <h3 class="text-xl sm:text-2xl font-semibold mb-4 text-gray-700">Belum Ada Data</h3>
                                <p class="text-gray-500 leading-relaxed mb-6 text-xs sm:text-sm">Data profil guru/staff belum tersedia saat ini.<br>Informasi akan ditampilkan setelah data dimasukkan ke sistem.</p>
                                <div class="inline-flex items-center px-4 py-2 bg-orange-50 text-orange-600 rounded-lg text-xs sm:text-sm font-medium">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                                    </svg>
                                    Silakan hubungi administrator
                                </div>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
            <!-- Add Navigation -->
            <div class="swiper-button-next mx-5 -mt-12 hidden sm:inline-flex"></div>
            <div class="swiper-button-prev mx-5 -mt-12 hidden sm:inline-flex"></div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const swiper = new Swiper('.teacher-carousel', {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            speed: 1000,
            grabCursor: true,
            centeredSlides: true,
            autoplay: {
                delay: 3000,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                },
                1024: {
                    slidesPerView: 3,
                },
                1280: {
                    slidesPerView: 3,
                }
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: false,
                type: 'bullets',
                renderBullet: function(index, className) {
                    return '<span class="' + className + ' w-3 h-3 bg-orange-500 opacity-50 transition-all duration-300 rounded-full inline-block"></span>';
                },
            },
            watchSlidesProgress: true,
            preventInteractionOnTransition: true,
        });
    });
</script>

<style>
    #manajemen .swiper-button-next,
    #manajemen .swiper-button-prev {
        color: #f97316;
        /* orange-500 */
        background: rgba(255, 255, 255, 0.9);
        width: 40px;
        height: 40px;
        border-radius: 50%;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    #manajemen .swiper-button-next:after,
    #manajemen .swiper-button-prev:after {
        font-size: 20px;
    }

    #manajemen .swiper-pagination {
        position: relative;
        margin-top: 1.5rem;
    }

    #manajemen .swiper-pagination-bullet {
        width: 5px;
        height: 5px;
        background: #f97316;
        opacity: 0.5;
        margin: 0 5px;
        transition: all 0.3s ease;
    }

    #manajemen .swiper-pagination-bullet-active {
        opacity: 1;
        background: #f97316;
        transform: scale(1.3);
    }

    #manajemen .swiper-slide {
        transition: transform 0.3s ease;
        opacity: 0.6;
    }

    #manajemen .swiper-slide-active {
        transform: scale(1);
        opacity: 1;
    }

    #manajemen .swiper-slide-prev,
    #manajemen .swiper-slide-next {
        transform: scale(0.95);
    }
</style>

