<?php
$page_title = 'Sambutan Kepala Sekolah';
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
            <span class="text-white font-medium">Sambutan</span>
        </div>

        <div class="text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                <i class="fas fa-user-tie mr-3"></i>Sambutan Kepala Sekolah
            </h1>
            <p class="text-lg text-white/90 max-w-2xl mx-auto">
                sambutan hangat dari kepala sekolah kami, Drs. Nama Kepala Sekolah, M.Pd, yang mengajak seluruh civitas akademika untuk bersama-sama mewujudkan visi dan misi sekolah menuju masa depan yang gemilang.
            </p>
        </div>
    </div>
</div>

<section class="py-16 bg-gradient-to-b from-blue-50 to-blue-100">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h1 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">
                Sambutan Kepala Sekolah
            </h1>
            <div class="w-24 h-1 bg-blue-600 mx-auto rounded-full"></div>
        </div>
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <div class="grid md:grid-cols-3 gap-0">
                <div class="md:col-span-1 bg-gradient-to-br from-blue-600 to-blue-800 p-8 flex items-center justify-center">
                    <div class="text-center">
                        <div class="w-48 h-48 mx-auto mb-4 rounded-full bg-white shadow-2xl overflow-hidden border-4 border-blue-600">
                            <img
                                src="/Template-WebSekolah/assets/images/kepala-sekolah.jpeg"
                                alt="Foto Kepala Sekolah"
                                class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-white font-bold text-xl mb-2">
                            Drs. Nama Kepala Sekolah, M.Pd
                        </h3>

                        <!-- JABATAN -->
                        <p class="text-blue-100 text-sm">
                            Kepala SMK Negeri 1 Saptosari
                        </p>
                    </div>
                </div>

                <!-- KOLOM KONTEN SAMBUTAN -->
                <div class="md:col-span-2 p-8 md:p-12">

                    <!-- SALAM PEMBUKA -->
                    <p class="text-lg text-gray-700 mb-6 italic">
                        Assalamu'alaikum Warahmatullahi Wabarakatuh
                    </p>

                    <!-- PARAGRAF SAMBUTAN -->
                    <div class="space-y-4">
                        <p class="text-gray-600 leading-relaxed text-justify">
                            Selamat datang di website resmi <span class="font-semibold text-blue-800">SMK Negeri 1 Saptosari</span>.
                            Puji syukur kehadirat Allah SWT yang telah memberikan rahmat dan karunia-Nya,
                            sehingga kita dapat terus berkarya dan mengembangkan pendidikan di sekolah kita tercinta.
                        </p>

                        <p class="text-gray-600 leading-relaxed text-justify">
                            SMK Negeri 1 Saptosari merupakan lembaga pendidikan kejuruan yang berkomitmen
                            untuk menghasilkan lulusan yang kompeten, berkarakter, dan siap bersaing di dunia kerja.
                            Kami terus berupaya meningkatkan kualitas pembelajaran dengan mengintegrasikan
                            teknologi, pengembangan soft skills, dan kerjasama dengan dunia industri.
                        </p>

                        <p class="text-gray-600 leading-relaxed text-justify">
                            Website ini kami hadirkan sebagai media informasi dan komunikasi antara sekolah
                            dengan siswa, orang tua, alumni, dan masyarakat luas. Melalui website ini,
                            kami berharap dapat memberikan informasi yang transparan dan mudah diakses
                            mengenai berbagai kegiatan dan prestasi yang telah dicapai.
                        </p>

                        <p class="text-gray-600 leading-relaxed text-justify">
                            Kepada seluruh civitas akademika, mari kita bersama-sama menjaga nama baik sekolah
                            dan terus berinovasi untuk mencapai visi dan misi SMK Negeri 1 Saptosari.
                            Kepada orang tua siswa, kami mengucapkan terima kasih atas kepercayaan yang telah diberikan
                            untuk mendidik putra-putri Bapak/Ibu.
                        </p>
                    </div>

                    <!-- PENUTUP -->
                    <div class="mt-8 pt-6 border-t-2 border-gray-200">
                        <p class="text-gray-600 leading-relaxed italic mb-4">
                            Wassalamu'alaikum Warahmatullahi Wabarakatuh
                        </p>

                        <!-- TANDA TANGAN -->
                        <div class="mt-6">
                            <p class="text-gray-700 font-semibold text-right">
                                Kepala Sekolah
                            </p>

                            <p class="text-gray-800 font-bold text-right mt-12">
                                Drs. Nama Kepala Sekolah, M.Pd
                            </p>
                            <p class="text-gray-600 text-sm text-right">
                                NIP. 19XXXXXXXXXX
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="mt-8">
            <div class="bg-blue-600 text-white p-6 rounded-xl text-center shadow-lg">
                <p class="text-xl md:text-2xl font-semibold italic">
                    "Berprestasi, Berkarakter, Berdaya Saing"
                </p>
                <p class="text-blue-200 text-sm mt-2">
                    Motto SMK Negeri 1 Saptosari
                </p>
            </div>
        </div>

    </div>
</section>

<?php
include '../src/includes/footer.php';
?>