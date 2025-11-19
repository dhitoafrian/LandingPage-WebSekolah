<?php
$page_title = 'Pengumuman Sekolah';
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

    .pengumuman-card {
        transition: all 0.3s ease;
    }

    .pengumuman-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
    }

    .priority-badge {
        animation: pulse 2s infinite;
    }

    @keyframes pulse {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: .7;
        }
    }
</style>

<!-- Hero Section -->
<div class="hero-gradient relative overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-10"></div>
    <div class="container mx-auto px-4 py-16 relative z-10">
        <!-- Breadcrumb -->
        <div class="text-white/80 text-sm mb-6">
            <i class="fas fa-home mr-2"></i>
            <a href="/" class="hover:text-white transition">Beranda</a>
            <span class="mx-2">/</span>
            <span class="text-white font-medium">Pengumuman</span>
        </div>

        <div class="text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                <i class="fas fa-bullhorn mr-3"></i>Pengumuman Sekolah
            </h1>
            <p class="text-lg text-white/90 max-w-2xl mx-auto">
                Informasi penting dan pengumuman terbaru dari sekolah
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
                                placeholder="Cari pengumuman..."
                                class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:border-red-500 transition focus:outline-none focus:ring-2 focus:ring-red-200">
                        </div>
                    </div>

                    <!-- Filter Buttons -->
                    <div class="flex flex-wrap gap-2">
                        <button onclick="filterPengumuman('all')" class="filter-btn active px-5 py-2 rounded-full font-semibold bg-gray-100 text-gray-700 hover:bg-red-600 hover:text-white transition">
                            <i class="fas fa-list mr-2"></i>Semua
                        </button>
                        <button onclick="filterPengumuman('urgent')" class="filter-btn px-5 py-2 rounded-full font-semibold bg-gray-100 text-gray-700 hover:bg-red-600 hover:text-white transition">
                            <i class="fas fa-exclamation-triangle mr-2"></i>Penting
                        </button>
                        <button onclick="filterPengumuman('academic')" class="filter-btn px-5 py-2 rounded-full font-semibold bg-gray-100 text-gray-700 hover:bg-red-600 hover:text-white transition">
                            <i class="fas fa-book mr-2"></i>Akademik
                        </button>
                        <button onclick="filterPengumuman('general')" class="filter-btn px-5 py-2 rounded-full font-semibold bg-gray-100 text-gray-700 hover:bg-red-600 hover:text-white transition">
                            <i class="fas fa-info-circle mr-2"></i>Umum
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pengumuman Grid -->
        <div class="max-w-6xl mx-auto">
            <div id="pengumumanContainer" class="space-y-6">

                <!-- Pengumuman Card 1 - Urgent -->
                <article class="pengumuman-card bg-white rounded-xl shadow-md overflow-hidden" data-category="urgent" data-title="Pengumuman Hasil PPDB Gelombang 1">
                    <div class="flex">
                        <!-- Priority Badge -->
                        <div class="bg-gradient-to-br from-red-500 to-red-700 text-white p-6 flex flex-col items-center justify-center min-w-[140px]">
                            <i class="fas fa-exclamation-circle text-5xl mb-2 priority-badge"></i>
                            <div class="text-sm font-bold text-center">PENTING</div>
                        </div>

                        <!-- Content -->
                        <div class="p-6 flex-grow">
                            <div class="flex items-start justify-between mb-3">
                                <div class="flex items-center gap-3">
                                    <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs font-semibold">
                                        <i class="fas fa-star mr-1"></i>Penting
                                    </span>
                                    <span class="text-sm text-gray-500">
                                        <i class="far fa-calendar mr-1"></i>19 Nov 2025
                                    </span>
                                </div>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-3 hover:text-red-600 transition">
                                Pengumuman Hasil PPDB Gelombang 1
                            </h3>
                            <p class="text-gray-600 mb-4 leading-relaxed">
                                Dengan ini kami sampaikan bahwa hasil seleksi PPDB Gelombang 1 Tahun Ajaran 2025/2026 telah diumumkan.
                                Peserta yang diterima diharapkan segera melakukan daftar ulang paling lambat tanggal 25 November 2025.
                            </p>
                            <div class="flex flex-wrap items-center gap-4">
                                <a href="/pengumuman/ppdb-gelombang-1" class="inline-flex items-center gap-2 bg-red-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-red-700 transition">
                                    <i class="fas fa-eye"></i>
                                    Lihat Pengumuman
                                </a>
                                <a href="#" class="inline-flex items-center gap-2 text-red-600 hover:text-red-700 font-semibold">
                                    <i class="fas fa-download"></i>
                                    Download PDF
                                </a>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Pengumuman Card 2 - Academic -->
                <article class="pengumuman-card bg-white rounded-xl shadow-md overflow-hidden" data-category="academic" data-title="Jadwal Ujian Akhir Semester Genap">
                    <div class="flex">
                        <!-- Category Badge -->
                        <div class="bg-gradient-to-br from-blue-500 to-blue-700 text-white p-6 flex flex-col items-center justify-center min-w-[140px]">
                            <i class="fas fa-graduation-cap text-5xl mb-2"></i>
                            <div class="text-sm font-bold text-center">AKADEMIK</div>
                        </div>

                        <!-- Content -->
                        <div class="p-6 flex-grow">
                            <div class="flex items-start justify-between mb-3">
                                <div class="flex items-center gap-3">
                                    <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-semibold">
                                        <i class="fas fa-book mr-1"></i>Akademik
                                    </span>
                                    <span class="text-sm text-gray-500">
                                        <i class="far fa-calendar mr-1"></i>18 Nov 2025
                                    </span>
                                </div>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-3 hover:text-blue-600 transition">
                                Jadwal Ujian Akhir Semester Genap
                            </h3>
                            <p class="text-gray-600 mb-4 leading-relaxed">
                                Informasi jadwal pelaksanaan Ujian Akhir Semester Genap Tahun Ajaran 2024/2025 untuk seluruh tingkat.
                                Ujian akan dilaksanakan mulai tanggal 2-9 Desember 2025.
                            </p>
                            <div class="flex flex-wrap items-center gap-4">
                                <a href="/pengumuman/jadwal-uas" class="inline-flex items-center gap-2 bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                                    <i class="fas fa-eye"></i>
                                    Lihat Pengumuman
                                </a>
                                <a href="#" class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-700 font-semibold">
                                    <i class="fas fa-download"></i>
                                    Download Jadwal
                                </a>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Pengumuman Card 3 - General -->
                <article class="pengumuman-card bg-white rounded-xl shadow-md overflow-hidden" data-category="general" data-title="Libur Semester Genap 2024/2025">
                    <div class="flex">
                        <!-- Category Badge -->
                        <div class="bg-gradient-to-br from-green-500 to-green-700 text-white p-6 flex flex-col items-center justify-center min-w-[140px]">
                            <i class="fas fa-info-circle text-5xl mb-2"></i>
                            <div class="text-sm font-bold text-center">UMUM</div>
                        </div>

                        <!-- Content -->
                        <div class="p-6 flex-grow">
                            <div class="flex items-start justify-between mb-3">
                                <div class="flex items-center gap-3">
                                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-semibold">
                                        <i class="fas fa-info-circle mr-1"></i>Umum
                                    </span>
                                    <span class="text-sm text-gray-500">
                                        <i class="far fa-calendar mr-1"></i>15 Nov 2025
                                    </span>
                                </div>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-3 hover:text-green-600 transition">
                                Libur Semester Genap 2024/2025
                            </h3>
                            <p class="text-gray-600 mb-4 leading-relaxed">
                                Sekolah akan libur semester genap mulai tanggal 15-31 Desember 2025. Masuk kembali pada tanggal 2 Januari 2026
                                dengan menggunakan seragam lengkap.
                            </p>
                            <div class="flex flex-wrap items-center gap-4">
                                <a href="/pengumuman/libur-semester" class="inline-flex items-center gap-2 bg-green-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-green-700 transition">
                                    <i class="fas fa-eye"></i>
                                    Lihat Pengumuman
                                </a>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Pengumuman Card 4 - Academic -->
                <article class="pengumuman-card bg-white rounded-xl shadow-md overflow-hidden" data-category="academic" data-title="Perubahan Jadwal Pelajaran Semester Genap">
                    <div class="flex">
                        <!-- Category Badge -->
                        <div class="bg-gradient-to-br from-blue-500 to-blue-700 text-white p-6 flex flex-col items-center justify-center min-w-[140px]">
                            <i class="fas fa-graduation-cap text-5xl mb-2"></i>
                            <div class="text-sm font-bold text-center">AKADEMIK</div>
                        </div>

                        <!-- Content -->
                        <div class="p-6 flex-grow">
                            <div class="flex items-start justify-between mb-3">
                                <div class="flex items-center gap-3">
                                    <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-semibold">
                                        <i class="fas fa-book mr-1"></i>Akademik
                                    </span>
                                    <span class="text-sm text-gray-500">
                                        <i class="far fa-calendar mr-1"></i>12 Nov 2025
                                    </span>
                                </div>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-3 hover:text-blue-600 transition">
                                Perubahan Jadwal Pelajaran Semester Genap
                            </h3>
                            <p class="text-gray-600 mb-4 leading-relaxed">
                                Terdapat perubahan jadwal pelajaran untuk beberapa kelas di semester genap. Mohon siswa dan wali kelas
                                memeriksa jadwal baru yang telah ditempel di papan pengumuman.
                            </p>
                            <div class="flex flex-wrap items-center gap-4">
                                <a href="/pengumuman/perubahan-jadwal" class="inline-flex items-center gap-2 bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                                    <i class="fas fa-eye"></i>
                                    Lihat Pengumuman
                                </a>
                                <a href="#" class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-700 font-semibold">
                                    <i class="fas fa-download"></i>
                                    Download Jadwal Baru
                                </a>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Pengumuman Card 5 - Urgent -->
                <article class="pengumuman-card bg-white rounded-xl shadow-md overflow-hidden" data-category="urgent" data-title="Pembayaran SPP Bulan Desember">
                    <div class="flex">
                        <!-- Priority Badge -->
                        <div class="bg-gradient-to-br from-red-500 to-red-700 text-white p-6 flex flex-col items-center justify-center min-w-[140px]">
                            <i class="fas fa-exclamation-circle text-5xl mb-2 priority-badge"></i>
                            <div class="text-sm font-bold text-center">PENTING</div>
                        </div>

                        <!-- Content -->
                        <div class="p-6 flex-grow">
                            <div class="flex items-start justify-between mb-3">
                                <div class="flex items-center gap-3">
                                    <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs font-semibold">
                                        <i class="fas fa-star mr-1"></i>Penting
                                    </span>
                                    <span class="text-sm text-gray-500">
                                        <i class="far fa-calendar mr-1"></i>10 Nov 2025
                                    </span>
                                </div>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-3 hover:text-red-600 transition">
                                Pembayaran SPP Bulan Desember
                            </h3>
                            <p class="text-gray-600 mb-4 leading-relaxed">
                                Kepada seluruh wali murid, kami mengingatkan untuk melakukan pembayaran SPP bulan Desember paling lambat
                                tanggal 10 Desember 2025. Pembayaran dapat dilakukan melalui transfer bank atau di bagian keuangan sekolah.
                            </p>
                            <div class="flex flex-wrap items-center gap-4">
                                <a href="/pengumuman/pembayaran-spp" class="inline-flex items-center gap-2 bg-red-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-red-700 transition">
                                    <i class="fas fa-eye"></i>
                                    Lihat Pengumuman
                                </a>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Pengumuman Card 6 - General -->
                <article class="pengumuman-card bg-white rounded-xl shadow-md overflow-hidden" data-category="general" data-title="Kegiatan Donor Darah">
                    <div class="flex">
                        <!-- Category Badge -->
                        <div class="bg-gradient-to-br from-green-500 to-green-700 text-white p-6 flex flex-col items-center justify-center min-w-[140px]">
                            <i class="fas fa-info-circle text-5xl mb-2"></i>
                            <div class="text-sm font-bold text-center">UMUM</div>
                        </div>

                        <!-- Content -->
                        <div class="p-6 flex-grow">
                            <div class="flex items-start justify-between mb-3">
                                <div class="flex items-center gap-3">
                                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-semibold">
                                        <i class="fas fa-info-circle mr-1"></i>Umum
                                    </span>
                                    <span class="text-sm text-gray-500">
                                        <i class="far fa-calendar mr-1"></i>8 Nov 2025
                                    </span>
                                </div>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-3 hover:text-green-600 transition">
                                Kegiatan Donor Darah
                            </h3>
                            <p class="text-gray-600 mb-4 leading-relaxed">
                                Sekolah akan mengadakan kegiatan donor darah bekerjasama dengan PMI pada tanggal 25 November 2025.
                                Bagi siswa, guru, dan staff yang ingin berpartisipasi dapat mendaftar di ruang UKS.
                            </p>
                            <div class="flex flex-wrap items-center gap-4">
                                <a href="/pengumuman/donor-darah" class="inline-flex items-center gap-2 bg-green-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-green-700 transition">
                                    <i class="fas fa-eye"></i>
                                    Lihat Pengumuman
                                </a>
                            </div>
                        </div>
                    </div>
                </article>

            </div>

            <!-- No Results Message -->
            <div id="noResults" class="hidden text-center py-12">
                <i class="fas fa-search text-gray-300 text-6xl mb-4"></i>
                <h3 class="text-xl font-bold text-gray-600 mb-2">Tidak Ada Pengumuman Ditemukan</h3>
                <p class="text-gray-500">Coba ubah filter atau kata kunci pencarian Anda</p>
            </div>
        </div>

    </div>
