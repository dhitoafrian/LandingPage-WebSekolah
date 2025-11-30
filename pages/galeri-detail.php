<?php
$page_title = 'Detail Galeri';
include '../src/includes/header.php'; // Pastikan header.php memuat CSS Swiper.js

// Dummy data galeri (sama seperti di gallery.php)
$gallery_items = [
    ['id' => 1, 'title' => 'Kegiatan Pembelajaran', 'image' => 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=800', 'desc' => 'Suasana pembelajaran yang kondusif di kelas', 'date' => '15 Januari 2024', 'category' => 'Akademik'],
    ['id' => 2, 'title' => 'Upacara Bendera', 'image' => 'https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?w=800', 'desc' => 'Upacara bendera setiap hari Senin', 'date' => '22 Januari 2024', 'category' => 'Kegiatan Rutin'],
    ['id' => 3, 'title' => 'Lomba Olahraga', 'image' => 'https://images.unsplash.com/photo-1461896836934-ffe607ba8211?w=800', 'desc' => 'Kompetisi olahraga antar kelas', 'date' => '5 Februari 2024', 'category' => 'Olahraga'],
    ['id' => 4, 'title' => 'Kegiatan Ekstrakurikuler', 'image' => 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=800', 'desc' => 'Berbagai kegiatan ekstrakurikuler yang menarik', 'date' => '12 Februari 2024', 'category' => 'Ekstrakurikuler'],
    ['id' => 5, 'title' => 'Wisuda Siswa', 'image' => 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=800', 'desc' => 'Prosesi wisuda siswa kelas 12', 'date' => '20 Maret 2024', 'category' => 'Event Khusus'],
    ['id' => 6, 'title' => 'Praktikum Lab', 'image' => 'https://images.unsplash.com/photo-1532094349884-543bc11b234d?w=800', 'desc' => 'Kegiatan praktikum di laboratorium', 'date' => '28 Maret 2024', 'category' => 'Akademik'],
    ['id' => 7, 'title' => 'Study Tour', 'image' => 'https://images.unsplash.com/photo-1523287562758-66c7fc58967f?w=800', 'desc' => 'Kunjungan edukasi ke berbagai tempat', 'date' => '10 April 2024', 'category' => 'Event Khusus'],
    ['id' => 8, 'title' => 'Pentas Seni', 'image' => 'https://images.unsplash.com/photo-1506157786151-b8491531f063?w=800', 'desc' => 'Pertunjukan seni dan budaya siswa', 'date' => '25 April 2024', 'category' => 'Seni & Budaya'],
    ['id' => 9, 'title' => 'Kegiatan Pramuka', 'image' => 'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=800', 'desc' => 'Latihan rutin pramuka setiap Jumat', 'date' => '8 Mei 2024', 'category' => 'Ekstrakurikuler'],
];

// Get ID from URL
$id = isset($_GET['id']) ? (int)$_GET['id'] : 1;

// Find item by ID
$item = null;
foreach ($gallery_items as $gallery_item) {
    if ($gallery_item['id'] === $id) {
        $item = $gallery_item;
        break;
    }
}

// Redirect if not found
if (!$item) {
    header('Location: galeri.php');
    exit;
}
?>

<section class="py-16 px-4 bg-gray-50">
    <div class="max-w-5xl mx-auto">
        <div class="mb-6">
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="/Template-WebSekolah/src/index.php" class="text-gray-600 hover:text-blue-600 transition">
                            <i class="fas fa-home mr-2"></i>Beranda
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <span class="mx-2 text-gray-400">/</span>
                            <a href="galeri.php" class="text-gray-600 hover:text-blue-600 transition">Galeri</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <span class="mx-2 text-gray-400">/</span>
                            <span class="text-gray-500">Detail</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <div class="relative h-96 md:h-[500px] bg-gray-200">
                <img src="<?= $item['image'] ?>" alt="<?= $item['title'] ?>" class="w-full h-full object-cover">
            </div>

            <div class="p-8 md:p-12">
                <span class="inline-block px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-semibold mb-4">
                    <?= $item['category'] ?>
                </span>

                <h1 class="text-4xl font-bold text-gray-800 mb-4"><?= $item['title'] ?></h1>

                <div class="flex items-center text-gray-600 mb-6">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <?= $item['date'] ?>
                </div>

                <div class="prose prose-lg max-w-none">
                    <p class="text-gray-700 leading-relaxed mb-6">
                        <?= $item['desc'] ?>
                    </p>

                    <p class="text-gray-700 leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                </div>

                <div class="mt-8 pt-8 border-t border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Bagikan:</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="flex items-center justify-center w-12 h-12 bg-blue-600 text-white rounded-full hover:bg-blue-700 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        <a href="#" class="flex items-center justify-center w-12 h-12 bg-blue-400 text-white rounded-full hover:bg-blue-500 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                            </svg>
                        </a>
                        <a href="#" class="flex items-center justify-center w-12 h-12 bg-green-500 text-white rounded-full hover:bg-green-600 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-16 relative">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">Galeri Lainnya</h2>

            <div class="swiper related-gallery-swiper">
                <div class="swiper-wrapper">
                    <?php
                    $related = array_filter($gallery_items, function ($i) use ($id) {
                        return $i['id'] !== $id;
                    });
                    // Kita ambil semua item terkait, Swiper yang akan mengatur berapa yang terlihat.
                    // Jika Anda ingin membatasi, ganti array_filter di atas.
                    foreach ($related as $rel):
                    ?>
                        <div class="swiper-slide">
                            <a href="galeri-detail.php?id=<?= $rel['id'] ?>" class="group block overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                                <img src="<?= $rel['image'] ?>" alt="<?= $rel['title'] ?>" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-300">
                                <div class="p-4 bg-white">
                                    <h3 class="font-semibold text-gray-800 group-hover:text-blue-600 transition-colors"><?= $rel['title'] ?></h3>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include '../src/includes/footer.php';
?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        new Swiper('.related-gallery-swiper', {
            // Konfigurasi umum
            loop: true, // Untuk perulangan slide
            spaceBetween: 24, // Sama dengan gap-6 di Tailwind CSS (24px)

            // Autoplay (Slide otomatis)
            autoplay: {
                delay: 4000, // Ganti slide setiap 4 detik
                disableOnInteraction: false, // Lanjutkan autoplay setelah interaksi manual
            },

            // Responsif Breakpoints (Berapa slide yang terlihat)
            breakpoints: {
                // Saat lebar layar <= 640px (Mobile)
                640: {
                    slidesPerView: 1,
                },
                // Saat lebar layar <= 768px (Tablet)
                768: {
                    slidesPerView: 2,
                },
                // Saat lebar layar > 768px (Desktop)
                1024: {
                    slidesPerView: 3,
                },
            },
        });
    });
</script>