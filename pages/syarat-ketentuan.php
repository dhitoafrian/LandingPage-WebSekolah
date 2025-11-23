<?php
$page_title = 'Syarat & Ketentuan';
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

.accordion-content {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s ease-in-out;
    }

    .accordion-content.active {
        max-height: 3000px;
    }

    .accordion-header {
        transition: all 0.3s ease;
    }

    .accordion-header:hover {
        background: #eff6ff;
    }

    .accordion-header.active {
        background: #dbeafe;
        border-color: #3b82f6;
    }

    .toggle-icon {
        transition: all 0.3s ease;
        font-size: 1.5rem;
        font-weight: bold;
        width: 30px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 6px;
        background: #dbeafe;
        color: #2563eb;
    }

    .toggle-icon.active {
        background: #2563eb;
        color: white;
        transform: rotate(90deg);
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
            <span class="text-white font-medium">Syarat & Ketentuan</span>
        </div>

        <div class="text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                <i class="fas fa-file-contract mr-3"></i>Syarat & Ketentuan
            </h1>
            <p class="text-lg text-white/90 max-w-2xl mx-auto">
                Semua keluarga yang ingin mendaftar harus menyetujui kebijakan berikut
            </p>
        </div>
    </div>
</div>

<div class="bg-gray-50 py-12">
    <div class="container mx-auto px-4">

        <!-- Introduction -->
        <div class="bg-white rounded-xl shadow-sm p-8 mb-8">
            <div class="flex items-start gap-4 mb-4">
                <div class="bg-blue-100 p-3 rounded-lg">
                    <i class="fas fa-info-circle text-blue-600 text-2xl"></i>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">Informasi Penting</h2>
                    <p class="text-gray-600 leading-relaxed">
                        Mohon baca dengan seksama setiap kebijakan di bawah ini. Dengan mendaftar di sekolah kami,
                        Anda menyetujui untuk mematuhi seluruh syarat dan ketentuan yang berlaku.
                    </p>
                </div>
            </div>
        </div>

        <!-- Accordion Container -->
        <div class="max-w-5xl mx-auto space-y-4">

            <!-- Accordion Item 1 -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-200">
                <button class="accordion-header w-full px-6 py-5 flex items-center justify-between text-left" onclick="toggleAccordion(this)">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <div class="toggle-icon">+</div>
                        </div>
                        <span class="text-lg font-bold text-gray-800">Kebijakan Pendaftaran</span>
                    </div>

                </button>
                <div class="accordion-content">
                    <div class="px-6 pb-6 pt-2 text-gray-700 leading-relaxed space-y-4">
                        <p>
                            Setelah menerima penawaran penerimaan dari sekolah, Anda menerima dan menyetujui semua kebijakan,
                            syarat, dan ketentuan pendaftaran. Ketidakpatuhan terhadap kebijakan pendaftaran dapat mengakibatkan
                            penarikan penerimaan atau pengecualian dari pendaftaran.
                        </p>
                        <h4 class="font-semibold text-gray-800 mt-4">Pengungkapan dan Persetujuan:</h4>
                        <ul class="list-disc pl-6 space-y-2">
                            <li>Pendaftaran bergantung pada pengungkapan penuh tentang riwayat bahasa, pembelajaran, sosial-emosional, dan kesehatan fisik anak Anda.</li>
                            <li>Informasi yang tidak akurat dapat menyebabkan penempatan tingkat kelas yang tidak tepat atau penarikan pendaftaran.</li>
                            <li>Anda bertanggung jawab memberikan bukti penyelesaian tugas semester terakhir.</li>
                            <li>Pendaftaran bersifat sementara hingga semua persyaratan terpenuhi.</li>
                        </ul>
                        <h4 class="font-semibold text-gray-800 mt-4">Komitmen Orang Tua:</h4>
                        <ul class="list-disc pl-6 space-y-2">
                            <li>Bekerja sama dengan sekolah untuk memberikan dukungan yang dibutuhkan anak.</li>
                            <li>Menghadiri pertemuan berkala sesuai permintaan sekolah.</li>
                            <li>Memberikan persetujuan untuk evaluasi tambahan jika diperlukan.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Accordion Item 2 -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-200">
                <button class="accordion-header w-full px-6 py-5 flex items-center justify-between text-left" onclick="toggleAccordion(this)">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <div class="toggle-icon">+</div>
                        </div>
                        <span class="text-lg font-bold text-gray-800">Kode Etik Orang Tua</span>
                    </div>
                </button>
                <div class="accordion-content">
                    <div class="px-6 pb-6 pt-2 text-gray-700 leading-relaxed space-y-4">
                        <p>
                            Di sekolah kami, keberhasilan siswa melibatkan kemitraan positif dengan semua anggota komunitas.
                            Kami berharap orang tua dan siswa menjunjung tinggi Kode Etik dan harapan perilaku sekolah.
                        </p>
                        <h4 class="font-semibold text-gray-800 mt-4">Komitmen Orang Tua:</h4>
                        <ul class="list-disc pl-6 space-y-2">
                            <li>Mendukung dan menjadi teladan bagi misi, visi, dan nilai-nilai sekolah.</li>
                            <li>Berkontribusi pada lingkungan sekolah yang positif, beragam, dan inklusif.</li>
                            <li>Berinteraksi dengan staf pengajar dengan cara yang saling menghormati.</li>
                            <li>Berkomunikasi dengan semua anggota komunitas dengan cara yang sopan.</li>
                            <li>Menjadi advokat untuk sekolah dan berbagi informasi faktual.</li>
                            <li>Mendukung program akademik sekolah.</li>
                            <li>Memastikan kehadiran rutin anak di sekolah.</li>
                            <li>Membaca semua komunikasi resmi dan mengikuti perkembangan acara kampus.</li>
                        </ul>
                        <div class="mt-4 p-4 bg-yellow-50 border border-yellow-200 rounded-lg">
                            <p class="text-sm text-yellow-800">
                                <i class="fas fa-exclamation-triangle mr-2"></i>
                                <strong>Perhatian:</strong> Jika harapan ini tidak terpenuhi, sekolah berhak untuk menarik pendaftaran
                                atau membatasi akses kampus.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Accordion Item 3 -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-200">
                <button class="accordion-header w-full px-6 py-5 flex items-center justify-between text-left" onclick="toggleAccordion(this)">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <div class="toggle-icon">+</div>
                        </div>
                        <span class="text-lg font-bold text-gray-800">Kebijakan Kesehatan & Keamanan Anak</span>
                    </div>
                </button>
                <div class="accordion-content">
                    <div class="px-6 pb-6 pt-2 text-gray-700 leading-relaxed space-y-4">
                        <p>
                            Sekolah memiliki tanggung jawab kelembagaan untuk melindungi anak. Semua anak dalam perawatan kami
                            diberikan lingkungan yang aman dan kondusif untuk tumbuh dan berkembang.
                        </p>
                        <h4 class="font-semibold text-gray-800 mt-4">Perjanjian Kesejahteraan Anak:</h4>
                        <ul class="list-disc pl-6 space-y-2">
                            <li>Mendukung kebijakan pengamanan anak sekolah dan pedoman perilaku.</li>
                            <li>Hadir di kota, dan jika harus meninggalkan, mengatur wali sementara untuk anak.</li>
                            <li>Menginformasikan sekolah tentang pengaturan pengawasan sementara termasuk kontak darurat.</li>
                            <li>Wali sementara harus memiliki wewenang penuh untuk membuat keputusan darurat.</li>
                            <li>Berbagi tanggung jawab untuk menampilkan informasi yang mendukung kebijakan pengamanan anak.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Accordion Item 4 -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-200">
                <button class="accordion-header w-full px-6 py-5 flex items-center justify-between text-left" onclick="toggleAccordion(this)">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <div class="toggle-icon">+</div>
                        </div>
                        <span class="text-lg font-bold text-gray-800">Kebijakan Akademik & Perilaku</span>
                    </div>
                </button>
                <div class="accordion-content">
                    <div class="px-6 pb-6 pt-2 text-gray-700 leading-relaxed space-y-4">
                        <p>
                            Buku pegangan sekolah dirancang untuk membantu Anda memahami program akademik, sistem pendukung,
                            kontak fakultas, harapan, dan peluang. Kebijakan akademik dan perilaku dirinci dalam buku pegangan ini.
                        </p>
                        <h4 class="font-semibold text-gray-800 mt-4">Harapan Akademik:</h4>
                        <ul class="list-disc pl-6 space-y-2">
                            <li>Siswa diharapkan mengikuti semua mata pelajaran sesuai kurikulum yang ditetapkan.</li>
                            <li>Menyelesaikan tugas dan ujian tepat waktu dengan integritas akademik.</li>
                            <li>Menghadiri kelas secara teratur dan aktif berpartisipasi.</li>
                            <li>Mematuhi aturan penggunaan teknologi dan internet sekolah.</li>
                        </ul>
                        <h4 class="font-semibold text-gray-800 mt-4">Harapan Perilaku:</h4>
                        <ul class="list-disc pl-6 space-y-2">
                            <li>Menghormati semua anggota komunitas sekolah.</li>
                            <li>Menjaga kebersihan dan ketertiban lingkungan sekolah.</li>
                            <li>Berpakaian sesuai dengan ketentuan seragam sekolah.</li>
                            <li>Tidak terlibat dalam perundungan, kekerasan, atau diskriminasi.</li>
                        </ul>
                        <div class="mt-4 p-4 bg-blue-50 border border-blue-200 rounded-lg">
                            <p class="text-sm text-blue-800">
                                <i class="fas fa-info-circle mr-2"></i>
                                Untuk informasi lengkap, silakan unduh Buku Pegangan Siswa/Orang Tua setelah pendaftaran.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Accordion Item 5 -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-200">
                <button class="accordion-header w-full px-6 py-5 flex items-center justify-between text-left" onclick="toggleAccordion(this)">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <div class="toggle-icon">+</div>
                        </div>
                        <span class="text-lg font-bold text-gray-800">Kebijakan Pencegahan Perundungan</span>
                    </div>
                </button>
                <div class="accordion-content">
                    <div class="px-6 pb-6 pt-2 text-gray-700 leading-relaxed space-y-4">
                        <p>
                            Tujuan sekolah adalah menyediakan lingkungan yang aman di mana semua siswa dan karyawan diperlakukan
                            dengan hormat dan bermartabat serta bebas dari perundungan, intimidasi, dan pelecehan.
                        </p>
                        <h4 class="font-semibold text-gray-800 mt-4">Komitmen Sekolah:</h4>
                        <ul class="list-disc pl-6 space-y-2">
                            <li>Mempelajari dan mengidentifikasi tanda-tanda peringatan dini perilaku perundungan.</li>
                            <li>Mengumpulkan informasi tentang perundungan langsung dari siswa.</li>
                            <li>Menetapkan aturan yang jelas tentang perundungan.</li>
                            <li>Melatih staf untuk merespons perundungan secara sensitif dan konsisten.</li>
                            <li>Menyediakan pengawasan yang memadai di area-area yang kurang terstruktur.</li>
                            <li>Meningkatkan kesadaran dan keterlibatan orang tua.</li>
                        </ul>
                        <div class="mt-4 p-4 bg-red-50 border border-red-200 rounded-lg">
                            <p class="text-sm text-red-800">
                                <i class="fas fa-ban mr-2"></i>
                                <strong>Zero Tolerance:</strong> Perundungan tidak akan ditoleransi dalam bentuk apapun.
                                Pelanggaran akan ditindak sesuai dengan prosedur disiplin sekolah.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Accordion Item 6 -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-200">
                <button class="accordion-header w-full px-6 py-5 flex items-center justify-between text-left" onclick="toggleAccordion(this)">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <div class="toggle-icon">+</div>
                        </div>
                        <span class="text-lg font-bold text-gray-800">Kebijakan Keuangan & Refund</span>
                    </div>
                </button>
                <div class="accordion-content">
                    <div class="px-6 pb-6 pt-2 text-gray-700 leading-relaxed space-y-4">
                        <h4 class="font-semibold text-gray-800">Kebijakan Keuangan:</h4>
                        <ul class="list-disc pl-6 space-y-2">
                            <li>Pembayaran biaya pendaftaran, SPP, dan biaya lainnya harus dilakukan tepat waktu.</li>
                            <li>Pembayaran yang terlambat akan dikenakan denda sesuai ketentuan.</li>
                            <li>Keterlambatan pembayaran dapat mengakibatkan penangguhan rapor dan transkrip.</li>
                            <li>Orang tua bertanggung jawab atas semua kewajiban keuangan meskipun disponsori oleh perusahaan.</li>
                        </ul>

                        <h4 class="font-semibold text-gray-800 mt-4">Kebijakan Refund:</h4>
                        <ul class="list-disc pl-6 space-y-2">
                            <li>Kehadiran pada hari apapun dalam semester merupakan kehadiran penuh dan tidak ada pengembalian dana.</li>
                            <li>Pengembalian dana hanya diberikan kepada siswa yang mengirimkan Formulir Penarikan resmi.</li>
                            <li>Tidak ada pengembalian dana jika penarikan diajukan setelah batas waktu yang ditentukan.</li>
                            <li>Pengembalian dana yang tidak diklaim dalam 4 tahun akan ditransfer ke dana operasional sekolah.</li>
                        </ul>

                        <div class="mt-4 p-4 bg-teal-50 border border-teal-200 rounded-lg">
                            <p class="text-sm text-teal-800">
                                <i class="fas fa-calculator mr-2"></i>
                                Untuk rincian biaya lengkap, silakan hubungi bagian keuangan atau cek halaman Biaya Pendidikan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Accordion Item 7 -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-200">
                <button class="accordion-header w-full px-6 py-5 flex items-center justify-between text-left" onclick="toggleAccordion(this)">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 bg-indigo-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <div class="toggle-icon">+</div>
                        </div>
                        <span class="text-lg font-bold text-gray-800">Kebijakan Privasi & Perlindungan Data</span>
                    </div>
                </button>
                <div class="accordion-content">
                    <div class="px-6 pb-6 pt-2 text-gray-700 leading-relaxed space-y-4">
                        <p>
                            Dengan mendaftar di sekolah, Anda memberikan persetujuan untuk pemrosesan data pribadi sesuai
                            dengan Kebijakan Privasi dan Perlindungan Data sekolah.
                        </p>

                        <h4 class="font-semibold text-gray-800 mt-4">Jenis Data yang Diproses:</h4>
                        <ul class="list-disc pl-6 space-y-2">
                            <li>Nama, alamat, dan informasi kontak</li>
                            <li>Catatan akademik dan prestasi</li>
                            <li>Informasi kesehatan dan medis</li>
                            <li>Foto, video, dan rekaman audio</li>
                            <li>Data keuangan untuk administrasi pembayaran</li>
                        </ul>

                        <h4 class="font-semibold text-gray-800 mt-4">Hak Anda:</h4>
                        <ul class="list-disc pl-6 space-y-2">
                            <li>Hak untuk mengakses data pribadi Anda</li>
                            <li>Hak untuk memperbaiki data yang tidak akurat</li>
                            <li>Hak untuk menghapus data dalam kondisi tertentu</li>
                            <li>Hak untuk membatasi pemrosesan data</li>
                            <li>Hak untuk menolak pemrosesan data tertentu</li>
                        </ul>

                        <div class="mt-4 p-4 bg-indigo-50 border border-indigo-200 rounded-lg">
                            <p class="text-sm text-indigo-800">
                                <i class="fas fa-lock mr-2"></i>
                                Untuk pertanyaan tentang privasi data, hubungi Data Protection Officer sekolah.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Agreement Section -->
        <div class="max-w-5xl mx-auto mt-12 bg-gradient-to-r from-blue-600 to-blue-700 rounded-xl shadow-lg p-8 text-white">
            <div class="flex items-start gap-4">
                <div class="bg-white/20 p-4 rounded-lg">
                    <i class="fas fa-check-circle text-4xl"></i>
                </div>
                <div>
                    <h3 class="text-2xl font-bold mb-3">Persetujuan Syarat & Ketentuan</h3>
                    <p class="mb-4 text-white/90">
                        Dengan mendaftar di sekolah kami, Anda menyatakan telah membaca, memahami, dan menyetujui
                        semua syarat dan ketentuan yang tercantum di atas.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="info-ppdb.php" class="px-6 py-3 bg-white text-blue-700 rounded-lg hover:bg-gray-100 transition font-semibold">
                            <i class="fas fa-user-graduate mr-2"></i>
                            Daftar Sekarang
                        </a>
                        <a href="kontak.php" class="px-6 py-3 bg-white/20 hover:bg-white/30 text-white rounded-lg transition font-semibold border-2 border-white/50">
                            <i class="fas fa-question-circle mr-2"></i>
                            Ada Pertanyaan?
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    function toggleAccordion(button) {
        const content = button.nextElementSibling;
        const toggleIcon = button.querySelector('.toggle-icon');
        const header = button;

        // Check if already active
        const isActive = content.classList.contains('active');

        // Close all accordions
        document.querySelectorAll('.accordion-content').forEach(item => {
            item.classList.remove('active');
        });

        document.querySelectorAll('.accordion-header').forEach(item => {
            item.classList.remove('active');
        });

        document.querySelectorAll('.toggle-icon').forEach(item => {
            item.classList.remove('active');
            item.textContent = '+';
        });

        // If wasn't active, open it
        if (!isActive) {
            content.classList.add('active');
            header.classList.add('active');
            toggleIcon.classList.add('active');
            toggleIcon.textContent = '−'; // Minus symbol

            // Smooth scroll to accordion
            setTimeout(() => {
                button.scrollIntoView({
                    behavior: 'smooth',
                    block: 'nearest'
                });
            }, 100);
        }
    }
</script>

<?php
include '../src/includes/footer.php';
?>