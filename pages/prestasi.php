<?php
$page_title = 'Prestasi Sekolah';
include '../src/includes/header.php'; 

$all_prestasi = [
    [
        'id' => 1,
        'tingkat' => 'nasional',
        'tahun' => '2024',
        'kategori' => 'Teknologi',
        'nama' => 'Juara 1 Lomba Robotik Nasional',
        'lokasi_singkat' => 'Jakarta',
        'tanggal_singkat' => 'Desember 2024',
        'image' => 'https://images.unsplash.com/photo-1541339907198-e08756dedf3f?w=800&h=600&fit=crop', 
        'lokasi_lengkap' => 'Jakarta Convention Center',
        'juara' => 'Juara 1',
        'deskripsi' => 'Tim robotik SMK Negeri Indonesia berhasil meraih juara pertama dalam Kompetisi Robotik Nasional 2024. Kompetisi ini diikuti oleh 150 sekolah dari seluruh Indonesia dengan mengusung tema "Smart City Automation".',
        'peserta' => ['Ahmad Fauzi (XII RPL 1)', 'Budi Santoso (XII RPL 2)', 'Citra Dewi (XII RPL 1)']
    ],
    [
        'id' => 2,
        'tingkat' => 'internasional',
        'tahun' => '2024',
        'kategori' => 'Akademik',
        'nama' => 'Medali Perak Olimpiade Matematika',
        'lokasi_singkat' => 'Singapore',
        'tanggal_singkat' => 'November 2024',
        'image' => 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=800&h=600&fit=crop',
        'lokasi_lengkap' => 'Singapore International School',
        'juara' => 'Medali Perak',
        'deskripsi' => 'Siswa terbaik kami meraih medali perak pada International Mathematics Olympiad (IMO) yang diselenggarakan di Singapore. Kompetisi ini diikuti peserta dari 45 negara.',
        'peserta' => ['Dina Marlina (XI IPA 1)']
    ],
    [
        'id' => 3,
        'tingkat' => 'lokal',
        'tahun' => '2024',
        'kategori' => 'Bahasa',
        'nama' => 'Juara 1 Lomba Debat Bahasa Inggris',
        'lokasi_singkat' => 'Yogyakarta',
        'tanggal_singkat' => 'Oktober 2024',
        'image' => 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?w=800&h=600&fit=crop',
        'lokasi_lengkap' => 'Universitas Gadjah Mada, Yogyakarta',
        'juara' => 'Juara 1',
        'deskripsi' => 'Tim debat bahasa Inggris berhasil mengalahkan 24 sekolah se-DIY dalam kompetisi debat tingkat provinsi dengan tema "The Future of Education in Digital Era".',
        'peserta' => ['Eko Prasetyo (XI IPS 2)', 'Fitri Handayani (XI IPS 1)', 'Gilang Ramadhan (XII IPS 1)']
    ],
    [
        'id' => 4,
        'tingkat' => 'nasional',
        'tahun' => '2023',
        'kategori' => 'Seni',
        'nama' => 'Juara 3 Festival Band Pelajar Nasional',
        'lokasi_singkat' => 'Surabaya',
        'tanggal_singkat' => 'September 2023',
        'image' => 'https://images.unsplash.com/photo-1508219818815-585642a49257?w=800&h=600&fit=crop',
        'lokasi_lengkap' => 'Taman Budaya Jawa Timur, Surabaya',
        'juara' => 'Juara 3',
        'deskripsi' => 'Band sekolah meraih juara ketiga dalam ajang Festival Band Pelajar tingkat nasional. Mereka membawakan lagu orisinil yang memukau juri.',
        'peserta' => ['Grup Band: The Scholars']
    ],
    [
        'id' => 5,
        'tingkat' => 'lokal',
        'tahun' => '2024',
        'kategori' => 'Olahraga',
        'nama' => 'Juara 2 Turnamen Futsal Kota',
        'lokasi_singkat' => 'Bandung',
        'tanggal_singkat' => 'Maret 2024',
        'image' => 'https://images.unsplash.com/photo-1516246877903-883a8f572d4c?w=800&h=600&fit=crop',
        'lokasi_lengkap' => 'GOR Futsal Siliwangi, Bandung',
        'juara' => 'Juara 2',
        'deskripsi' => 'Tim futsal putra mencapai babak final dan meraih juara kedua dalam turnamen futsal antar sekolah se-Kota Bandung.',
        'peserta' => ['Tim Futsal Putra']
    ],
    [
        'id' => 6,
        'tingkat' => 'internasional',
        'tahun' => '2023',
        'kategori' => 'Teknologi',
        'nama' => 'Gold Medal International App Design',
        'lokasi_singkat' => 'Seoul, Korea',
        'tanggal_singkat' => 'Juni 2023',
        'image' => 'https://images.unsplash.com/photo-1549682522-861051515291?w=800&h=600&fit=crop',
        'lokasi_lengkap' => 'International Convention Center, Seoul',
        'juara' => 'Medali Emas',
        'deskripsi' => 'Aplikasi inovatif tentang lingkungan yang dibuat oleh siswa jurusan Rekayasa Perangkat Lunak berhasil menyabet medali emas di ajang desain aplikasi internasional.',
        'peserta' => ['Hendra Wijaya (XII RPL 3)']
    ],
    [
        'id' => 7,
        'tingkat' => 'nasional',
        'tahun' => '2024',
        'kategori' => 'Akademik',
        'nama' => 'Medali Perunggu OSN Fisika',
        'lokasi_singkat' => 'Medan',
        'tanggal_singkat' => 'Juli 2024',
        'image' => 'https://images.unsplash.com/photo-1567427017947-54524f5a2b3e?w=800&h=600&fit=crop',
        'lokasi_lengkap' => 'Universitas Sumatera Utara, Medan',
        'juara' => 'Medali Perunggu',
        'deskripsi' => 'Siswa berprestasi di bidang sains berhasil membawa pulang medali perunggu pada Olimpiade Sains Nasional (OSN) mata pelajaran Fisika.',
        'peserta' => ['Indah Permata (X IPA 2)']
    ],
    [
        'id' => 8,
        'tingkat' => 'lokal',
        'tahun' => '2023',
        'kategori' => 'Bahasa',
        'nama' => 'Juara 1 Lomba Cipta Puisi Daerah',
        'lokasi_singkat' => 'Solo',
        'tanggal_singkat' => 'April 2023',
        'image' => 'https://images.unsplash.com/photo-1490237722741-2a0cc6e9275b?w=800&h=600&fit=crop',
        'lokasi_lengkap' => 'Museum Monumen Pers Nasional, Solo',
        'juara' => 'Juara 1',
        'deskripsi' => 'Karya cipta puisi bertema kearifan lokal berhasil memenangkan kompetisi tingkat daerah.',
        'peserta' => ['Joko Susilo (XI Bahasa)']
    ],
    [
        'id' => 9,
        'tingkat' => 'nasional',
        'tahun' => '2022',
        'kategori' => 'Akademik',
        'nama' => 'Juara Harapan 1 Kompetisi Sains Terapan',
        'lokasi_singkat' => 'Bandung',
        'tanggal_singkat' => 'Juni 2022',
        'image' => 'https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=800&h=600&fit=crop',
        'lokasi_lengkap' => 'Institut Teknologi Bandung',
        'juara' => 'Harapan 1',
        'deskripsi' => 'Proyek penelitian terapan dari siswa teknik berhasil meraih juara harapan 1 di kompetisi tingkat nasional.',
        'peserta' => ['Kevin Tanu (XII TKJ 2)', 'Luna Maya (XII TKJ 1)']
    ],
    [
        'id' => 10,
        'tingkat' => 'internasional',
        'tahun' => '2022',
        'kategori' => 'Seni',
        'nama' => 'Bronze Award International Photography',
        'lokasi_singkat' => 'Tokyo, Jepang',
        'tanggal_singkat' => 'Januari 2022',
        'image' => 'https://images.unsplash.com/photo-1507721999472-8ed4b54b67cdf?w=800&h=600&fit=crop',
        'lokasi_lengkap' => 'Tokyo Metropolitan Art Museum',
        'juara' => 'Bronze Award',
        'deskripsi' => 'Foto dokumenter bertema kehidupan kota meraih penghargaan perunggu pada kompetisi fotografi internasional.',
        'peserta' => ['Maya Sari (XI Multimedia 1)']
    ],
];

