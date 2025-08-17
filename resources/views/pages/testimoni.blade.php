<div class="min-h-screen bg-gray-50 py-28">
    <div class="container mx-auto px-4">
        <!-- Header Section -->
        <div class="text-center mb-16">
            <span class="text-orange-500 font-semibold tracking-wider uppercase text-xs sm:text-sm">ULASAN SISWA</span>
            <h1 class="text-3xl lg:text-5xl font-bold mt-2">Testimoni Alumni</h1>
        </div>
    </div>

    <div class="max-w-7xl mx-auto py-16">
        <div class="swiper testimonial-carousel">
            <div class="swiper-wrapper">
                @forelse ($testimonials as $testimoni)
                    <div class="swiper-slide px-2 sm:px-4">
                        <div class="bg-white rounded-2xl shadow-lg">
                            <div class="relative text-center p-4">
                                <div class="absolute top-2 left-2 text-7xl text-orange-400 font-serif select-none">
                                    <span class="select-none">"</span>
                                </div>
                                <div class="absolute bottom-2 right-2 text-7xl text-orange-400 font-serif rotate-180">
                                    <span class="select-none">"</span>
                                </div>
                                <!-- Content -->
                                <div class="relative z-10 px-4 sm:px-8 mt-8 mb-8">
                                    <p class="text-gray-800 text-sm sm:text-lg leading-relaxed font-light mb-6 md:mb-8">
                                        {{ $testimoni->testimoni }}
                                    </p>
                                    <div>
                                        <p class="text-gray-600 font-semibold text-lg sm:text-xl mb-1">{{ $testimoni->nama }}</p>
                                        <p class="text-orange-400 text-xs sm:text-sm font-medium">{{ $testimoni->jurusan }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="swiper-slide px-2 sm:px-4">
                        <div class="bg-white rounded-2xl shadow-lg">
                            <div class="relative text-center p-4">
                                <div class="absolute top-2 left-2 text-7xl text-orange-400 font-serif">"</div>
                                <div class="absolute bottom-2 right-2 text-7xl text-orange-400 font-serif rotate-180">"</div>
                                <!-- Content -->
                                <div class="relative z-10 px-4 sm:px-8 mt-8 mb-8">
                                    <p class="text-gray-800 text-base md:text-lg lg:text-xl leading-relaxed font-light mb-6 md:mb-8">
                                        Tidak Ada Data
                                    </p>
                                    <div>
                                        <p class="text-gray-600 font-semibold text-lg md:text-xl mb-1">Lorem Ipsum</p>
                                        <p class="text-orange-400 text-sm font-medium">Lorem</p>
                                    </div>
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
        const swiper = new Swiper('.testimonial-carousel', {
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
                    slidesPerView: 1,
                },
                1280: {
                    slidesPerView: 1,
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
    #testimoni .swiper-button-next,
    #testimoni .swiper-button-prev {
        color: #f97316;
        /* orange-500 */
        background: rgba(255, 255, 255, 0.9);
        width: 40px;
        height: 40px;
        border-radius: 50%;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    #testimoni .swiper-button-next:after,
    #testimoni .swiper-button-prev:after {
        font-size: 20px;
    }

    #testimoni .swiper-pagination {
        position: relative;
        margin-top: 1.5rem;
    }

    #testimoni .swiper-pagination-bullet {
        width: 5px;
        height: 5px;
        background: #f97316;
        opacity: 0.5;
        margin: 0 5px;
        transition: all 0.3s ease;
    }

    #testimoni .swiper-pagination-bullet-active {
        opacity: 1;
        background: #f97316;
        transform: scale(1.3);
    }

    #testimoni .swiper-slide {
        transition: transform 0.3s ease;
        opacity: 0.6;
    }

    #testimoni .swiper-slide-active {
        transform: scale(1);
        opacity: 1;
    }

    #testimoni .swiper-slide-prev,
    #testimoni .swiper-slide-next {
        transform: scale(0.95);
    }
</style>