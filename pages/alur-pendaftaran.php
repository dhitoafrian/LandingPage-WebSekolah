<?php
$page_title = 'Alur Pendaftaran';
include '../src/includes/header.php';
?>

<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

    * {
        font-family: 'Inter', sans-serif;
    }

    .hero-gradient {
        background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
    }

    .step-card {
        transition: all 0.3s ease;
    }

    .step-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 24px rgba(59, 130, 246, 0.2);
    }

    .arrow-right {
        font-size: 2.5rem;
        color: #3b82f6;
        animation: slideRight 1.5s ease-in-out infinite;
    }

    .arrow-left {
        font-size: 2.5rem;
        color: #3b82f6;
        animation: slideLeft 1.5s ease-in-out infinite;
    }

    .arrow-down {
        font-size: 2.5rem;
        color: #3b82f6;
        animation: slideDown 1.5s ease-in-out infinite;
    }

    @keyframes slideRight {

        0%,
        100% {
            transform: translateX(0);
        }

        50% {
            transform: translateX(10px);
        }
    }

    @keyframes slideLeft {

        0%,
        100% {
            transform: translateX(0);
        }

        50% {
            transform: translateX(-10px);
        }
    }

    @keyframes slideDown {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(10px);
        }
    }
</style>

<!-- Hero Section -->
<div class="hero-gradient relative overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-10"></div>
    <div class="container mx-auto px-4 py-16 relative z-10">
        <!-- Breadcrumb -->
        <div class="text-white/80 text-sm mb-6">
            <i class="fas fa-home mr-2"></i>
            <a href="/" class="hover:text-white transition">Beranda</a>
            <span class="mx-2">/</span>
            <span class="text-white font-medium">Alur Pendaftaran</span>
        </div>

        <div class="text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                <i class="fas fa-route mr-3"></i>Alur Pendaftaran
            </h1>
            <p class="text-lg text-white/90 max-w-2xl mx-auto">
                Ikuti langkah-langkah pendaftaran dengan mudah dan terstruktur
            </p>
        </div>
    </div>
</div>

