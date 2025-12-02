<?php
$page_title = 'Artikel & Jurnal';
include '../src/includes/header.php';

// Data artikel (sama seperti sebelumnya)
$articles = [
    [
        'id' => 1,
        'title' => 'Berdzikir dengan Ikhlas',
        'author' => 'Kumara Adji Kusuma',
        'date' => '22 Nov 2025',
        'read_time' => '3 menit',
        'category' => 'Keagamaan',
        'image' => 'https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8?w=800&h=600&fit=crop',
        'desc' => 'Dzikir adalah salah satu amalan yang sangat dianjurkan dalam Islam. Namun, dzikir yang dilakukan dengan ikhlas akan memberikan keberkahan yang luar biasa.'
    ],
    [
        'id' => 2,
        'title' => 'Ketika Berbuat Salah Terasa Aneh',
        'author' => 'Ahmad Fauzi',
        'date' => '20 Nov 2025',
        'read_time' => '5 menit',
        'category' => 'Kehidupan',
        'image' => 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=800&h=600&fit=crop',
        'desc' => 'Perasaan tidak nyaman saat berbuat salah adalah tanda hati nurani yang masih hidup. Ini adalah nikmat Allah yang harus kita syukuri.'
    ],
    [
        'id' => 3,
        'title' => 'Puasa Melawan Angkuh Diri',
        'author' => 'Haedir Nashir',
        'date' => '18 Nov 2025',
        'read_time' => '4 menit',
        'category' => 'Keagamaan',
        'image' => 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?w=800&h=600&fit=crop',
        'desc' => 'Puasa bukan hanya menahan lapar dan haus, tetapi juga menahan hawa nafsu dan sifat angkuh yang ada dalam diri kita.'
    ],
    [
        'id' => 4,
        'title' => 'Islam, Muhammadiyah, dan Seni',
        'author' => 'Dr. Syamsul Arifin',
        'date' => '15 Nov 2025',
        'read_time' => '6 menit',
        'category' => 'Budaya',
        'image' => 'https://images.unsplash.com/photo-1519452635265-7b1fbfd1e4e0?w=800&h=600&fit=crop',
        'desc' => 'Seni dalam perspektif Islam dan Muhammadiyah memiliki peran penting dalam dakwah dan pembentukan karakter generasi muda.'
    ],
    [
        'id' => 5,
        'title' => 'Pentingnya Literasi Digital di Era Modern',
        'author' => 'Siti Nurhaliza, M.Pd',
        'date' => '12 Nov 2025',
        'read_time' => '7 menit',
        'category' => 'Pendidikan',
        'image' => 'https://images.unsplash.com/photo-1488190211105-8b0e65b80b4e?w=800&h=600&fit=crop',
        'desc' => 'Di era digital ini, literasi digital menjadi keterampilan wajib yang harus dimiliki siswa untuk menghadapi tantangan masa depan.'
    ],
    [
        'id' => 6,
        'title' => 'Membangun Karakter Melalui Kegiatan Ekstrakurikuler',
        'author' => 'Budi Santoso, S.Pd',
        'date' => '10 Nov 2025',
        'read_time' => '5 menit',
        'category' => 'Pendidikan',
        'image' => 'https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?w=800&h=600&fit=crop',
        'desc' => 'Kegiatan ekstrakurikuler memiliki peran vital dalam membentuk karakter dan soft skill siswa yang tidak bisa didapat di kelas.'
    ],
    // Card ke-7 dan seterusnya (Hidden by default)
    [
        'id' => 7,
        'title' => 'Teknologi AI dalam Pendidikan',
        'author' => 'Dr. Andi Prasetyo',
        'date' => '8 Nov 2025',
        'read_time' => '8 menit',
        'category' => 'Teknologi',
        'image' => 'https://images.unsplash.com/photo-1677442136019-21780ecad995?w=800&h=600&fit=crop',
        'desc' => 'Artificial Intelligence membawa revolusi baru dalam dunia pendidikan, membuat pembelajaran lebih personal dan efektif.'
    ],
    [
        'id' => 8,
        'title' => 'Prestasi Siswa dalam Olimpiade Sains Nasional',
        'author' => 'Redaksi',
        'date' => '5 Nov 2025',
        'read_time' => '4 menit',
        'category' => 'Prestasi',
        'image' => 'https://images.unsplash.com/photo-1523580494863-6f3031224c94?w=800&h=600&fit=crop',
        'desc' => 'Siswa SMA Muhammadiyah 3 Yogyakarta kembali menorehkan prestasi gemilang di ajang Olimpiade Sains Nasional 2025.'
    ],
    [
        'id' => 9,
        'title' => 'Kiat Sukses Menghadapi Ujian Nasional',
        'author' => 'Muhammad Rizki, S.Pd',
        'date' => '2 Nov 2025',
        'read_time' => '6 menit',
        'category' => 'Tips',
        'image' => 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?w=800&h=600&fit=crop',
        'desc' => 'Tips dan strategi jitu untuk menghadapi ujian nasional dengan percaya diri dan meraih hasil maksimal.'
    ],
    [
        'id' => 10,  
        'title' => 'Program Beasiswa untuk Siswa Berprestasi',
        'author' => 'Tim Akademik',
        'date' => '28 Okt 2025',
        'read_time' => '5 menit',
        'category' => 'Info',
        'image' => 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=800&h=600&fit=crop',
        'desc' => 'Sekolah membuka program beasiswa penuh untuk siswa berprestasi akademik maupun non-akademik tahun ajaran 2025/2026.'
    ],
];
?>

