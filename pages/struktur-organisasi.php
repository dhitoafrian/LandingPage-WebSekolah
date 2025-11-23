<?php
$page_title = 'Struktur Organisasi';
include '../src/includes/header.php';
?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

    * {
        font-family: 'Inter', sans-serif;
    }

    .hero-gradient {
        background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
    }
</style>

<!-- Hero Section -->
<div class="hero-gradient relative overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-10"></div>
    <div class="container mx-auto px-4 py-16 relative z-10">
        <!-- Breadcrumb -->
        <div class="text-white/80 text-sm mb-6">
            <i class="fas fa-home mr-2"></i>
            <a href="/template-websekolah/src/index.php" class="hover:text-white transition">Beranda</a>
            <span class="mx-2">/</span>
            <span class="text-white font-medium">Struktur Organisasi</span>
        </div>

        <div class="text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                <i class="fas fa-sitemap mr-3"></i>Struktur Oraganisasi Sekolah
            </h1>
            <p class="text-lg text-white/90 max-w-2xl mx-auto">
                Menampilkan struktur organisasi sekolah secara jelas dan terperinci untuk memberikan gambaran tentang peran dan tanggung jawab setiap anggota dalam komunitas sekolah kami.
            </p>
        </div>
    </div>
</div>

<section class="py-16 bg-gradient-to-b from-stone-100 to-blue-100">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h1 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">
                Struktur Organisasi Skatusa
            </h1>
            <div class="w-20 h-1 bg-blue-600 mx-auto rounded-full"></div>
        </div>
        <img src="/Template-WebSekolah/assets/images/Struktur-organisasi.png" alt="">
    </div>
</section>

<?php

include '../src/includes/footer.php';

?>