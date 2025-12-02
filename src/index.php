<?php
$page_title = "Beranda";
include 'includes/header.php';
?>

<!-- ================= START BANNER SWIPER SECTION ================= -->
<section id="hero" class="relative w-full overflow-hidden">
    <div class="swiper-banner heroSwiper">
        <div class="swiper-wrapper">

            <!-- Slide 1 -->
            <div class="swiper-slide">
                <img src="https://images.unsplash.com/photo-1562774053-701939374585?w=1920&h=1080&fit=crop"
                    alt="Gedung Sekolah">


                <div class="slide-content fade-in-up">
                    <h1 class="text-3xl md:text-4xl font-bold text-white mb-3 drop-shadow-lg">
                        SMK Negeri 1 Yogyakarta
                    </h1>
                    <p class="text-base md:text-lg text-white/90 mb-6 drop-shadow-md">
                        Mencetak Generasi Unggul & Berakhlak Mulia
                    </p>
                    <a href="#ppdb" class="glow-button overflow-hidden bg-blue-600 hover:bg-blue-700 inline-block px-6 py-3 text-white font-semibold rounded-full">
                        Daftar Sekarang
                    </a>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="swiper-slide">
                <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?w=600&h=900&fit=crop" alt="Jalur Prestasi">

                <div class="slide-content fade-in-up">
                    <h1 class="text-3xl md:text-4xl font-bold text-white mb-3 drop-shadow-lg">
                        Teknik Komputer dan Jaringan
                    </h1>
                    <p class="text-base md:text-lg text-white/90 mb-6 drop-shadow-md">
                        Menguasai Teknologi Informasi Masa Depan
                    </p>
                    <a href="#program" class="glow-button overflow-hidden bg-blue-600 hover:bg-blue-700 inline-block px-6 py-3 text-white font-semibold rounded-full">
                        Lihat Program
                    </a>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="swiper-slide">
                <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=1920&q=80" alt="Rekayasa Perangkat Lunak">

                <div class="slide-content fade-in-up">
                    <h1 class="text-3xl md:text-4xl font-bold text-white mb-3 drop-shadow-lg">
                        Rekayasa Perangkat Lunak
                    </h1>
                    <p class="text-base md:text-lg text-white/90 mb-6 drop-shadow-md">
                        Menciptakan Solusi Digital Inovatif
                    </p>
                    <a href="#fasilitas" class="glow-button overflow-hidden bg-blue-600 hover:bg-blue-700 inline-block px-6 py-3 text-white font-semibold rounded-full">
                        Lihat Fasilitas
                    </a>
                </div>
            </div>

            <!-- Slide 4 -->
            <div class="swiper-slide">
                <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=1920" alt="PPDB 2025">

                <div class="slide-content fade-in-up">
                    <h1 class="text-3xl md:text-4xl font-bold text-white mb-3 drop-shadow-lg">
                        Multimedia Broadcasting
                    </h1>
                    <p class="text-base md:text-lg text-white/90 mb-6 drop-shadow-md">
                        Berkarya di Industri Media dan Pertelevisian
                    </p>
                    <a href="#prestasi" class="glow-button overflow-hidden bg-blue-600 hover:bg-blue-700 inline-block px-6 py-3 text-white font-semibold rounded-full">
                        Lihat Prestasi
                    </a>
                </div>
            </div>
        </div>

        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
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
                <p class="text-gray-500 text-sm mb-4">SMK Negeri Indoensia</p>

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
                                <a href="/Template-WebSekolah/pages/info-ppdb.php" class="px-6 py-2.5 bg-white text-blue-600 rounded-lg text-sm font-semibold hover:bg-gray-100 transition shadow-lg pointer-events-auto">
                                    Lihat Selengkapnya →
                                </a>
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
                                <a href="/Template-WebSekolah/pages/info-ppdb.php" class="px-6 py-2.5 bg-white text-blue-600 rounded-lg text-sm font-semibold hover:bg-gray-100 transition shadow-lg pointer-events-auto">
                                    Info Lengkap →
                                </a>
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
                                <a href="/Template-WebSekolah/pages/info-ppdb.php" class="px-6 py-2.5 bg-white text-blue-600 rounded-lg text-sm font-semibold hover:bg-gray-100 transition shadow-lg pointer-events-auto">
                                    Lihat Fasilitas →
                                </a>
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
            Smartschool Sistem SMK Negeri Indoensia
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
<section class="py-16 px-4 bg-gradient-to-b from-white to-blue-50">
    <div class="max-w-7xl mx-auto">

        <!-- Header Text - Upgraded -->
        <div class="text-center mb-12">
            <!-- Badge -->
            <div class="inline-flex items-center gap-3 bg-blue-100 px-6 py-2 rounded-full mb-4 shadow-sm">
                <i class="fas fa-trophy text-blue-600 text-lg"></i>
                <span class="text-blue-700 font-semibold">Prestasi Terbaik Kami</span>
            </div>

            <!-- Main Title -->
            <h2 class="text-3xl md:text-5xl font-bold text-gray-800 mb-3">
                Infografis <span class="text-blue-600">Prestasi</span>
            </h2>

            <!-- Description -->
            <p class="text-gray-600 text-base md:text-lg max-w-2xl mx-auto leading-relaxed">
                Berbagai pencapaian membanggakan yang telah diraih oleh siswa-siswi SMK Negeri Indonesia di tingkat lokal, nasional, hingga internasional
            </p>
        </div>

        <!-- Swiper Slider -->
        <div class="swiper prestasi-swiper">
            <div class="swiper-wrapper">

                <!-- Slide 1 - Nasional -->
                <div class="swiper-slide">
                    <div class="infografis-card">
                        <!-- Badge Kategori -->
                        <div class="absolute top-4 right-4 z-10">
                            <span class="bg-yellow-400 text-yellow-900 px-3 py-1.5 rounded-full text-xs font-bold shadow-lg">
                                🥇 Nasional
                            </span>
                        </div>

                        <div class="photo-card">
                            <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?w=600&h=800&fit=crop"
                                alt="Lomba Robotik Nasional">
                            <div class="slash-info"></div>

                            <!-- Info Overlay -->
                            <div class="card-info">
                                <span class="text-xs text-blue-300 font-semibold uppercase tracking-wide">Teknologi</span>
                                <h4 class="text-white font-bold text-lg mt-1 mb-1">Juara 1 Lomba Robotik Nasional</h4>
                                <p class="text-white/90 text-sm flex items-center gap-2">
                                    <i class="fas fa-map-marker-alt text-xs"></i>
                                    Jakarta, Desember 2024
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 - Internasional -->
                <div class="swiper-slide">
                    <div class="infografis-card">
                        <div class="absolute top-4 right-4 z-10">
                            <span class="bg-red-500 text-white px-3 py-1.5 rounded-full text-xs font-bold shadow-lg">
                                🌍 Internasional
                            </span>
                        </div>

                        <div class="photo-card">
                            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=600&h=800&fit=crop"
                                alt="Olimpiade Matematika">
                            <div class="slash-info"></div>

                            <div class="card-info">
                                <span class="text-xs text-blue-300 font-semibold uppercase tracking-wide">Akademik</span>
                                <h4 class="text-white font-bold text-lg mt-1 mb-1">Medali Perak Olimpiade Matematika</h4>
                                <p class="text-white/90 text-sm flex items-center gap-2">
                                    <i class="fas fa-map-marker-alt text-xs"></i>
                                    Singapore, November 2024
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 - Lokal -->
                <div class="swiper-slide">
                    <div class="infografis-card">
                        <div class="absolute top-4 right-4 z-10">
                            <span class="bg-green-500 text-white px-3 py-1.5 rounded-full text-xs font-bold shadow-lg">
                                📍 Lokal
                            </span>
                        </div>

                        <div class="photo-card">
                            <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?w=600&h=800&fit=crop"
                                alt="Lomba Debat">
                            <div class="slash-info"></div>

                            <div class="card-info">
                                <span class="text-xs text-blue-300 font-semibold uppercase tracking-wide">Bahasa</span>
                                <h4 class="text-white font-bold text-lg mt-1 mb-1">Juara 1 Lomba Debat Bahasa Inggris</h4>
                                <p class="text-white/90 text-sm flex items-center gap-2">
                                    <i class="fas fa-map-marker-alt text-xs"></i>
                                    Yogyakarta, Oktober 2024
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 4 - Nasional -->
                <div class="swiper-slide">
                    <div class="infografis-card">
                        <div class="absolute top-4 right-4 z-10">
                            <span class="bg-yellow-400 text-yellow-900 px-3 py-1.5 rounded-full text-xs font-bold shadow-lg">
                                🥇 Nasional
                            </span>
                        </div>

                        <div class="photo-card">
                            <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?w=600&h=800&fit=crop"
                                alt="Lomba Karya Ilmiah">
                            <div class="slash-info"></div>

                            <div class="card-info">
                                <span class="text-xs text-blue-300 font-semibold uppercase tracking-wide">Sains</span>
                                <h4 class="text-white font-bold text-lg mt-1 mb-1">Juara 2 Lomba Karya Ilmiah Remaja</h4>
                                <p class="text-white/90 text-sm flex items-center gap-2">
                                    <i class="fas fa-map-marker-alt text-xs"></i>
                                    Bandung, September 2024
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 5 - Lokal -->
                <div class="swiper-slide">
                    <div class="infografis-card">
                        <div class="absolute top-4 right-4 z-10">
                            <span class="bg-green-500 text-white px-3 py-1.5 rounded-full text-xs font-bold shadow-lg">
                                📍 Lokal
                            </span>
                        </div>

                        <div class="photo-card">
                            <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=600&h=800&fit=crop"
                                alt="Lomba Desain">
                            <div class="slash-info"></div>

                            <div class="card-info">
                                <span class="text-xs text-blue-300 font-semibold uppercase tracking-wide">Seni & Desain</span>
                                <h4 class="text-white font-bold text-lg mt-1 mb-1">Juara 1 Lomba Desain Grafis</h4>
                                <p class="text-white/90 text-sm flex items-center gap-2">
                                    <i class="fas fa-map-marker-alt text-xs"></i>
                                    Semarang, Agustus 2024
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Navigation buttons - Desktop only -->
            <div class="hidden md:flex swiper-button-next"></div>
            <div class="hidden md:flex swiper-button-prev"></div>

            <!-- Pagination - Mobile & Desktop -->
            <div class="swiper-pagination mt-8"></div>
        </div>

        <!-- CTA Button -->
        <div class="text-center mt-12">
            <a href="/Template-WebSekolah/pages/prestasi.php">
                <button class="glow-button -flex items-center gap-3 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-semibold px-8 py-4 rounded-full transition-all shadow-lg hover:shadow-xl transform hover:scale-105">
                    <span>Lihat Semua Prestasi</span>
                    <i class="fas fa-arrow-right text-sm"></i>
                </button>
            </a>
        </div>

    </div>
