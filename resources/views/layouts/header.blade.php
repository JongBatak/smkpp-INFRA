@php
    $onBlog = request()->is('blog') || request()->is('blog/*');
@endphp

<nav class="fixed top-0 left-0 w-full z-50 transition-all duration-300 animate-fade-down" id="header">
    <div class="container mx-auto px-2 py-4">
        <div class="flex items-center justify-between">
            <a href="{{ url('/') }}" class="flex items-center">
                <x-logo></x-logo>
            </a>

            <!-- Mobile Menu Button -->
            <div class="text-2xl cursor-pointer xl:hidden text-white" id="nav-toggle">
                <i class="ri-apps-2-fill text-3xl"></i>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden xl:block">
                <ul class="flex items-center space-x-8">
                    <li>
                        <a class="relative text-gray-100 hover:text-yellow-300 transition-colors duration-300 
             after:content-[''] after:absolute after:w-0 after:h-[2px] after:bg-yellow-300 
             after:left-0 after:-bottom-1 after:transition-all after:duration-300 hover:after:w-full"
                            href="{{ $onBlog ? url('/#beranda') : '#beranda' }}">
                            Beranda
                        </a>
                    </li>
                    <li>
                        <a class="relative text-gray-100 hover:text-yellow-300 transition-colors duration-300 
             after:content-[''] after:absolute after:w-0 after:h-[2px] after:bg-yellow-300 
             after:left-0 after:-bottom-1 after:transition-all after:duration-300 hover:after:w-full"
                            href="{{ $onBlog ? url('/#tentang') : '#tentang' }}">
                            Tentang
                        </a>
                    </li>
                    <li>
                        <a class="relative text-gray-100 hover:text-yellow-300 transition-colors duration-300 
             after:content-[''] after:absolute after:w-0 after:h-[2px] after:bg-yellow-300 
             after:left-0 after:-bottom-1 after:transition-all after:duration-300 hover:after:w-full"
                            href="{{ $onBlog ? url('/#manajemen') : '#manajemen' }}">
                            Manajemen
                        </a>
                    </li>
                    <li>
                        <a class="relative text-gray-100 hover:text-yellow-300 transition-colors duration-300 
             after:content-[''] after:absolute after:w-0 after:h-[2px] after:bg-yellow-300 
             after:left-0 after:-bottom-1 after:transition-all after:duration-300 hover:after:w-full"
                            href="{{ $onBlog ? url('/#prestasi') : '#prestasi' }}">
                            Prestasi
                        </a>
                    </li>
                    <li>
                        <a class="relative text-gray-100 hover:text-yellow-300 transition-colors duration-300 
             after:content-[''] after:absolute after:w-0 after:h-[2px] after:bg-yellow-300 
             after:left-0 after:-bottom-1 after:transition-all after:duration-300 hover:after:w-full"
                            href="{{ $onBlog ? url('/#dokumentasi') : '#dokumentasi' }}">
                            Dokumentasi
                        </a>
                    </li>
                    <li>
                        <a class="relative text-gray-100 hover:text-yellow-300 transition-colors duration-300 
             after:content-[''] after:absolute after:w-0 after:h-[2px] after:bg-yellow-300 
             after:left-0 after:-bottom-1 after:transition-all after:duration-300 hover:after:w-full"
                            href="{{ $onBlog ? url('/#mitra') : '#mitra' }}">
                            Mitra
                        </a>
                    </li>
                    <li>
                        <a class="relative text-gray-100 hover:text-yellow-300 transition-colors duration-300 
             after:content-[''] after:absolute after:w-0 after:h-[2px] after:bg-yellow-300 
             after:left-0 after:-bottom-1 after:transition-all after:duration-300 hover:after:w-full"
                            href="{{ $onBlog ? url('/#testimonial') : '#testimonial' }}">
                            Testimonial
                        </a>
                    </li>
                    <li>
                        <a class="relative text-gray-100 hover:text-yellow-300 transition-colors duration-300 
             after:content-[''] after:absolute after:w-0 after:h-[2px] after:bg-yellow-300 
             after:left-0 after:-bottom-1 after:transition-all after:duration-300 hover:after:w-full"
                            href="{{ $onBlog ? url('/#blog') : '#blog' }}">
                            Blog
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="fixed top-0 right-[-100%] w-[60%] h-screen bg-gray-700 p-8 shadow-lg transition-all duration-300  xl:hidden"
            id="nav-menu">
            <ul class="flex flex-col space-y-6 mt-16">
                <li><a class="text-gray-200 hover:text-yellow-300 transition-colors duration-300 text-lg"
                        href="{{ $onBlog ? url('/#beranda') : '#beranda' }}">Beranda</a>
                </li>
                <li><a class="text-gray-200 hover:text-yellow-300 transition-colors duration-300 text-lg"
                        href="{{ $onBlog ? url('/#tentang') : '#tentang' }}">Tentang</a>
                </li>
                <li><a class="text-gray-200 hover:text-yellow-300 transition-colors duration-300 text-lg"
                        href="{{ $onBlog ? url('/#manajemen') : '#manajemen' }}">Manajemen</a></li>
                <li><a class="text-gray-200 hover:text-yellow-300 transition-colors duration-300 text-lg"
                        href="{{ $onBlog ? url('/#prestasi') : '#prestasi' }}">Prestasi</a>
                </li>
                <li><a class="text-gray-200 hover:text-yellow-300 transition-colors duration-300 text-lg"
                        href="{{ $onBlog ? url('/#dokumentasi') : '#dokumentasi' }}">Dokumentasi</a>
                </li>
                <li><a class="text-gray-200 hover:text-yellow-300 transition-colors duration-300 text-lg"
                        href="{{ $onBlog ? url('/#mitra') : '#mitra' }}">Mitra</a></li>
                <li><a class="text-gray-200 hover:text-yellow-300 transition-colors duration-300 text-lg"
                        href="{{ $onBlog ? url('/#testimoni') : '#testimoni' }}">Testimonial</a>
                </li>
                <li><a class="text-gray-200 hover:text-yellow-300 transition-colors duration-300 text-lg"
                        href="{{ $onBlog ? url('/#blog') : '#blog' }}">Blog</a></li>
            </ul>

            <!-- Close Button -->
            <div class="absolute top-6 right-3 text-2xl cursor-pointer text-white" id="nav-close">
                <i class="ri-close-large-line"></i>
            </div>
        </div>
    </div>
