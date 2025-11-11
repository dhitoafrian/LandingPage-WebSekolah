<?php
$page_title = "Profil Sekolah";
include '../src/includes/header.php';
?>

<!-- Page Header -->
<section class="relative h-64 bg-gradient-to-r from-blue-900 to-blue-700 flex items-center">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="container mx-auto px-4 relative z-10">
        <nav class="flex items-center gap-2 text-white/80 text-sm mb-4">
            <a href="index.php" class="hover:text-white transition-colors">Beranda</a>
            <i class="fas fa-chevron-right text-xs"></i>
            <span class="text-white">Profil Sekolah</span>
        </nav>
        <h1 class="text-4xl md:text-5xl font-bold text-white">Profil Sekolah</h1>
    </div>
</section>

<!-- Profile Content -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        
        <!-- School Identity -->
        <div class="bg-gradient-to-br from-blue-50 to-white rounded-2xl shadow-xl p-8 md:p-12 mb-12 border border-blue-100">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="lg:col-span-1 flex justify-center items-start">
                    <img src="https://via.placeholder.com/300x300/2563eb/ffffff?text=Logo+Sekolah" alt="Logo Sekolah" class="w-64 h-64 rounded-2xl shadow-lg">
                </div>
                <div class="lg:col-span-2">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Identitas Sekolah</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-school text-blue-600"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Nama Sekolah</p>
                                <p class="font-semibold text-gray-800">Sekolah Modern Unggulan</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-certificate text-blue-600"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">NPSN</p>
                                <p class="font-semibold text-gray-800">12345678</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-map-marker-alt text-blue-600"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Alamat</p>
                                <p class="font-semibold text-gray-800">Jl. Pendidikan No. 123, Yogyakarta</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-award text-blue-600"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Akreditasi</p>
                                <p class="font-semibold text-gray-800">A (Unggul)</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-user-tie text-blue-600"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Kepala Sekolah</p>
                                <p class="font-semibold text-gray-800">Dr. Ahmad Suryanto, M.Pd</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-calendar text-blue-600"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Tahun Berdiri</p>
                                <p class="font-semibold text-gray-800">2005</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- About School -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Tentang Sekolah Kami</h2>
            <div class="prose max-w-none">
                <p class="text-gray-600 leading-relaxed mb-4">
                    Sekolah Modern Unggulan adalah lembaga pendidikan yang berkomitmen untuk menghasilkan generasi yang unggul dalam prestasi akademik dan non-akademik, serta memiliki akhlak mulia. Dengan pengalaman lebih dari 20 tahun dalam dunia pendidikan, kami telah berhasil mencetak ribuan alumni yang sukses di berbagai bidang.
                </p>
                <p class="text-gray-600 leading-relaxed mb-4">
                    Sekolah kami dilengkapi dengan fasilitas modern dan lengkap untuk mendukung proses pembelajaran yang efektif dan menyenangkan. Tim pengajar kami terdiri dari guru-guru profesional yang berpengalaman dan berkompeten di bidangnya masing-masing.
                </p>
                <p class="text-gray-600 leading-relaxed">
                    Kami menerapkan kurikulum nasional yang diperkaya dengan program-program unggulan untuk mengembangkan potensi siswa secara maksimal. Pendekatan pembelajaran yang kami terapkan berfokus pada pengembangan karakter, keterampilan berpikir kritis, dan kemampuan berkolaborasi.
                </p>
            </div>
        </div>

        <!-- Statistics -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-16">
            <div class="bg-gradient-to-br from-blue-600 to-blue-700 rounded-2xl p-6 text-white text-center transform hover:scale-105 transition-all">
                <div class="text-4xl font-bold mb-2">1500+</div>
                <div class="text-blue-100">Siswa Aktif</div>
            </div>
            <div class="bg-gradient-to-br from-green-600 to-green-700 rounded-2xl p-6 text-white text-center transform hover:scale-105 transition-all">
                <div class="text-4xl font-bold mb-2">85+</div>
                <div class="text-green-100">Tenaga Pengajar</div>
            </div>
            <div class="bg-gradient-to-br from-purple-600 to-purple-700 rounded-2xl p-6 text-white text-center transform hover:scale-105 transition-all">
                <div class="text-4xl font-bold mb-2">30+</div>
                <div class="text-purple-100">Ekstrakurikuler</div>
            </div>
            <div class="bg-gradient-to-br from-orange-600 to-orange-700 rounded-2xl p-6 text-white text-center transform hover:scale-105 transition-all">
                <div class="text-4xl font-bold mb-2">150+</div>
                <div class="text-orange-100">Prestasi</div>
            </div>
        </div>

        <!-- Facilities -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Fasilitas Sekolah</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-100 hover:shadow-2xl transition-all">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-flask text-3xl text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 text-center mb-2">Laboratorium IPA</h3>
                    <p class="text-gray-600 text-center text-sm">Laboratorium lengkap untuk praktikum Fisika, Kimia, dan Biologi</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-100 hover:shadow-2xl transition-all">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-laptop text-3xl text-green-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 text-center mb-2">Lab Komputer</h3>
                    <p class="text-gray-600 text-center text-sm">Ruang komputer modern dengan koneksi internet cepat</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-100 hover:shadow-2xl transition-all">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-book text-3xl text-purple-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 text-center mb-2">Perpustakaan</h3>
                    <p class="text-gray-600 text-center text-sm">Perpustakaan dengan koleksi buku yang lengkap dan ruang baca nyaman</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-100 hover:shadow-2xl transition-all">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-futbol text-3xl text-red-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 text-center mb-2">Lapangan Olahraga</h3>
                    <p class="text-gray-600 text-center text-sm">Lapangan basket, voli, dan futsal yang memadai</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-100 hover:shadow-2xl transition-all">
                    <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-theater-masks text-3xl text-yellow-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 text-center mb-2">Aula Serbaguna</h3>
                    <p class="text-gray-600 text-center text-sm">Aula modern untuk berbagai kegiatan sekolah</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-100 hover:shadow-2xl transition-all">
                    <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-mosque text-3xl text-indigo-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 text-center mb-2">Masjid</h3>
                    <p class="text-gray-600 text-center text-sm">Masjid untuk kegiatan ibadah dan pembinaan rohani</p>
                </div>
            </div>
        </div>

        <!-- Achievement Section -->
        <div class="bg-gradient-to-r from-blue-600 to-blue-800 rounded-2xl p-8 md:p-12 text-white text-center">
            <h2 class="text-3xl font-bold mb-4">Bergabunglah dengan Kami</h2>
            <p class="text-blue-100 mb-8 max-w-2xl mx-auto">
                Jadilah bagian dari keluarga besar Sekolah Modern Unggulan dan raih prestasi terbaikmu bersama kami.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="info-ppdb.php" class="inline-block bg-white text-blue-600 px-8 py-4 rounded-full font-bold hover:bg-blue-50 transition-all transform hover:scale-105 shadow-xl">
                    Daftar Sekarang
                </a>
                <a href="kontak.php" class="inline-block bg-transparent border-2 border-white text-white px-8 py-4 rounded-full font-bold hover:bg-white hover:text-blue-600 transition-all transform hover:scale-105">
                    Hubungi Kami
                </a>
            </div>
        </div>

    </div>
</section>

<?php include '../src/includes/footer.php'; ?>