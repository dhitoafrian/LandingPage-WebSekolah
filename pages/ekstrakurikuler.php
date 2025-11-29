<?php
$title = "Ekstrakurikuler";
include '../src/includes/header.php';
?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

    * {
        font-family: 'Inter', sans-serif;
    }

    .hero-gradient {
        background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
    }

    .ekskul-card {
        transition: all 0.3s ease;
    }

    .ekskul-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }

    .detail-content {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s ease, opacity 0.4s ease, margin-top 0.4s ease;
        opacity: 0;
    }

    .detail-content.show {
        max-height: 500px;
        opacity: 1;
        margin-top: 1rem;
    }

    .toggle-icon {
        transition: transform 0.3s ease;
    }

    .toggle-icon.rotate {
        transform: rotate(180deg);
    }
</style>

<!-- Hero Section -->
<div class="hero-gradient relative overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-10"></div>
    <div class="container mx-auto px-4 py-16 relative z-10">
        <!-- Breadcrumb -->
        <div class="text-white/80 text-sm mb-6">
            <i class="fas fa-home mr-2"></i>
            <a href="/template-websekolah/src/index.php" class="hover:text-white transition">Beranda</a>
            <span class="mx-2">/</span>
            <span class="text-white font-medium">Ekstrakurikuler</span>
        </div>

        <div class="text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                <i class="fas fa-star mr-3"></i>Ekstrakurikuler Sekolah
            </h1>
            <p class="text-lg text-white/90 max-w-2xl mx-auto">
                Jelajahi berbagai kegiatan ekstrakurikuler yang kami tawarkan untuk mengembangkan bakat, minat, dan keterampilan siswa di luar jam pelajaran formal.
            </p>
        </div>
    </div>
</div>

