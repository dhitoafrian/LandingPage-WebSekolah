<?php 
    $page_title = 'Berita Terkini';
    include '../src/includes/header.php';
    include '../pages/banner.php';

    // Data dummy berita
    $all_berita = [
        [
            'id' => 1,
            'title' => 'Peluncuran Program Digitalisasi Pemerintah 2025',
            'description' => 'Pemerintah meluncurkan program digitalisasi layanan publik untuk meningkatkan efisiensi dan transparansi pelayanan kepada masyarakat.',
            'image' => 'https://picsum.photos/seed/berita1/800/600',
            'date' => '15 November 2025',
            'content' => 'Program digitalisasi ini mencakup berbagai sektor termasuk administrasi kependudukan, perizinan usaha, dan layanan kesehatan. Diharapkan program ini dapat mempermudah akses masyarakat terhadap layanan publik dan mengurangi birokrasi yang berbelit.'
        ],
        [
            'id' => 2,
            'title' => 'Peningkatan Infrastruktur Jalan Raya di Wilayah Depok',
            'description' => 'Pembangunan dan perbaikan infrastruktur jalan raya terus dilakukan untuk mendukung mobilitas masyarakat dan pertumbuhan ekonomi daerah.',
            'image' => 'https://picsum.photos/seed/berita2/800/600',
            'date' => '12 November 2025',
            'content' => 'Proyek infrastruktur ini meliputi pelebaran jalan utama, pembangunan jembatan baru, dan perbaikan jalan rusak di berbagai kecamatan. Total anggaran yang dialokasikan mencapai 50 miliar rupiah.'
        ],
        [
            'id' => 3,
            'title' => 'Kampanye Kesehatan Masyarakat: Vaksinasi Gratis',
            'description' => 'Dinas Kesehatan mengadakan program vaksinasi gratis untuk seluruh masyarakat sebagai upaya pencegahan penyakit menular.',
            'image' => 'https://picsum.photos/seed/berita3/800/600',
            'date' => '10 November 2025',
            'content' => 'Program vaksinasi gratis ini mencakup vaksin influenza, hepatitis, dan vaksin dasar untuk anak-anak. Kegiatan akan dilaksanakan di puskesmas dan pos pelayanan kesehatan di seluruh wilayah.'
        ],
        [
            'id' => 4,
            'title' => 'Pembukaan Taman Kota Baru untuk Ruang Publik',
            'description' => 'Pemerintah kota meresmikan taman kota baru yang dilengkapi dengan fasilitas olahraga dan area bermain anak untuk meningkatkan kualitas hidup warga.',
            'image' => 'https://picsum.photos/seed/berita4/800/600',
            'date' => '8 November 2025',
            'content' => 'Taman seluas 5 hektar ini dilengkapi dengan jogging track, area bermain anak, lapangan basket, dan zona hijau. Taman ini diharapkan menjadi ruang publik yang nyaman untuk aktivitas keluarga.'
        ],
        [
            'id' => 5,
            'title' => 'Program Beasiswa Pendidikan untuk Siswa Berprestasi',
            'description' => 'Pemerintah daerah memberikan beasiswa penuh kepada 100 siswa berprestasi dari keluarga kurang mampu untuk melanjutkan pendidikan.',
            'image' => 'https://picsum.photos/seed/berita5/800/600',
            'date' => '5 November 2025',
            'content' => 'Beasiswa ini mencakup biaya pendidikan, buku, dan uang saku bulanan. Seleksi dilakukan berdasarkan prestasi akademik dan kondisi ekonomi keluarga.'
        ],
        [
            'id' => 6,
            'title' => 'Pelatihan Kewirausahaan untuk UMKM Lokal',
            'description' => 'Dinas Koperasi dan UMKM menyelenggarakan pelatihan kewirausahaan untuk meningkatkan kapasitas pelaku usaha mikro, kecil, dan menengah.',
            'image' => 'https://picsum.photos/seed/berita6/800/600',
            'date' => '3 November 2025',
            'content' => 'Pelatihan ini menghadirkan praktisi bisnis dan mentor berpengalaman yang akan membimbing UMKM dalam pengembangan produk, pemasaran digital, dan manajemen keuangan.'
        ],
        [
            'id' => 7,
            'title' => 'Festival Budaya Daerah Meriahkan Akhir Tahun',
            'description' => 'Festival budaya daerah akan digelar dengan menampilkan seni tradisional, kuliner khas, dan pameran kerajinan lokal.',
            'image' => 'https://picsum.photos/seed/berita7/800/600',
            'date' => '1 November 2025',
            'content' => 'Festival ini akan berlangsung selama 3 hari dengan berbagai pertunjukan seni, lomba tradisional, dan bazar kuliner. Acara ini gratis dan terbuka untuk umum.'
        ],
        [
            'id' => 8,
            'title' => 'Penghargaan Daerah Terbersih dan Terhijau',
            'description' => 'Wilayah ini meraih penghargaan sebagai daerah terbersih dan terhijau tingkat nasional berkat komitmen dalam pengelolaan lingkungan.',
            'image' => 'https://picsum.photos/seed/berita8/800/600',
            'date' => '28 Oktober 2025',
            'content' => 'Penghargaan ini diraih berkat program bank sampah, penanaman pohon massal, dan kampanye pengurangan plastik yang melibatkan seluruh lapisan masyarakat.'
        ],
        [
            'id' => 9,
            'title' => 'Modernisasi Pasar Tradisional dengan Fasilitas Baru',
            'description' => 'Pasar tradisional direvitalisasi dengan fasilitas modern namun tetap mempertahankan karakteristik pasar tradisional yang khas.',
            'image' => 'https://picsum.photos/seed/berita9/800/600',
            'date' => '25 Oktober 2025',
            'content' => 'Revitalisasi meliputi perbaikan kios, sistem drainase, toilet bersih, area parkir, dan sistem pembayaran digital untuk kemudahan transaksi.'
        ]
    ];

    // Konfigurasi pagination
    $items_per_page = 6;
    $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $search = isset($_GET['search']) ? trim($_GET['search']) : '';

    // Filter berdasarkan search
    $filtered_berita = $all_berita;
    if (!empty($search)) {
        $filtered_berita = array_filter($all_berita, function($berita) use ($search) {
            return stripos($berita['title'], $search) !== false;
        });
    }

    // Hitung total pages
    $total_items = count($filtered_berita);
    $total_pages = ceil($total_items / $items_per_page);
    $current_page = max(1, min($current_page, $total_pages));

    // Get items untuk halaman saat ini
    $offset = ($current_page - 1) * $items_per_page;
    $current_berita = array_slice($filtered_berita, $offset, $items_per_page);
