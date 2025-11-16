<?php 
    $page_title = 'Galeri';
    include '../src/includes/header.php';
    include '../pages/banner.php';
    
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
    
    // Pagination setup
    $items_per_page = 6;
    $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $total_items = count($gallery_items);
    $total_pages = ceil($total_items / $items_per_page);
    $offset = ($current_page - 1) * $items_per_page;
    
    // Get items for current page
    $current_items = array_slice($gallery_items, $offset, $items_per_page);
?>

<!-- Gallery Section -->
<section class="py-16 px-4 bg-gray-50">
    <div class="max-w-7xl mx-auto">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Galeri Foto</h2>
            <p class="text-gray-600">Dokumentasi kegiatan dan momen berharga di sekolah kami</p>
        </div>
        
        <!-- Gallery Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12">
            <?php foreach ($current_items as $item): ?>
                <a href="galeri-detail.php?id=<?= $item['id'] ?>" class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
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
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                        </svg>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
        
        <!-- Pagination -->
        <?php if ($total_pages > 1): ?>
            <div class="flex justify-center items-center space-x-2">
                <!-- Previous Button -->
                <?php if ($current_page > 1): ?>
                    <a href="?page=<?= $current_page - 1 ?>" class="px-4 py-2 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                    </a>
                <?php endif; ?>
                
                <!-- Page Numbers -->
                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                    <a href="?page=<?= $i ?>" class="px-4 py-2 rounded-lg transition-colors <?= $i === $current_page ? 'bg-blue-600 text-white' : 'bg-white border border-gray-300 hover:bg-gray-50' ?>">
                        <?= $i ?>
                    </a>
                <?php endfor; ?>
                
                <!-- Next Button -->
                <?php if ($current_page < $total_pages): ?>
                    <a href="?page=<?= $current_page + 1 ?>" class="px-4 py-2 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php 
    include '../src/includes/footer.php';
?>