</section>

<script>
    // Filter Function
    function filterPengumuman(category) {
        const cards = document.querySelectorAll('.pengumuman-card');
        const buttons = document.querySelectorAll('.filter-btn');
        const noResults = document.getElementById('noResults');
        let visibleCount = 0;

        // Update active button
        buttons.forEach(btn => btn.classList.remove('active', 'bg-red-600', 'text-white'));
        event.target.closest('.filter-btn').classList.add('active', 'bg-red-600', 'text-white');

        // Filter cards
        cards.forEach(card => {
            const cardCategory = card.getAttribute('data-category');

            if (category === 'all' || cardCategory === category) {
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
        const cards = document.querySelectorAll('.pengumuman-card');
        const noResults = document.getElementById('noResults');
        let visibleCount = 0;

        cards.forEach(card => {
            const title = card.getAttribute('data-title').toLowerCase();
            const content = card.textContent.toLowerCase();

            if (title.includes(searchTerm) || content.includes(searchTerm)) {
                card.style.display = 'block';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });

        // Show/hide no results message
        noResults.classList.toggle('hidden', visibleCount > 0);
    });

    // Add active class to first filter button on load
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelector('.filter-btn').classList.add('bg-red-600', 'text-white');
    });
</script>

<?php
include '../src/includes/footer.php';
?>