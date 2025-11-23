<?php

$page_title = 'Pengumuman Sekolah';
include '../src/includes/header.php';

// Data pengumuman yang lebih banyak untuk menguji fitur "Tampilkan Lainnya"
$announcements = [
    ['title' => 'Pengumuman Hasil PPDB Gelombang 1', 'date' => '19 Nov 2025', 'desc' => 'Hasil seleksi PPDB Gelombang 1 Tahun Ajaran 2025/2026 telah diumumkan. Peserta yang diterima diharapkan segera melakukan daftar ulang.'],
    ['title' => 'Jadwal Ujian Akhir Semester Genap', 'date' => '18 Nov 2025', 'desc' => 'Informasi jadwal pelaksanaan Ujian Akhir Semester Genap untuk seluruh tingkat. Ujian akan dilaksanakan mulai tanggal 2-9 Desember 2025.'],
    ['title' => 'Libur Semester Genap 2024/2025', 'date' => '15 Nov 2025', 'desc' => 'Sekolah akan libur semester genap mulai tanggal 15-31 Desember 2025. Masuk kembali pada tanggal 2 Januari 2026.'],
    ['title' => 'Perubahan Jadwal Pelajaran Semester Genap', 'date' => '12 Nov 2025', 'desc' => 'Terdapat perubahan jadwal pelajaran untuk beberapa kelas. Mohon memeriksa jadwal baru yang telah ditempel di papan pengumuman.'],
    ['title' => 'Pembayaran SPP Bulan Desember', 'date' => '10 Nov 2025', 'desc' => 'Kepada seluruh wali murid, kami mengingatkan untuk melakukan pembayaran SPP bulan Desember paling lambat tanggal 10 Desember 2025.'],
    ['title' => 'Kegiatan Donor Darah Sekolah', 'date' => '8 Nov 2025', 'desc' => 'Sekolah akan mengadakan kegiatan donor darah bekerjasama dengan PMI pada tanggal 25 November 2025. Partisipasi sangat diharapkan.'],
    // Card ke-7 dan seterusnya (Hidden by default)
    ['title' => 'Lomba Karya Ilmiah Remaja (KIR)', 'date' => '5 Nov 2025', 'desc' => 'Pendaftaran lomba KIR tingkat sekolah sudah dibuka. Batas akhir pengumpulan karya pada tanggal 30 November 2025.'],
    ['title' => 'Pelaksanaan Upacara Hari Guru Nasional', 'date' => '25 Okt 2025', 'desc' => 'Upacara Hari Guru Nasional akan dilaksanakan pada tanggal 25 November 2025. Seluruh siswa dan guru wajib hadir.'],
    ['title' => 'Rapat Orang Tua Murid Kelas X', 'date' => '20 Okt 2025', 'desc' => 'Diadakan rapat wali murid kelas X untuk membahas persiapan semester baru. Dimohon kehadirannya di aula sekolah.'],
    ['title' => 'Pengumuman Beasiswa Pendidikan', 'date' => '15 Okt 2025', 'desc' => 'Telah dibuka pendaftaran beasiswa pendidikan untuk siswa berprestasi dan kurang mampu. Segera daftarkan diri Anda!'],
];
?>

<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');

    * {
        font-family: 'Inter', sans-serif;
    }

    /* Warna biru utama untuk tema */
    .hero-gradient {
        background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
    }

    /* Card dengan border sederhana dan efek hover */
    .pengumuman-card {
        transition: all 0.3s ease;
        border: 1px solid #e5e7eb;
        /* gray-200 */
    }

    .pengumuman-card:hover {
        border-color: #1e3a8a;
        /* blue-500 */
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.1);
        transform: translateY(-2px);
    }

    /* Hover biru untuk judul */
    .title-hover-blue:hover {
        color: #1e3a8a;
        /* blue-500 */
    }

    /* Utilitas untuk membatasi baris deskripsi (Opsional, untuk konsistensi) */
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
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
                <i class="fas fa-bullhorn mr-3"></i>Pusat Informasi & Pengumuman
            </h1>
            <p class="text-lg text-white/90 max-w-2xl mx-auto">
                Temukan semua berita dan informasi penting terbaru dari sekolah
            </p>
        </div>
    </div>
</div>