<div class="bg-gray-50 py-12">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">

            <!-- Intro -->
            <div class="text-center mb-12">
                <p class="text-gray-700 text-lg max-w-3xl mx-auto">
                    Proses pendaftaran PPDB dilakukan secara offline. Berikut adalah tahapan yang harus Anda lalui
                    untuk menjadi bagian dari keluarga besar sekolah kami.
                </p>
            </div>

            <!-- FLOW 1: Step 1 -> Step 2 -->
            <div class="grid md:grid-cols-2 gap-8 items-center mb-8">
                <!-- Step 1 -->
                <div class="step-card bg-white rounded-xl shadow-lg p-8 border-l-4 border-blue-600">
                    <div class="flex items-start gap-4">
                        <div class="bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center flex-shrink-0 text-2xl font-bold">
                            1
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-3">Ambil Formulir</h3>
                            <ul class="text-gray-600 space-y-2">
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                    <span>Datang ke sekolah pada jam kerja</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                    <span>Ke bagian Tata Usaha (TU)</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                    <span>Bawa fotokopi KK & Ijazah</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Arrow Right -->
                <div class="hidden md:flex justify-center">
                    <i class="fas fa-arrow-right arrow-right"></i>
                </div>

                <!-- Mobile Arrow Down -->
                <div class="md:hidden flex justify-center">
                    <i class="fas fa-arrow-down arrow-down"></i>
                </div>

                <!-- Step 2 -->
                <div class="step-card bg-white rounded-xl shadow-lg p-8 border-l-4 border-green-600">
                    <div class="flex items-start gap-4">
                        <div class="bg-green-600 text-white w-16 h-16 rounded-full flex items-center justify-center flex-shrink-0 text-2xl font-bold">
                            2
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-3">Isi Formulir</h3>
                            <ul class="text-gray-600 space-y-2">
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                    <span>Lengkapi data diri dengan benar</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                    <span>Lampirkan berkas persyaratan</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                    <span>Periksa kembali data sebelum diserahkan</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Arrow Down (from Step 2 to Step 3) -->
            <div class="flex justify-center md:justify-end md:pr-32 mb-8">
                <i class="fas fa-arrow-down arrow-down"></i>
            </div>

            <!-- FLOW 2: Step 4 <- Step 3 -->
            <div class="grid md:grid-cols-2 gap-8 items-center mb-8">
                <!-- Step 4 -->
                <div class="step-card bg-white rounded-xl shadow-lg p-8 border-l-4 border-purple-600 md:order-1 order-2">
                    <div class="flex items-start gap-4">
                        <div class="bg-purple-600 text-white w-16 h-16 rounded-full flex items-center justify-center flex-shrink-0 text-2xl font-bold">
                            4
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-3">Tes Seleksi</h3>
                            <ul class="text-gray-600 space-y-2">
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                    <span>Tes tulis (Matematika, B.Inggris, IPA)</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                    <span>Tes wawancara dengan tim seleksi</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                    <span>Bawa alat tulis & kartu peserta</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Arrow Left -->
                <div class="hidden md:flex justify-center md:order-2">
                    <i class="fas fa-arrow-left arrow-left"></i>
                </div>

                <!-- Mobile Arrow Down -->
                <div class="md:hidden flex justify-center order-1">
                    <i class="fas fa-arrow-down arrow-down"></i>
                </div>

                <!-- Step 3 -->
                <div class="step-card bg-white rounded-xl shadow-lg p-8 border-l-4 border-yellow-600 md:order-3 order-3">
                    <div class="flex items-start gap-4">
                        <div class="bg-yellow-600 text-white w-16 h-16 rounded-full flex items-center justify-center flex-shrink-0 text-2xl font-bold">
                            3
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-3">Serahkan Berkas</h3>
                            <ul class="text-gray-600 space-y-2">
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                    <span>Serahkan formulir ke bagian PPDB</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                    <span>Dapatkan nomor pendaftaran</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                    <span>Simpan bukti pendaftaran</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Arrow Down (from Step 4 to Step 5) -->
            <div class="flex justify-center md:justify-start md:pl-32 mb-8">
                <i class="fas fa-arrow-down arrow-down"></i>
            </div>

            <!-- FLOW 3: Step 5 -> Step 6 -->
            <div class="grid md:grid-cols-2 gap-8 items-center mb-8">
                <!-- Step 5 -->
                <div class="step-card bg-white rounded-xl shadow-lg p-8 border-l-4 border-red-600">
                    <div class="flex items-start gap-4">
                        <div class="bg-red-600 text-white w-16 h-16 rounded-full flex items-center justify-center flex-shrink-0 text-2xl font-bold">
                            5
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-3">Pengumuman</h3>
                            <ul class="text-gray-600 space-y-2">
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                    <span>Lihat papan pengumuman sekolah</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                    <span>Atau hubungi sekolah via telepon/WA</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                    <span>Catat jadwal daftar ulang jika diterima</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Arrow Right -->
                <div class="hidden md:flex justify-center">
                    <i class="fas fa-arrow-right arrow-right"></i>
                </div>

                <!-- Mobile Arrow Down -->
                <div class="md:hidden flex justify-center">
                    <i class="fas fa-arrow-down arrow-down"></i>
                </div>

                <!-- Step 6 -->
                <div class="step-card bg-white rounded-xl shadow-lg p-8 border-l-4 border-indigo-600">
                    <div class="flex items-start gap-4">
                        <div class="bg-indigo-600 text-white w-16 h-16 rounded-full flex items-center justify-center flex-shrink-0 text-2xl font-bold">
                            6
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-3">Daftar Ulang</h3>
                            <ul class="text-gray-600 space-y-2">
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                    <span>Bayar biaya pendaftaran & SPP</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                    <span>Foto untuk kartu pelajar</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                    <span>Ambil seragam & perlengkapan</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Success Badge -->
            <div class="flex justify-center mt-12 mb-8">
                <div class="bg-gradient-to-r from-green-500 to-green-600 text-white px-8 py-4 rounded-full shadow-lg">
                    <i class="fas fa-check-circle text-3xl mr-3"></i>
                    <span class="text-2xl font-bold">SELESAI - Selamat Bergabung!</span>
                </div>
            </div>

            <!-- Info Box -->
            <div class="bg-blue-50 border-l-4 border-blue-600 rounded-lg p-6 mb-12">
                <div class="flex items-start gap-4">
                    <i class="fas fa-info-circle text-blue-600 text-2xl mt-1"></i>
                    <div>
                        <h4 class="font-bold text-gray-800 text-lg mb-2">Informasi Penting</h4>
                        <ul class="text-gray-700 space-y-1 text-sm">
                            <li>• Pendaftaran dibuka setiap hari Senin - Jumat pukul 08.00 - 14.00 WIB</li>
                            <li>• Bawa dokumen asli untuk verifikasi</li>
                            <li>• Untuk informasi lebih lanjut, hubungi bagian PPDB</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="text-center bg-gradient-to-r from-blue-600 to-blue-700 rounded-xl p-8 shadow-xl">
                <h3 class="text-2xl font-bold text-white mb-4">Butuh Bantuan?</h3>
                <p class="text-white/90 mb-6">
                    Tim kami siap membantu menjawab pertanyaan Anda
                </p>
                <div class="flex flex-wrap gap-4 justify-center">
                    <a href="kontak.php" class="inline-flex items-center gap-2 px-6 py-3 bg-white text-blue-600 rounded-lg hover:bg-gray-100 transition font-semibold">
                        <i class="fas fa-phone"></i>
                        Hubungi Kami
                    </a>
                    <a href="syarat-pendaftaran.php" class="inline-flex items-center gap-2 px-6 py-3 bg-white/20 hover:bg-white/30 text-white rounded-lg transition font-semibold border-2 border-white/50">
                        <i class="fas fa-file-alt"></i>
                        Lihat Syarat Pendaftaran
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
include '../src/includes/footer.php';
?>