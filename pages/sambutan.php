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
            <a href="/Template-WebSekolah/src/index.php" class="hover:text-white transition">Beranda</a>
            <span class="mx-2">/</span>
            <span class="text-white font-medium">Sambutan</span>
        </div>

        <div class="text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                Sambutan Kepala Sekolah
            </h1>
            <p class="text-lg text-white/90 max-w-2xl mx-auto">
                Sambutan hangat dari Kepala SMK Negeri 1 Saptosari
            </p>
        </div>
    </div>
</div>

<!-- Main Content -->
<section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="grid md:grid-cols-3 gap-0">
                
                <!-- Profile Section -->
                <div class="md:col-span-1 bg-gradient-to-br from-blue-600 to-blue-800 p-8 flex items-center justify-center">
                    <div class="text-center">
                        <div class="w-48 h-48 mx-auto mb-6 rounded-full bg-white shadow-xl overflow-hidden border-4 border-white">
                            <img
                                src="/Template-WebSekolah/assets/images/kepala-sekolah.jpeg"
                                alt="Foto Kepala Sekolah"
                                class="w-full h-full object-cover"
                                loading="lazy">
                        </div>
                        <h3 class="text-white font-bold text-xl mb-2">
                            Drs. Nama Kepala Sekolah, M.Pd
                        </h3>
                        <div class="inline-block bg-white/20 backdrop-blur-sm px-4 py-2 rounded-lg">
                            <p class="text-blue-100 text-sm font-medium">
                                Kepala SMK Negeri 1 Saptosari
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Content Section -->
                <div class="md:col-span-2 p-8 md:p-12">

                    <!-- Greeting -->
                    <div class="bg-blue-50 border-l-4 border-blue-600 p-4 rounded-r-lg mb-6">
                        <p class="text-gray-700 italic">
                            Assalamu'alaikum Warahmatullahi Wabarakatuh
                        </p>
                    </div>

                    <!-- Main Content -->
                    <div class="space-y-4 text-gray-600 leading-relaxed">
                        <p>
                            Selamat datang di website resmi <strong class="text-blue-800">SMK Negeri 1 Saptosari</strong>.
                            Puji syukur kehadirat Allah SWT yang telah memberikan rahmat dan karunia-Nya,
                            sehingga kita dapat terus berkarya dan mengembangkan pendidikan di sekolah kita tercinta.
                        </p>

                        <p>
                            SMK Negeri 1 Saptosari merupakan lembaga pendidikan kejuruan yang berkomitmen
                            untuk menghasilkan lulusan yang kompeten, berkarakter, dan siap bersaing di dunia kerja.
                            Kami terus berupaya meningkatkan kualitas pembelajaran dengan mengintegrasikan
                            teknologi, pengembangan soft skills, dan kerjasama dengan dunia industri.
                        </p>

                        <p>
                            Website ini kami hadirkan sebagai media informasi dan komunikasi antara sekolah
                            dengan siswa, orang tua, alumni, dan masyarakat luas. Melalui website ini,
                            kami berharap dapat memberikan informasi yang transparan dan mudah diakses
                            mengenai berbagai kegiatan dan prestasi yang telah dicapai.
                        </p>

                        <p>
                            Kepada seluruh civitas akademika, mari kita bersama-sama menjaga nama baik sekolah
                            dan terus berinovasi untuk mencapai visi dan misi SMK Negeri 1 Saptosari.
                            Kepada orang tua siswa, kami mengucapkan terima kasih atas kepercayaan yang telah diberikan
                            untuk mendidik putra-putri Bapak/Ibu.
                        </p>
                    </div>

                    <!-- Closing -->
                    <div class="mt-8 pt-6 border-t-2 border-gray-200">
                        <p class="text-gray-600 italic mb-8">
                            Wassalamu'alaikum Warahmatullahi Wabarakatuh
                        </p>

                        <!-- Signature -->
                        <div class="text-right">
                            <p class="text-gray-600 text-sm mb-1">Hormat kami,</p>
                            <p class="text-gray-700 font-semibold mb-16">
                                Kepala Sekolah
                            </p>
                            <p class="text-gray-800 font-bold">
                                Drs. Nama Kepala Sekolah, M.Pd
                            </p>
                            <p class="text-gray-600 text-sm">
                                NIP. 19XXXXXXXXXX
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Motto Section -->
        <div class="mt-8 bg-gradient-to-r from-blue-600 to-blue-700 text-white p-8 rounded-xl text-center shadow-lg">
            <p class="text-2xl md:text-3xl font-bold italic">
                "Berprestasi, Berkarakter, Berdaya Saing"
            </p>
            <p class="text-blue-200 text-sm mt-2">
                Motto SMK Negeri 1 Saptosari
            </p>
        </div>

    </div>
</section>

<?php
include '../src/includes/footer.php';
?>