<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
    .artikel-card {
        transition: all 0.3s ease;
        border: 1px solid #e5e7eb;
        height: 100%;
        /* Tambahkan ini untuk konsistensi tinggi */
    }

    .artikel-card:hover {
        border-color: #3b82f6;
        box-shadow: 0 10px 25px -5px rgba(59, 130, 246, 0.15);
        transform: translateY(-4px);
    }

    .artikel-card img {
        transition: transform 0.3s ease;
    }

    .artikel-card:hover img {
        transform: scale(1.05);
    }

    .title-hover-blue:hover {
        color: #3b82f6;
    }

    /* Badge category colors (tetap sama) */
    .badge-keagamaan {
        background: #dbeafe;
        color: #1e40af;
    }

    .badge-kehidupan {
        background: #fef3c7;
        color: #92400e;
    }

    .badge-budaya {
        background: #f3e8ff;
        color: #6b21a8;
    }

    .badge-pendidikan {
        background: #dcfce7;
        color: #166534;
    }

    .badge-teknologi {
        background: #fce7f3;
        color: #9f1239;
    }

    .badge-prestasi {
        background: #fed7aa;
        color: #9a3412;
    }

    .badge-tips {
        background: #cffafe;
        color: #0e7490;
    }

    .badge-info {
        background: #e0e7ff;
        color: #3730a3;
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

    /* Fix untuk card height consistency */
    .card-content {
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .card-body {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .card-footer {
        margin-top: auto;
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
            <span class="text-white font-medium">Artikel & Jurnal</span>
        </div>

        <div class="text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                <i class="fas fa-newspaper mr-3"></i>Artikel & Jurnal
            </h1>
            <p class="text-lg text-white/90 max-w-2xl mx-auto">
                Baca artikel inspiratif, tips pendidikan, dan jurnal keagamaan dari penulis terbaik
            </p>
        </div>
    </div>
</div>

<!-- Main Content Section -->
<section class="bg-gray-50 py-12">
    <div class="container mx-auto px-4">

        <!-- Search Bar & Filter -->
        <div class="max-w-4xl mx-auto mb-10">
            <div class="bg-white rounded-xl shadow-lg p-4">
                <div class="flex flex-col md:flex-row gap-4">
                    <!-- Search -->
                    <div class="relative flex-grow">
                        <i class="fas fa-search absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        <input type="text"
                            id="searchInput"
                            placeholder="Cari artikel berdasarkan judul, penulis, atau isi..."
                            class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:border-blue-500 transition focus:outline-none focus:ring-2 focus:ring-blue-200">
                    </div>
                    <!-- Filter by Category -->
                    <select id="filterCategory" class="px-4 py-3 border border-gray-300 rounded-lg focus:border-blue-500 transition focus:outline-none focus:ring-2 focus:ring-blue-200">
                        <option value="">Semua Kategori</option>
                        <option value="Keagamaan">Keagamaan</option>
                        <option value="Kehidupan">Kehidupan</option>
                        <option value="Budaya">Budaya</option>
                        <option value="Pendidikan">Pendidikan</option>
                        <option value="Teknologi">Teknologi</option>
                        <option value="Prestasi">Prestasi</option>
                        <option value="Tips">Tips</option>
                        <option value="Info">Info</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Artikel Grid -->
        <div class="max-w-6xl mx-auto">
            <div id="artikelContainer" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php foreach ($articles as $index => $article): ?>
                    <?php
                    $is_hidden = $index >= 6 ? 'hidden more-card' : 'initial-card';
                    $badge_class = 'badge-' . strtolower($article['category']);
                    ?>

                    <!-- Card Artikel - PERBAIKI STRUKTUR INI -->
                    <article id="card-<?= $index ?>" class="artikel-card bg-white rounded-xl overflow-hidden <?= $is_hidden ?>"
                        data-title="<?= htmlspecialchars($article['title']) ?>"
                        data-author="<?= htmlspecialchars($article['author']) ?>"
                        data-category="<?= htmlspecialchars($article['category']) ?>"
                        data-content="<?= htmlspecialchars($article['desc']) ?>">

                        <div class="card-content">
                            <!-- Image -->
                            <div class="overflow-hidden h-48">
                                <img src="<?= $article['image'] ?>"
                                    alt="<?= htmlspecialchars($article['title']) ?>"
                                    class="w-full h-full object-cover">
                            </div>

                            <div class="p-6 card-body">
                                <!-- Category Badge & Date -->
                                <div class="flex items-center justify-between mb-3">
                                    <span class="text-xs font-semibold px-3 py-1 rounded-full <?= $badge_class ?>">
                                        <?= $article['category'] ?>
                                    </span>
                                    <span class="text-xs text-gray-500">
                                        <i class="far fa-calendar-alt mr-1"></i><?= $article['date'] ?>
                                    </span>
                                </div>

                                <!-- Title -->
                                <h3 class="text-xl font-bold text-gray-800 mb-3 title-hover-blue transition line-clamp-2">
                                    <a href="/artikel/detail-<?= $index ?>" class="hover:text-blue-600">
                                        <?= $article['title'] ?>
                                    </a>
                                </h3>

                                <!-- Description -->
                                <p class="text-gray-600 mb-4 text-sm line-clamp-3 flex-grow">
                                    <?= $article['desc'] ?>
                                </p>

                                <!-- Author & Read Time -->
                                <div class="flex items-center justify-between text-xs text-gray-500 mb-4">
                                    <span>
                                        <i class="fas fa-user-circle mr-1"></i><?= $article['author'] ?>
                                    </span>
                                    <span>
                                        <i class="far fa-clock mr-1"></i><?= $article['read_time'] ?> baca
                                    </span>
                                </div>

                                <!-- Baca Selengkapnya -->
                                <div class="card-footer pt-2">
                                    <a href="/Template-WebSekolah/pages/artikel-detail.php?id=<?= $article['id'] ?>"
                                        class="inline-flex items-center text-sm font-semibold text-blue-500 hover:text-blue-700 transition">
                                        <i class="fas fa-arrow-right mr-2 text-xs"></i>
                                        BACA SELENGKAPNYA
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>

            <div class="text-center mt-12">
                <button id="showMoreBtn" onclick="toggleVisibility()"
                    class="glow-button overflow-hidden px-8 py-3 bg-blue-600 text-white font-semibold rounded-full hover:bg-blue-700 transition">
                    <span class="relative z-10">Tampilkan Lainnya</span>
                </button>
            </div>

            <!-- No Results Message -->
            <div id="noResults" class="hidden text-center py-12">
                <i class="fas fa-search text-gray-300 text-6xl mb-4"></i>
                <h3 class="text-xl font-bold text-gray-600 mb-2">Tidak Ada Artikel Ditemukan</h3>
                <p class="text-gray-500">Coba ubah kata kunci pencarian atau filter kategori Anda.</p>
            </div>
        </div>
    </div>
</section>

<!-- Script untuk Show More, Search, dan Filter -->
<script>
    const MAX_INITIAL_CARDS = 6;
    let isShowingAll = false;

    document.addEventListener('DOMContentLoaded', function() {
        const allCards = document.querySelectorAll('.artikel-card');
        const showMoreBtn = document.getElementById('showMoreBtn');
        const showMoreText = showMoreBtn.querySelector('span');
        const noResults = document.getElementById('noResults');
        const searchInput = document.getElementById('searchInput');
        const filterCategory = document.getElementById('filterCategory');

        // INITIALIZE
        allCards.forEach((card, index) => {
            if (index >= MAX_INITIAL_CARDS) {
                card.classList.add('more-card', 'hidden');
                card.style.display = 'none';
            } else {
                card.classList.add('initial-card');
            }
        });

        const hasMoreCards = allCards.length > MAX_INITIAL_CARDS;
        showMoreBtn.style.display = hasMoreCards ? '' : 'none';

        // TOGGLE FUNCTION
        function toggleVisibility() {
            console.log('Toggle clicked! Current state:', isShowingAll); // Debug

            isShowingAll = !isShowingAll;

            const moreCards = document.querySelectorAll('.more-card');
            console.log('More cards found:', moreCards.length); // Debug

            moreCards.forEach(card => {
                if (isShowingAll) {
                    card.classList.remove('hidden');
                    card.style.display = '';
                } else {
                    card.classList.add('hidden');
                    card.style.display = 'none';
                }
            });

            showMoreText.textContent = isShowingAll ? 'Tampilkan Lebih Sedikit' : 'Tampilkan Lainnya';

            if (!isShowingAll) {
                showMoreBtn.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });
            }
        }

        // FILTER FUNCTION
        function filterArticles() {
            const searchTerm = searchInput.value.toLowerCase().trim();
            const selectedCategory = filterCategory.value;
            let visibleCount = 0;
            let hasFilteredMoreCards = false;

            const isFiltering = searchTerm !== '' || selectedCategory !== '';

            allCards.forEach((card, index) => {
                const title = card.getAttribute('data-title').toLowerCase();
                const author = card.getAttribute('data-author').toLowerCase();
                const content = card.getAttribute('data-content').toLowerCase();
                const category = card.getAttribute('data-category');

                const matchesSearch = title.includes(searchTerm) || author.includes(searchTerm) || content.includes(searchTerm);
                const matchesCategory = selectedCategory === '' || category === selectedCategory;

                if (matchesSearch && matchesCategory) {
                    visibleCount++;

                    if (isFiltering) {
                        card.style.display = '';
                        card.classList.remove('hidden');
                    } else {
                        if (index >= MAX_INITIAL_CARDS) {
                            hasFilteredMoreCards = true;
                            if (isShowingAll) {
                                card.style.display = '';
                                card.classList.remove('hidden');
                            } else {
                                card.style.display = 'none';
                                card.classList.add('hidden');
                            }
                        } else {
                            card.style.display = '';
                            card.classList.remove('hidden');
                        }
                    }
                } else {
                    card.style.display = 'none';
                }
            });

            if (isFiltering) {
                showMoreBtn.style.display = 'none';
            } else {
                showMoreBtn.style.display = hasFilteredMoreCards ? '' : 'none';
            }

            noResults.classList.toggle('hidden', visibleCount > 0);
        }

        // EVENT LISTENERS
        searchInput.addEventListener('input', filterArticles);
        filterCategory.addEventListener('change', filterArticles);
        showMoreBtn.addEventListener('click', toggleVisibility);

        console.log('Script loaded successfully!'); // Debug
    });
</script>
<?php
include '../src/includes/footer.php';
?>