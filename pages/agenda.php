<?php
$page_title = 'Agenda Sekolah';
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

    .agenda-card {
        transition: all 0.3s ease;
    }

    .agenda-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
    }

    .filter-btn {
        transition: all 0.3s ease;
    }

    .filter-btn.active {
        background: #2563eb;
        color: white;
    }

    .search-input:focus {
        outline: none;
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
    }
</style>

<!-- Hero Section -->
<div class="hero-gradient relative overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-10"></div>
    <div class="container mx-auto px-4 py-16 relative z-10">
        <!-- Breadcrumb -->
        <div class="text-white/80 text-sm mb-6">
            <i class="fas fa-home mr-2"></i>
            <a href="/Template-WebSekolah/src/index.php" class="hover:text-white transition">Beranda</a>
            <span class="mx-2">/</span>
            <span class="text-white font-medium">Agenda</span>
        </div>

        <div class="text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                <i class="fas fa-calendar-alt mr-3"></i>Agenda Sekolah
            </h1>
            <p class="text-lg text-white/90 max-w-2xl mx-auto">
                Lihat semua kegiatan dan acara yang akan berlangsung di sekolah
            </p>
        </div>
    </div>
</div>

<!-- Main Content Section -->
<section class="bg-gray-50 py-12">
    <div class="container mx-auto px-4">

        <!-- Filter & Search -->
        <div class="max-w-6xl mx-auto mb-8">
            <div class="bg-white rounded-xl shadow-md p-6">
                <div class="flex flex-col lg:flex-row gap-4 items-center justify-between">
                    <!-- Search Bar -->
                    <div class="w-full lg:w-1/2">
                        <div class="relative">
                            <i class="fas fa-search absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                            <input type="text"
                                id="searchInput"
                                placeholder="Cari agenda..."
                                class="search-input w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:border-blue-500 transition">
                        </div>
                    </div>

                    <!-- Filter Buttons -->
                    <div class="flex flex-wrap gap-2">
                        <button onclick="filterAgenda('all')" class="filter-btn active px-5 py-2 rounded-full font-semibold bg-gray-100 text-gray-700 hover:bg-blue-600 hover:text-white">
                            <i class="fas fa-list mr-2"></i>Semua
                        </button>
                        <button onclick="filterAgenda('upcoming')" class="filter-btn px-5 py-2 rounded-full font-semibold bg-gray-100 text-gray-700 hover:bg-blue-600 hover:text-white">
                            <i class="fas fa-clock mr-2"></i>Akan Datang
                        </button>
                        <button onclick="filterAgenda('past')" class="filter-btn px-5 py-2 rounded-full font-semibold bg-gray-100 text-gray-700 hover:bg-blue-600 hover:text-white">
                            <i class="fas fa-history mr-2"></i>Selesai
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Agenda Grid -->
        <div class="max-w-6xl mx-auto">
            <div id="agendaContainer" class="grid md:grid-cols-2 gap-6">

                <!-- Agenda Card 1 - Upcoming -->
                <article class="agenda-card bg-white rounded-xl shadow-md overflow-hidden" data-status="upcoming" data-title="Asesmen Sekolah Tahun 2025">
                    <div class="flex">
                        <!-- Content -->
                        <div class="p-6 flex-grow">
                            <div class="flex items-start justify-between mb-3">
                                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-semibold">
                                    <i class="fas fa-clock mr-1"></i>Akan Datang
                                </span>
                                <i class="fas fa-calendar-check text-blue-600 text-xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-blue-600 transition">
                                Asesmen Sekolah Tahun 2025
                            </h3>
                            <p class="text-gray-600 text-sm mb-3">
                                Pelaksanaan Asesmen Nasional Berbasis Komputer (ANBK) untuk mengukur mutu pendidikan.
                            </p>
                            <div class="flex items-center gap-4 text-sm text-gray-500">
                                <span><i class="far fa-clock mr-1"></i>08:00 - 14:00</span>
                                <span><i class="fas fa-map-marker-alt mr-1"></i>Lab Komputer</span>
                            </div>
                            <a href="/agenda/asesmen-sekolah" class="inline-block mt-4 text-blue-600 hover:text-blue-700 font-semibold text-sm">
                                Lihat Detail <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Agenda Card 2 - Upcoming -->
                <article class="agenda-card bg-white rounded-xl shadow-md overflow-hidden" data-status="upcoming" data-title="Ujian Praktik Kelas XII Tahun 2024/2025">
                    <div class="flex">
                        <!-- Content -->
                        <div class="p-6 flex-grow">
                            <div class="flex items-start justify-between mb-3">
                                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-semibold">
                                    <i class="fas fa-clock mr-1"></i>Akan Datang
                                </span>
                                <i class="fas fa-calendar-check text-blue-600 text-xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-blue-600 transition">
                                Ujian Praktik Kelas XII Tahun 2024/2025
                            </h3>
                            <p class="text-gray-600 text-sm mb-3">
                                Ujian praktik untuk mata pelajaran produktif bagi siswa kelas XII sebagai syarat kelulusan.
                            </p>
                            <div class="flex items-center gap-4 text-sm text-gray-500">
                                <span><i class="far fa-clock mr-1"></i>07:30 - 15:00</span>
                                <span><i class="fas fa-map-marker-alt mr-1"></i>Ruang Praktik</span>
                            </div>
                            <a href="/agenda/ujian-praktik" class="inline-block mt-4 text-blue-600 hover:text-blue-700 font-semibold text-sm">
                                Lihat Detail <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Agenda Card 3 - Upcoming -->
                <article class="agenda-card bg-white rounded-xl shadow-md overflow-hidden" data-status="upcoming" data-title="Sumatif Tengah Semester Genap 2024/2025">
                    <div class="flex">
                        <!-- Content -->
                        <div class="p-6 flex-grow">
                            <div class="flex items-start justify-between mb-3">
                                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-semibold">
                                    <i class="fas fa-clock mr-1"></i>Akan Datang
                                </span>
                                <i class="fas fa-calendar-check text-blue-600 text-xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-blue-600 transition">
                                Sumatif Tengah Semester Genap 2024/2025
                            </h3>
                            <p class="text-gray-600 text-sm mb-3">
                                Pelaksanaan ujian tengah semester genap untuk semua jenjang kelas sebagai evaluasi pembelajaran.
                            </p>
                            <div class="flex items-center gap-4 text-sm text-gray-500">
                                <span><i class="far fa-clock mr-1"></i>07:00 - 12:00</span>
                                <span><i class="fas fa-map-marker-alt mr-1"></i>Ruang Kelas</span>
                            </div>
                            <a href="/agenda/sumatif-tengah-semester" class="inline-block mt-4 text-blue-600 hover:text-blue-700 font-semibold text-sm">
                                Lihat Detail <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Agenda Card 4 - Upcoming -->
                <article class="agenda-card bg-white rounded-xl shadow-md overflow-hidden" data-status="upcoming" data-title="Seminar Pendidikan Tinggi dan Beasiswa Taiwan">
                    <div class="flex">
                        <!-- Date Badge -->

                        <!-- Content -->
                        <div class="p-6 flex-grow">
                            <div class="flex items-start justify-between mb-3">
                                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-semibold">
                                    <i class="fas fa-clock mr-1"></i>Akan Datang
                                </span>
                                <i class="fas fa-calendar-check text-blue-600 text-xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-blue-600 transition">
                                Seminar Pendidikan Tinggi dan Beasiswa Taiwan
                            </h3>
                            <p class="text-gray-600 text-sm mb-3">
                                Sosialisasi program beasiswa kuliah di Taiwan dan informasi universitas terbaik Taiwan.
                            </p>
                            <div class="flex items-center gap-4 text-sm text-gray-500">
                                <span><i class="far fa-clock mr-1"></i>09:00 - 12:00</span>
                                <span><i class="fas fa-map-marker-alt mr-1"></i>Aula Utama</span>
                            </div>
                            <a href="/agenda/seminar-pendidikan" class="inline-block mt-4 text-blue-600 hover:text-blue-700 font-semibold text-sm">
                                Lihat Detail <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Agenda Card 5 - Past -->
                <article class="agenda-card bg-white rounded-xl shadow-md overflow-hidden" data-status="past" data-title="Delegasi International ke Turkiye">
                    <div class="flex">

                        <!-- Content -->
                        <div class="p-6 flex-grow">
                            <div class="flex items-start justify-between mb-3">
                                <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-xs font-semibold">
                                    <i class="fas fa-check-circle mr-1"></i>Selesai
                                </span>
                                <i class="fas fa-calendar-check text-gray-600 text-xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-blue-600 transition">
                                Delegasi International ke Turkiye
                            </h3>
                            <p class="text-gray-600 text-sm mb-3">
                                Program pertukaran pelajar dan studi banding ke sekolah-sekolah di Turkiye.
                            </p>
                            <div class="flex items-center gap-4 text-sm text-gray-500">
                                <span><i class="far fa-clock mr-1"></i>7 Hari</span>
                                <span><i class="fas fa-map-marker-alt mr-1"></i>Turkiye</span>
                            </div>
                            <a href="/agenda/delegasi-turkiye" class="inline-block mt-4 text-blue-600 hover:text-blue-700 font-semibold text-sm">
                                Lihat Detail <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Agenda Card 6 - Past -->
                <article class="agenda-card bg-white rounded-xl shadow-md overflow-hidden" data-status="past" data-title="Peringatan Hari Guru Nasional">
                    <div class="flex">

                        <!-- Content -->
                        <div class="p-6 flex-grow">
                            <div class="flex items-start justify-between mb-3">
                                <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-xs font-semibold">
                                    <i class="fas fa-check-circle mr-1"></i>Selesai
                                </span>
                                <i class="fas fa-calendar-check text-gray-600 text-xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-blue-600 transition">
                                Peringatan Hari Guru Nasional
                            </h3>
                            <p class="text-gray-600 text-sm mb-3">
                                Upacara dan perayaan Hari Guru Nasional sebagai bentuk penghargaan kepada para guru.
                            </p>
                            <div class="flex items-center gap-4 text-sm text-gray-500">
                                <span><i class="far fa-clock mr-1"></i>07:00 - 11:00</span>
                                <span><i class="fas fa-map-marker-alt mr-1"></i>Lapangan Upacara</span>
                            </div>
                            <a href="/agenda/hari-guru" class="inline-block mt-4 text-blue-600 hover:text-blue-700 font-semibold text-sm">
                                Lihat Detail <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </article>

            </div>

            <!-- No Results Message -->
            <div id="noResults" class="hidden text-center py-12">
                <i class="fas fa-search text-gray-300 text-6xl mb-4"></i>
                <h3 class="text-xl font-bold text-gray-600 mb-2">Tidak Ada Agenda Ditemukan</h3>
                <p class="text-gray-500">Coba ubah filter atau kata kunci pencarian Anda</p>
            </div>
        </div>

    </div>