$searchTerm = strtolower($_GET['search'] ?? '');
$filterTingkat = $_GET['tingkat'] ?? 'semua';
$filterTahun = $_GET['tahun'] ?? 'semua';
$quickFilter = $_GET['qfilter'] ?? 'semua';

if ($quickFilter !== 'semua') {
    $filterTingkat = $quickFilter;
}

$filtered_prestasi = array_values(array_filter($all_prestasi, function($p) use ($searchTerm, $filterTingkat, $filterTahun) {
    $matchTingkat = ($filterTingkat === 'semua' || $p['tingkat'] === $filterTingkat);
    $matchTahun = ($filterTahun === 'semua' || $p['tahun'] === $filterTahun);
    $cardSearchText = strtolower($p['nama'] . ' ' . $p['kategori'] . ' ' . $p['lokasi_singkat']);
    $matchSearch = (empty($searchTerm) || strpos($cardSearchText, $searchTerm) !== false);
    return $matchTingkat && $matchTahun && $matchSearch;
}));

$resultCount = count($filtered_prestasi);

$count_lokal = count(array_filter($all_prestasi, fn($p) => $p['tingkat'] === 'lokal'));
$count_nasional = count(array_filter($all_prestasi, fn($p) => $p['tingkat'] === 'nasional'));
$count_internasional = count(array_filter($all_prestasi, fn($p) => $p['tingkat'] === 'internasional'));

