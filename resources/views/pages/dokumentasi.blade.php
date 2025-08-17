<div class="min-h-screen bg-gray-800 py-28">
    <div class="container mx-auto px-4">
        <!-- Header Section -->
        <div class="text-center mb-20">
            <span class="text-orange-500 font-semibold tracking-wider uppercase text-xs sm:text-sm">DOKUMENTASI KELULUSAN</span>
            <h1 class="text-3xl sm:text-5xl font-bold mt-2 text-white">@if (isset($dokumentasis->title)) {{ $dokumentasis->title }} @else Wisuda Sekolah Prestasi Prima 2025 @endif</h1>
        </div>
    </div>
    <!-- Video Section -->
    <div class="max-w-5xl mx-auto px-4 select-none">
        <div class="relative w-full aspect-video rounded-xl cursor-pointer overflow-hidden shadow-lg transition-all duration-300 ease-in-out hover:shadow-2xl hover:scale-[1.02] bg-gray-900" onclick="openVideoModal()">
            <!-- Thumbnail -->
            <img src="@if (isset($dokumentasis->thumbnail)) {{ asset('storage/' . $dokumentasis->thumbnail) }} @else {{ asset('assets/images/thumbnail.jpg') }} @endif" class="w-full h-full object-cover opacity-90">
            <!-- Overlay -->
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
            <!-- Play Button -->
            <div class="play-button">
                <div class="play-icon"></div>
            </div>
            <!-- Video Title -->
            <div class="absolute bottom-0 left-0 right-0 p-4 sm:p-6 text-white">
                <h3 class="text-sm sm:text-xl font-semibold mb-0 sm:mb-2">@if (isset($dokumentasis->title)) {{ $dokumentasis->title }} @else Wisuda Sekolah Prestasi Prima 2025 @endif</h3>
                <p class="text-sm text-gray-300">Klik untuk menonton video</p>
            </div>
        </div>
    </div>
    <!-- Anchor Section -->
    <div class="text-center mt-12">
        <a href="@if (isset($dokumentasis->link_video)) {{ $dokumentasis->link_video }} @else https://www.youtube.com/watch?v=1Xh2O8XVwTs @endif" class="select-none text-sm sm:text-lg inline-flex items-center gap-2 bg-orange-500 text-white px-5 sm:px-8 py-3 sm:py-4 rounded-md font-semibold hover:bg-orange-600 transition-all duration-300 transform hover:scale-105 hover:shadow-md">
            LINK VIDEO
        </a>
    </div>
</div>

<!-- Video Modal -->
<div class="modal" id="videoModal">
    <div class="modal-content">
        <button class="close-button" onclick="closeVideoModal()">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        <div class="loading ps-1" id="loading">
            <div class="spinner"></div>
            <p class="text-white mt-4">Memuat...</p>
        </div>
        <iframe class="video-frame" id="videoFrame" style="display: none;"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
        </iframe>
    </div>
</div>

<style>
    .play-button {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 80px;
        height: 80px;
        background: rgba(249, 115, 22, 0.9);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .play-button:hover {
        background: rgb(249, 115, 22);
        transform: translate(-50%, -50%) scale(1.1);
    }

    .play-icon {
        width: 0;
        height: 0;
        border-left: 25px solid white;
        border-top: 15px solid transparent;
        border-bottom: 15px solid transparent;
        margin-left: 5px;
    }

    .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.9);
        z-index: 1000;
        align-items: center;
        justify-content: center;
        backdrop-filter: blur(5px);
    }

    .modal.active {
        display: flex;
    }

    .modal-content {
        position: relative;
        width: 90%;
        max-width: 1000px;
        aspect-ratio: 16/9;
        background: #000;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
    }

    .close-button {
        position: absolute;
        top: -50px;
        right: 0;
        color: white;
        cursor: pointer;
        background: rgba(255, 255, 255, 0.1);
        border: none;
        z-index: 1001;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        transition: all 0.3s ease;
    }

    .close-button:hover {
        background: rgba(255, 255, 255, 0.2);
        transform: rotate(90deg);
    }

    .video-frame {
        width: 100%;
        height: 100%;
        border: none;
    }

    .loading {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        text-align: center;
    }

    .spinner {
        border: 4px solid rgba(255, 255, 255, 0.1);
        border-left: 4px solid white;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        animation: spin 1s linear infinite;
        margin: 0 auto;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    @media (max-width: 640px) {
        .play-button {
            width: 40px;
            height: 40px;
        }

        .play-icon {
            border-left: 20px solid white;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            margin-left: 3px;
        }
    }
</style>

<script>
    function openVideoModal() {
        const modal = document.getElementById('videoModal');
        const videoFrame = document.getElementById('videoFrame');
        const loading = document.getElementById('loading');

        modal.classList.add('active');
        loading.style.display = 'block';
        videoFrame.style.display = 'none';

        const videoId =   @if (isset($dokumentasis->id_video)) '{{ $dokumentasis->id_video }}' @else '1Xh2O8XVwTs' @endif;
        const embedUrl = `https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0&modestbranding=1&showinfo=0`;

        setTimeout(() => {
            videoFrame.src = embedUrl;
            videoFrame.onload = () => {
                loading.style.display = 'none';
                videoFrame.style.display = 'block';
            };
            setTimeout(() => {
                loading.style.display = 'none';
                videoFrame.style.display = 'block';
            }, 2000);
        }, 500);

        document.body.style.overflow = 'hidden';
    }

    function closeVideoModal() {
        const modal = document.getElementById('videoModal');
        const videoFrame = document.getElementById('videoFrame');

        modal.classList.remove('active');
        videoFrame.src = '';
        document.body.style.overflow = 'auto';
    }

    document.getElementById('videoModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeVideoModal();
        }
    });

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeVideoModal();
        }
    });

    document.getElementById('videoFrame').addEventListener('click', function(e) {
        e.stopPropagation();
    });
</script>