</nav>

<style>
    @keyframes fadeDown {
        from {
            opacity: 0;
            transform: translateY(-50px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-down {
        animation: fadeDown 1s ease-out forwards;
    }
</style>

<script>
    const navMenu = document.getElementById('nav-menu'), // Mobile Menu
        navToggle = document.getElementById('nav-toggle'), // Btn Menu
        navClose = document.getElementById('nav-close') // Btn Close

    if (navToggle) {
        navToggle.addEventListener('click', () => {
            navMenu.classList.add('right-0')
            navMenu.classList.remove('right-[-100%]')
        })
    }

    if (navClose) {
        navClose.addEventListener('click', () => {
            navMenu.classList.remove('right-0')
            navMenu.classList.add('right-[-100%]')
        })
    }

    /*=============== REMOVE MENU MOBILE ===============*/
    const navLinks = document.querySelectorAll('#nav-menu a')

    const linkAction = () => {
        const navMenu = document.getElementById('nav-menu')
        navMenu.classList.remove('right-0')
        navMenu.classList.add('right-[-100%]')
    }
    navLinks.forEach(n => n.addEventListener('click', linkAction))

    /*=============== BACKGROUND OPACITY ========================*/
    const header = document.getElementById('header');

    function scrollHeader() {
        if (window.scrollY >= 10) {
            header.classList.add('bg-orange-500', 'shadow-md');
            header.classList.remove('bg-transparent');
        } else {
            header.classList.remove('bg-orange-500', 'shadow-md');
            header.classList.add('bg-transparent');
        }
    }

    window.addEventListener('scroll', scrollHeader);
</script>