<!-- Main Content Section -->
<section class="bg-gray-50 py-16" id="ekstrakurikuler-cards">
    <div class="container mx-auto px-4">
        <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- Card 1: Futsal -->
            <div class="col-span-1">
                <div class="ekskul-card bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="relative h-48 overflow-hidden">
                        <img
                            src="/Template-WebSekolah/assets/images/ekskul/futsal.jpg"
                            alt="Futsal Team"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                            Pembinaan teknik, taktik, dan fisik untuk kompetisi tingkat provinsi dan nasional.
                        </p>
                        <div class="flex items-center text-sm text-blue-600 font-semibold mb-6">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            <span>Setiap Selasa & Kamis, 15:00 - 17:00</span>
                        </div>

                        <button
                            data-target="detail-futsal"
                            class="toggle-detail w-full px-4 py-3 bg-blue-600 text-white rounded-lg transition hover:bg-blue-700 font-semibold flex items-center justify-center gap-2">
                            <span>Lihat Detail</span>
                            <i class="fas fa-chevron-down toggle-icon text-sm"></i>
                        </button>
                    </div>
                </div>

                <div id="detail-futsal" class="detail-content bg-white p-6 rounded-xl shadow-lg border-l-4 border-blue-600">
                    <h4 class="text-lg font-bold text-blue-800 mb-4 flex items-center gap-2">
                        <i class="fas fa-info-circle"></i>
                        Program Futsal Intensif
                    </h4>
                    <ul class="text-sm text-gray-700 space-y-3">
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-blue-600 mt-1 flex-shrink-0"></i>
                            <span><strong>Fokus Latihan:</strong> Taktik formasi modern (4-0, 3-1), passing presisi, dan strategi pertahanan.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-blue-600 mt-1 flex-shrink-0"></i>
                            <span><strong>Fasilitas:</strong> Lapangan standar internasional, trainer bersertifikasi PSSI.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-blue-600 mt-1 flex-shrink-0"></i>
                            <span><strong>Target:</strong> Meraih gelar Walikota Cup dan beasiswa olahraga.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-blue-600 mt-1 flex-shrink-0"></i>
                            <span><strong>Biaya:</strong> Rp 50.000/bulan (Subsidi Sekolah).</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-blue-600 mt-1 flex-shrink-0"></i>
                            <span><strong>Prestasi:</strong> Juara 2 Liga Pelajar DIY 2024.</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Card 2: Basket -->
            <div class="col-span-1">
                <div class="ekskul-card bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="relative h-48 overflow-hidden">
                        <img
                            src="/Template-WebSekolah/assets/images/ekskul/basket.jpg"
                            alt="Basket Team"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                            Latihan intensif basket dengan fokus pada teamwork, shooting, dan defense strategy.
                        </p>
                        <div class="flex items-center text-sm text-orange-600 font-semibold mb-6">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            <span>Setiap Senin & Rabu, 15:30 - 17:30</span>
                        </div>

                        <button
                            data-target="detail-basket"
                            class="toggle-detail w-full px-4 py-3 bg-orange-600 text-white rounded-lg transition hover:bg-orange-700 font-semibold flex items-center justify-center gap-2">
                            <span>Lihat Detail</span>
                            <i class="fas fa-chevron-down toggle-icon text-sm"></i>
                        </button>
                    </div>
                </div>

                <div id="detail-basket" class="detail-content bg-white p-6 rounded-xl shadow-lg border-l-4 border-orange-600">
                    <h4 class="text-lg font-bold text-orange-800 mb-4 flex items-center gap-2">
                        <i class="fas fa-info-circle"></i>
                        Program Basket Kompetitif
                    </h4>
                    <ul class="text-sm text-gray-700 space-y-3">
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-orange-600 mt-1 flex-shrink-0"></i>
                            <span><strong>Fokus Latihan:</strong> Shooting accuracy, dribbling skills, pick and roll strategy.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-orange-600 mt-1 flex-shrink-0"></i>
                            <span><strong>Fasilitas:</strong> Lapangan indoor full court, ring standar FIBA.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-orange-600 mt-1 flex-shrink-0"></i>
                            <span><strong>Target:</strong> Juara DBL (Development Basketball League) regional.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-orange-600 mt-1 flex-shrink-0"></i>
                            <span><strong>Biaya:</strong> Rp 75.000/bulan (termasuk jersey).</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-orange-600 mt-1 flex-shrink-0"></i>
                            <span><strong>Prestasi:</strong> Best Team Spirit DBL Yogyakarta 2024.</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Card 3: Pramuka -->
            <div class="col-span-1">
                <div class="ekskul-card bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="relative h-48 overflow-hidden">
                        <img
                            src="/Template-WebSekolah/assets/images/ekskul/pramuka.jpg"
                            alt="Pramuka"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                            Membentuk karakter kepemimpinan, kemandirian, dan cinta alam melalui kegiatan kepramukaan.
                        </p>
                        <div class="flex items-center text-sm text-green-600 font-semibold mb-6">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            <span>Setiap Jumat, 14:00 - 16:00</span>
                        </div>

                        <button
                            data-target="detail-pramuka"
                            class="toggle-detail w-full px-4 py-3 bg-green-600 text-white rounded-lg transition hover:bg-green-700 font-semibold flex items-center justify-center gap-2">
                            <span>Lihat Detail</span>
                            <i class="fas fa-chevron-down toggle-icon text-sm"></i>
                        </button>
                    </div>
                </div>

                <div id="detail-pramuka" class="detail-content bg-white p-6 rounded-xl shadow-lg border-l-4 border-green-600">
                    <h4 class="text-lg font-bold text-green-800 mb-4 flex items-center gap-2">
                        <i class="fas fa-info-circle"></i>
                        Program Kepramukaan
                    </h4>
                    <ul class="text-sm text-gray-700 space-y-3">
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-green-600 mt-1 flex-shrink-0"></i>
                            <span><strong>Fokus Kegiatan:</strong> PBB, survival skills, pioneering, dan kepemimpinan.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-green-600 mt-1 flex-shrink-0"></i>
                            <span><strong>Fasilitas:</strong> Lapangan upacara, tenda camping, peralatan outdoor lengkap.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-green-600 mt-1 flex-shrink-0"></i>
                            <span><strong>Target:</strong> Gudep terbaik tingkat Kwartir Cabang DIY.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-green-600 mt-1 flex-shrink-0"></i>
                            <span><strong>Biaya:</strong> Gratis (Wajib untuk siswa kelas X).</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-green-600 mt-1 flex-shrink-0"></i>
                            <span><strong>Prestasi:</strong> Juara 1 Jambore Daerah 2024.</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Card 4: English Club -->
            <div class="col-span-1">
                <ddiv class="ekskul-card bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="relative h-48 overflow-hidden">
                        <img
                            src="/Template-WebSekolah/assets/images/ekskul/english-club.jpg"
                            alt="English Club"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                            Meningkatkan kemampuan berbahasa Inggris melalui conversation, debate, dan public speaking.
                        </p>
                        <div class="flex items-center text-sm text-purple-600 font-semibold mb-6">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            <span>Setiap Kamis, 15:00 - 16:30</span>
                        </div>

                        <button
                            data-target="detail-english"
                            class="toggle-detail w-full px-4 py-3 bg-purple-600 text-white rounded-lg transition hover:bg-purple-700 font-semibold flex items-center justify-center gap-2">
                            <span>Lihat Detail</span>
                            <i class="fas fa-chevron-down toggle-icon text-sm"></i>
                        </button>
                    </div>
                </ddiv>

                <div id="detail-english" class="detail-content bg-white p-6 rounded-xl shadow-lg border-l-4 border-purple-600">
                    <h4 class="text-lg font-bold text-purple-800 mb-4 flex items-center gap-2">
                        <i class="fas fa-info-circle"></i>
                        Program English Mastery
                    </h4>
                    <ul class="text-sm text-gray-700 space-y-3">
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-purple-600 mt-1 flex-shrink-0"></i>
                            <span><strong>Fokus Program:</strong> Speaking, listening, vocabulary building, dan grammar practice.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-purple-600 mt-1 flex-shrink-0"></i>
                            <span><strong>Fasilitas:</strong> Language lab, native speaker session, online resources.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-purple-600 mt-1 flex-shrink-0"></i>
                            <span><strong>Target:</strong> Skor TOEFL 500+ dan juara English Competition.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-purple-600 mt-1 flex-shrink-0"></i>
                            <span><strong>Biaya:</strong> Rp 30.000/bulan (materi fotokopi).</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-purple-600 mt-1 flex-shrink-0"></i>
                            <span><strong>Prestasi:</strong> Best Speaker English Debate 2024.</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Card 5: Robotik -->
            <div class="col-span-1">
                <div class="ekskul-card bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="relative h-48 overflow-hidden">
                        <img
                            src="/Template-WebSekolah/assets/images/ekskul/robotika.jpg"
                            alt="Robotik Club"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                            Belajar programming, elektronika, dan engineering untuk menciptakan robot inovatif.
                        </p>
                        <div class="flex items-center text-sm text-red-600 font-semibold mb-6">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            <span>Setiap Sabtu, 09:00 - 12:00</span>
                        </div>

                        <button
                            data-target="detail-robotik"
                            class="toggle-detail w-full px-4 py-3 bg-red-600 text-white rounded-lg transition hover:bg-red-700 font-semibold flex items-center justify-center gap-2">
                            <span>Lihat Detail</span>
                            <i class="fas fa-chevron-down toggle-icon text-sm"></i>
                        </button>
                    </div>
                </div>

                <div id="detail-robotik" class="detail-content bg-white p-6 rounded-xl shadow-lg border-l-4 border-red-600">
                    <h4 class="text-lg font-bold text-red-800 mb-4 flex items-center gap-2">
                        <i class="fas fa-info-circle"></i>
                        Program Robotik & AI
                    </h4>
                    <ul class="text-sm text-gray-700 space-y-3">
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-red-600 mt-1 flex-shrink-0"></i>
                            <span><strong>Fokus Program:</strong> Arduino programming, sensor integration, IoT basics.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-red-600 mt-1 flex-shrink-0"></i>
                            <span><strong>Fasilitas:</strong> Lab robotik lengkap, toolkit Arduino, komputer coding.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-red-600 mt-1 flex-shrink-0"></i>
                            <span><strong>Target:</strong> Kompetisi robot tingkat nasional dan internasional.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-red-600 mt-1 flex-shrink-0"></i>
                            <span><strong>Biaya:</strong> Rp 100.000/bulan (termasuk komponen).</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-red-600 mt-1 flex-shrink-0"></i>
                            <span><strong>Prestasi:</strong> Finalis Kontes Robot Indonesia 2024.</span>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const toggleButtons = document.querySelectorAll(".toggle-detail");

        toggleButtons.forEach(button => {
            button.addEventListener("click", () => {
                const targetId = button.getAttribute("data-target");
                const targetElement = document.getElementById(targetId);
                const icon = button.querySelector('.toggle-icon');

                // Close all other details
                document.querySelectorAll('.detail-content').forEach(detail => {
                    if (detail.id !== targetId && detail.classList.contains('show')) {
                        detail.classList.remove('show');
                        const otherButton = document.querySelector(`[data-target="${detail.id}"]`);
                        if (otherButton) {
                            const otherIcon = otherButton.querySelector('.toggle-icon');
                            otherIcon.classList.remove('rotate');
                        }
                    }
                });

                // Toggle current detail
                if (targetElement.classList.contains("show")) {
                    targetElement.classList.remove("show");
                    icon.classList.remove("rotate");
                } else {
                    targetElement.classList.add("show");
                    icon.classList.add("rotate");

                    // Smooth scroll to detail
                    setTimeout(() => {
                        targetElement.scrollIntoView({
                            behavior: 'smooth',
                            block: 'nearest'
                        });
                    }, 100);
                }
            });
        });
    });
</script>

<?php include '../src/includes/footer.php'; ?>