</section>
<!-- ================= END PRESTASI INFOGRAPHIC ================= -->

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
                        <a href="/Template-WebSekolah/pages/berita-detail.php?id=1" class="swiper-slide relative h-96 block">
                            <div class="swiper-slide relative h-96">
                                <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=1200&h=600&fit=crop"
                                    alt="Berita 3" class="w-full h-full object-cover">
                                <div class="hero-content">
                                    <h4 class="text-white text-2xl md:text-3xl font-bold mb-2">Upacara Nasional 2025</h4>
                                    <p class="text-white/80 text-sm">📅 1 Oktober 2025</p>
                                </div>
                            </div>
                        </a>

                        <!-- Slide 2 -->
                        <a href="/Template-WebSekolah/pages/berita-detail.php?id=2" class="swiper-slide relative h-96 block">
                            <div class="swiper-slide relative h-96">
                                <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?w=1200&h=600&fit=crop"
                                    alt="Berita 2" class="w-full h-full object-cover">
                                <div class="hero-content">
                                    <h4 class="text-white text-2xl md:text-3xl font-bold mb-2">Prestasi Olimpiade Nasional</h4>
                                    <p class="text-white/80 text-sm">📅 28 Oktober 2025</p>
                                </div>
                            </div>
                        </a>

                        <!-- Slide 3 -->
                        <a href="/Template-WebSekolah/pages/berita-detail.php?id=3" class="swiper-slide relative h-96 block">
                            <div class="swiper-slide relative h-96">
                                <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=1200&h=600&fit=crop"
                                    alt="Berita 3" class="w-full h-full object-cover">
                                <div class="hero-content">

                                    <h4 class="text-white text-2xl md:text-3xl font-bold mb-2">Kunjungan Industri Teknologi</h4>
                                    <p class="text-white/80 text-sm">📅 25 Oktober 2025</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Grid 6 Berita (3x2) -->
                <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 gap-4 mb-6">
                    <!-- News Card 1 -->
                    <a href="/Template-WebSekolah/pages/berita-detail.php?id=1" class="swiper-slide relative h-96 block">
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
                    </a>

                    <!-- News Card 2 -->
                    <a href="/Template-WebSekolah/pages/berita-detail.php?id=2" class="swiper-slide relative h-96 block">
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
                    </a>

                    <!-- News Card 3 -->
                    <a href="/Template-WebSekolah/pages/berita-detail.php?id=3" class="swiper-slide relative h-96 block">
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
                    </a>

                    <!-- News Card 4 -->
                    <a href="/Template-WebSekolah/pages/berita-detail.php?id=4" class="swiper-slide relative h-96 block">
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
                    </a>

                    <!-- News Card 5 -->
                    <a href="/Template-WebSekolah/pages/berita-detail.php?id=5" class="swiper-slide relative h-96 block">
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
                    </a>

                    <!-- News Card 6 -->
                    <a href="/Template-WebSekolah/pages/berita-detail.php?id=6" class="swiper-slide relative h-96 block">
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
                    </a>
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
                    <a href="/Template-WebSekolah/pages/artikel-detail.php?id=1">
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
                    </a>


                    <!-- Article 2 -->
                    <a href="/Template-WebSekolah/pages/artikel-detail.php?id=2">
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
                    </a>

                    <!-- Article 3 -->
                    <a href="/Template-WebSekolah/pages/artikel-detail.php?id=3">
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
                    </a>

                    <!-- Article 4 -->
                    <a href="/Template-WebSekolah/pages/artikel-detail.php?id=4">
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
                    </a>
                </div>

                <!-- Button Semua Artikel -->
                <div class="text-center">
                    <a href="/Template-WebSekolah/pages/artikel.php" class="glow-button bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-full font-semibold w-full">
                        <span class="relative z-10">Semua Artikel</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================= END BERITA & ARTIKEL ================= -->

<!-- ================= START PRESENSI REALTIME CTA ================= -->
<section class="py-16 px-4 bg-[url('/Template-WebSekolah/assets/images/desktop.jpg')] bg-cover bg-center">
    <div class="max-w-7xl mx-auto">
        <!-- Section Title -->
        <h6 class="text-2xl md:text-3xl font-bold text-white text-center mb-12">
            ─ ── SMK Negeri Indoensia Menerapkan Digitalisasi Sekolah
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
                            Lihat lebih banyak foto kegiatan kami. <a href="/Template-WebSekolah/pages/galeri.php" class="link-selengkapnya text-blue-600 font-semibold">Selengkapnya</a>
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
                                <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?w=600&h=400&fit=crop"
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


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="/Template-WebSekolah/assets/js/main.js"></script>
<?php include 'includes/footer.php'; ?>