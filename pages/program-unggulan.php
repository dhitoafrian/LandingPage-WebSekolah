<?php
$page_title = 'Program Unggulan';
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

    .card-program {
        transition: all 0.3s ease;
        /* INI YANG MEMBUAT ANIMASI MULUS */
    }

    .card-program:hover {
        transform: translateY(-8px);
        /* Efek bergerak ke atas yang lama */
        box-shadow: 0 12px 24px rgba(59, 130, 246, 0.2);
    }
</style>

<div class="hero-gradient relative overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-10"></div>
    <div class="container mx-auto px-4 py-16 relative z-10">
        <div class="text-white/80 text-sm mb-6">
            <i class="fas fa-home mr-2"></i>
            <a href="/Template-WebSekolah/src/index.php" class="hover:text-white transition">Beranda</a>
            <span class="mx-2">/</span>
            <span class="text-white font-medium">Program Unggulan</span>
        </div>

        <div class="text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                <i class="fas fa-rocket mr-3"></i>Program Unggulan Sekolah
            </h1>
            <p class="text-lg text-white/90 max-w-2xl mx-auto">
                Temukan program pendidikan terbaik yang dirancang khusus untuk memaksimalkan potensi dan bakat siswa di era digital.
            </p>
        </div>
    </div>
</div>

<div class="bg-gray-50 py-16">
    <div class="container mx-auto px-4">

        <div class="max-w-4xl mx-auto mb-12 text-center">
            <p class="text-gray-700 text-lg leading-relaxed mb-4">
                Kami berkomitmen menciptakan lulusan yang tidak hanya unggul secara akademik, tetapi juga memiliki karakter kuat. Program unggulan ini menjadi jalur akselerasi menuju kampus dan karier impian.
            </p>
        </div>

        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <div class="card-program bg-white rounded-xl shadow-xl overflow-hidden transform hover:rotate-1 hover:scale-[1.02]">
                <div class="relative h-48 overflow-hidden">
                    <img
                        src="/Template-WebSekolah/assets/images/keunggulan/teknologi.jpg"
                        alt="Teknologi and sains"
                        class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4 border-b pb-2">STEM & Digital Class</h3>
                    <p class="text-gray-700 text-sm mb-5 leading-relaxed">
                        Kelas intensif yang mengintegrasikan Sains, Teknologi, Engineering, dan Matematika dengan kurikulum berbasis proyek (PBL). Dirancang untuk Lolos PTN jalur Sains/Teknik.
                    </p>
                    <ul class="text-sm text-gray-600 space-y-2 mb-6 list-disc list-inside">
                        <li>Kurikulum Khusus: Robotika, IoT, dan Pemrograman Dasar.</li>
                        <li>Fasilitas: Akses ke Lab Komputer & Sains terbaru.</li>
                        <li>Target Output: Lulusan siap menuju PTN favorit.</li>
                    </ul>
                </div>
            </div>

            <div class="card-program bg-white rounded-xl shadow-xl overflow-hidden transform hover:rotate-1 hover:scale-[1.02]">
                <div class="relative h-48 overflow-hidden">
                    <img
                        src="/Template-WebSekolah/assets/images/keunggulan/tahfidz.jpg"
                        alt="Tahfidz Premier"
                        class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4 border-b pb-2">Tahfidz Premier</h3>
                    <p class="text-gray-700 text-sm mb-5 leading-relaxed">
                        Program yang didesain untuk mencetak Hafidz/Hafidzah tanpa mengesampingkan prestasi akademik. Dibimbing Musyrif bersertifikasi.
                    </p>
                    <ul class="text-sm text-gray-600 space-y-2 mb-6 list-disc list-inside">
                        <li>Target Minimal 5 Juz (3 Tahun) dengan sanad.</li>
                        <li>Metode Setoran harian dan Muroja'ah mandiri.</li>
                        <li>Dukungan Pembimbing profesional dan Asrama khusus.</li>
                    </ul>
                </div>
            </div>

            <div class="card-program bg-white rounded-xl shadow-xl overflow-hidden transform hover:rotate-1 hover:scale-[1.02]">
                <div class="relative h-48 overflow-hidden">
                    <img
                        src="/Template-WebSekolah/assets/images/keunggulan/preneurship.jpg"
                        alt="Digitalpreneurship"
                        class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4 border-b pb-2">Digitalpreneurship</h3>
                    <p class="text-gray-700 text-sm mb-5 leading-relaxed">
                        Membekali siswa dengan pola pikir bisnis, kemampuan leadership, dan keterampilan pemasaran digital melalui mentoring dengan praktisi.
                    </p>
                    <ul class="text-sm text-gray-600 space-y-2 mb-6 list-disc list-inside">
                        <li>KurikulumB usiness Canvas, Pemasaran Digital, Financial Literacy.</li>
                        <li>Aktivitas Mentoring dengan praktisi bisnis.</li>
                        <li>Output Wirausaha muda dan portofolio proyek bisnis nyata.</li>
                    </ul>
                </div>
            </div>

        </div>


        <div class="max-w-5xl mx-auto mt-12 bg-blue-50 border border-blue-200 rounded-xl p-6">
            <div class="flex items-start gap-4">
                <div class="bg-blue-600 p-3 rounded-lg flex-shrink-0">
                    <i class="fas fa-user-check text-white text-2xl"></i>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Pendaftaran Terbatas!</h3>
                    <p class="text-gray-700 text-sm leading-relaxed mb-4">
                        Setiap program unggulan memiliki kuota maksimal 25 siswa per tahun ajaran. Pastikan Anda mendaftar lebih awal untuk mengikuti proses seleksi.
                    </p>
                    <a href="kontak.php" class="inline-block px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition text-sm font-semibold">
                        <i class="fas fa-question-circle mr-2"></i>Ada Pertanyaan? Hubungi Kami
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>


<?php
include '../src/includes/footer.php';
?>