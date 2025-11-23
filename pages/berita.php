<?php
$page_title = 'Berita Terkini';
include '../src/includes/header.php';

// Data dummy berita
$all_berita = [
    [
        'id' => 1,
        'title' => 'Peluncuran Program Digitalisasi Sekolah 2025',
        'description' => 'Sekolah meluncurkan program digitalisasi untuk meningkatkan efisiensi pembelajaran dan administrasi dengan teknologi terkini.',
        'image' => 'https://picsum.photos/seed/berita1/800/600',
        'date' => '15 November 2025',
        'author' => 'Tim Redaksi',
        'views' => 245
    ],
    [
        'id' => 2,
        'title' => 'Siswa SMA Raih Juara 1 Olimpiade Matematika Nasional',
        'description' => 'Prestasi membanggakan diraih siswa kelas XI dalam kompetisi olimpiade matematika tingkat nasional.',
        'image' => 'https://picsum.photos/seed/berita2/800/600',
        'date' => '12 November 2025',
        'author' => 'Humas Sekolah',
        'views' => 189
    ],
    [
        'id' => 3,
        'title' => 'Kegiatan Bakti Sosial Peduli Lingkungan',
        'description' => 'OSIS mengadakan kegiatan bakti sosial pembersihan lingkungan dan penanaman pohon di sekitar sekolah.',
        'image' => 'https://picsum.photos/seed/berita3/800/600',
        'date' => '10 November 2025',
        'author' => 'OSIS',
        'views' => 156
    ],
    [
        'id' => 4,
        'title' => 'Pembukaan Pendaftaran PPDB Tahun Ajaran 2025/2026',
        'description' => 'Informasi lengkap mengenai jadwal, persyaratan, dan tata cara pendaftaran peserta didik baru.',
        'image' => 'https://picsum.photos/seed/berita4/800/600',
        'date' => '8 November 2025',
        'author' => 'Panitia PPDB',
        'views' => 432
    ],
    [
        'id' => 5,
        'title' => 'Workshop Pengembangan Kompetensi Guru Digital',
        'description' => 'Sekolah mengadakan workshop untuk meningkatkan kompetensi guru dalam menggunakan teknologi pembelajaran.',
        'image' => 'https://picsum.photos/seed/berita5/800/600',
        'date' => '5 November 2025',
        'author' => 'Tim Pengembangan',
        'views' => 98
    ],
    [
        'id' => 6,
        'title' => 'Pentas Seni dan Budaya Akhir Semester',
        'description' => 'Siswa menampilkan berbagai pertunjukan seni tradisional dan modern dalam acara pentas seni sekolah.',
        'image' => 'https://picsum.photos/seed/berita6/800/600',
        'date' => '3 November 2025',
        'author' => 'Ekstrakurikuler Seni',
        'views' => 267
    ],
    [
        'id' => 7,
        'title' => 'Tim Basket Sekolah Juara Tournament Antar Sekolah',
        'description' => 'Tim basket putra berhasil meraih juara pertama dalam tournament basket antar sekolah se-Yogyakarta.',
        'image' => 'https://picsum.photos/seed/berita7/800/600',
        'date' => '1 November 2025',
        'author' => 'Pembina Olahraga',
        'views' => 312
    ],
    [
        'id' => 8,
        'title' => 'Pengumuman Libur Semester dan Jadwal UAS',
        'description' => 'Informasi penting mengenai jadwal ujian akhir semester dan libur semester genap tahun ajaran 2024/2025.',
        'image' => 'https://picsum.photos/seed/berita8/800/600',
        'date' => '28 Oktober 2025',
        'author' => 'Kurikulum',
        'views' => 521
    ],
    [
        'id' => 9,
        'title' => 'Kunjungan Industri ke Perusahaan Teknologi',
        'description' => 'Siswa kelas XII melakukan kunjungan industri ke perusahaan teknologi sebagai bagian dari pembelajaran praktis.',
        'image' => 'https://picsum.photos/seed/berita9/800/600',
        'date' => '25 Oktober 2025',
        'author' => 'Guru BK',
        'views' => 178
    ]
];

// Search input
$search = isset($_GET['search']) ? trim($_GET['search']) : '';
$sort   = isset($_GET['sort']) ? $_GET['sort'] : 'newest';

// Filter search
$filtered_berita = $all_berita;
if (!empty($search)) {
    $filtered_berita = array_filter($filtered_berita, function ($berita) use ($search) {
        return stripos($berita['title'], $search) !== false ||
            stripos($berita['description'], $search) !== false;
    });
}

// Sorting
switch ($sort) {
    case 'popular':
        usort($filtered_berita, function ($a, $b) {
            return $b['views'] - $a['views'];
        });
        break;

    case 'title':
        usort($filtered_berita, function ($a, $b) {
            return strcmp($a['title'], $b['title']);
        });
        break;

    case 'newest':
    default:
        break;
}

