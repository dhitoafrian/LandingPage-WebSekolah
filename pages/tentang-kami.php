<?php
$page_title = 'Tentang Kami';
include '../src/includes/header.php';
?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');

    * {
        font-family: 'Inter', sans-serif;
    }

    .hero-gradient {
        background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
    }

    .info-card {
        transition: all 0.3s ease;
    }

    .info-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
    }

    .stats-counter {
        font-size: 3rem;
        font-weight: 800;
    }

    .timeline-line {
        position: absolute;
        left: 50%;
        top: 0;
        bottom: 0;
        width: 2px;
        background: linear-gradient(to bottom, #3b82f6, #1e3a8a);
    }

    .timeline-item {
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 0.6s ease forwards;
    }

    .timeline-item:nth-child(1) {
        animation-delay: 0.1s;
    }

    .timeline-item:nth-child(2) {
        animation-delay: 0.2s;
    }

    .timeline-item:nth-child(3) {
        animation-delay: 0.3s;
    }

    .timeline-item:nth-child(4) {
        animation-delay: 0.4s;
    }


    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .hero-overlay {
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.7));
    }

    .info-card {
        transition: all 0.3s ease;
    }

    .info-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.15);
    }

    .swiper {
        width: 100%;
        padding: 20px 0;
    }

    .swiper-slide {
        width: auto !important;
    }

    .prestasi-card {
        position: relative;
        width: 240px;
        height: 320px;
        border-radius: 12px;
        overflow: hidden;
        cursor: pointer;
        transition: transform 0.3s ease;
    }

    .prestasi-card:hover {
        transform: scale(1.02);
    }

    .prestasi-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .prestasi-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(37, 99, 235, 0.9);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 12px;
        opacity: 0;
        transition: opacity 0.3s ease;
        color: white;
        text-align: center;
    }

    .prestasi-card:hover .prestasi-overlay {
        opacity: 1;
    }

    /* Mobile: click to show overlay */
    .prestasi-card.active .prestasi-overlay {
        opacity: 1;
    }

    .prestasi-overlay i {
        font-size: 3rem;
        margin-bottom: 1rem;
    }

    .prestasi-overlay h3 {
        font-size: 1.5rem;
        font-weight: bold;
        margin-bottom: 0.5rem;
    }

    .prestasi-overlay p {
        font-size: 1rem;
        margin-bottom: 0.25rem;
    }

    .prestasi-overlay .year {
        font-size: 0.875rem;
        opacity: 0.9;
    }
</style>



<!-- Identitas Sekolah -->
<section class="relative h-[600px] md:h-[700px] overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1562774053-701939374585?w=1920&h=1080&fit=crop"
            alt="Gedung Sekolah"
            class="w-full h-full object-cover">
        <div class="hero-overlay absolute inset-0"></div>
    </div>

    <!-- Hero Content -->
    <div class="relative h-full flex flex-col items-center justify-center text-white px-4 text-center">
        <div class="max-w-4xl">
            <!-- School Logo (Optional) -->
            <div class="mb-6">
                <div class="w-24 h-24 md:w-32 md:h-32 bg-white/10 backdrop-blur-md rounded-full mx-auto flex items-center justify-center border-4 border-white/30">
                    <i class="fas fa-graduation-cap text-5xl md:text-6xl"></i>
                </div>
            </div>

            <!-- School Name -->
            <h1 class="text-4xl md:text-6xl font-bold mb-4">
                SMK NEGERI 1 YOGYAKARTA
            </h1>

            <!-- Subtitle -->
            <div class="flex flex-wrap items-center justify-center gap-4 text-base md:text-lg mb-8">
                <span class="flex items-center gap-2 bg-white/10 backdrop-blur-md px-4 py-2 rounded-full">
                    <i class="fas fa-award"></i>
                    Terakreditasi A
                </span>
                <span class="hidden md:inline text-white/50">•</span>
                <span class="flex items-center gap-2 bg-white/10 backdrop-blur-md px-4 py-2 rounded-full">
                    <i class="fas fa-calendar"></i>
                    Berdiri 1965
                </span>
                <span class="hidden md:inline text-white/50">•</span>
                <span class="flex items-center gap-2 bg-white/10 backdrop-blur-md px-4 py-2 rounded-full">
                    <i class="fas fa-users"></i>
                    1,250+ Siswa
                </span>
            </div>

            <!-- CTA Buttons -->
            <div class="flex flex-wrap gap-4 justify-center">
                <a href="#" class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-6 md:px-8 py-3 md:py-4 rounded-lg font-semibold transition shadow-lg">
                    <i class="fas fa-download"></i>
                    Download Profil
                </a>
                <a href="#" class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md hover:bg-white/20 text-white border-2 border-white/50 px-6 md:px-8 py-3 md:py-4 rounded-lg font-semibold transition">
                    <i class="fas fa-street-view"></i>
                    Virtual Tour
                </a>
            </div>
        </div>
    </div>

    <!-- Scroll Down Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white animate-bounce">
        <i class="fas fa-chevron-down text-2xl"></i>
    </div>
