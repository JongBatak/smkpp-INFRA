<div class="bg-gray-900 text-white relative overflow-hidden px-4 sm:px-8 md:px-20 py-12 md:py-20">
    <div class="container mx-auto">
        <!-- Main Footer Content -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Logo and School Info -->
            <div class="flex flex-col items-center lg:items-start text-center lg:text-left">
                <x-logo></x-logo>
            </div>

            <!-- School Address -->
            <div class="flex flex-col items-center lg:items-start text-center lg:text-left">
                <h3 class="text-orange-400 font-semibold text-lg uppercase">Alamat Sekolah</h3>
                <p class="font-['Outfit'] text-gray-400 mt-2 text-xs sm:text-sm">
                    @if (isset($footers->alamat))
                        {{ $footers->alamat }}
                    @else
                        Jl. Hankam Raya No. 89, Cilangkap, Cipayung, <br> Jakarta Timur, DKI Jakarta.
                    @endif
                </p>
            </div>

            <!-- Contact Info -->
            <div class="flex flex-col items-center lg:items-start text-center lg:text-left">
                <h3 class="text-orange-400 font-semibold text-lg uppercase">Kontak Kami</h3>
                <div class="mt-2 space-y-2">
                    <p class="font-['Outfit'] text-gray-400 text-xs sm:text-sm">
                        @if (isset($footers->telepon))
                            {{ $footers->telepon }}
                        @else
                            +62 851-9592-8886
                        @endif
                    </p>
                    <p class="font-['Outfit'] text-gray-400 text-xs sm:text-sm">
                        @if (isset($footers->email))
                            {{ $footers->email }}
                        @else
                            ppdb@prestasiprima.sch.id
                        @endif
                    </p>
                </div>
            </div>

            <!-- Social Media -->
            <div class="flex flex-col items-center lg:items-start text-center lg:text-left">
                <h3 class="text-orange-400 font-semibold text-lg uppercase">Media Sosial</h3>
                <div class="footer__social text-gray-400 mt-4">
                    <a href="{{ isset($footers->tiktok) ? $footers->tiktok : 'https://tiktok.com' }}" target="_blank" class="hover:text-[#fc9928]">
                        <i class="ri-tiktok-fill"></i>
                    </a>
                    <a href="{{ isset($footers->instagram) ? $footers->instagram : 'https://instagram.com' }}" target="_blank" class="hover:text-[#fc9928]">
                        <i class="ri-instagram-fill"></i>
                    </a>
                    <a href="{{ isset($footers->youtube) ? $footers->youtube : 'https://youtube.com' }}" target="_blank" class="hover:text-[#fc9928]">
                        <i class="ri-youtube-fill"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Copyright Section -->
        <div class="mt-12 lg:mt-20 select-none">
            <p class="footer-text text-center mt-4">
                &copy; {{ date('Y') }} <span class="highlight">Orens Solution - Version 2.0</span> <span class="hidden sm:inline">|</span> <span class="block sm:inline"> JongBatak</span>
            </p>
        </div>
    </div>
</div>

<style>
    .footer__social {
        display: flex;
        column-gap: 1rem;
    }

    .footer__social a {
        width: 40px;
        height: 40px;
        font-size: 1.5rem;
        border-radius: 0.5rem;
        display: grid;
        place-items: center;
        transition: all 0.3s ease;
        background-color: rgba(255, 255, 255, 0.05);
    }

    .footer__social a:hover {
        transform: translateY(-0.25rem);
        background-color: rgba(252, 153, 40, 0.1);
    }

    .footer-line {
        height: 1px;
        background-color: #2a2a2a;
        width: 100%;
        margin: 0 auto;
    }

    .footer-text {
        font-size: 14px;
        color: #c0c0c0;
    }

    .highlight {
        color: #fc9928;
    }

    @media (max-width: 1024px) {
        .footer__social {
            margin-top: 1rem;
        }
    }
</style>