// FINAL DATA (tidak pakai pagination)
$current_berita = $filtered_berita;
$total_items = count($filtered_berita);
?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

    * {
        font-family: 'Inter', sans-serif;
    }

    .hero-gradient {
        background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
        position: relative;
        overflow: hidden;
    }

    .hero-gradient::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="grid" width="100" height="100" patternUnits="userSpaceOnUse"><path d="M 100 0 L 0 0 0 100" fill="none" stroke="rgba(255,255,255,0.05)" stroke-width="1"/></pattern></defs><rect width="100%" height="100%" fill="url(%23grid)"/></svg>');
        opacity: 0.3;
    }

    .breadcrumb-link {
        transition: all 0.2s ease;
    }

    .breadcrumb-link:hover {
        color: white;
        transform: translateX(2px);
    }

    .card-link {
        transition: all 0.3s ease;
    }

    .card-link:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 24px rgba(30, 58, 138, 0.15);
    }

    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .line-clamp-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>

<section id="berita-section" class="berita-wrapper">
<!-- Hero Section -->
<div class="hero-gradient relative">
    <div class="container mx-auto px-4 py-16 relative z-10">
        <div class="text-white/80 text-sm mb-6">
            <i class="fas fa-home mr-2"></i>
            <a href="/" class="breadcrumb-link hover:text-white">Beranda</a>
            <span class="mx-2">/</span>
            <span class="text-white font-medium">Berita & Informasi</span>
        </div>

        <div class="text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                <i class="fas fa-newspaper mr-3"></i>Berita & Informasi
            </h1>

            <form method="GET" action="" class="max-w-2xl mx-auto">
                <div class="relative">
                    <input
                        type="text"
                        name="search"
                        placeholder="Cari berita..."
                        value="<?= htmlspecialchars($search) ?>"
                        class="w-full px-6 py-4 pr-24 rounded-xl text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-300 shadow-lg">
                    <button
                        type="submit"
                        class="absolute right-2 top-1/2 -translate-y-1/2 px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-semibold transition">
                        <i class="fas fa-search"></i>
                    </button>

                    <?php if (!empty($search)): ?>
                        <a href="?" class="inline-block mt-4 px-4 py-2 bg-white/20 hover:bg-white/30 text-white rounded-lg transition text-sm">
                            <i class="fas fa-times mr-1"></i>Reset
                        </a>
                    <?php endif; ?>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="min-h-screen bg-gray-50 py-12">
    <div class="container mx-auto px-4">

        <!-- Filter section -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8">
            <p class="text-gray-700 font-medium">
                Menampilkan <?= count($current_berita) ?> dari <?= $total_items ?> berita
                <?php if (!empty($search)): ?>
                    untuk "<strong><?= htmlspecialchars($search) ?></strong>"
                <?php endif; ?>
            </p>

            <form method="GET" class="flex items-center gap-2">
                <?php if (!empty($search)): ?>
                    <input type="hidden" name="search" value="<?= htmlspecialchars($search) ?>">
                <?php endif; ?>

                <label class="text-sm font-medium text-gray-700">Urutkan:</label>
                <select
                    name="sort"
                    onchange="this.form.submit()"
                    class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                    <option value="newest" <?= $sort === 'newest' ? 'selected' : '' ?>>Terbaru</option>
                    <option value="popular" <?= $sort === 'popular' ? 'selected' : '' ?>>Terpopuler</option>
                    <option value="title" <?= $sort === 'title' ? 'selected' : '' ?>>A-Z</option>
                </select>
            </form>
        </div>

        <!-- Grid Berita -->
        <?php if (empty($current_berita)): ?>
            <div class="text-center py-20">
                <div class="bg-white rounded-xl p-12 shadow-sm max-w-md mx-auto">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Tidak ada berita ditemukan</h3>
                    <p class="text-gray-600 mb-4">Coba gunakan kata kunci lain</p>
                    <a href="?" class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-semibold transition">
                        <i class="fas fa-redo mr-2"></i>Reset Pencarian
                    </a>
                </div>
            </div>
        <?php else: ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php foreach ($current_berita as $berita): ?>
                    <a href="berita-detail.php?id=<?= $berita['id'] ?>" class="card-link bg-white rounded-xl shadow-sm overflow-hidden block">
                        <div class="relative h-48 overflow-hidden">
                            <img src="<?= $berita['image'] ?>" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <div class="flex items-center gap-4 text-xs text-gray-500 mb-3">
                                <span><i class="far fa-calendar"></i> <?= $berita['date'] ?></span>
                                <span><i class="far fa-eye"></i> <?= $berita['views'] ?></span>
                            </div>

                            <h3 class="text-lg font-bold text-gray-800 mb-2 line-clamp-2 hover:text-blue-600 transition">
                                <?= htmlspecialchars($berita['title']) ?>
                            </h3>

                            <p class="text-gray-600 text-sm line-clamp-3 mb-3">
                                <?= htmlspecialchars($berita['description']) ?>
                            </p>

                            <div class="text-xs text-gray-500 pt-3 border-t border-gray-100">
                                <i class="far fa-user mr-1"></i><?= $berita['author'] ?>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
</section>

<script>
    // Auto scroll ketika halaman selesai dimuat
    window.addEventListener("load", function () {
        const target = document.getElementById("berita-section");
        if (target) {
            target.scrollIntoView({
                behavior: "smooth",
                block: "start"
            });
        }
    });
</script>


<?php include '../src/includes/footer.php'; ?>