?>

<script src="https://cdn.tailwindcss.com"></script>

<div class="min-h-screen bg-gray-50 py-8">
    <div class="container mx-auto px-4">
        <!-- Search Box -->
        <div class="mb-8">
            <form method="GET" action="" class="max-w-2xl mx-auto">
                <div class="flex gap-2">
                    <input 
                        type="text" 
                        name="search" 
                        value="<?= htmlspecialchars($search) ?>"
                        placeholder="Cari berita berdasarkan judul..." 
                        class="flex-1 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    >
                    <button 
                        type="submit" 
                        class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-200 font-semibold"
                    >
                        Cari
                    </button>
                    <?php if (!empty($search)): ?>
                        <a 
                            href="berita.php" 
                            class="px-6 py-3 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition duration-200 font-semibold"
                        >
                            Reset
                        </a>
                    <?php endif; ?>
                </div>
            </form>
            
            <?php if (!empty($search)): ?>
                <p class="text-center mt-4 text-gray-600">
                    Ditemukan <?= $total_items ?> berita untuk "<strong><?= htmlspecialchars($search) ?></strong>"
                </p>
            <?php endif; ?>
        </div>

        <!-- Berita Cards -->
        <?php if (empty($current_berita)): ?>
            <div class="text-center py-16">
                <svg class="mx-auto h-24 w-24 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <h3 class="mt-4 text-xl font-semibold text-gray-700">Tidak ada berita ditemukan</h3>
                <p class="mt-2 text-gray-500">Coba gunakan kata kunci lain</p>
            </div>
        <?php else: ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php foreach ($current_berita as $berita): ?>
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                        <img 
                            src="<?= $berita['image'] ?>" 
                            alt="<?= htmlspecialchars($berita['title']) ?>"
                            class="w-full h-48 object-cover"
                        >
                        <div class="p-6">
                            <div class="text-sm text-gray-500 mb-2">
                                📅 <?= $berita['date'] ?>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3 line-clamp-2">
                                <?= htmlspecialchars($berita['title']) ?>
                            </h3>
                            <p class="text-gray-600 mb-4 line-clamp-3">
                                <?= htmlspecialchars($berita['description']) ?>
                            </p>
                            <a 
                                href="berita-detail.php?id=<?= $berita['id'] ?>" 
                                class="inline-block px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-200 font-semibold"
                            >
                                Baca Selengkapnya →
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Pagination -->
            <?php if ($total_pages > 1): ?>
                <div class="mt-12 flex justify-center items-center gap-2">
                    <!-- Previous Button -->
                    <?php if ($current_page > 1): ?>
                        <a 
                            href="?page=<?= $current_page - 1 ?><?= !empty($search) ? '&search=' . urlencode($search) : '' ?>" 
                            class="px-4 py-2 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-200"
                        >
                            ← Sebelumnya
                        </a>
                    <?php endif; ?>

                    <!-- Page Numbers -->
                    <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                        <?php if ($i == $current_page): ?>
                            <span class="px-4 py-2 bg-blue-600 text-white rounded-lg font-semibold">
                                <?= $i ?>
                            </span>
                        <?php else: ?>
                            <a 
                                href="?page=<?= $i ?><?= !empty($search) ? '&search=' . urlencode($search) : '' ?>" 
                                class="px-4 py-2 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-200"
                            >
                                <?= $i ?>
                            </a>
                        <?php endif; ?>
                    <?php endfor; ?>

                    <!-- Next Button -->
                    <?php if ($current_page < $total_pages): ?>
                        <a 
                            href="?page=<?= $current_page + 1 ?><?= !empty($search) ? '&search=' . urlencode($search) : '' ?>" 
                            class="px-4 py-2 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-200"
                        >
                            Selanjutnya →
                        </a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</div>

<style>
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

<?php 
include '../src/includes/footer.php';
?>
