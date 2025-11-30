<?php
$page_title = 'Galeri';
include '../src/includes/header.php';

// Dummy data galeri
$gallery_items = [
    ['id' => 1, 'title' => 'Kegiatan Pembelajaran', 'image' => 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=500', 'desc' => 'Suasana pembelajaran yang kondusif di kelas'],
    ['id' => 2, 'title' => 'Upacara Bendera', 'image' => 'https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?w=500', 'desc' => 'Upacara bendera setiap hari Senin'],
    ['id' => 3, 'title' => 'Lomba Olahraga', 'image' => 'https://images.unsplash.com/photo-1461896836934-ffe607ba8211?w=500', 'desc' => 'Kompetisi olahraga antar kelas'],
    ['id' => 4, 'title' => 'Kegiatan Ekstrakurikuler', 'image' => 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=500', 'desc' => 'Berbagai kegiatan ekstrakurikuler yang menarik'],
    ['id' => 5, 'title' => 'Wisuda Siswa', 'image' => 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=500', 'desc' => 'Prosesi wisuda siswa kelas 12'],
    ['id' => 6, 'title' => 'Praktikum Lab', 'image' => 'https://images.unsplash.com/photo-1532094349884-543bc11b234d?w=500', 'desc' => 'Kegiatan praktikum di laboratorium'],
    ['id' => 7, 'title' => 'Study Tour', 'image' => 'https://images.unsplash.com/photo-1523287562758-66c7fc58967f?w=500', 'desc' => 'Kunjungan edukasi ke berbagai tempat'],
    ['id' => 8, 'title' => 'Pentas Seni', 'image' => 'https://images.unsplash.com/photo-1506157786151-b8491531f063?w=500', 'desc' => 'Pertunjukan seni dan budaya siswa'],
    ['id' => 9, 'title' => 'Kegiatan Pramuka', 'image' => 'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=500', 'desc' => 'Latihan rutin pramuka setiap Jumat'],
];

$items_per_page = 6; // Item yang ditampilkan pertama kali
?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');

    * {
        font-family: 'Inter', sans-serif;
    }

    .hero-gradient {
        background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
    }
    
    /* Style untuk tombol */
    .glow-button {
        transition: all 0.3s ease;
    }
    
    .glow-button:hover {
        box-shadow: 0 0 20px rgba(59, 130, 246, 0.5);
        transform: translateY(-2px);
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
            <span class="text-white font-medium">Galeri</span>
        </div>

        <div class="text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                <i class="fas fa-images mr-3"></i>Galeri Sekolah
            </h1>
            <p class="text-lg text-white/90 max-w-2xl mx-auto">
                Jelajahi momen-momen berharga dan kegiatan seru di sekolah kami melalui galeri foto yang penuh warna ini.
            </p>
        </div>
    </div>
</div>

<!-- Gallery Section -->
<section class="py-16 px-4 bg-gray-50">
    <div class="max-w-7xl mx-auto">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Galeri Foto</h2>
            <p class="text-gray-600">Dokumentasi kegiatan dan momen berharga di sekolah kami</p>
        </div>

        <!-- Gallery Grid -->
        <div id="galleryContainer" class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12">
            <?php foreach ($gallery_items as $index => $item): ?>
                <?php 
                $is_hidden = $index >= $items_per_page ? 'hidden' : '';
                ?>
                <a href="galeri-detail.php?id=<?= $item['id'] ?>" 
                   class="gallery-item group relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 <?= $is_hidden ?>"
                   data-title="<?= htmlspecialchars($item['title']) ?>"
                   data-desc="<?= htmlspecialchars($item['desc']) ?>">
                    <div class="aspect-w-16 aspect-h-12 bg-gray-200">
                        <img src="<?= $item['image'] ?>" alt="<?= $item['title'] ?>" class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            <h3 class="text-2xl font-bold mb-2"><?= $item['title'] ?></h3>
                            <p class="text-sm text-gray-200"><?= $item['desc'] ?></p>
                        </div>
                    </div>
                    <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm rounded-full p-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>

        <!-- Tombol Tampilkan Lainnya/Lebih Sedikit -->
        <?php if (count($gallery_items) > $items_per_page): ?>
            <div class="text-center">
                <button id="showMoreBtn" class="glow-button px-8 py-3 bg-blue-600 text-white font-semibold rounded-full hover:bg-blue-700 transition-colors">
                    <span>Tampilkan Lainnya</span>
                </button>
            </div>
        <?php endif; ?>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const MAX_ITEMS = <?= $items_per_page ?>;
        let expanded = false;

        const galleryItems = Array.from(document.querySelectorAll('.gallery-item'));
        const showMoreBtn = document.getElementById('showMoreBtn');
        const showMoreText = showMoreBtn ? showMoreBtn.querySelector('span') : null;

        // Pisahkan item yang akan di-toggle
        const extraItems = galleryItems.slice(MAX_ITEMS);

        // Initialize - sembunyikan extra items
        if (showMoreBtn) {
            extraItems.forEach(item => item.classList.add('hidden'));
            
            function updateButtonLabel() {
                showMoreText.textContent = expanded ? 
                    'Tampilkan Lebih Sedikit' : 
                    'Tampilkan Lainnya';
            }

            function toggleShow() {
                expanded = !expanded;

                // Toggle visibility extra items
                extraItems.forEach(item => {
                    if (item.style.display !== 'none') {
                        item.classList.toggle('hidden', !expanded);
                    }
                });

                // Scroll ke tombol saat collapse
                if (!expanded) {
                    showMoreBtn.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });
                }

                updateButtonLabel();
            }

            showMoreBtn.addEventListener('click', toggleShow);
            updateButtonLabel();
        }
    });
</script>

<?php
include '../src/includes/footer.php';
?>