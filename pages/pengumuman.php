<?php
$page_title = 'Pengumuman Sekolah';
include '../src/includes/header.php';

$announcements = [
    ['id' => 1, 'title' => 'Pengumuman Hasil PPDB Gelombang 1', 'date' => '19 Nov 2025', 'desc' => 'Hasil seleksi PPDB Gelombang 1 Tahun Ajaran 2025/2026 telah diumumkan. Peserta yang diterima diharapkan segera melakukan daftar ulang.'],
    ['id' => 2, 'title' => 'Jadwal Ujian Akhir Semester Genap', 'date' => '18 Nov 2025', 'desc' => 'Informasi jadwal pelaksanaan Ujian Akhir Semester Genap untuk seluruh tingkat. Ujian akan dilaksanakan mulai tanggal 2-9 Desember 2025.'],
    ['id' => 3, 'title' => 'Libur Semester Genap 2024/2025', 'date' => '15 Nov 2025', 'desc' => 'Sekolah akan libur semester genap mulai tanggal 15-31 Desember 2025. Masuk kembali pada tanggal 2 Januari 2026.'],
    ['id' => 4, 'title' => 'Perubahan Jadwal Pelajaran Semester Genap', 'date' => '12 Nov 2025', 'desc' => 'Terdapat perubahan jadwal pelajaran untuk beberapa kelas. Mohon memeriksa jadwal baru yang telah ditempel di papan pengumuman.'],
    ['id' => 5, 'title' => 'Pembayaran SPP Bulan Desember', 'date' => '10 Nov 2025', 'desc' => 'Kepada seluruh wali murid, kami mengingatkan untuk melakukan pembayaran SPP bulan Desember paling lambat tanggal 10 Desember 2025.'],
    ['id' => 6, 'title' => 'Kegiatan Donor Darah Sekolah', 'date' => '8 Nov 2025', 'desc' => 'Sekolah akan mengadakan kegiatan donor darah bekerjasama dengan PMI pada tanggal 25 November 2025. Partisipasi sangat diharapkan.'],
    ['id' => 7, 'title' => 'Lomba Karya Ilmiah Remaja (KIR)', 'date' => '5 Nov 2025', 'desc' => 'Pendaftaran lomba KIR tingkat sekolah sudah dibuka. Batas akhir pengumpulan karya pada tanggal 30 November 2025.'],
    ['id' => 8, 'title' => 'Pelaksanaan Upacara Hari Guru Nasional', 'date' => '25 Okt 2025', 'desc' => 'Upacara Hari Guru Nasional akan dilaksanakan pada tanggal 25 November 2025. Seluruh siswa dan guru wajib hadir.'],
    ['id' => 9, 'title' => 'Rapat Orang Tua Murid Kelas X', 'date' => '20 Okt 2025', 'desc' => 'Diadakan rapat wali murid kelas X untuk membahas persiapan semester baru. Dimohon kehadirannya di aula sekolah.'],
    ['id' => 10, 'title' => 'Pengumuman Beasiswa Pendidikan', 'date' => '15 Okt 2025', 'desc' => 'Telah dibuka pendaftaran beasiswa pendidikan untuk siswa berprestasi dan kurang mampu. Segera daftarkan diri Anda!'],
];
?>

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
            <a href="/Template-WebSekolah/src/index.php" class="hover:text-white transition">Beranda</a>
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

                        <a href="pengumuman-detail.php?id=<?= $announcement['id'] ?>" class="p-6 flex-grow flex flex-col">

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

            <div class="text-center mt-12 ">
                <button id="showMoreBtn"
                    class="glow-button px-8 py-3 bg-blue-600 text-white font-semibold rounded-full hover:bg-blue-700">
                    <span>Tampilkan Lainnya</span>
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

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const MAX = 6;
        let expanded = false;

        const cards = Array.from(document.querySelectorAll('.pengumuman-card'));
        const showMoreBtn = document.getElementById('showMoreBtn');
        const showMoreText = showMoreBtn.querySelector('span');
        const noResults = document.getElementById('noResults');
        const searchInput = document.getElementById('searchInput');

        const extraCards = cards.slice(MAX);

        // Initialize
        extraCards.forEach(c => c.classList.add('hidden'));
        showMoreBtn.style.display = extraCards.length > 0 ? '' : 'none';

        function updateButtonLabel() {
            showMoreText.textContent = expanded ?
                'Tampilkan Lebih Sedikit' :
                'Tampilkan Lainnya';
        }

        function toggleShow() {
            expanded = !expanded;

            extraCards.forEach(c => {
                if (c.dataset.hidden !== 'true') {
                    c.classList.toggle('hidden', !expanded);
                }
            });

            // 🔥 Scroll hanya saat collapse
            if (!expanded) {
                showMoreBtn.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });
            }

            updateButtonLabel();
        }

        searchInput.addEventListener('input', () => {
            const term = searchInput.value.toLowerCase().trim();
            let visibleCount = 0;

            cards.forEach(card => {
                const title = card.dataset.title.toLowerCase();
                const content = card.dataset.content.toLowerCase();
                const match = title.includes(term) || content.includes(term);

                card.dataset.hidden = match ? 'false' : 'true';
                card.classList.toggle('hidden', !match);

                if (match) {
                    visibleCount++;
                }
            });

            // Show/hide button when searching
            showMoreBtn.style.display =
                term === '' && extraCards.length > 0 ? '' : 'none';

            noResults.classList.toggle('hidden', visibleCount !== 0);
        });

        showMoreBtn.addEventListener('click', toggleShow);

        updateButtonLabel();
    });
</script>


<?php
include '../src/includes/footer.php';
?>