</section>

<!-- Sambutan Kepala Sekolah -->
<section class="bg-white py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="bg-gradient-to-br from-blue-50 to-white rounded-2xl shadow-xl overflow-hidden">
                <div class="flex gap-8 items-center p-8 md:p-12">

                    <!-- Content -->
                    <div class="md:col-span-3">
                        <div class="inline-block bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-semibold mb-4">
                            <i class="fas fa-user-tie mr-2"></i>Sambutan Kepala Sekolah
                        </div>
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Selamat Datang di SMK Negeri 1 Yogyakarta</h2>
                        <p class="text-gray-600 leading-relaxed mb-4">
                            Puji syukur kehadirat Tuhan Yang Maha Esa atas segala rahmat dan karunia-Nya. Kami sangat bangga menyambut Anda di website resmi SMK Negeri 1 Yogyakarta.
                        </p>
                        <p class="text-gray-600 leading-relaxed mb-4">
                            Sebagai lembaga pendidikan menengah kejuruan, kami berkomitmen untuk menghasilkan lulusan yang kompeten, berkarakter, dan siap menghadapi tantangan dunia industri. Dengan dukungan tenaga pendidik profesional dan fasilitas modern, kami terus berinovasi dalam memberikan pendidikan berkualitas.
                        </p>
                        <p class="text-gray-600 leading-relaxed mb-6">
                            Mari bersama-sama kita wujudkan generasi yang unggul, mandiri, dan berakhlak mulia.
                        </p>
                        <div class="border-t border-gray-200 pt-4">
                            <p class="font-bold text-gray-800 text-lg">Drs. Bambang Supriyanto, M.Pd</p>
                            <p class="text-gray-600">Kepala SMK Negeri 1 Yogyakarta</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Statistik Sekolah -->
<section class="py-16 px-4 bg-[url('/Template-WebSekolah/assets/images/desktop.jpg')] bg-cover bg-center">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <!-- Stat 1 -->
                <div class="text-center text-white">
                    <i class="fas fa-users text-5xl mb-4 opacity-80"></i>
                    <div class="stats-counter mb-2">595+</div>
                    <p class="text-white/90 font-medium">Siswa Aktif</p>
                </div>
                <!-- Stat 2 -->
                <div class="text-center text-white">
                    <i class="fas fa-chalkboard-teacher text-5xl mb-4 opacity-80"></i>
                    <div class="stats-counter mb-2">69+</div>
                    <p class="text-white/90 font-medium">Tenaga Pendidik</p>
                </div>
                <!-- Stat 3 -->
                <div class="text-center text-white">
                    <i class="fas fa-book text-5xl mb-4 opacity-80"></i>
                    <div class="stats-counter mb-2">6</div>
                    <p class="text-white/90 font-medium">Program Keahlian</p>
                </div>
                <!-- Stat 4 -->
                <div class="text-center text-white">
                    <i class="fas fa-trophy text-5xl mb-4 opacity-80"></i>
                    <div class="stats-counter mb-2">150+</div>
                    <p class="text-white/90 font-medium">Prestasi</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sejarah Sekolah -->