<!-- Main Content Section -->
<section class="bg-gray-50 py-12">
    <div class="container mx-auto px-4">

        <!-- Search Bar Sederhana -->
        <div class="max-w-4xl mx-auto mb-10">
            <div class="bg-white rounded-xl shadow-lg p-4">
                <div class="relative">
                    <i class="fas fa-search absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                    <input type="text"
                        id="searchInput"
                        placeholder="Cari pengumuman berdasarkan judul atau isi..."
                        class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:border-blue-500 transition focus:outline-none focus:ring-2 focus:ring-blue-200">
                </div>
            </div>
        </div>

        <!-- Pengumuman Grid -->
        <div class="max-w-6xl mx-auto">
            <div id="pengumumanContainer" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php foreach ($announcements as $index => $announcement): ?>
                    <?php
                    $is_hidden = $index >= 6 ? 'hidden' : '';
                    // Tentukan warna ikon berdasarkan urgency (simulasi, tanpa BE)
                    $icon_color = ($index < 2) ? 'text-red-500' : 'text-blue-500';
                    ?>

                    <!-- Card Pengumuman -->
                    <article id="card-<?= $index ?>" class="pengumuman-card bg-white rounded-xl overflow-hidden flex flex-col <?= $is_hidden ?>"
                        data-title="<?= htmlspecialchars($announcement['title']) ?>"
                        data-content="<?= htmlspecialchars($announcement['desc']) ?>">

                        <a href="/pengumuman/detail-<?= $index ?>" class="p-6 flex-grow flex flex-col">

                            <!-- Header seperti di gambar referensi (Tanggal) -->
                            <div class="flex items-center gap-3 mb-4">
                                <span class="text-sm font-medium px-3 py-1 rounded-full bg-blue-100 text-blue-600">
                                    <i class="far fa-calendar-alt mr-2"></i><?= $announcement['date'] ?>
                                </span>
                            </div>

                            <!-- Title -->
                            <h3 class="text-xl font-bold text-gray-800 mb-3 title-hover-blue transition">
                                <?= $announcement['title'] ?>
                            </h3>

                            <!-- Description -->
                            <p class="text-gray-600 mb-4 text-sm line-clamp-2">
                                <?= $announcement['desc'] ?>
                            </p>

                            <!-- Baca Selengkapnya (Seperti di gambar referensi) -->
                            <div class="mt-auto pt-2">
                                <span class="inline-flex items-center text-sm font-semibold text-blue-500 hover:text-blue-700 transition">
                                    <i class="fas fa-arrow-right mr-2 text-xs"></i>
                                    BACA SELENGKAPNYA
                                </span>
                            </div>
                        </a>
                    </article>
                <?php endforeach; ?>
            </div>

            <!-- Tombol Tampilkan Lainnya -->
            <div class="text-center mt-12">
                <button id="showMoreBtn" onclick="toggleVisibility()"
                    class="glow-button overflow-hidden px-8 py-3 bg-blue-600 text-white font-semibold rounded-full hover:bg-blue-700">
                    Tampilkan Lainnya
                </button>
            </div>

            <!-- No Results Message -->
            <div id="noResults" class="hidden text-center py-12">
                <i class="fas fa-search text-gray-300 text-6xl mb-4"></i>
                <h3 class="text-xl font-bold text-gray-600 mb-2">Tidak Ada Pengumuman Ditemukan</h3>
                <p class="text-gray-500">Coba ubah kata kunci pencarian Anda.</p>
            </div>
        </div>

    </div>
</section>

<!-- Script untuk Show More dan Search -->
<script>
    const MAX_INITIAL_CARDS = 6;
    const cards = document.querySelectorAll('.pengumuman-card');
    const showMoreBtn = document.getElementById('showMoreBtn');
    const noResults = document.getElementById('noResults');

    // --- 1. Logika Tampilkan Lainnya (Show More) ---

    function initializeVisibility() {
        let hiddenCount = 0;
        cards.forEach((card, index) => {
            // Sembunyikan jika index >= MAX_INITIAL_CARDS
            if (index >= MAX_INITIAL_CARDS) {
                card.classList.add('hidden');
                hiddenCount++;
            } else {
                card.classList.remove('hidden');
            }
        });

        // Tampilkan tombol hanya jika ada kartu yang tersembunyi
        if (hiddenCount > 0) {
            showMoreBtn.classList.remove('hidden');
            showMoreBtn.querySelector('span').textContent = `Tampilkan Lainnya (${hiddenCount})`;
        } else {
            showMoreBtn.classList.add('hidden');
        }
    }

    function toggleVisibility() {
        let hiddenCount = 0;
        let isFullyShown = true;

        cards.forEach(card => {
            // Jika card tersembunyi (hidden by default atau oleh search), tampilkan
            if (card.style.display !== 'none') { // Hanya pertimbangkan card yang tidak di-hide oleh search
                if (card.classList.contains('hidden')) {
                    card.classList.remove('hidden');
                    isFullyShown = false;
                } else if (card.getAttribute('data-initial-hidden') === 'true') {
                    // Ini mungkin tidak diperlukan lagi jika kita hanya menggunakan hidden class
                }
            }
        });

        // Setelah semua ditampilkan, sembunyikan tombol
        showMoreBtn.classList.add('hidden');
    }

    // --- 2. Logika Pencarian (Search) ---

    document.getElementById('searchInput').addEventListener('input', function(e) {
        const searchTerm = e.target.value.toLowerCase().trim();
        let visibleCount = 0;

        cards.forEach(card => {
            const title = card.getAttribute('data-title').toLowerCase();
            const content = card.getAttribute('data-content').toLowerCase();

            const matchesSearch = title.includes(searchTerm) || content.includes(searchTerm);

            if (matchesSearch) {
                // Tampilkan card, dan hapus kelas 'hidden' untuk memastikan ia terlihat
                card.style.display = 'block';
                card.classList.remove('hidden');
                visibleCount++;
            } else {
                // Sembunyikan card
                card.style.display = 'none';
            }
        });

        // Periksa apakah tombol Show More harus ditampilkan.
        // Tombol Show More hanya berguna ketika tidak ada pencarian (searchTerm kosong)
        if (searchTerm === '') {
            initializeVisibility(); // Re-initialize visibility to enforce the 6-card limit
            showMoreBtn.classList.toggle('hidden', visibleCount <= MAX_INITIAL_CARDS);
        } else {
            // Jika sedang mencari, tombol Show More harus di-hide
            showMoreBtn.classList.add('hidden');
        }

        // Tampilkan/sembunyikan pesan "No Results"
        noResults.classList.toggle('hidden', visibleCount > 0);
    });

    // --- 3. Inisialisasi pada saat DOMContentLoaded ---
    document.addEventListener('DOMContentLoaded', initializeVisibility);
</script>

<?php
include '../src/includes/footer.php';
?>