</section>

<script>
    // Filter Function
    function filterAgenda(status) {
        const cards = document.querySelectorAll('.agenda-card');
        const buttons = document.querySelectorAll('.filter-btn');
        const noResults = document.getElementById('noResults');
        let visibleCount = 0;

        // Update active button
        buttons.forEach(btn => btn.classList.remove('active'));
        event.target.closest('.filter-btn').classList.add('active');

        // Filter cards
        cards.forEach(card => {
            const cardStatus = card.getAttribute('data-status');

            if (status === 'all' || cardStatus === status) {
                card.style.display = 'block';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });

        // Show/hide no results message
        noResults.classList.toggle('hidden', visibleCount > 0);
    }

    // Search Function
    document.getElementById('searchInput').addEventListener('input', function(e) {
        const searchTerm = e.target.value.toLowerCase();
        const cards = document.querySelectorAll('.agenda-card');
        const noResults = document.getElementById('noResults');
        let visibleCount = 0;

        cards.forEach(card => {
            const title = card.getAttribute('data-title').toLowerCase();

            if (title.includes(searchTerm)) {
                card.style.display = 'block';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });

        // Show/hide no results message
        noResults.classList.toggle('hidden', visibleCount > 0);
    });
</script>

<?php
include '../src/includes/footer.php';
?>