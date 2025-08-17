<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'SMK Pprestasi Prima') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        ::selection {
            background-color: #600070;
            color: ghostwhite;
        }
    </style>
</head>

<body class="font-['Outfit']">
    <header class="select-none">
        @include('layouts.header')
    </header>

    <main>
        @if (isset($blog))
            <section>
                @include('pages.blog_detail')
            </section>
        @elseif (isset($more_blogs))
            <section class="bg-gray-800">
                @include('pages.more_blogs')
            </section>
        @else
            <section id="beranda">
                @include('pages.beranda')
            </section>

            <section id="tentang">
                @include('pages.tentang')
            </section>

            <section id="manajemen">
                @include('pages.manajemen')
            </section>

            <section id="prestasi">
                @include('pages.prestasi')
            </section>
            
            <section id="dokumentasi">
                @include('pages.dokumentasi')
            </section>
            
            <section id="mitra">
                @include('pages.mitra_industri')
            </section>

            <section id="testimoni">
                @include('pages.testimoni')
            </section>

            <section id="blog">
                @include('pages.blog')
            </section>
        @endif
    </main>

    <footer>
        @include('layouts.footer')
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        /*
        document.addEventListener('DOMContentLoaded', function() {
            if (window.location.hash && !sessionStorage.getItem('hashRemoved')) {
                sessionStorage.setItem('hashRemoved', 'true');
                window.location.href = window.location.href.split('#')[0];
            }
        });
        */
    </script>
</body>

</html>
