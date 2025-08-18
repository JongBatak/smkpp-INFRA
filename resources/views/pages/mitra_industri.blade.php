@php
    function getImagesFromFolder($folderPath)
    {
        $images = [];
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg'];

        if (is_dir($folderPath)) {
            $files = scandir($folderPath);

            foreach ($files as $file) {
                if ($file != '.' && $file != '..') {
                    $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                    if (in_array($extension, $allowedExtensions)) {
                        $images[] = $file;
                    }
                }
            }
        }

        return $images;
    }

    $folderImages = [];
    if (empty($mitra) || (is_countable($mitra) && count($mitra) == 0)) {
        $folderPath = public_path('assets/images/logo');
        $folderImages = getImagesFromFolder($folderPath);
    }
@endphp

<div class="min-h-screen bg-white py-28">
    <div class="container mx-auto px-4">
        <!-- Header Section -->
        <div class="text-center mb-16">
            <span class="text-orange-500 font-semibold tracking-wider uppercase text-xs sm:text-sm">KERJASAMA SEKOLAH</span>
            <h1 class="text-3xl lg:text-5xl font-bold mt-2">Mitra Industri</h1>
        </div>
    </div>

    <!-- Carousel Section -->
    <div class="max-w-7xl mx-auto py-16">
        <div class="swiper job-carousel">
            <div class="swiper-wrapper py-4 items-center">
                @forelse($mitras as $mitra)
                    <div class="swiper-slide">
                        <div class="bg-white rounded-md overflow-hidden transform transition duration-300 hover:scale-105 flex items-center justify-center h-[300px]">
                            <div class="w-full h-full flex items-center justify-center p-6">
                                <img src="{{ asset('storage/' . $mitra->logo) }}" alt="Mitra {{ $mitra->nama }}" title="Mitra {{ $mitra->nama }}" class="w-auto h-auto max-w-[80%] max-h-[80%] object-contain select-none" draggable="false" loading="lazy">
                            </div>
                        </div>
                    </div>
                @empty
                    @if (!empty($folderImages))
                        @foreach ($folderImages as $image)
                            <div class="swiper-slide">
                                <div class="bg-white rounded-md overflow-hidden transform transition duration-300 hover:scale-105 flex items-center justify-center h-[300px]">
                                    <div class="w-full h-full flex items-center justify-center p-6">
                                        <img src="{{ asset('assets/images/logo/' . $image) }}" alt="Mitra {{ pathinfo($image, PATHINFO_FILENAME) }}" title="Mitra {{ pathinfo($image, PATHINFO_FILENAME) }}" class="w-auto h-auto max-w-[80%] max-h-[80%] object-contain select-none" draggable="false" loading="lazy">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endforelse
                @endforelse
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const swiper = new Swiper('.job-carousel', {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            speed: 1000,
            grabCursor: false,
            centeredSlides: true,
            autoplay: {
                delay: 1000,
                disableOnInteraction: true,
                pauseOnMouseEnter: true,
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

            watchSlidesProgress: true,
            preventInteractionOnTransition: true,
        });
    });
</script>

<style>
    #mitra .swiper-slide {
        transition: transform 0.3s ease;
        opacity: 0.4;
    }
    
    #mitra .swiper-slide-active {
        opacity: 1;
        transform: scale(1);
    }
    
    #mitra .swiper-slide-prev,
    #mitra .swiper-slide-next {
        opacity: 0.7;
        transform: scale(0.95);
    }
</style>