<section class="bg-gray-50 py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-history text-blue-600 mr-3"></i>Sejarah Singkat
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Perjalanan panjang kami dalam menciptakan pendidikan berkualitas
                </p>
            </div>

            <!-- Timeline -->
            <div class="relative">
                <div class="timeline-line hidden md:block"></div>

                <!-- Timeline Item 1 -->
                <div class="timeline-item grid md:grid-cols-2 gap-8 mb-12 relative">
                    <div class="md:text-right">
                        <div class="bg-white rounded-xl shadow-lg p-6 info-card">
                            <span class="inline-block bg-blue-600 text-white px-4 py-2 rounded-full font-bold text-lg mb-4">1965</span>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Pendirian Sekolah</h3>
                            <p class="text-gray-600 leading-relaxed">
                                SMK Negeri 1 Yogyakarta didirikan dengan nama STM Negeri 1 Yogyakarta untuk memenuhi kebutuhan tenaga kerja terampil di industri.
                            </p>
                        </div>
                    </div>
                    <div class="hidden md:block"></div>
                    <div class="absolute left-1/2 top-8 transform -translate-x-1/2 w-4 h-4 bg-blue-600 rounded-full border-4 border-white shadow hidden md:block"></div>
                </div>

                <!-- Timeline Item 2 -->
                <div class="timeline-item grid md:grid-cols-2 gap-8 mb-12 relative">
                    <div class="hidden md:block"></div>
                    <div>
                        <div class="bg-white rounded-xl shadow-lg p-6 info-card">
                            <span class="inline-block bg-blue-600 text-white px-4 py-2 rounded-full font-bold text-lg mb-4">1997</span>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Perubahan Nama</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Sejalan dengan perkembangan kurikulum nasional, nama sekolah diubah menjadi SMK Negeri 1 Yogyakarta dengan penambahan program keahlian baru.
                            </p>
                        </div>
                    </div>
                    <div class="absolute left-1/2 top-8 transform -translate-x-1/2 w-4 h-4 bg-blue-600 rounded-full border-4 border-white shadow hidden md:block"></div>
                </div>

                <!-- Timeline Item 3 -->
                <div class="timeline-item grid md:grid-cols-2 gap-8 mb-12 relative">
                    <div class="md:text-right">
                        <div class="bg-white rounded-xl shadow-lg p-6 info-card">
                            <span class="inline-block bg-blue-600 text-white px-4 py-2 rounded-full font-bold text-lg mb-4">2010</span>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Akreditasi A</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Berhasil meraih akreditasi A dari BAN-SM, menandai komitmen sekolah dalam memberikan pendidikan berkualitas tinggi.
                            </p>
                        </div>
                    </div>
                    <div class="hidden md:block"></div>
                    <div class="absolute left-1/2 top-8 transform -translate-x-1/2 w-4 h-4 bg-blue-600 rounded-full border-4 border-white shadow hidden md:block"></div>
                </div>

                <!-- Timeline Item 4 -->
                <div class="timeline-item grid md:grid-cols-2 gap-8 relative">
                    <div class="hidden md:block"></div>
                    <div>
                        <div class="bg-white rounded-xl shadow-lg p-6 info-card">
                            <span class="inline-block bg-blue-600 text-white px-4 py-2 rounded-full font-bold text-lg mb-4">2025</span>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Era Digital</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Mengintegrasikan teknologi digital dalam pembelajaran dan menjadi SMK rujukan dengan fasilitas modern dan kemitraan industri yang kuat.
                            </p>
                        </div>
                    </div>
                    <div class="absolute left-1/2 top-8 transform -translate-x-1/2 w-4 h-4 bg-blue-600 rounded-full border-4 border-white shadow hidden md:block"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Prestasi Highlight -->
