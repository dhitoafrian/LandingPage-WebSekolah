<?php 
    $page_title = 'Kurikulum';
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
    
    .download-card {
        transition: all 0.3s ease;
    }
    
    .download-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 24px rgba(59, 130, 246, 0.2);
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
            <span class="text-white font-medium">Kurikulum</span>
        </div>
        
        <div class="text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                <i class="fas fa-book-open mr-3"></i>Kurikulum Sekolah
            </h1>
            <p class="text-lg text-white/90 max-w-2xl mx-auto">
                Dokumen kurikulum dan panduan pembelajaran tahun ajaran 2024/2025
            </p>
        </div>
    </div>
</div>

<div class="bg-gray-50 py-12">
    <div class="container mx-auto px-4">
        
        <!-- Intro Section -->
        <div class="max-w-4xl mx-auto mb-12 text-center">
            <p class="text-gray-700 text-lg leading-relaxed mb-4">
                Sekolah kami menerapkan <strong>Kurikulum Merdeka</strong> yang berfokus pada pengembangan kompetensi 
                dan karakter siswa. Kurikulum dirancang untuk memberikan fleksibilitas dalam pembelajaran 
                sambil tetap mengacu pada standar pendidikan nasional.
            </p>
            <p class="text-gray-600">
                Unduh dokumen kurikulum lengkap di bawah ini untuk informasi lebih detail.
            </p>
        </div>

        <!-- Download Cards -->
        <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <!-- Card 1 -->
            <div class="download-card bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="bg-gradient-to-br from-blue-500 to-blue-600 p-8 text-center">
                    <i class="fas fa-file-pdf text-white text-6xl mb-3"></i>
                    <div class="text-white/90 text-sm font-medium">Kelas X</div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Kurikulum Kelas X</h3>
                    <p class="text-gray-600 text-sm mb-4">
                        Dokumen kurikulum lengkap untuk siswa kelas 10 tahun ajaran 2024/2025
                    </p>
                    <div class="flex items-center justify-between text-xs text-gray-500 mb-4">
                        <span><i class="far fa-file-pdf mr-1"></i>PDF</span>
                        <span><i class="fas fa-download mr-1"></i>1.2 MB</span>
                    </div>
                    <a href="/assets/documents/kurikulum-kelas-10.pdf" download class="block w-full px-4 py-3 bg-blue-600 hover:bg-blue-700 text-white text-center rounded-lg transition font-semibold">
                        <i class="fas fa-download mr-2"></i>Download PDF
                    </a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="download-card bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="bg-gradient-to-br from-green-500 to-green-600 p-8 text-center">
                    <i class="fas fa-file-pdf text-white text-6xl mb-3"></i>
                    <div class="text-white/90 text-sm font-medium">Kelas XI</div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Kurikulum Kelas XI</h3>
                    <p class="text-gray-600 text-sm mb-4">
                        Dokumen kurikulum lengkap untuk siswa kelas 11 tahun ajaran 2024/2025
                    </p>
                    <div class="flex items-center justify-between text-xs text-gray-500 mb-4">
                        <span><i class="far fa-file-pdf mr-1"></i>PDF</span>
                        <span><i class="fas fa-download mr-1"></i>1.3 MB</span>
                    </div>
                    <a href="/assets/documents/kurikulum-kelas-11.pdf" download class="block w-full px-4 py-3 bg-green-600 hover:bg-green-700 text-white text-center rounded-lg transition font-semibold">
                        <i class="fas fa-download mr-2"></i>Download PDF
                    </a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="download-card bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="bg-gradient-to-br from-purple-500 to-purple-600 p-8 text-center">
                    <i class="fas fa-file-pdf text-white text-6xl mb-3"></i>
                    <div class="text-white/90 text-sm font-medium">Kelas XII</div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Kurikulum Kelas XII</h3>
                    <p class="text-gray-600 text-sm mb-4">
                        Dokumen kurikulum lengkap untuk siswa kelas 12 tahun ajaran 2024/2025
                    </p>
                    <div class="flex items-center justify-between text-xs text-gray-500 mb-4">
                        <span><i class="far fa-file-pdf mr-1"></i>PDF</span>
                        <span><i class="fas fa-download mr-1"></i>1.4 MB</span>
                    </div>
                    <a href="/assets/documents/kurikulum-kelas-12.pdf" download class="block w-full px-4 py-3 bg-purple-600 hover:bg-purple-700 text-white text-center rounded-lg transition font-semibold">
                        <i class="fas fa-download mr-2"></i>Download PDF
                    </a>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="download-card bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="bg-gradient-to-br from-orange-500 to-orange-600 p-8 text-center">
                    <i class="fas fa-calendar-alt text-white text-6xl mb-3"></i>
                    <div class="text-white/90 text-sm font-medium">2024/2025</div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Kalender Akademik</h3>
                    <p class="text-gray-600 text-sm mb-4">
                        Jadwal kegiatan akademik dan libur sekolah tahun ajaran 2024/2025
                    </p>
                    <div class="flex items-center justify-between text-xs text-gray-500 mb-4">
                        <span><i class="far fa-file-pdf mr-1"></i>PDF</span>
                        <span><i class="fas fa-download mr-1"></i>800 KB</span>
                    </div>
                    <a href="/assets/documents/kalender-akademik.pdf" download class="block w-full px-4 py-3 bg-orange-600 hover:bg-orange-700 text-white text-center rounded-lg transition font-semibold">
                        <i class="fas fa-download mr-2"></i>Download PDF
                    </a>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="download-card bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="bg-gradient-to-br from-red-500 to-red-600 p-8 text-center">
                    <i class="fas fa-clipboard-list text-white text-6xl mb-3"></i>
                    <div class="text-white/90 text-sm font-medium">Silabus</div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Silabus Lengkap</h3>
                    <p class="text-gray-600 text-sm mb-4">
                        Silabus semua mata pelajaran untuk seluruh tingkat kelas
                    </p>
                    <div class="flex items-center justify-between text-xs text-gray-500 mb-4">
                        <span><i class="far fa-file-pdf mr-1"></i>PDF</span>
                        <span><i class="fas fa-download mr-1"></i>2.1 MB</span>
                    </div>
                    <a href="/assets/documents/silabus-lengkap.pdf" download class="block w-full px-4 py-3 bg-red-600 hover:bg-red-700 text-white text-center rounded-lg transition font-semibold">
                        <i class="fas fa-download mr-2"></i>Download PDF
                    </a>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="download-card bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="bg-gradient-to-br from-teal-500 to-teal-600 p-8 text-center">
                    <i class="fas fa-book text-white text-6xl mb-3"></i>
                    <div class="text-white/90 text-sm font-medium">Panduan</div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Panduan Pembelajaran</h3>
                    <p class="text-gray-600 text-sm mb-4">
                        Panduan umum pelaksanaan pembelajaran dan penilaian
                    </p>
                    <div class="flex items-center justify-between text-xs text-gray-500 mb-4">
                        <span><i class="far fa-file-pdf mr-1"></i>PDF</span>
                        <span><i class="fas fa-download mr-1"></i>950 KB</span>
                    </div>
                    <a href="/assets/documents/panduan-pembelajaran.pdf" download class="block w-full px-4 py-3 bg-teal-600 hover:bg-teal-700 text-white text-center rounded-lg transition font-semibold">
                        <i class="fas fa-download mr-2"></i>Download PDF
                    </a>
                </div>
            </div>

        </div>

        <!-- Info Section -->
        <div class="max-w-4xl mx-auto mt-12 bg-blue-50 border border-blue-200 rounded-xl p-6">
            <div class="flex items-start gap-4">
                <div class="bg-blue-600 p-3 rounded-lg">
                    <i class="fas fa-info-circle text-white text-2xl"></i>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Informasi Penting</h3>
                    <p class="text-gray-700 text-sm leading-relaxed">
                        Dokumen kurikulum ini bersifat rahasia dan hanya untuk keperluan internal sekolah. 
                        Untuk informasi lebih lanjut mengenai kurikulum atau konsultasi akademik, 
                        silakan hubungi bagian akademik sekolah melalui halaman kontak.
                    </p>
                    <a href="kontak.php" class="inline-block mt-4 px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition text-sm font-semibold">
                        <i class="fas fa-phone mr-2"></i>Hubungi Kami
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

<?php 
include '../src/includes/footer.php';
?>