function get_badge_data($tingkat) {
    switch ($tingkat) {
        case 'nasional': return ['badge' => '🥇 Nasional', 'class' => 'badge-nasional'];
        case 'internasional': return ['badge' => '🌍 Internasional', 'class' => 'badge-internasional'];
        case 'lokal': return ['badge' => '📍 Lokal', 'class' => 'badge-lokal'];
        default: return ['badge' => '', 'class' => ''];
    }
}
?>

<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');
* { font-family: 'Inter', sans-serif; }

.hero-gradient { background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%); }

.filter-btn { transition: all 0.3s ease; }
.filter-btn.active { background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%); color: white; box-shadow: 0 4px 12px rgba(59,130,246,0.3); }

.prestasi-card {
    display: flex;
    flex-direction: column;
    height: 100%;
    transition: all 0.4s cubic-bezier(0.25,0.8,0.25,1);
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    cursor: pointer;
}

.prestasi-card.hidden { display: none !important; }

.prestasi-card:hover { transform: translateY(-10px) scale(1.02); box-shadow: 0 25px 35px -10px rgba(59,130,246,0.35); }

.card-image-container { height: 12rem; overflow: hidden; }
.card-image-container img { transition: transform 0.5s ease, filter 0.5s ease; filter: brightness(0.95); }
.prestasi-card:hover .card-image-container img { transform: scale(1.08); filter: brightness(1.0); }

.card-content { flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between; padding: 1.25rem; }