<section class="bg-blue-100  py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-trophy text-blue-600 mr-3"></i>Prestasi Terkini
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Pencapaian membanggakan yang telah diraih siswa dan sekolah
                </p>
            </div>

            <!-- Swiper -->
            <div class="swiper prestasiSwiper">
                <div class="swiper-wrapper">

                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="prestasi-card" onclick="toggleOverlay(this)">
                            <img src="https://picsum.photos/seed/prestasi1/240/320" alt="Prestasi 1">
                            <div class="prestasi-overlay">
                                <i class="fas fa-medal"></i>
                                <h3>Juara 1</h3>
                                <p>LKS Nasional</p>
                                <p class="year">2025</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <div class="prestasi-card" onclick="toggleOverlay(this)">
                            <img src="https://picsum.photos/seed/prestasi2/240/320" alt="Prestasi 2">
                            <div class="prestasi-overlay">
                                <i class="fas fa-trophy"></i>
                                <h3>Juara 2</h3>
                                <p>Robotik Nasional</p>
                                <p class="year">2024</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <div class="prestasi-card" onclick="toggleOverlay(this)">
                            <img src="https://picsum.photos/seed/prestasi3/240/320" alt="Prestasi 3">
                            <div class="prestasi-overlay">
                                <i class="fas fa-star"></i>
                                <h3>Sekolah Adiwiyata</h3>
                                <p>Tingkat Nasional</p>
                                <p class="year">2024</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 4 -->
                    <div class="swiper-slide">
                        <div class="prestasi-card" onclick="toggleOverlay(this)">
                            <img src="https://picsum.photos/seed/prestasi4/240/320" alt="Prestasi 4">
                            <div class="prestasi-overlay">
                                <i class="fas fa-award"></i>
                                <h3>Best SMK</h3>
                                <p>DIY</p>
                                <p class="year">2024</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 5 -->
                    <div class="swiper-slide">
                        <div class="prestasi-card" onclick="toggleOverlay(this)">
                            <img src="https://picsum.photos/seed/prestasi5/240/320" alt="Prestasi 5">
                            <div class="prestasi-overlay">
                                <i class="fas fa-crown"></i>
                                <h3>Juara 1</h3>
                                <p>Olimpiade Matematika</p>
                                <p class="year">2024</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 6 -->
                    <div class="swiper-slide">
                        <div class="prestasi-card" onclick="toggleOverlay(this)">
                            <img src="https://picsum.photos/seed/prestasi6/240/320" alt="Prestasi 6">
                            <div class="prestasi-overlay">
                                <i class="fas fa-certificate"></i>
                                <h3>Akreditasi A</h3>
                                <p>BAN-SM</p>
                                <p class="year">2023</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 7 -->
                    <div class="swiper-slide">
                        <div class="prestasi-card" onclick="toggleOverlay(this)">
                            <img src="https://picsum.photos/seed/prestasi7/240/320" alt="Prestasi 7">
                            <div class="prestasi-overlay">
                                <i class="fas fa-graduation-cap"></i>
                                <h3>100% Kelulusan</h3>
                                <p>Ujian Nasional</p>
                                <p class="year">2024</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 8 -->
                    <div class="swiper-slide">
                        <div class="prestasi-card" onclick="toggleOverlay(this)">
                            <img src="https://picsum.photos/seed/prestasi8/240/320" alt="Prestasi 8">
                            <div class="prestasi-overlay">
                                <i class="fas fa-flag"></i>
                                <h3>Juara 3</h3>
                                <p>Paskibra Provinsi</p>
                                <p class="year">2024</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- Quick Links Section -->
