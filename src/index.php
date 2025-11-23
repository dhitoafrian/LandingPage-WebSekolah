<?php
$page_title = "Beranda";
include 'includes/header.php';
?>

<style>
    .video-thumbnail {
        position: relative;
        cursor: pointer;
        overflow: hidden;
        border-radius: 1rem;
        transition: all 0.3s ease;
    }

    .video-thumbnail:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 30px rgba(0, 0, 255, 0.3);
    }

    .video-thumbnail img {
        transition: transform 0.4s ease;
    }

    .video-thumbnail:hover img {
        transform: scale(1.05);
    }

    .play-button {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 70px;
        height: 70px;
        background: rgba(239, 68, 68, 0.95);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .play-button::after {
        content: "";
        width: 0;
        height: 0;
        border-left: 20px solid white;
        border-top: 12px solid transparent;
        border-bottom: 12px solid transparent;
        margin-left: 4px;
    }

    .video-thumbnail:hover .play-button {
        transform: translate(-50%, -50%) scale(1.1);
        background: rgba(239, 68, 68, 1);
    }

    .modal {
        display: none;
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0.85);
        z-index: 9999;
        align-items: center;
        justify-content: center;
        padding: 1rem;
        animation: fadeIn 0.3s ease;
    }

    .modal.active {
        display: flex;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .modal-content {
        position: relative;
        width: 100%;
        max-width: 900px;
        background: #000;
        border-radius: 1rem;
        overflow: hidden;
        animation: slideUp 0.4s ease;
    }

    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(50px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .modal-close {
        position: absolute;
        top: -40px;
        right: 0;
        width: 40px;
        height: 40px;
        background: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        font-size: 24px;
        color: #333;
        transition: all 0.3s ease;
        z-index: 10;
    }

    .modal-close:hover {
        background: #ef4444;
        color: white;
        transform: rotate(90deg);
    }

    .agenda-card {
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .agenda-card:hover {
        transform: translateX(8px);
        box-shadow: 0 10px 20px rgba(0, 0, 255, 0.3);
    }

    .video-swiper {
        overflow: hidden;
    }
</style>

<!-- ================= START BANNER SWIPER SECTION ================= -->
<section id="hero" class="relative w-full h-[60vh] md:h-[70vh] lg:h-[80vh] overflow-hidden bg-black">
    <div class="swiper h-full w-full" id="heroSwiper">
        <div class="swiper-wrapper" id="sliderTrack">

            <div class="swiper-slide" data-slide="0">
                <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=1920" alt="Program Desain Komunikasi Visual" class="w-full h-full object-cover user-select-none pointer-events-none">
                <div class="absolute inset-0 flex items-center justify-center z-10">
                    <div class="text-center text-white px-6 max-w-4xl animate-slideUp">
                        <h1 class="text-5xl md:text-7xl font-bold mb-6 drop-shadow-2xl">Program Desain Komunikasi Visual</h1>
                        <p class="text-xl md:text-2xl font-light drop-shadow-lg mb-8">Mengembangkan Kreativitas dan Inovasi Digital</p>
                        <div class="flex gap-4 justify-center flex-wrap">
                            <a href="#profil" class="px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-lg transition-all duration-300 transform hover:scale-105">
                                Lihat Profil
                            </a>
                            <a href="#kontak" class="px-8 py-4 bg-white hover:bg-gray-100 text-blue-600 font-semibold rounded-lg shadow-lg transition-all duration-300 transform hover:scale-105">
                                Hubungi Kami
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide" data-slide="1">
                <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=1920" alt="Teknik Komputer dan Jaringan" class="w-full h-full object-cover user-select-none pointer-events-none">
                <div class="absolute inset-0 flex items-center justify-center z-10">
                    <div class="text-center text-white px-6 max-w-4xl animate-slideUp">
                        <h1 class="text-5xl md:text-7xl font-bold mb-6 drop-shadow-2xl">Teknik Komputer dan Jaringan</h1>
                        <p class="text-xl md:text-2xl font-light drop-shadow-lg mb-8">Menguasai Teknologi Informasi Masa Depan</p>
                        <div class="flex gap-4 justify-center flex-wrap">
                            <a href="#program" class="px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-lg transition-all duration-300 transform hover:scale-105">
                                Lihat Program
                            </a>
                            <a href="#daftar" class="px-8 py-4 bg-white hover:bg-gray-100 text-blue-600 font-semibold rounded-lg shadow-lg transition-all duration-300 transform hover:scale-105">
                                Daftar Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide" data-slide="2">
                <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=1920" alt="Rekayasa Perangkat Lunak" class="w-full h-full object-cover user-select-none pointer-events-none">
                <div class="absolute inset-0 flex items-center justify-center z-10">
                    <div class="text-center text-white px-6 max-w-4xl animate-slideUp">
                        <h1 class="text-5xl md:text-7xl font-bold mb-6 drop-shadow-2xl">Rekayasa Perangkat Lunak</h1>
                        <p class="text-xl md:text-2xl font-light drop-shadow-lg mb-8">Menciptakan Solusi Digital Inovatif</p>
                        <div class="flex gap-4 justify-center flex-wrap">
                            <a href="#fasilitas" class="px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-lg transition-all duration-300 transform hover:scale-105">
                                Lihat Fasilitas
                            </a>
                            <a href="#galeri" class="px-8 py-4 bg-white hover:bg-gray-100 text-blue-600 font-semibold rounded-lg shadow-lg transition-all duration-300 transform hover:scale-105">
                                Galeri Kegiatan
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide" data-slide="3">
                <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=1920" alt="Multimedia Broadcasting" class="w-full h-full object-cover user-select-none pointer-events-none">
                <div class="absolute inset-0 flex items-center justify-center z-10">
                    <div class="text-center text-white px-6 max-w-4xl animate-slideUp">
                        <h1 class="text-5xl md:text-7xl font-bold mb-6 drop-shadow-2xl">Multimedia Broadcasting</h1>
                        <p class="text-xl md:text-2xl font-light drop-shadow-lg mb-8">Berkarya di Industri Media dan Pertelevisian</p>
                        <div class="flex gap-4 justify-center flex-wrap">
                            <a href="#prestasi" class="px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-lg transition-all duration-300 transform hover:scale-105">
                                Lihat Prestasi
                            </a>
                            <a href="#alumni" class="px-8 py-4 bg-white hover:bg-gray-100 text-blue-600 font-semibold rounded-lg shadow-lg transition-all duration-300 transform hover:scale-105">
                                Testimoni Alumni
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button id="prevBtn" class="swiper-button-prev hidden absolute left-8 top-1/2 -translate-y-1/2 z-30 w-14 h-14 md:w-16 md:h-16 bg-blue-600/80 hover:bg-blue-600 text-white rounded-md md:flex items-center justify-center transition-all duration-300 transform hover:scale-110 shadow-xl disabled:opacity-50">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7" />
    </button>

    <button id="nextBtn" class="swiper-button-next hidden absolute right-8 top-1/2 -translate-y-1/2 z-30 w-14 h-14 md:w-16 md:h-16 bg-blue-600/80 hover:bg-blue-600 text-white rounded-md md:flex items-center justify-center transition-all duration-300 transform hover:scale-110 shadow-xl disabled:opacity-50">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7" />
    </button>
</section>
<!-- ================= END BANNER SWIPER SECTION ================= -->

<!-- ================= START SAMBUTAN & INFORMASI PPDB ================= -->
<section class="bg-blue-100 py-5 px-2 lg:p-20">
    <div class="max-w-7xl mx-auto bg-white rounded-2xl p-6 md:p-10 shadow-2xl">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-start">

            <div class="flex flex-col items-center text-center">
                <div class="relative mb-6">
                    <div class="relative group">
                        <img src="/Template-WebSekolah/assets/images/kepala-sekolah.jpeg"
                            alt="Kepala Sekolah"
                            class="w-40 h-40 rounded-full object-cover border-4 border-blue-600 shadow-xl transition-transform duration-300 group-hover:scale-105">
                        <div class="absolute inset-0 rounded-full overflow-hidden pointer-events-none">
                            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/30 to-transparent transform -translate-x-full group-hover:translate-x-full transition-transform duration-700 skew-x-12"></div>
                        </div>
                    </div>

                    <div class="absolute -bottom-3 left-1/2 -translate-x-1/2 bg-blue-600 px-4 py-1 rounded-full shadow-lg">
                        <span class="text-white text-xs font-bold">Kepala Sekolah</span>
                    </div>
                </div>

                <h3 class="text-gray-900 text-2xl font-bold mb-1">Fitri Sari Sukmawati, M.Pd</h3>
                <p class="text-gray-500 text-sm mb-4">SMA Muhammadiyah 3 Yogyakarta</p>

                <div class="bg-gray-50 rounded-lg p-4 mb-6 border border-gray-200">
                    <p class="text-gray-700 text-sm leading-relaxed line-clamp-4 text-justify">
                        Assalamualaikum Warahmatullah Wabarakatuh. Alhamdulillah robbil alamin kami panjatkan kehadirat Allah SWT, bahwasanya dengan rahmat dan karunia-Nya lah akhirnya Website sekolah kami dapat hadir untuk memberikan informasi dan layanan terbaik bagi seluruh warga sekolah dan masyarakat.
                    </p>
                </div>

                <a href="/Template-WebSekolah/pages/sambutan.php" class="glow-button relative overflow-hidden inline-flex items-center justify-center px-8 py-3 text-base font-semibold text-white bg-blue-600 rounded-full hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 shadow-lg">
                    <span class="relative z-10">Baca Sambutan Lengkap</span>
                </a>
            </div>

            <div>
                <div class="mb-6 text-center lg:text-left">
                    <h3 class="text-gray-900 text-2xl font-bold mb-2">Informasi PPDB</h3>
                </div>

                <div class="swiper slider-ppdb-wrapper" id="ppdbSwiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide ppdb-custom-slide" data-slide="0">
                            <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=1920" alt="PPDB 2025">
                            <div class="gradient"></div>
                            <div class="info text-center">
                                <div class="inline-block px-4 py-1.5 bg-white/20 backdrop-blur-sm rounded-full mb-3">
                                    <span class="text-white text-sm font-bold">🎓 PPDB 2025/2026</span>
                                </div>
                                <h4 class="text-white text-xl font-bold mb-2">Pendaftaran Dibuka</h4>
                                <p class="text-white/90 text-sm mb-4">Jalur Zonasi & Prestasi</p>
                                <button class="px-6 py-2.5 bg-white text-blue-600 rounded-lg text-sm font-semibold hover:bg-gray-100 transition shadow-lg pointer-events-auto">
                                    Lihat Selengkapnya →
                                </button>
                            </div>
                        </div>

                        <div class="swiper-slide ppdb-custom-slide" data-slide="1">
                            <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?w=600&h=900&fit=crop" alt="Jalur Prestasi">
                            <div class="gradient"></div>
                            <div class="info text-center">
                                <div class="inline-block px-4 py-1.5 bg-white/20 backdrop-blur-sm rounded-full mb-3">
                                    <span class="text-white text-sm font-bold">🏆 JALUR PRESTASI</span>
                                </div>
                                <h4 class="text-white text-xl font-bold mb-2">Beasiswa Prestasi</h4>
                                <p class="text-white/90 text-sm mb-4">Raih Kesempatan Beasiswa Full</p>
                                <button class="px-6 py-2.5 bg-white text-blue-600 rounded-lg text-sm font-semibold hover:bg-gray-100 transition shadow-lg pointer-events-auto">
                                    Info Lengkap →
                                </button>
                            </div>
                        </div>

                        <div class="swiper-slide ppdb-custom-slide" data-slide="2">
                            <img src="https://images.unsplash.com/photo-1568667256549-094345857637?w=600&h=900&fit=crop" alt="Fasilitas">
                            <div class="gradient"></div>
                            <div class="info text-center">
                                <div class="inline-block px-4 py-1.5 bg-white/20 backdrop-blur-sm rounded-full mb-3">
                                    <span class="text-white text-sm font-bold">🏫 FASILITAS</span>
                                </div>
                                <h4 class="text-white text-xl font-bold mb-2">Fasilitas Lengkap</h4>
                                <p class="text-white/90 text-sm mb-4">Lab Komputer, Studio & Lebih</p>
                                <button class="px-6 py-2.5 bg-white text-blue -600 rounded-lg text-sm font-semibold hover:bg-gray-100 transition shadow-lg pointer-events-auto">
                                    Lihat Fasilitas →
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================= END SAMBUTAN & INFORMASI PPDB ================= -->

<!-- ================= START SMARTSCHOOL STATISTICS ================= -->
<section id="stats-section" class="py-16 px-4 bg-[url('/Template-WebSekolah/assets/images/desktop.jpg')] bg-cover bg-center">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-2xl md:text-3xl font-bold text-white text-center mb-12">
            Smartschool Sistem SMA Muhammadiyah 3 Yogyakarta
        </h2>

        <div class="bg-cover bg-center bg-[url('/Template-WebSekolah/assets/images/desktop.jpg')] rounded-2xl shadow-xl p-6 md:p-8">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
                <div class="text-white text-center lg:text-left">
                    <h3 class="text-3xl md:text-4xl font-bold mb-2">2025/2026</h3>
                    <p class="text-base md:text-lg font-medium">Tahun Ajaran</p>
                </div>

                <div class="text-white text-center lg:text-left">
                    <h3 class="text-3xl md:text-4xl font-bold mb-2 counter-peserta">0</h3>
                    <p class="text-base md:text-lg font-medium">Peserta Didik</p>
                </div>

                <div class="text-white text-center lg:text-left">
                    <h3 class="text-3xl md:text-4xl font-bold mb-2 counter-guru">0</h3>
                    <p class="text-base md:text-lg font-medium">Guru Tendik</p>
                </div>

                <div class="text-white text-center lg:text-left">
                    <h3 class="text-3xl md:text-4xl font-bold mb-2 counter-kelas">0</h3>
                    <p class="text-base md:text-lg font-medium">Kelas Rombel</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================= END SMARTSCHOOL STATISTICS ================= -->

<!-- ================= START PRESTASI INFOGRAPHIC ================= -->
<section class="py-16 px-4">
    <div class="max-w-7xl mx-auto">
        <!-- Header Text - Center -->
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-blue-600 mb-3">
                <span class="inline-block">─ ──</span> Infografis
            </h2>
            <h3 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Prestasi</h3>
            <p class="text-gray-600 text-lg">Prestasi Sekolah dan Siswa SMA Muhammadiyah 3 Yogyakarta</p>
        </div>

        <!-- Swiper Slider -->
        <div class="swiper prestasi-swiper">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="infografis-card">
                        <div class="photo-card">
                            <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?w=600&h=800&fit=crop"
                                alt="Prestasi 1">
                            <div class="slash-info"></div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="infografis-card">
                        <div class="photo-card">
                            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=600&h=800&fit=crop"
                                alt="Prestasi 2">
                            <div class="slash-info"></div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div class="infografis-card">
                        <div class="photo-card">
                            <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?w=600&h=800&fit=crop"
                                alt="Prestasi 3">
                            <div class="slash-info"></div>
                        </div>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="swiper-slide">
                    <div class="infografis-card">
                        <div class="photo-card">
                            <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?w=600&h=800&fit=crop"
                                alt="Prestasi 4">
                            <div class="slash-info"></div>
                        </div>
                    </div>
                </div>

                <!-- Slide 5 -->
                <div class="swiper-slide">
                    <div class="infografis-card">
                        <div class="photo-card">
                            <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=600&h=800&fit=crop"
                                alt="Prestasi 5">
                            <div class="slash-info"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation buttons -->
            <div class="hidden md:flex swiper-button-next"></div>
            <div class="hidden md:flex swiper-button-prev"></div>

        </div>
    </div>
</section>
<!-- ================= END PRESTASI INFOGRAPHIC ================= -->

<!-- ================= START LAYANAN KHUSUS / KELAS BELAJAR ================= -->
<section class="py-16 px-4">
    <div class="max-w-7xl mx-auto">

        <div class="mb-10">
            <h2 class="text-blue-600 text-xl md:text-2xl font-bold mb-2">
                <span class="inline-block">─ ──</span> Layanan Khusus
            </h2>
            <h3 class="text-2xl md:text-3xl font-bold text-gray-800">KELAS BELAJAR & ASRAMA</h3>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            <div class="lg:col-span-2 grid grid-cols-1 sm:grid-cols-2 gap-6 lg:border-r lg:pr-6 border-gray-200 order-2 lg:order-none">

                <div class="service-card card-small mb-6 sm:mb-0 sm:col-span-1">
                    <div class="image-wrapper">
                        <img src="https://images.unsplash.com/photo-1580537659466-0a9bfa916a54?w=600&h=400&fit=crop"
                            alt="Kelas Tahfidz">
                        <div class="slash-overlay"></div>
                    </div>
                    <div class="content-area-small p-4 sm:p-6 flex flex-col flex-grow">
                        <h4 class="text-xl font-bold text-gray-800 mb-3">Kelas Tahfidz</h4>
                        <p class="text-gray-600 mb-4 flex-grow leading-relaxed line-clamp-2 text-sm">
                            Kelas tahfidz merupakan program pendidikan untuk menghafal Al-Qur'an.
                        </p>
                        <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-full font-semibold inline-block text-center text-sm mt-auto">
                            <span class="relative z-10">Selengkapnya</span>
                        </a>
                    </div>
                </div>

                <div class="service-card card-small sm:col-span-1">
                    <div class="image-wrapper">
                        <img src="https://images.unsplash.com/photo-1561998338-13ad7883b20f?w=600&h=400&fit=crop"
                            alt="Kelas DKV">
                        <div class="slash-overlay"></div>
                    </div>
                    <div class="content-area-small p-4 sm:p-6 flex flex-col flex-grow">
                        <h4 class="text-xl font-bold text-gray-800 mb-3">Kelas DKV</h4>
                        <p class="text-gray-600 mb-4 flex-grow leading-relaxed line-clamp-2 text-sm">
                            Desain Komunikasi Visual (DKV) mengajarkan penyampaian pesan secara visual.
                        </p>
                        <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-full font-semibold inline-block text-center text-sm mt-auto">
                            <span class="relative z-10">Selengkapnya</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-1 col-span-full order-1 lg:order-none">
                <div class="service-card">
                    <div class="image-wrapper h-64">
                        <img src="https://images.unsplash.com/photo-1555854877-bab0e564b8d5?w=600&h=400&fit=crop"
                            alt="Asrama Putri">
                        <div class="slash-overlay"></div>
                    </div>
                    <div class="content-area p-6 flex flex-col flex-grow">
                        <h4 class="text-xl font-bold text-gray-800 mb-3">Asrama Putri</h4>
                        <p class="text-gray-600 mb-6 flex-grow leading-relaxed line-clamp-3">
                            Asrama putri adalah fasilitas yang dirancang khusus untuk memberikan tempat tinggal yang aman dan nyaman bagi siswi.
                        </p>
                        <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2.5 rounded-full font-semibold inline-block text-center mt-auto">
                            <span class="relative z-10">Selengkapnya</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- ================= END LAYANAN KHUSUS / KELAS BELAJAR ================= -->

<!-- ================= START BERITA & ARTIKEL ================= -->
<section class="py-16 px-4">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <!-- SISI KIRI: Berita Sekolah -->
            <div class="lg:col-span-2">
                <!-- Header -->
                <div class="mb-6">
                    <h2 class="text-blue-600 text-xl font-bold mb-2">
                        <span class="inline-block">─ ──</span> Publikasi Sekolah
                    </h2>
                    <h3 class="text-2xl md:text-3xl font-bold text-gray-800">BERITA SEKOLAH</h3>
                </div>

                <!-- Hero Swiper -->
                <div class="swiper swiper-hero mb-6 relative">
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide relative h-96">
                            <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=1200&h=600&fit=crop"
                                alt="Berita 3" class="w-full h-full object-cover">
                            <div class="hero-content">
                                <h4 class="text-white text-2xl md:text-3xl font-bold mb-2">Upacara Nasional 2025</h4>
                                <p class="text-white/80 text-sm">📅 1 Oktober 2025</p>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="swiper-slide relative h-96">
                            <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?w=1200&h=600&fit=crop"
                                alt="Berita 2" class="w-full h-full object-cover">
                            <div class="hero-content">
                                <h4 class="text-white text-2xl md:text-3xl font-bold mb-2">Prestasi Olimpiade Nasional</h4>
                                <p class="text-white/80 text-sm">📅 28 Oktober 2025</p>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="swiper-slide relative h-96">
                            <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=1200&h=600&fit=crop"
                                alt="Berita 3" class="w-full h-full object-cover">
                            <div class="hero-content">
                                <h4 class="text-white text-2xl md:text-3xl font-bold mb-2">Kunjungan Industri Teknologi</h4>
                                <p class="text-white/80 text-sm">📅 25 Oktober 2025</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Grid 6 Berita (3x2) -->
                <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 gap-4 mb-6">
                    <!-- News Card 1 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-sm cursor-pointer">
                        <div class="overflow-hidden h-40">
                            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=400&h=300&fit=crop"
                                alt="News 1" class="w-full h-full object-cover">
                        </div>
                        <div class="p-4">
                            <h5 class="font-bold text-gray-800 mb-2 line-clamp-2 hover:text-blue-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi inventore repudiandae unde suscipit eius architecto deserunt recusandae quos dolor corrupti?</h5>
                            <p class="text-sm text-gray-500">📅 01 November 2025</p>
                        </div>
                    </div>

                    <!-- News Card 2 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-sm cursor-pointer">
                        <div class="overflow-hidden h-40">
                            <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?w=400&h=300&fit=crop"
                                alt="News 2" class="w-full h-full object-cover">
                        </div>
                        <div class="p-4">
                            <h5 class="font-bold text-gray-800 mb-2 line-clamp-2 hover:text-blue-600">Penarikan Mahasiswa PLP UIN</h5>
                            <p class="text-sm text-gray-500">📅 29 Oktober 2025</p>
                        </div>
                    </div>

                    <!-- News Card 3 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-sm cursor-pointer">
                        <div class="overflow-hidden h-40">
                            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=400&h=300&fit=crop"
                                alt="News 3" class="w-full h-full object-cover">
                        </div>
                        <div class="p-4">
                            <h5 class="font-bold text-gray-800 mb-2 line-clamp-2 hover:text-blue-600">Orientasi Hizbul Wathan</h5>
                            <p class="text-sm text-gray-500">📅 27 Oktober 2025</p>
                        </div>
                    </div>

                    <!-- News Card 4 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-sm cursor-pointer">
                        <div class="overflow-hidden h-40">
                            <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?w=400&h=300&fit=crop"
                                alt="News 4" class="w-full h-full object-cover">
                        </div>
                        <div class="p-4">
                            <h5 class="font-bold text-gray-800 mb-2 line-clamp-2 hover:text-blue-600">Perdalaman Materi Penjurusan SMA</h5>
                            <p class="text-sm text-gray-500">📅 29 Oktober 2025</p>
                        </div>
                    </div>

                    <!-- News Card 5 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-sm cursor-pointer">
                        <div class="overflow-hidden h-40">
                            <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=400&h=300&fit=crop"
                                alt="News 5" class="w-full h-full object-cover">
                        </div>
                        <div class="p-4">
                            <h5 class="font-bold text-gray-800 mb-2 line-clamp-2 hover:text-blue-600">Upacara Memperingati Hari Sumpah Pemuda</h5>
                            <p class="text-sm text-gray-500">📅 29 Oktober 2025</p>
                        </div>
                    </div>

                    <!-- News Card 6 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-sm cursor-pointer">
                        <div class="overflow-hidden h-40">
                            <img src="https://images.unsplash.com/photo-1580537659466-0a9bfa916a54?w=400&h=300&fit=crop"
                                alt="News 6" class="w-full h-full object-cover">
                        </div>
                        <div class="p-4">
                            <h5 class="font-bold text-gray-800 mb-2 line-clamp-2 hover:text-blue-600">Deteksi Kesehatan Siswa Sejak Dini</h5>
                            <p class="text-sm text-gray-500">📅 27 Oktober 2025</p>
                        </div>
                    </div>
                </div>

                <!-- Button Berita Lainnya -->
                <div class="text-center">
                    <a href="/Template-WebSekolah/pages/berita.php" class="glow-button overflow-hidden bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-full font-semibold">
                        <span class="relative z-10">Berita Lainnya</span>
                    </a>
                </div>
            </div>

            <!-- SISI KANAN: Artikel & Jurnal -->
            <div class="lg:col-span-1">
                <!-- Header -->
                <div class="mb-6">
                    <h2 class="text-blue-600 text-xl font-bold mb-2">
                        <span class="inline-block">─ ──</span> Kiriman Konten
                    </h2>
                    <h3 class="text-2xl md:text-3xl font-bold text-gray-800">ARTIKEL & JURNAL</h3>
                </div>

                <!-- Article List -->
                <div class="space-y-4 mb-6">
                    <!-- Article 1 -->
                    <div class="bg-white rounded-lg p-4 shadow-sm cursor-pointer flex gap-4">
                        <div class="overflow-hidden rounded-lg w-24 h-24 flex-shrink-0">
                            <img src="https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8?w=200&h=200&fit=crop"
                                alt="Article 1" class="w-full h-full object-cover">
                        </div>
                        <div class="flex-grow">
                            <h5 class="font-bold text-gray-800 mb-1 line-clamp-2 hover:text-blue-600">Berdzikir dengan Ikhlas</h5>
                            <p class="text-xs text-gray-500 mb-1">Oleh: Kumara Adji Kusuma</p>
                            <p class="text-xs text-gray-400">📅 3 menit baca</p>
                        </div>
                    </div>

                    <!-- Article 2 -->
                    <div class="bg-white rounded-lg p-4 shadow-sm cursor-pointer flex gap-4">
                        <div class="overflow-hidden rounded-lg w-24 h-24 flex-shrink-0">
                            <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=200&h=200&fit=crop"
                                alt="Article 2" class="w-full h-full object-cover">
                        </div>
                        <div class="flex-grow">
                            <h5 class="font-bold text-gray-800 mb-1 line-clamp-2 hover:text-blue-600">Ketika Berbuat Salah Terasa Aneh</h5>
                            <p class="text-xs text-gray-500 mb-1">Oleh: Ahmad Fauzi</p>
                            <p class="text-xs text-gray-400">📅 5 menit baca</p>
                        </div>
                    </div>

                    <!-- Article 3 -->
                    <div class="bg-white rounded-lg p-4 shadow-sm cursor-pointer flex gap-4">
                        <div class="overflow-hidden rounded-lg w-24 h-24 flex-shrink-0">
                            <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?w=200&h=200&fit=crop"
                                alt="Article 3" class="w-full h-full object-cover">
                        </div>
                        <div class="flex-grow">
                            <h5 class="font-bold text-gray-800 mb-1 line-clamp-2 hover:text-blue-600">Puasa Melawan Angkuh Diri</h5>
                            <p class="text-xs text-gray-500 mb-1">Oleh: Haedir Nashir</p>
                            <p class="text-xs text-gray-400">📅 4 menit baca</p>
                        </div>
                    </div>

                    <!-- Article 4 -->
                    <div class="bg-white rounded-lg p-4 shadow-sm cursor-pointer flex gap-4">
                        <div class="overflow-hidden rounded-lg w-24 h-24 flex-shrink-0">
                            <img src="https://images.unsplash.com/photo-1519452635265-7b1fbfd1e4e0?w=200&h=200&fit=crop"
                                alt="Article 4" class="w-full h-full object-cover">
                        </div>
                        <div class="flex-grow">
                            <h5 class="font-bold text-gray-800 mb-1 line-clamp-2 hover:text-blue-600">Islam, Muhammadiyah, dan Seni</h5>
                            <p class="text-xs text-gray-500 mb-1">Oleh: Dr. Syamsul Arifin</p>
                            <p class="text-xs text-gray-400">📅 6 menit baca</p>
                        </div>
                    </div>
                </div>

                <!-- Button Semua Artikel -->
                <div class="text-center">
                    <button class="glow-button bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-full font-semibold w-full">
                        <span class="relative z-10">Semua Artikel</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================= START BERITA & ARTIKEL ================= -->

<!-- ================= START PRESENSI REALTIME CTA ================= -->
<section class="py-16 px-4 bg-[url('/Template-WebSekolah/assets/images/desktop.jpg')] bg-cover bg-center">
    <div class="max-w-7xl mx-auto">
        <!-- Section Title -->
        <h6 class="text-2xl md:text-3xl font-bold text-white text-center mb-12">
            ─ ── SMA Muhammadiyah 3 Yogyakarta Menerapkan Digitalisasi Sekolah
        </h6>

        <h4 class="text-base md:text-2xl font-bold text-white text-center mb-12">
            Terintegrasi dengan presentasi mandiri realtime
        </h4>


        <!-- Single Card with 4 Columns -->
        <div class="flex flex-row justify-center items-center gap-6">

            <div class="text-center">
                <button class="glow-button overflow-hidden bg-blue-600 hover:bg-blue-700 text-white px-4 py-3 lg:px-6 lg:py-3 rounded-full font-semibold">
                    <span class="relative z-10 text-sm">View Presensi Siswa</span>
                </button>
            </div>

            <div class="text-center">
                <button class="glow-button overflow-hidden bg-blue-600 hover:bg-blue-700 text-white px-4 py-3 lg:px-8 lg:py-3 rounded-full font-semibold">
                    <span class="relative z-10 text-sm">View Presensi Guru</span>
                </button>
            </div>

        </div>
    </div>
</section>
<!-- ================= END PRESENSI REALTIME CTA ================= -->

<!-- ================= START GALERI FOTO ================= -->
<section class="py-16 px-4 bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <!-- KIRI: Text Content -->
            <div>
                <div class="mb-6">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Galeri Foto</h2>

                    <div class="mb-6">
                        <p class="text-gray-700 font-semibold mb-2">Galeri Foto</p>
                        <p class="text-gray-600 leading-relaxed">
                            Lihat lebih banyak foto kegiatan kami. <a href="/galeri" class="link-selengkapnya text-blue-600 font-semibold">Selengkapnya</a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- KANAN: Swiper Galeri Foto -->
            <div>
                <div class="inline-flex items-center gap-2 mb-4">
                    <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                    </svg>
                    <span class="text-blue-600 font-semibold text-lg">Foto Terbaru</span>
                </div>

                <div class="swiper galeri-swiper">
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide galeri-slide">
                            <div class="overflow-hidden rounded-2xl shadow-lg">
                                <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?w=600&h=400&fit=cropv"
                                    alt="Galeri 1"
                                    class="w-full h-64 object-cover">
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="swiper-slide galeri-slide">
                            <div class="overflow-hidden rounded-2xl shadow-lg">
                                <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?w=600&h=400&fit=crop"
                                    alt="Galeri 2"
                                    class="w-full h-64 object-cover">
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="swiper-slide galeri-slide">
                            <div class="overflow-hidden rounded-2xl shadow-lg">
                                <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=600&h=400&fit=crop"
                                    alt="Galeri 3"
                                    class="w-full h-64 object-cover">
                            </div>
                        </div>

                        <!-- Slide 4 -->
                        <div class="swiper-slide galeri-slide">
                            <div class="overflow-hidden rounded-2xl shadow-lg">
                                <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?w=600&h=400&fit=crop"
                                    alt="Galeri 4"
                                    class="w-full h-64 object-cover">
                            </div>
                        </div>

                        <!-- Slide 5 -->
                        <div class="swiper-slide galeri-slide">
                            <div class="overflow-hidden rounded-2xl shadow-lg">
                                <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=600&h=400&fit=crop"
                                    alt="Galeri 5"
                                    class="w-full h-64 object-cover">
                            </div>
                        </div>

                        <!-- Slide 6 -->
                        <div class="swiper-slide galeri-slide">
                            <div class="overflow-hidden rounded-2xl shadow-lg">
                                <img src="https://images.unsplash.com/photo-1580537659466-0a9bfa916a54?w=600&h=400&fit=crop"
                                    alt="Galeri 6"
                                    class="w-full h-64 object-cover">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- ================= END GALERI FOTO ================= -->

<!-- ================= START VIDEO SECTION ================= -->
<div id="videoModal" class="modal">
    <div class="modal-content">
        <div class="modal-close" onclick="closeModal()">×</div>
        <div class="aspect-video">
            <iframe id="youtubePlayer"
                width="100%"
                height="100%"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>
    </div>
</div>

<section class="py-16 px-4">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <!-- KIRI: Video Section (2 kolom) -->
            <div class="lg:col-span-2">
                <!-- Header -->
                <div class="mb-8">
                    <p class="text-blue-600 font-semibold text-lg mb-2">─ ── Video Terbaru</p>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Video Seputar Sekolah</h2>
                </div>

                <!-- Video Besar -->
                <div class="mb-6">
                    <div class="video-thumbnail" onclick="openModal('dQw4w9WgXcQ')">
                        <img src="https://img.youtube.com/vi/dQw4w9WgXcQ/maxresdefault.jpg"
                            alt="Video Utama"
                            class="w-full h-80 object-cover">
                        <div class="play-button"></div>
                    </div>
                </div>

                <!-- Swiper Video Kecil -->
                <div class="swiper video-swiper">
                    <div class="swiper-wrapper">
                        <!-- Video 1 -->
                        <div class="swiper-slide">
                            <div class="video-thumbnail" onclick="openModal('jNQXAC9IVRw')">
                                <img src="https://img.youtube.com/vi/jNQXAC9IVRw/hqdefault.jpg"
                                    alt="Video 1"
                                    class="w-full h-48 object-cover">
                                <div class="play-button" style="width: 50px; height: 50px;">
                                </div>
                            </div>
                        </div>

                        <!-- Video 2 -->
                        <div class="swiper-slide">
                            <div class="video-thumbnail" onclick="openModal('9bZkp7q19f0')">
                                <img src="https://img.youtube.com/vi/9bZkp7q19f0/hqdefault.jpg"
                                    alt="Video 2"
                                    class="w-full h-48 object-cover">
                                <div class="play-button" style="width: 50px; height: 50px;">
                                </div>
                            </div>
                        </div>

                        <!-- Video 3 -->
                        <div class="swiper-slide">
                            <div class="video-thumbnail" onclick="openModal('L_jWHffIx5E')">
                                <img src="https://img.youtube.com/vi/L_jWHffIx5E/hqdefault.jpg"
                                    alt="Video 3"
                                    class="w-full h-48 object-cover">
                                <div class="play-button" style="width: 50px; height: 50px;">
                                </div>
                            </div>
                        </div>

                        <!-- Video 4 -->
                        <div class="swiper-slide">
                            <div class="video-thumbnail" onclick="openModal('kJQP7kiw5Fk')">
                                <img src="https://img.youtube.com/vi/kJQP7kiw5Fk/hqdefault.jpg"
                                    alt="Video 4"
                                    class="w-full h-48 object-cover">
                                <div class="play-button" style="width: 50px; height: 50px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- KANAN: Agenda Section (1 kolom) -->
            <div>
                <!-- Header -->
                <div class="mb-8">
                    <p class="text-blue-600 font-semibold text-lg mb-2">─ ── Informasi</p>
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-800">PENGUMUMAN & AGENDA</h2>
                </div>

                <!-- Agenda Cards -->
                <div class="space-y-4 mb-6">
                    <!-- Card 1 -->
                    <a href="/agenda/asesmen-sekolah" class="agenda-card block bg-white rounded-xl p-5 shadow-md">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-calendar-days "></i>
                            </div>
                            <div>
                                <p class="text-blue-600 text-sm font-semibold mb-1">Agenda</p>
                                <h3 class="text-gray-800 font-bold text-base leading-tight">Asesmen Sekolah Tahun 2025</h3>
                            </div>
                        </div>
                    </a>

                    <!-- Card 2 -->
                    <a href="/agenda/ujian-praktik" class="agenda-card block bg-white rounded-xl p-5 shadow-md">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-calendar-days "></i>
                            </div>
                            <div>
                                <p class="text-blue-600 text-sm font-semibold mb-1">Agenda</p>
                                <h3 class="text-gray-800 font-bold text-base leading-tight">Ujian Praktik Kelas XII Tahun 2024/2025</h3>
                            </div>
                        </div>
                    </a>

                    <!-- Card 3 -->
                    <a href="/agenda/sumatif-tengah-semester" class="agenda-card block bg-white rounded-xl p-5 shadow-md">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-calendar-days "></i>
                            </div>
                            <div>
                                <p class="text-blue-600 text-sm font-semibold mb-1">Agenda</p>
                                <h3 class="text-gray-800 font-bold text-base leading-tight">Sumatif Tengah Semester Genap 2024/2025</h3>
                            </div>
                        </div>
                    </a>

                    <!-- Card 4 -->
                    <a href="/agenda/seminar-pendidikan" class="agenda-card block bg-white rounded-xl p-5 shadow-md">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-calendar-days "></i>
                            </div>
                            <div>
                                <p class="text-blue-600 text-sm font-semibold mb-1">Agenda</p>
                                <h3 class="text-gray-800 font-bold text-base leading-tight">Seminar Pendidikan Tinggi dan Beasiswa Taiwan</h3>
                            </div>
                        </div>
                    </a>

                    <!-- Card 5 -->
                    <a href="/agenda/delegasi-turkiye" class="agenda-card block bg-white rounded-xl p-5 shadow-md">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-calendar-days "></i>
                            </div>
                            <div>
                                <p class="text-blue-600 text-sm font-semibold mb-1">Agenda</p>
                                <h3 class="text-gray-800 font-bold text-base leading-tight">Delegasi International ke Turkiye</h3>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Buttons -->
                <div class="flex flex-row flex-wrap justify-center items-center gap-3">
                    <a href="/Template-WebSekolah/pages/agenda.php" class="glow-button overflow-hidden bg-blue-600 hover:bg-blue-700 text-white px-4 py-3 lg:px-6 lg:py-2 rounded-full font-semibold">
                        <span class="relative z-10">Semua Agenda</span>
                    </a>

                    <a href="/Template-WebSekolah/pages/pengumuman.php" class="glow-button overflow-hidden bg-blue-600 hover:bg-blue-700 text-white px-4 py-3 lg:px-6 lg:py-2 rounded-full font-semibold">
                        <span class="relative z-10">Semua Pengumuman</span>
                    </a>
                </div>

            </div>

        </div>
    </div>
</section>


<!-- ================= END VIDEO SECTION ================= -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="/Template-WebSekolah/assets/js/main.js"></script>
<?php include 'includes/footer.php'; ?>