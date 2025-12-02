<?php
$page_title = 'Info PPDB';
include '../src/includes/header.php';
?>


<style>
    .download-card {
        transition: all 0.3s ease;
    }

    .download-card:hover {
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
            <span class="text-white font-medium">Info PPDB</span>
        </div>

        <div class="text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                <i class="fas fa-graduation-cap mr-3"></i>Info PPDB
            </h1>
            <p class="text-lg text-white/90 max-w-2xl mx-auto">
                Download panduan, formulir, dan informasi lengkap tentang Penerimaan Peserta Didik Baru
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
                                placeholder="Cari file PPDB..."
                                class="search-input w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:border-blue-500 transition">
                        </div>
                    </div>

                    <!-- Filter Buttons -->
                    <div class="flex flex-wrap gap-2">
                        <button onclick="filterDownload('all')" class="filter-btn active px-5 py-2 rounded-full font-semibold bg-gray-100 text-gray-700 hover:bg-blue-600 hover:text-white">
                            <i class="fas fa-list mr-2"></i>Semua
                        </button>
                        <button onclick="filterDownload('panduan')" class="filter-btn px-5 py-2 rounded-full font-semibold bg-gray-100 text-gray-700 hover:bg-blue-600 hover:text-white">
                            <i class="fas fa-book mr-2"></i>Panduan
                        </button>
                        <button onclick="filterDownload('formulir')" class="filter-btn px-5 py-2 rounded-full font-semibold bg-gray-100 text-gray-700 hover:bg-blue-600 hover:text-white">
                            <i class="fas fa-file-alt mr-2"></i>Formulir
                        </button>
                        <button onclick="filterDownload('jadwal')" class="filter-btn px-5 py-2 rounded-full font-semibold bg-gray-100 text-gray-700 hover:bg-blue-600 hover:text-white">
                            <i class="fas fa-calendar mr-2"></i>Jadwal
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Download Grid -->
        <div class="max-w-6xl mx-auto">
            <div id="downloadContainer" class="grid md:grid-cols-2 gap-6">

                <!-- Download Card 1 - Panduan -->
                <article class="download-card bg-white rounded-xl shadow-md overflow-hidden" data-category="panduan" data-title="Panduan PPDB Tahun 2025">
                    <div class="flex">

                        <!-- Content -->
                        <div class="p-6 flex-grow">
                            <div class="flex items-start justify-between mb-3">
                                <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-semibold">
                                    <i class="fas fa-book mr-1"></i>Panduan
                                </span>
                                <i class="fas fa-download text-blue-600 text-xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-blue-600 transition">
                                Panduan PPDB Tahun 2025
                            </h3>
                            <p class="text-gray-600 text-sm mb-3">
                                Panduan lengkap proses pendaftaran PPDB, persyaratan, dan tahapan seleksi.
                            </p>
                            <div class="flex items-center gap-4 text-sm text-gray-500">
                                <span><i class="fas fa-file-pdf mr-1"></i>PDF</span>
                                <span><i class="fas fa-weight-hanging mr-1"></i>2.5 MB</span>
                            </div>
                            <a href="/download/panduan-ppdb-2025.pdf" class="inline-block mt-4 text-blue-600 hover:text-blue-700 font-semibold text-sm">
                                Download <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Download Card 2 - Formulir -->
                <article class="download-card bg-white rounded-xl shadow-md overflow-hidden" data-category="formulir" data-title="Formulir Pendaftaran PPDB">
                    <div class="flex">

                        <!-- Content -->
                        <div class="p-6 flex-grow">
                            <div class="flex items-start justify-between mb-3">
                                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-semibold">
                                    <i class="fas fa-file-alt mr-1"></i>Formulir
                                </span>
                                <i class="fas fa-download text-green-600 text-xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-blue-600 transition">
                                Formulir Pendaftaran PPDB
                            </h3>
                            <p class="text-gray-600 text-sm mb-3">
                                Formulir resmi pendaftaran siswa baru yang harus diisi dan dikumpulkan.
                            </p>
                            <div class="flex items-center gap-4 text-sm text-gray-500">
                                <span><i class="fas fa-file-word mr-1"></i>DOCX</span>
                                <span><i class="fas fa-weight-hanging mr-1"></i>1.2 MB</span>
                            </div>
                            <a href="/download/formulir-ppdb.docx" class="inline-block mt-4 text-blue-600 hover:text-blue-700 font-semibold text-sm">
                                Download <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Download Card 3 - Jadwal -->
                <article class="download-card bg-white rounded-xl shadow-md overflow-hidden" data-category="jadwal" data-title="Jadwal PPDB Tahun 2025">
                    <div class="flex">

                        <!-- Content -->
                        <div class="p-6 flex-grow">
                            <div class="flex items-start justify-between mb-3">
                                <span class="bg-orange-100 text-orange-700 px-3 py-1 rounded-full text-xs font-semibold">
                                    <i class="fas fa-calendar mr-1"></i>Jadwal
                                </span>
                                <i class="fas fa-download text-orange-600 text-xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-blue-600 transition">
                                Jadwal PPDB Tahun 2025
                            </h3>
                            <p class="text-gray-600 text-sm mb-3">
                                Jadwal lengkap tahapan PPDB mulai dari pendaftaran hingga pengumuman hasil.
                            </p>
                            <div class="flex items-center gap-4 text-sm text-gray-500">
                                <span><i class="fas fa-file-pdf mr-1"></i>PDF</span>
                                <span><i class="fas fa-weight-hanging mr-1"></i>1.8 MB</span>
                            </div>
                            <a href="/download/jadwal-ppdb-2025.pdf" class="inline-block mt-4 text-blue-600 hover:text-blue-700 font-semibold text-sm">
                                Download <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Download Card 4 - Panduan -->
                <article class="download-card bg-white rounded-xl shadow-md overflow-hidden" data-category="panduan" data-title="Persyaratan PPDB 2025">
                    <div class="flex">

                        <!-- Content -->
                        <div class="p-6 flex-grow">
                            <div class="flex items-start justify-between mb-3">
                                <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-xs font-semibold">
                                    <i class="fas fa-book mr-1"></i>Panduan
                                </span>
                                <i class="fas fa-download text-purple-600 text-xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-blue-600 transition">
                                Persyaratan PPDB 2025
                            </h3>
                            <p class="text-gray-600 text-sm mb-3">
                                Daftar lengkap persyaratan dokumen yang diperlukan untuk mendaftar PPDB.
                            </p>
                            <div class="flex items-center gap-4 text-sm text-gray-500">
                                <span><i class="fas fa-file-pdf mr-1"></i>PDF</span>
                                <span><i class="fas fa-weight-hanging mr-1"></i>1.5 MB</span>
                            </div>
                            <a href="/download/persyaratan-ppdb-2025.pdf" class="inline-block mt-4 text-blue-600 hover:text-blue-700 font-semibold text-sm">
                                Download <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Download Card 5 - Formulir -->
                <article class="download-card bg-white rounded-xl shadow-md overflow-hidden" data-category="formulir" data-title="Surat Pernyataan Orang Tua">
                    <div class="flex">

                        <!-- Content -->
                        <div class="p-6 flex-grow">
                            <div class="flex items-start justify-between mb-3">
                                <span class="bg-teal-100 text-teal-700 px-3 py-1 rounded-full text-xs font-semibold">
                                    <i class="fas fa-file-alt mr-1"></i>Formulir
                                </span>
                                <i class="fas fa-download text-teal-600 text-xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-blue-600 transition">
                                Surat Pernyataan Orang Tua
                            </h3>
                            <p class="text-gray-600 text-sm mb-3">
                                Template surat pernyataan dari orang tua/wali untuk mendukung pendaftaran siswa.
                            </p>
                            <div class="flex items-center gap-4 text-sm text-gray-500">
                                <span><i class="fas fa-file-word mr-1"></i>DOCX</span>
                                <span><i class="fas fa-weight-hanging mr-1"></i>0.8 MB</span>
                            </div>
                            <a href="/download/surat-pernyataan.docx" class="inline-block mt-4 text-blue-600 hover:text-blue-700 font-semibold text-sm">
                                Download <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Download Card 6 - Jadwal -->
                <article class="download-card bg-white rounded-xl shadow-md overflow-hidden" data-category="jadwal" data-title="Timeline PPDB 2025">
                    <div class="flex">

                        <!-- Content -->
                        <div class="p-6 flex-grow">
                            <div class="flex items-start justify-between mb-3">
                                <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs font-semibold">
                                    <i class="fas fa-calendar mr-1"></i>Jadwal
                                </span>
                                <i class="fas fa-download text-red-600 text-xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-blue-600 transition">
                                Timeline PPDB 2025
                            </h3>
                            <p class="text-gray-600 text-sm mb-3">
                                Timeline lengkap kegiatan PPDB dari awal pendaftaran hingga akhir proses.
                            </p>
                            <div class="flex items-center gap-4 text-sm text-gray-500">
                                <span><i class="fas fa-file-pdf mr-1"></i>PDF</span>
                                <span><i class="fas fa-weight-hanging mr-1"></i>1.0 MB</span>
                            </div>
                            <a href="/download/timeline-ppdb-2025.pdf" class="inline-block mt-4 text-blue-600 hover:text-blue-700 font-semibold text-sm">
                                Download <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </article>

            </div>

            <!-- No Results Message -->
            <div id="noResults" class="hidden text-center py-12">
                <i class="fas fa-search text-gray-300 text-6xl mb-4"></i>
                <h3 class="text-xl font-bold text-gray-600 mb-2">Tidak Ada File Ditemukan</h3>
                <p class="text-gray-500">Coba ubah filter atau kata kunci pencarian Anda</p>
            </div>
        </div>

    </div>
</section>

<script>
    // Filter Function
    function filterDownload(category) {
        const cards = document.querySelectorAll('.download-card');
        const buttons = document.querySelectorAll('.filter-btn');
        const noResults = document.getElementById('noResults');
        let visibleCount = 0;

        // Update active button
        buttons.forEach(btn => btn.classList.remove('active'));
        event.target.closest('.filter-btn').classList.add('active');

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
        const cards = document.querySelectorAll('.download-card');
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