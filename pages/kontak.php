<?php
$page_title = 'Kontak Kami';
include '../src/includes/header.php';

// Handle form submission
$success_message = '';
$error_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = htmlspecialchars(trim($_POST['nama'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $telepon = htmlspecialchars(trim($_POST['telepon'] ?? ''));
    $subjek = htmlspecialchars(trim($_POST['subjek'] ?? ''));
    $pesan = htmlspecialchars(trim($_POST['pesan'] ?? ''));

    // Simple validation
    if (empty($nama) || empty($email) || empty($subjek) || empty($pesan)) {
        $error_message = 'Mohon lengkapi semua field yang wajib diisi!';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = 'Format email tidak valid!';
    } else {+
        // Di sini nanti bisa kirim email atau simpan ke database
        // Untuk demo, kita kasih success message aja
        $success_message = 'Pesan Anda berhasil dikirim! Kami akan segera menghubungi Anda.';

        // Reset form
        $nama = $email = $telepon = $subjek = $pesan = '';
    }
}
?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

    * {
        font-family: 'Inter', sans-serif;
    }

    .hero-gradient {
        background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
    }

    .contact-card {
        transition: all 0.3s ease;
    }

    .contact-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 24px rgba(59, 130, 246, 0.2);
    }

    .info-item {
        transition: all 0.2s ease;
    }

    .info-item:hover {
        background: #eff6ff;
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
            <span class="text-white font-medium">Kontak Kami</span>
        </div>

        <div class="text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                <i class="fas fa-phone-alt mr-3"></i>Hubungi Kami
            </h1>
            <p class="text-lg text-white/90 max-w-2xl mx-auto">
                Ada pertanyaan? Kami siap membantu Anda. Hubungi kami melalui informasi kontak di bawah ini.
            </p>
        </div>
    </div>
</div>

<div class="bg-gray-50 py-12">
    <div class="container mx-auto px-4">

        <!-- Contact Info Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 -mt-20 mb-12">
            <!-- Alamat -->
            <div class="contact-card bg-white rounded-xl shadow-lg p-6 text-center">
                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-map-marker-alt text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Alamat</h3>
                <p class="text-gray-600 text-sm">
                    Jl. Pendidikan No. 123<br>
                    Yogyakarta, 55281<br>
                    Indonesia
                </p>
            </div>

            <!-- Telepon -->
            <div class="contact-card bg-white rounded-xl shadow-lg p-6 text-center">
                <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-phone text-green-600 text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Telepon</h3>
                <p class="text-gray-600 text-sm">
                    <a href="tel:+622741234567" class="hover:text-blue-600 transition">
                        (0274) 123-4567
                    </a><br>
                    <a href="tel:+6281234567890" class="hover:text-blue-600 transition">
                        0812-3456-7890
                    </a>
                </p>
            </div>

            <!-- Email -->
            <div class="contact-card bg-white rounded-xl shadow-lg p-6 text-center">
                <div class="bg-red-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-envelope text-red-600 text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Email</h3>
                <p class="text-gray-600 text-sm">
                    <a href="mailto:info@sekolah.sch.id" class="hover:text-blue-600 transition">
                        info@sekolah.sch.id
                    </a><br>
                    <a href="mailto:admin@sekolah.sch.id" class="hover:text-blue-600 transition">
                        admin@sekolah.sch.id
                    </a>
                </p>
            </div>

            <!-- Jam Operasional -->
            <div class="contact-card bg-white rounded-xl shadow-lg p-6 text-center">
                <div class="bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-clock text-purple-600 text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Jam Operasional</h3>
                <p class="text-gray-600 text-sm">
                    Senin - Jumat<br>
                    07.00 - 15.00 WIB<br>
                    <span class="text-xs text-gray-500">(Sabtu-Minggu Libur)</span>
                </p>
            </div>
        </div>

        <!-- Main Content: Form + Map -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

            <!-- Contact Form -->
            <div class="bg-white rounded-xl shadow-lg p-8">
                <div class="mb-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-2 flex items-center gap-2">
                        <i class="fas fa-comments text-blue-600"></i>
                        Pertanyaan, Saran & Masukan
                    </h2>
                    <p class="text-gray-600">Kirim pertanyaan, saran, atau masukan Anda kepada kami</p>
                </div>

                <!-- Success/Error Message -->
                <?php if (!empty($success_message)): ?>
                    <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-lg flex items-start gap-3">
                        <i class="fas fa-check-circle text-green-600 text-xl mt-0.5"></i>
                        <p class="text-green-800"><?= $success_message ?></p>
                    </div>
                <?php endif; ?>

                <?php if (!empty($error_message)): ?>
                    <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-lg flex items-start gap-3">
                        <i class="fas fa-exclamation-circle text-red-600 text-xl mt-0.5"></i>
                        <p class="text-red-800"><?= $error_message ?></p>
                    </div>
                <?php endif; ?>

                <form method="POST" action="">
                    <!-- Nama -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">
                            Nama Lengkap <span class="text-red-500">*</span>
                        </label>
                        <input
                            type="text"
                            name="nama"
                            value="<?= $nama ?? '' ?>"
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Masukkan nama lengkap Anda">
                    </div>

                    <!-- Email -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">
                            Email <span class="text-red-500">*</span>
                        </label>
                        <input
                            type="email"
                            name="email"
                            value="<?= $email ?? '' ?>"
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="nama@email.com">
                    </div>

                    <!-- Telepon -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">
                            No. Telepon/WhatsApp
                        </label>
                        <input
                            type="tel"
                            name="telepon"
                            value="<?= $telepon ?? '' ?>"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="0812-3456-7890">
                    </div>

                    <!-- Kategori -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">
                            Kategori <span class="text-red-500">*</span>
                        </label>
                        <select
                            name="subjek"
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                            <option value="">-- Pilih Kategori --</option>
                            <option value="Pertanyaan Umum" <?= ($subjek ?? '') === 'Pertanyaan Umum' ? 'selected' : '' ?>>Pertanyaan Umum</option>
                            <option value="PPDB" <?= ($subjek ?? '') === 'PPDB' ? 'selected' : '' ?>>PPDB (Penerimaan Siswa Baru)</option>
                            <option value="Akademik" <?= ($subjek ?? '') === 'Akademik' ? 'selected' : '' ?>>Akademik & Kurikulum</option>
                            <option value="Fasilitas" <?= ($subjek ?? '') === 'Fasilitas' ? 'selected' : '' ?>>Fasilitas Sekolah</option>
                            <option value="Ekstrakurikuler" <?= ($subjek ?? '') === 'Ekstrakurikuler' ? 'selected' : '' ?>>Ekstrakurikuler</option>
                            <option value="Saran" <?= ($subjek ?? '') === 'Saran' ? 'selected' : '' ?>>Saran & Kritik</option>
                            <option value="Lainnya" <?= ($subjek ?? '') === 'Lainnya' ? 'selected' : '' ?>>Lainnya</option>
                        </select>
                    </div>

                    <!-- Pertanyaan/Saran/Masukan -->
                    <div class="mb-6">
                        <label class="block text-gray-700 font-semibold mb-2">
                            Pertanyaan / Saran / Masukan <span class="text-red-500">*</span>
                        </label>
                        <textarea
                            name="pesan"
                            required
                            rows="6"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 resize-none"
                            placeholder="Tulis pertanyaan, saran, atau masukan Anda di sini..."><?= $pesan ?? '' ?></textarea>
                        <p class="text-xs text-gray-500 mt-2">
                            <i class="fas fa-info-circle mr-1"></i>
                            Pesan Anda akan ditinjau oleh admin dan akan dibalas melalui email
                        </p>
                    </div>

                    <!-- Submit Button -->
                    <button
                        type="submit"
                        class="glow-button relative overflow-hidden px-6 py-4 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-full hover:from-blue-700 hover:to-blue-800 transition font-semibold text-lg shadow-lg hover:shadow-xl">
                        <i class="fas fa-paper-plane mr-2"></i>
                        Kirim Pesan
                    </button>

                    <p class="text-xs text-gray-500 text-center mt-4">
                        <i class="fas fa-shield-alt mr-1"></i>
                        Privasi Anda terjamin. Data tidak akan dipublikasikan.
                    </p>
                </form>
            </div>

            <!-- Map + Info -->
            <div class="space-y-6">
                <!-- Google Maps -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden h-96">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.0341819087804!2d110.38906231477826!3d-7.782830294386396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59f1fb2f2b45%3A0x20986e2fe9c79cdd!2sYogyakarta%2C%20Yogyakarta%20City%2C%20Special%20Region%20of%20Yogyakarta!5e0!3m2!1sen!2sid!4v1234567890123!5m2!1sen!2sid"
                        width="100%"
                        height="100%"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        class="w-full h-full"></iframe>
                </div>

                <!-- Additional Info -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center gap-2">
                        <i class="fas fa-info-circle text-blue-600"></i>
                        Informasi Tambahan
                    </h3>

                    <div class="space-y-3">
                        <div class="info-item flex items-start gap-3 p-3 rounded-lg">
                            <i class="fas fa-map-signs text-blue-600 mt-1"></i>
                            <div>
                                <p class="font-semibold text-gray-800">Akses Transportasi</p>
                                <p class="text-sm text-gray-600">Dapat diakses dengan kendaraan pribadi dan transportasi umum</p>
                            </div>
                        </div>

                        <div class="info-item flex items-start gap-3 p-3 rounded-lg">
                            <i class="fas fa-parking text-blue-600 mt-1"></i>
                            <div>
                                <p class="font-semibold text-gray-800">Area Parkir</p>
                                <p class="text-sm text-gray-600">Tersedia area parkir luas untuk tamu</p>
                            </div>
                        </div>

                        <div class="info-item flex items-start gap-3 p-3 rounded-lg">
                            <i class="fas fa-wheelchair text-blue-600 mt-1"></i>
                            <div>
                                <p class="font-semibold text-gray-800">Akses Difabel</p>
                                <p class="text-sm text-gray-600">Fasilitas ramah difabel tersedia</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Social Media Section -->
        <div class="mt-12 bg-white rounded-xl shadow-lg p-8 text-center">
            <h3 class="text-2xl font-bold text-gray-800 mb-4">Ikuti Kami di Media Sosial</h3>
            <p class="text-gray-600 mb-6">Dapatkan update terbaru dari kami melalui platform media sosial</p>

            <div class="flex justify-center gap-4 flex-wrap">
                <a
                    href="https://facebook.com"
                    target="_blank"
                    class="flex items-center gap-2 px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition shadow-md hover:shadow-lg">
                    <i class="fab fa-facebook-f"></i>
                    Facebook
                </a>
                <a
                    href="https://instagram.com"
                    target="_blank"
                    class="flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-purple-600 to-pink-600 text-white rounded-lg hover:from-purple-700 hover:to-pink-700 transition shadow-md hover:shadow-lg">
                    <i class="fab fa-instagram"></i>
                    Instagram
                </a>
                <a
                    href="https://twitter.com"
                    target="_blank"
                    class="flex items-center gap-2 px-6 py-3 bg-sky-500 text-white rounded-lg hover:bg-sky-600 transition shadow-md hover:shadow-lg">
                    <i class="fab fa-twitter"></i>
                    Twitter
                </a>
                <a
                    href="https://youtube.com"
                    target="_blank"
                    class="flex items-center gap-2 px-6 py-3 bg-red-600 text-white rounded-lg hover:bg-red-700 transition shadow-md hover:shadow-lg">
                    <i class="fab fa-youtube"></i>
                    YouTube
                </a>
                <a
                    href="https://wa.me/6281234567890"
                    target="_blank"
                    class="flex items-center gap-2 px-6 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700 transition shadow-md hover:shadow-lg">
                    <i class="fab fa-whatsapp"></i>
                    WhatsApp
                </a>
            </div>
        </div>

    </div>
</div>

<?php
include '../src/includes/footer.php';
?>