<section class="bg-[url('/Template-WebSekolah/assets/images/desktop.jpg')] bg-cover bg-center py-16 relative">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-white mb-4">
                    <i class="fas fa-link mr-3"></i>Jelajahi Lebih Lanjut
                </h2>
                <p class="text-white/90 max-w-2xl mx-auto">
                    Temukan informasi lebih detail tentang sekolah kami
                </p>
            </div>

            <div class="grid md:grid-cols-4 gap-6">
                <!-- Link 1 -->
                <a href="/template-websekolah/pages/visi-misi.php" class="bg-white/10 backdrop-blur-sm hover:bg-white/20 rounded-xl p-6 text-center transition group">
                    <div class="bg-white/20 w-16 h-16 rounded-full flex items-center justify-center mb-4 mx-auto group-hover:scale-110 transition">
                        <i class="fas fa-bullseye text-white text-3xl"></i>
                    </div>
                    <h3 class="text-white font-bold text-lg mb-2">Visi & Misi</h3>
                    <p class="text-white/80 text-sm">Tujuan dan arah sekolah</p>
                </a>

                <!-- Link 2 -->
                <a href="/template-websekolah/pages/struktur-organisasi.php" class="bg-white/10 backdrop-blur-sm hover:bg-white/20 rounded-xl p-6 text-center transition group">
                    <div class="bg-white/20 w-16 h-16 rounded-full flex items-center justify-center mb-4 mx-auto group-hover:scale-110 transition">
                        <i class="fas fa-sitemap text-white text-3xl"></i>
                    </div>
                    <h3 class="text-white font-bold text-lg mb-2">Struktur Organisasi</h3>
                    <p class="text-white/80 text-sm">Susunan kepengurusan</p>
                </a>

                <!-- Link 3 -->
                <a href="/template-websekolah/pages/galeri.php" class="bg-white/10 backdrop-blur-sm hover:bg-white/20 rounded-xl p-6 text-center transition group">
                    <div class="bg-white/20 w-16 h-16 rounded-full flex items-center justify-center mb-4 mx-auto group-hover:scale-110 transition">
                        <i class="fas fa-images text-white text-3xl"></i>
                    </div>
                    <h3 class="text-white font-bold text-lg mb-2">Galeri</h3>
                    <p class="text-white/80 text-sm">Dokumentasi kegiatan</p>
                </a>

                <!-- Link 4 -->
                <a href="/template-websekolah/pages/berita.php" class="bg-white/10 backdrop-blur-sm hover:bg-white/20 rounded-xl p-6 text-center transition group">
                    <div class="bg-white/20 w-16 h-16 rounded-full flex items-center justify-center mb-4 mx-auto group-hover:scale-110 transition">
                        <i class="fa-duotone fa-solid fa-newspaper text-white text-3xl"></i>
                    </div>
                    <h3 class="text-white font-bold text-lg mb-2">Berita</h3>
                    <p class="text-white/80 text-sm">Info terkini seputar sekolah</p>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="bg-gray-50 py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="bg-gradient-to-br from-blue-600 to-blue-800 rounded-2xl shadow-2xl overflow-hidden">
                <div class="p-12 text-center text-white">
                    <i class="fas fa-envelope text-6xl mb-6 opacity-90"></i>
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Ada Pertanyaan?</h2>
                    <p class="text-white/90 text-lg mb-8 max-w-2xl mx-auto">
                        Tim kami siap membantu menjawab pertanyaan Anda tentang pendaftaran, program keahlian, atau informasi lainnya
                    </p>
                    <div class="flex flex-wrap gap-4 justify-center">
                        <a href="/template-websekolah/pages/kontak.php" class="inline-flex items-center gap-2 bg-white text-blue-600 px-8 py-4 rounded-lg font-bold hover:bg-gray-100 transition shadow-lg">
                            <i class="fas fa-phone"></i>
                            Hubungi Kami
                        </a>
                        <a href="/template-websekolah/pages/info-ppdb.php" class="inline-flex items-center gap-2 bg-red-600 text-white px-8 py-4 rounded-lg font-bold hover:bg-red-700 transition shadow-lg">
                            <i class="fas fa-user-graduate"></i>
                            Informasi PPDB
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    // Smooth scroll for internal links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Animate stats counter on scroll
    const observerOptions = {
        threshold: 0.5,
        rootMargin: '0px'
    };

    const statsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counters = entry.target.querySelectorAll('.stats-counter');
                counters.forEach(counter => {
                    const target = counter.textContent.replace(/[^0-9]/g, '');
                    const duration = 2000;
                    const increment = target / (duration / 16);
                    let current = 0;

                    const updateCounter = () => {
                        current += increment;
                        if (current < target) {
                            counter.textContent = Math.ceil(current) + (counter.textContent.includes('+') ? '+' : '');
                            requestAnimationFrame(updateCounter);
                        } else {
                            counter.textContent = target + (counter.textContent.includes('+') ? '+' : '');
                        }
                    };

                    updateCounter();
                });
                statsObserver.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Initialize Swiper
    document.addEventListener('DOMContentLoaded', function() {
        const swiper = new Swiper('.prestasiSwiper', {
            slidesPerView: 'auto',
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            speed: 600,
            grabCursor: true,
            centeredSlides: false,
            breakpoints: {
                320: {
                    spaceBetween: 15
                },
                640: {
                    spaceBetween: 20
                }
            }
        });
    });
    // Toggle overlay for mobile (click)
    function toggleOverlay(element) {
        // Check if mobile
        if (window.innerWidth <= 768) {
            // Close all other overlays
            document.querySelectorAll('.prestasi-card').forEach(card => {
                if (card !== element) {
                    card.classList.remove('active');
                }
            });

            // Toggle current overlay
            element.classList.toggle('active');
        }
    }

    // Close overlay when clicking outside (mobile)
    document.addEventListener('click', function(event) {
        if (window.innerWidth <= 768) {
            if (!event.target.closest('.prestasi-card')) {
                document.querySelectorAll('.prestasi-card').forEach(card => {
                    card.classList.remove('active');
                });
            }
        }
    });

    // Observe stats section
    const statsSection = document.querySelector('.stats-counter')?.closest('section');
    if (statsSection) {
        statsObserver.observe(statsSection);
    }

    // Add scroll animation class when elements come into view
    const fadeObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, {
        threshold: 0.1
    });

    document.querySelectorAll('.info-card').forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        card.style.transition = 'all 0.6s ease';
        fadeObserver.observe(card);
    });
</script>

<?php
include '../src/includes/footer.php';
?>