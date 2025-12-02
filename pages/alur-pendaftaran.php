<?php
$page_title = 'Alur Pendaftaran';
include '../src/includes/header.php';
?>

<!-- Hero Section -->
<div class="hero-gradient relative overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-10"></div>
    <div class="container mx-auto px-4 py-16 relative z-10">
        <!-- Breadcrumb -->
        <div class="text-white/80 text-sm mb-6">
            <i class="fas fa-home mr-2"></i>
            <a href="/Template-WebSekolah/src/index.php" class="hover:text-white transition">Beranda</a>
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
        <div class="max-w-4xl mx-auto">

            <!-- Intro -->
            <div class="text-center mb-12">
                <p class="text-gray-700 text-lg">
                    Proses pendaftaran PPDB dilakukan secara offline. Berikut adalah tahapan yang harus Anda lalui
                    untuk menjadi bagian dari keluarga besar sekolah kami.
                </p>
            </div>

            <!-- Alur Pendaftaran List -->
            <div class="bg-white rounded-xl shadow-lg p-8 md:p-12 mb-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-8 text-center">Langkah-Langkah Pendaftaran</h2>

                <ol class="space-y-6 text-gray-700 text-lg">
                    <li class="flex gap-4">
                        <span class="flex-shrink-0 w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">1</span>
                        <div>
                            <strong class="text-gray-900">Ambil Formulir</strong><br>
                            Datang ke sekolah pada jam kerja (Senin-Jumat, 08.00-14.00 WIB), menuju bagian Tata Usaha (TU), dan bawa fotokopi Kartu Keluarga & Ijazah.
                        </div>
                    </li>

                    <li class="flex gap-4">
                        <span class="flex-shrink-0 w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">2</span>
                        <div>
                            <strong class="text-gray-900">Isi Formulir</strong><br>
                            Lengkapi data diri dengan benar, lampirkan berkas persyaratan, dan periksa kembali data sebelum diserahkan.
                        </div>
                    </li>

                    <li class="flex gap-4">
                        <span class="flex-shrink-0 w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">3</span>
                        <div>
                            <strong class="text-gray-900">Serahkan Berkas</strong><br>
                            Serahkan formulir yang sudah diisi ke bagian PPDB, dapatkan nomor pendaftaran, dan simpan bukti pendaftaran dengan baik.
                        </div>
                    </li>

                    <li class="flex gap-4">
                        <span class="flex-shrink-0 w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">4</span>
                        <div>
                            <strong class="text-gray-900">Tes Seleksi</strong><br>
                            Ikuti tes tulis (Matematika, Bahasa Inggris, IPA) dan tes wawancara dengan tim seleksi. Jangan lupa bawa alat tulis dan kartu peserta.
                        </div>
                    </li>

                    <li class="flex gap-4">
                        <span class="flex-shrink-0 w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">5</span>
                        <div>
                            <strong class="text-gray-900">Pengumuman</strong><br>
                            Lihat papan pengumuman di sekolah atau hubungi sekolah via telepon/WhatsApp. Catat jadwal daftar ulang jika diterima.
                        </div>
                    </li>

                    <li class="flex gap-4">
                        <span class="flex-shrink-0 w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">6</span>
                        <div>
                            <strong class="text-gray-900">Daftar Ulang</strong><br>
                            Bayar biaya pendaftaran & SPP, foto untuk kartu pelajar, dan ambil seragam serta perlengkapan sekolah.
                        </div>
                    </li>
                </ol>

                <div class="mt-10 pt-8 border-t border-gray-200 text-center">
                    <div class="inline-flex items-center gap-3 bg-green-50 text-green-700 px-6 py-3 rounded-lg font-semibold text-lg">
                        <i class="fas fa-check-circle text-2xl"></i>
                        <span>Selamat, Anda Telah Menjadi Bagian dari Keluarga Kami!</span>
                    </div>
                </div>
            </div>

            <!-- Info Box -->
            <div class="bg-blue-50 border-l-4 border-blue-600 rounded-lg p-6 mb-8">
                <div class="flex items-start gap-4">
                    <i class="fas fa-info-circle text-blue-600 text-2xl flex-shrink-0"></i>
                    <div>
                        <h4 class="font-bold text-gray-800 text-lg mb-2">Informasi Penting</h4>
                        <ul class="text-gray-700 space-y-1">
                            <li>• Pendaftaran dibuka setiap hari Senin - Jumat pukul 08.00 - 14.00 WIB</li>
                            <li>• Bawa dokumen asli untuk verifikasi</li>
                            <li>• Untuk informasi lebih lanjut, hubungi bagian PPDB</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- CTA Section -->
            <div class=" w-[75%] text-center mx-auto bg-gradient-to-r from-blue-600 to-blue-700 rounded-xl p-8 shadow-xl">
                <h3 class="text-2xl font-bold text-white mb-4">Butuh Bantuan?</h3>
                <p class="text-white/90 mb-6">
                    Tim kami siap membantu menjawab pertanyaan Anda
                </p>
                <div class="flex flex-wrap gap-4 justify-center">
                    <a href="/template-websekolah/pages/kontak.php" class="inline-flex items-center gap-2 px-6 py-3 bg-white text-blue-600 rounded-lg hover:bg-gray-100 transition font-semibold">
                        <i class="fas fa-phone"></i>
                        Hubungi Kami
                    </a>
                    <a href="/Template-WebSekolah/pages/syarat-ketentuan.php" class="inline-flex items-center gap-2 px-6 py-3 bg-white/20 hover:bg-white/30 text-white rounded-lg transition font-semibold border-2 border-white/50">
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