<div class="w-full h-screen relative bg-gray-800 overflow-hidden">
    <!-- Gradient Overlay -->
    <div class="absolute inset-0 bg-gradient-to-r from-gray-800/80 sm:from-gray-800/90 via-gray-800/50 sm:via-gray-800/60 to-transparent z-10"></div>
    <!-- Content -->
    <div class="absolute inset-0 flex items-center z-20">
        <div class="container mx-auto px-4">    
            <div class="max-w-4xl space-y-2 lg:space-y-4 animate-fade-in">
                <p class="text-sm sm:text-2xl xl:text-3xl font-semibold border-l-4 border-orange-400 pl-4 text-gray-200">SELAMAT DATANG DI SITUS RESMI</p>
                <h1 class="text-3xl sm:text-5xl xl:text-6xl font-bold text-orange-400 leading-tight">SMK PRESTASI PRIMA</h1>
                <p class="text-xs sm:text-lg xl:text-xl font-semibold text-gray-300 italic">"IF BETTER IS POSSIBLE, GOOD IS NOT ENOUGH"</p>
                <div class="pt-4">
                    <a href="#tentang" class="select-none text-sm sm:text-lg inline-flex items-center gap-2 bg-orange-500 text-white px-5 sm:px-8 py-3 sm:py-4 rounded-full font-semibold hover:bg-orange-600 transition-all duration-300 transform hover:scale-105 hover:shadow-md">
                        EXPLORE
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-auto w-4 sm:w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Background Image -->
    <img src="{{ asset('assets/images/sekolah_ls.png') }}" class="absolute inset-0 w-full h-full object-cover opacity-75 select-none" draggable="false"alt="SMK Prestasi Prima">
</div>
<style>
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateX(-50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    .animate-fade-in {
        animation: fadeIn 1s ease-out forwards;
    }
</style>
    