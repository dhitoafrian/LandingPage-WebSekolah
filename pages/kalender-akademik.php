<?php
$page_title = 'Kalender Akademik';
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
            <span class="text-white font-medium">Kalender Akademik</span>
        </div>

        <div class="text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
               <i class="fas fa-calendar-alt mr-3"></i>Kalender Akademik
            </h1>
            <p class="text-lg text-white/90 max-w-2xl mx-auto">
                Download Kalender Akademik Tahun Ajaran 2025/2026 untuk informasi penting seputar jadwal akademik.
            </p>
        </div>
    </div>
</div>



<!-- Main Content Section -->
<section class="bg-gray-50 py-12">

    <div class="container mx-auto px-4">

        <!-- Download Grid -->
        <div class="max-w-2xl mx-auto">
            <div id="downloadContainer" class="flex items-center justify-center">

                <!-- Download Card 1 - Panduan -->
                <article class="download-card border border-black rounded-xl overflow-hidden" data-category="panduan" data-title="Panduan PPDB Tahun 2025">
                    <div class="flex">

                        <!-- Content -->
                        <div class="p-6 flex-grow">
                            <div class="flex items-start justify-between mb-3">
                                <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-semibold">
                                    <i class="fas fa-calendar-alt mr-1"></i>Kaleder Akademik
                                </span>
                                <i class="fas fa-download text-blue-600 text-xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-blue-600 transition">
                                Kalender Akademik Tahun Ajaran 2025/2026
                            </h3>
                            <p class="text-gray-600 text-sm mb-3">
                                Unduh kalender akademik resmi untuk tahun ajaran 2025/2026 yang mencakup jadwal penting, liburan, dan kegiatan sekolah.
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