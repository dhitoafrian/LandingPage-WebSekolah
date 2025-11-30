<?php
$page_title = 'Visi dan Misi';
include '../src/includes/header.php';
?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');

    * {
        font-family: 'Inter', sans-serif;
    }

    .hero-gradient {
        background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
    }

    .mission-card {
        transition: all 0.3s ease;
    }

    .mission-card:hover {
        transform: translateX(8px);
        box-shadow: 0 4px 12px rgba(59, 130, 246, 0.2);
    }

    .mission-number {
        transition: all 0.3s ease;
    }

    .mission-card:hover .mission-number {
        background: linear-gradient(135deg, #3b82f6, #2563eb);
        transform: scale(1.1);
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
            <span class="text-white font-medium">Visi Misi</span>
        </div>

        <div class="text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                Visi & Misi
            </h1>
            <p class="text-lg text-white/90 max-w-2xl mx-auto">
                Arah dan tujuan SMK Negeri 1 Saptosari dalam mewujudkan pendidikan berkualitas
            </p>
        </div>
    </div>
</div>

<!-- Main Content -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 max-w-6xl">

        <!-- VISI Section -->
        <div class="mb-16">
            <div class="text-center mb-8">
                <span class="inline-block bg-blue-100 text-blue-600 px-4 py-2 rounded-full text-sm font-semibold mb-4">
                    VISI SEKOLAH
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Visi Kami</h2>
            </div>

            <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12 border-t-4 border-blue-600">
                <div class="flex items-start gap-4 mb-6">
                    <div class="flex-shrink-0 w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center">
                        <i class="fas fa-lightbulb text-3xl text-blue-600"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-xl md:text-2xl text-gray-800 leading-relaxed font-medium">
                            Membentuk lulusan yang <span class="text-blue-600 font-bold">unggul</span>, 
                            <span class="text-blue-600 font-bold">berkarakter</span>, 
                            <span class="text-blue-600 font-bold">berbudaya industri</span>, dan 
                            <span class="text-blue-600 font-bold">berjiwa wirausaha</span>
                        </p>
                    </div>
                </div>
                
                <!-- Visi Breakdown -->
                <div class="grid md:grid-cols-4 gap-4 mt-8">
                    <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-4 rounded-xl text-center">
                        <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-3">
                            <i class="fas fa-trophy text-white text-xl"></i>
                        </div>
                        <h4 class="font-bold text-gray-900 mb-1">Unggul</h4>
                        <p class="text-xs text-gray-600">Berprestasi & Kompeten</p>
                    </div>
                    <div class="bg-gradient-to-br from-green-50 to-green-100 p-4 rounded-xl text-center">
                        <div class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-3">
                            <i class="fas fa-heart text-white text-xl"></i>
                        </div>
                        <h4 class="font-bold text-gray-900 mb-1">Berkarakter</h4>
                        <p class="text-xs text-gray-600">Berakhlak Mulia</p>
                    </div>
                    <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-4 rounded-xl text-center">
                        <div class="w-12 h-12 bg-purple-600 rounded-full flex items-center justify-center mx-auto mb-3">
                            <i class="fas fa-industry text-white text-xl"></i>
                        </div>
                        <h4 class="font-bold text-gray-900 mb-1">Budaya Industri</h4>
                        <p class="text-xs text-gray-600">Profesional & Disiplin</p>
                    </div>
                    <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-4 rounded-xl text-center">
                        <div class="w-12 h-12 bg-orange-600 rounded-full flex items-center justify-center mx-auto mb-3">
                            <i class="fas fa-rocket text-white text-xl"></i>
                        </div>
                        <h4 class="font-bold text-gray-900 mb-1">Wirausaha</h4>
                        <p class="text-xs text-gray-600">Inovatif & Mandiri</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- MISI Section -->
        <div class="mb-16">
            <div class="text-center mb-8">
                <span class="inline-block bg-green-100 text-green-600 px-4 py-2 rounded-full text-sm font-semibold mb-4">
                    MISI SEKOLAH
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Misi Kami</h2>
                <p class="text-gray-600 mt-2">Langkah strategis untuk mewujudkan visi sekolah</p>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                
                <!-- Misi 1 -->
                <div class="mission-card bg-white rounded-xl shadow-md p-6 border-l-4 border-blue-600">
                    <div class="flex items-start gap-4">
                        <div class="mission-number flex-shrink-0 w-12 h-12 rounded-xl bg-blue-600 text-white flex items-center justify-center text-lg font-bold">
                            1
                        </div>
                        <p class="text-gray-700 leading-relaxed">
                            Mengembangkan kegiatan pembelajaran yang kreatif, inovatif, dan kolaboratif
                        </p>
                    </div>
                </div>

                <!-- Misi 2 -->
                <div class="mission-card bg-white rounded-xl shadow-md p-6 border-l-4 border-blue-600">
                    <div class="flex items-start gap-4">
                        <div class="mission-number flex-shrink-0 w-12 h-12 rounded-xl bg-blue-600 text-white flex items-center justify-center text-lg font-bold">
                            2
                        </div>
                        <p class="text-gray-700 leading-relaxed">
                            Mengembangkan kegiatan pembelajaran berbasis TEFA (Teaching Factory)
                        </p>
                    </div>
                </div>

                <!-- Misi 3 -->
                <div class="mission-card bg-white rounded-xl shadow-md p-6 border-l-4 border-blue-600">
                    <div class="flex items-start gap-4">
                        <div class="mission-number flex-shrink-0 w-12 h-12 rounded-xl bg-blue-600 text-white flex items-center justify-center text-lg font-bold">
                            3
                        </div>
                        <p class="text-gray-700 leading-relaxed">
                            Mengembangkan kegiatan literasi numerasi untuk meningkatkan kemampuan akademik
                        </p>
                    </div>
                </div>

                <!-- Misi 4 -->
                <div class="mission-card bg-white rounded-xl shadow-md p-6 border-l-4 border-blue-600">
                    <div class="flex items-start gap-4">
                        <div class="mission-number flex-shrink-0 w-12 h-12 rounded-xl bg-blue-600 text-white flex items-center justify-center text-lg font-bold">
                            4
                        </div>
                        <p class="text-gray-700 leading-relaxed">
                            Mengembangkan program kesamaptaan untuk menguatkan fisik dan mental
                        </p>
                    </div>
                </div>

                <!-- Misi 5 -->
                <div class="mission-card bg-white rounded-xl shadow-md p-6 border-l-4 border-blue-600">
                    <div class="flex items-start gap-4">
                        <div class="mission-number flex-shrink-0 w-12 h-12 rounded-xl bg-blue-600 text-white flex items-center justify-center text-lg font-bold">
                            5
                        </div>
                        <p class="text-gray-700 leading-relaxed">
                            Mengoptimalkan sumber daya untuk meningkatkan mutu pendidikan
                        </p>
                    </div>
                </div>

                <!-- Misi 6 -->
                <div class="mission-card bg-white rounded-xl shadow-md p-6 border-l-4 border-blue-600">
                    <div class="flex items-start gap-4">
                        <div class="mission-number flex-shrink-0 w-12 h-12 rounded-xl bg-blue-600 text-white flex items-center justify-center text-lg font-bold">
                            6
                        </div>
                        <p class="text-gray-700 leading-relaxed">
                            Mengembangkan program untuk meningkatkan keimanan dan ketaqwaan kepada Tuhan Yang Maha Esa
                        </p>
                    </div>
                </div>

                <!-- Misi 7 -->
                <div class="mission-card bg-white rounded-xl shadow-md p-6 border-l-4 border-blue-600">
                    <div class="flex items-start gap-4">
                        <div class="mission-number flex-shrink-0 w-12 h-12 rounded-xl bg-blue-600 text-white flex items-center justify-center text-lg font-bold">
                            7
                        </div>
                        <p class="text-gray-700 leading-relaxed">
                            Menerapkan prinsip efisiensi, efektivitas dan produktivitas di semua bidang
                        </p>
                    </div>
                </div>

                <!-- Misi 8 -->
                <div class="mission-card bg-white rounded-xl shadow-md p-6 border-l-4 border-blue-600">
                    <div class="flex items-start gap-4">
                        <div class="mission-number flex-shrink-0 w-12 h-12 rounded-xl bg-blue-600 text-white flex items-center justify-center text-lg font-bold">
                            8
                        </div>
                        <p class="text-gray-700 leading-relaxed">
                            Mengembangkan hard skill dan soft skill kompetitif yang diperlukan dunia industri
                        </p>
                    </div>
                </div>

                <!-- Misi 9 -->
                <div class="mission-card bg-white rounded-xl shadow-md p-6 border-l-4 border-blue-600">
                    <div class="flex items-start gap-4">
                        <div class="mission-number flex-shrink-0 w-12 h-12 rounded-xl bg-blue-600 text-white flex items-center justify-center text-lg font-bold">
                            9
                        </div>
                        <p class="text-gray-700 leading-relaxed">
                            Meningkatkan kualitas Pendidik dan Tenaga Kependidikan secara berkelanjutan
                        </p>
                    </div>
                </div>

                <!-- Misi 10 -->
                <div class="mission-card bg-white rounded-xl shadow-md p-6 border-l-4 border-blue-600">
                    <div class="flex items-start gap-4">
                        <div class="mission-number flex-shrink-0 w-12 h-12 rounded-xl bg-blue-600 text-white flex items-center justify-center text-lg font-bold">
                            10
                        </div>
                        <p class="text-gray-700 leading-relaxed">
                            Menerapkan program untuk mengembangkan jiwa wirausaha
                        </p>
                    </div>
                </div>

                <!-- Misi 11 -->
                <div class="mission-card bg-white rounded-xl shadow-md p-6 border-l-4 border-blue-600 md:col-span-2">
                    <div class="flex items-start gap-4">
                        <div class="mission-number flex-shrink-0 w-12 h-12 rounded-xl bg-blue-600 text-white flex items-center justify-center text-lg font-bold">
                            11
                        </div>
                        <p class="text-gray-700 leading-relaxed">
                            Membangun, memperluas, dan mempererat jalinan kemitraan (link and match) dengan lembaga relevan dalam dan luar negeri
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <!-- MOTTO Section -->
        <div>
            <div class="bg-gradient-to-r from-blue-600 to-blue-700 rounded-2xl shadow-xl p-8 md:p-12 text-center text-white">
                <span class="inline-block bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-semibold mb-6">
                    MOTTO SEKOLAH
                </span>
                <p class="text-3xl md:text-4xl font-bold mb-8">
                    Unggul, Mandiri, Berkarakter
                </p>
                
                <div class="grid md:grid-cols-3 gap-6 max-w-3xl mx-auto">
                    <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl">
                        <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-star text-blue-600 text-2xl"></i>
                        </div>
                        <h4 class="font-bold text-lg mb-2">Unggul</h4>
                        <p class="text-sm text-blue-100">Berprestasi dalam akademik dan non-akademik</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl">
                        <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-user-check text-blue-600 text-2xl"></i>
                        </div>
                        <h4 class="font-bold text-lg mb-2">Mandiri</h4>
                        <p class="text-sm text-blue-100">Mampu berdiri sendiri dan berkarya</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl">
                        <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-shield-alt text-blue-600 text-2xl"></i>
                        </div>
                        <h4 class="font-bold text-lg mb-2">Berkarakter</h4>
                        <p class="text-sm text-blue-100">Berakhlak mulia dan berintegritas tinggi</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<?php
include '../src/includes/footer.php';
?>