.badge-nasional { background: linear-gradient(135deg,#fbbf24 0%,#f59e0b 100%); }
.badge-internasional { background: linear-gradient(135deg,#ef4444 0%,#dc2626 100%); }
.badge-lokal { background: linear-gradient(135deg,#10b981 0%,#059669 100%); }

.modal { 
    display: none; 
    position: fixed; 
    z-index: 9999; 
    left:0; 
    top:0; 
    width:100%; 
    height:100%; 
    overflow:hidden; 
    background-color: rgba(0,0,0,0.0);
    transition: background-color 0.3s ease-in-out;
}
.modal.show { 
    display:flex; 
    align-items:center; 
    justify-content:center; 
    background-color: rgba(0,0,0,0.7);
}
.modal-content { 
    background:white; 
    border-radius:1rem; 
    max-width:900px; 
    width:94%; 
    max-height:90vh; 
    overflow-y:auto; 
    padding:0; 
    opacity: 0;
    transform: scale(0.95);
    transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out; 
}
.modal.show .modal-content {
    opacity: 1;
    transform: scale(1);
}

.glow-button { transition: all 0.25s ease; }
</style>

<div class="hero-gradient relative overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-10"></div>
    <div class="container mx-auto px-4 py-16 relative z-10">
        <div class="text-white/80 text-sm mb-6">
            <i class="fas fa-home mr-2"></i>
            <a href="/Template-WebSekolah/src/index.php" class="hover:text-white transition">Beranda</a>
            <span class="mx-2">/</span>
            <span class="text-white font-medium">Prestasi</span>
        </div>

        <div class="text-center text-white">
            <div class="inline-flex items-center gap-3 bg-white/20 backdrop-blur-sm px-6 py-2 rounded-full mb-4">
                <i class="fas fa-trophy"></i>
                <span class="font-semibold">Prestasi Terbaik Kami</span>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Prestasi Sekolah</h1>
            <p class="text-lg text-white/90 max-w-2xl mx-auto">Koleksi lengkap pencapaian membanggakan siswa-siswi SMK Negeri Indonesia</p>
        </div>
    </div>
</div>

<div class="bg-gray-50 py-12" id="prestasiSection">
    <div class="container mx-auto px-4">

        <form method="GET" action="prestasi.php" id="filterForm" class="bg-white rounded-xl shadow-lg p-6 mb-8">
            <div class="flex flex-col lg:flex-row gap-6">
                <div class="flex-1">
                    <label class="block text-sm font-semibold text-gray-700 mb-2"><i class="fas fa-search mr-2"></i>Cari Prestasi</label>
                    <div class="relative">
                        <i class="fas fa-search absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        <input type="text" name="search" value="<?= htmlspecialchars($_GET['search'] ?? '') ?>" id="searchInput" class="w-full pl-10 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Cari berdasarkan nama lomba, kategori, atau lokasi...">
                    </div>
                </div>

                <div class="lg:w-64">
                    <label class="block text-sm font-semibold text-gray-700 mb-2"><i class="fas fa-filter mr-2"></i>Tingkat</label>
                    <select name="tingkat" id="filterTingkat" onchange="document.getElementById('filterForm').submit()" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                        <option value="semua" <?= $filterTingkat == 'semua' ? 'selected' : '' ?>>Semua Tingkat</option>
                        <option value="lokal" <?= $filterTingkat == 'lokal' ? 'selected' : '' ?>>Lokal</option>
                        <option value="nasional" <?= $filterTingkat == 'nasional' ? 'selected' : '' ?>>Nasional</option>
                        <option value="internasional" <?= $filterTingkat == 'internasional' ? 'selected' : '' ?>>Internasional</option>
                    </select>
                </div>

                <div class="lg:w-48">
                    <label class="block text-sm font-semibold text-gray-700 mb-2"><i class="fas fa-calendar mr-2"></i>Tahun</label>
                    <select name="tahun" id="filterTahun" onchange="document.getElementById('filterForm').submit()" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                        <option value="semua" <?= $filterTahun == 'semua' ? 'selected' : '' ?>>Semua Tahun</option>
                        <?php
                            $years = range(date('Y'), 2022);
                            foreach ($years as $year) {
                                $selected = $filterTahun == $year ? 'selected' : '';
                                echo "<option value=\"$year\" $selected>$year</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>

            <div class="mt-6 pt-6 border-t border-gray-200">
                <p class="text-sm font-semibold text-gray-700 mb-3">Filter Cepat:</p>
                <div class="flex flex-wrap gap-3">
                    <?php
                        $buttons = [
                            'semua' => ['label' => 'Semua', 'count' => count($all_prestasi), 'icon' => '⭐'],
                            'lokal' => ['label' => 'Lokal', 'count' => $count_lokal, 'icon' => '📍'],
                            'nasional' => ['label' => 'Nasional', 'count' => $count_nasional, 'icon' => '🥇'],
                            'internasional' => ['label' => 'Internasional', 'count' => $count_internasional, 'icon' => '🌍'],
                        ];

                        $active_quick_filter = $quickFilter !== 'semua' ? $quickFilter : $filterTingkat;

                        foreach ($buttons as $value => $data) {
                            $activeClass = $active_quick_filter == $value ? 'active' : '';
                            $url_params = http_build_query(array_merge($_GET, ['qfilter' => $value, 'tingkat' => $value]));
                            echo "<a href=\"?{$url_params}\" class=\"filter-btn px-6 py-2 bg-gray-100 text-gray-700 rounded-full font-semibold text-sm {$activeClass}\">";
                            echo "{$data['icon']} {$data['label']} ({$data['count']})";
                            echo "</a>";
                        }
                    ?>
                </div>
            </div>

            <button type="submit" class="hidden"></button>
        </form>

        <div class="mb-6">
            <p class="text-gray-600">Menampilkan <span id="resultCount" class="font-bold text-blue-600"><?= $resultCount ?></span> prestasi</p>
        </div>

        <div id="prestasiGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 items-stretch">
            <?php if (!empty($filtered_prestasi)): ?>
                <?php
                    $show_more_button = $resultCount > 6;
                ?>
                <?php foreach ($filtered_prestasi as $index => $prestasi):
                    $badge_data = get_badge_data($prestasi['tingkat']);
                    $is_hidden_class = ($show_more_button && $index >= 6) ? 'hidden prestasi-more' : '';
                ?>
                    <div 
                        class="prestasi-card bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 <?= $is_hidden_class ?>" 
                        data-id="<?= $prestasi['id'] ?>" 
                        data-title="<?= htmlspecialchars($prestasi['nama']) ?>"
                        data-content="<?= htmlspecialchars($prestasi['deskripsi']) ?>"
                        data-tingkat="<?= htmlspecialchars($prestasi['tingkat']) ?>"
                        data-hidden="false"
                        onclick="openModal(<?= $prestasi['id'] ?>)">
                        
                        <div class="relative card-image-container">
                            <img src="<?= htmlspecialchars($prestasi['image']) ?>" alt="<?= htmlspecialchars($prestasi['nama']) ?>" class="w-full h-full object-cover">
                            <div class="absolute top-4 right-4">
                                <span class="<?= $badge_data['class'] ?> text-white px-3 py-1.5 rounded-full text-xs font-bold shadow-xl"><?= $badge_data['badge'] ?></span>
                            </div>
                        </div>

                        <div class="card-content">
                            <div>
                                <h3 class="text-lg font-extrabold text-gray-800 mb-2 leading-snug"><?= htmlspecialchars($prestasi['nama']) ?></h3>

                                <div class="flex justify-between items-center text-xs font-semibold uppercase mb-3 border-b pb-3 text-gray-500">
                                    <span class="text-blue-600"><?= htmlspecialchars($prestasi['kategori']) ?></span>
                                    <span class="text-gray-500"><i class="fas fa-calendar-alt mr-1"></i><?= htmlspecialchars($prestasi['tahun']) ?></span>
                                </div>

                                <div class="space-y-2 text-sm text-gray-600 mb-4">
                                    <p class="flex items-center gap-2">
                                        <i class="fas fa-trophy text-blue-500 text-xs w-4 text-center"></i>
                                        <span class="font-medium text-gray-700"><?= htmlspecialchars($prestasi['juara']) ?></span>
                                    </p>
                                    <p class="flex items-center gap-2">
                                        <i class="fas fa-map-marker-alt text-blue-500 text-xs w-4 text-center"></i>
                                        <span class="font-medium text-gray-700"><?= htmlspecialchars($prestasi['lokasi_singkat']) ?></span>
                                    </p>
                                </div>
                            </div>

                            <button class="w-full text-center text-blue-600 font-bold text-sm hover:text-blue-700 transition py-2 border border-blue-100 rounded-lg hover:bg-blue-50 mt-auto">Lihat Detail <i class="fas fa-arrow-right ml-1"></i></button>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div id="emptyState" class="col-span-1 md:col-span-3 text-center py-16 bg-white rounded-xl shadow-lg">
                    <i class="fas fa-search text-6xl text-gray-300 mb-4"></i>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Tidak Ada Hasil</h3>
                    <p class="text-gray-600">Coba ubah filter atau kata kunci pencarian Anda</p>
                </div>
            <?php endif; ?>
        </div>

        <?php if ($show_more_button): ?>
            <div class="text-center mt-8" id="showMoreContainer">
                <button id="showMoreBtn" class="glow-button overflow-hidden px-8 py-3 bg-blue-600 text-white font-semibold rounded-full hover:bg-blue-700 transition">
                    <span id="showMoreText" class="relative z-10">Tampilkan Lainnya</span>
                </button>
            </div>
        <?php endif; ?>

    </div>
</div>

<div id="prestasiModal" class="modal" aria-hidden="true">
    <div class="modal-content">
    </div>
</div>

<script>
const prestasiData = <?= json_encode($all_prestasi) ?>;
const prestasiMap = prestasiData.reduce((map, obj) => { map[obj.id] = obj; return map; }, {});

function get_badge_data(tingkat) {
    switch (tingkat) {
        case 'nasional': return { badge: '🥇 Nasional', class: 'badge-nasional' };
        case 'internasional': return { badge: '🌍 Internasional', class: 'badge-internasional' };
        case 'lokal': return { badge: '📍 Lokal', class: 'badge-lokal' };
        default: return { badge: '', class: '' };
    }
}

function openModal(id) {
    const data = prestasiMap[id];
    if (!data) return;
    const badge_data = get_badge_data(data.tingkat);

    const pesertaListHTML = (data.peserta || []).map(p => `<li class="flex items-start gap-2"><i class="fas fa-user text-blue-600 mt-1"></i> ${p}</li>`).join('');

    const modalContentHTML = `
        <div class="relative">
            <button onclick="closeModal()" class="close-modal absolute top-4 right-4 z-10 bg-white w-10 h-10 rounded-full flex items-center justify-center shadow-lg">
                <i class="fas fa-times text-gray-600"></i>
            </button>

            <div class="relative h-80 overflow-hidden rounded-t-xl">
                <img src="${data.image}" alt="${data.nama}" class="w-full h-full object-cover">
                <div class="absolute top-4 left-4">
                    <span class="${badge_data.class} text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg">${badge_data.badge}</span>
                </div>
            </div>

            <div class="p-8">
                <span class="text-sm text-blue-600 font-semibold uppercase">${data.kategori}</span>
                <h2 class="text-3xl font-bold text-gray-800 mt-2 mb-4">${data.nama}</h2>

                <div class="flex flex-wrap gap-x-6 gap-y-3 mb-6 text-sm text-gray-600">
                    <div class="flex items-center gap-2">
                        <i class="fas fa-map-marker-alt text-blue-600"></i>
                        <span>${data.lokasi_lengkap}</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <i class="fas fa-calendar text-blue-600"></i>
                        <span>${data.tanggal_singkat}</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <i class="fas fa-trophy text-blue-600"></i>
                        <span>${data.juara}</span>
                    </div>
                </div>

                <div class="border-t border-gray-200 pt-6">
                    <h3 class="font-bold text-gray-800 mb-3 flex items-center gap-2">
                        <i class="fas fa-info-circle text-blue-600"></i>
                        Deskripsi
                    </h3>
                    <p class="text-gray-600 leading-relaxed mb-6">${data.deskripsi}</p>

                    <h3 class="font-bold text-gray-800 mb-3 flex items-center gap-2">
                        <i class="fas fa-users text-blue-600"></i>
                        Tim Peserta
                    </h3>
                    <ul class="space-y-2 text-gray-600">${pesertaListHTML}</ul>
                </div>
            </div>
        </div>
    `;

    document.querySelector('#prestasiModal .modal-content').innerHTML = modalContentHTML;
    document.getElementById('prestasiModal').classList.add('show');
    document.getElementById('prestasiModal').setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
}

function closeModal() {
    document.getElementById('prestasiModal').classList.remove('show');
    
    setTimeout(() => {
        document.getElementById('prestasiModal').setAttribute('aria-hidden', 'true');
        document.body.style.overflow = 'auto';
    }, 300); 
}

function debounce(func, delay) {
    let timeoutId;
    return function() {
        const context = this;
        const args = arguments;
        clearTimeout(timeoutId);
        timeoutId = setTimeout(() => func.apply(context, args), delay);
    };
}

document.addEventListener('DOMContentLoaded', function() {
    const MAX_VISIBLE = 6;
    let isExpanded = false;

    const allCards = Array.from(document.querySelectorAll('.prestasi-card'));
    const extraCards = allCards.filter(card => card.classList.contains('prestasi-more'));
    const showMoreBtn = document.getElementById('showMoreBtn');
    const showMoreText = document.getElementById('showMoreText');
    const prestasiGrid = document.getElementById('prestasiGrid');
    const searchInput = document.getElementById('searchInput');
    const resultCountDisplay = document.getElementById('resultCount');

    function initializeCards() {
        if (extraCards.length > 0) {
            showMoreBtn.style.display = '';
            extraCards.forEach(c => c.classList.add('hidden')); 
            updateButtonLabel();
        } else if (showMoreBtn) {
            showMoreBtn.style.display = 'none';
        }
    }

    function toggleShow() {
        isExpanded = !isExpanded;

        extraCards.forEach(card => {
            if (card.dataset.hidden === 'false') { 
                card.classList.toggle('hidden', !isExpanded);
            }
        });
        
        if (!isExpanded) {
            prestasiGrid.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }

        updateButtonLabel();
    }

    function updateButtonLabel() {
        if (showMoreText) {
            showMoreText.textContent = isExpanded ?
                'Tampilkan Lebih Sedikit' :
                'Tampilkan Lainnya';
        }
    }

    if (searchInput) {
        searchInput.addEventListener('input', debounce(function() {
            const term = searchInput.value.toLowerCase().trim();
            let totalMatchCount = 0; 
            const isTermActive = term !== '';
    
            if (isTermActive) {
                isExpanded = false;
                allCards.forEach(card => card.classList.remove('hidden')); 
            }
    
            allCards.forEach((card, index) => {
                const title = card.dataset.title.toLowerCase();
                const content = card.dataset.content.toLowerCase();
                const tingkat = card.dataset.tingkat.toLowerCase();
                
                const match = title.includes(term) || content.includes(term) || tingkat.includes(term);
    
                card.dataset.hidden = match ? 'false' : 'true';
    
                if (match) {
                    totalMatchCount++;
                }
                
                if (!match) {
                    card.classList.add('hidden');
                } else if (!isTermActive) {
                    const isExtraCard = card.classList.contains('prestasi-more');
                    if (isExtraCard && !isExpanded) {
                        card.classList.add('hidden');
                    } else {
                        card.classList.remove('hidden');
                    }
                } else {
                    card.classList.remove('hidden');
                }
            });
    
            if (showMoreBtn) {
                if (!isTermActive && extraCards.length > 0) {
                    showMoreBtn.style.display = '';
                } else {
                    showMoreBtn.style.display = 'none';
                }
            }
            
            if (isTermActive) {
                resultCountDisplay.textContent = totalMatchCount;
            } else {
                resultCountDisplay.textContent = <?= $resultCount ?>; 
            }
    
            updateButtonLabel();
        }, 300)); 
    }
    
    if (showMoreBtn) {
        showMoreBtn.addEventListener('click', toggleShow);
    }

    const prestasiModal = document.getElementById('prestasiModal');
    prestasiModal.addEventListener('click', function(e) {
        if (e.target === this) closeModal();
    });

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') closeModal();
    });
    
    initializeCards();
});
</script>

<?php
include '../src/includes/footer.php';
?>