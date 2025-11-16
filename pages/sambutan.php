<?php
// Mendefinisikan judul halaman yang akan ditampilkan di title browser
$page_title = 'Sambutan Kepala Sekolah';

// Include file header yang berisi HTML head, navbar, dll
include '../src/includes/header.php';

// Include file banner yang menampilkan banner/hero section
include '../pages/banner.php';
?>

<!-- SECTION SAMBUTAN KEPALA SEKOLAH -->
<!-- py-16: padding top & bottom 64px (4rem) -->
<!-- bg-gradient-to-b: membuat gradient dari atas ke bawah -->
<!-- from-blue-50: warna awal gradient (biru muda) -->
<!-- to-white: warna akhir gradient (putih) -->
<section class="py-16 bg-gradient-to-b from-blue-50 to-blue-100">

    <!-- CONTAINER -->
    <!-- max-w-6xl: lebar maksimal container 1152px (72rem) -->
    <!-- mx-auto: margin left & right auto untuk center horizontal -->
    <!-- px-4: padding left & right 16px (1rem) -->
    <!-- sm:px-6: di screen small ke atas, padding jadi 24px -->
    <!-- lg:px-8: di screen large ke atas, padding jadi 32px -->
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- HEADER SECTION -->
        <!-- text-center: text rata tengah -->
        <!-- mb-12: margin bottom 48px (3rem) -->
        <div class="text-center mb-12">
            <!-- text-3xl: ukuran font 30px (1.875rem) -->
            <!-- md:text-4xl: di screen medium ke atas, font size 36px -->
            <!-- font-bold: font weight 700 (tebal) -->
            <!-- text-blue-900: warna text biru tua -->
            <!-- mb-4: margin bottom 16px (1rem) -->
            <h1 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">
                Sambutan Kepala Sekolah
            </h1>

            <!-- GARIS DEKORATIF DI BAWAH JUDUL -->
            <!-- w-24: width 96px (6rem) -->
            <!-- h-1: height 4px (0.25rem) -->
            <!-- bg-blue-600: background biru -->
            <!-- mx-auto: center horizontal -->
            <!-- rounded-full: border radius full (membulat sempurna) -->
            <div class="w-24 h-1 bg-blue-600 mx-auto rounded-full"></div>
        </div>

        <!-- CONTENT WRAPPER -->
        <!-- bg-white: background putih -->
        <!-- rounded-2xl: border radius besar (16px) -->
        <!-- shadow-xl: bayangan besar untuk efek elevasi -->
        <!-- overflow-hidden: memotong konten yang keluar dari border -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">

            <!-- GRID LAYOUT -->
            <!-- grid: menggunakan CSS Grid -->
            <!-- md:grid-cols-3: di screen medium ke atas, 3 kolom -->
            <!-- gap-0: tidak ada gap antar kolom -->
            <div class="grid md:grid-cols-3 gap-0">

                <!-- KOLOM FOTO KEPALA SEKOLAH -->
                <!-- md:col-span-1: mengambil 1 kolom dari 3 kolom total -->
                <!-- bg-gradient-to-br: gradient dari top-left ke bottom-right -->
                <!-- from-blue-600 to-blue-800: gradient dari biru ke biru tua -->
                <!-- p-8: padding semua sisi 32px (2rem) -->
                <!-- flex: display flex -->
                <!-- items-center: align items vertikal center -->
                <!-- justify-center: align items horizontal center -->
                <div class="md:col-span-1 bg-gradient-to-br from-blue-600 to-blue-800 p-8 flex items-center justify-center">
                    <div class="text-center">
                        <!-- PLACEHOLDER FOTO -->
                        <!-- w-48: width 192px (12rem) -->
                        <!-- h-48: height 192px (12rem) -->
                        <!-- mx-auto: center horizontal -->
                        <!-- mb-4: margin bottom 16px -->
                        <!-- rounded-full: border radius full (bulat sempurna) -->
                        <!-- bg-white: background putih -->
                        <!-- shadow-2xl: bayangan sangat besar -->
                        <!-- overflow-hidden: potong gambar yang keluar -->
                        <!-- border-4: border 4px -->
                        <!-- border-white: warna border putih -->
                        <div class="w-48 h-48 mx-auto mb-4 rounded-full bg-white shadow-2xl overflow-hidden border-4 border-blue-600">
                            <!-- object-cover: gambar cover seluruh area tanpa distorsi -->
                            <!-- w-full h-full: lebar dan tinggi 100% -->
                            <img
                                src="/Template-WebSekolah/assets/images/kepala-sekolah.jpeg"
                                alt="Foto Kepala Sekolah"
                                class="w-full h-full object-cover">
                        </div>

                        <!-- NAMA KEPALA SEKOLAH -->
                        <!-- text-white: warna text putih -->
                        <!-- font-bold: font weight tebal -->
                        <!-- text-xl: ukuran font 20px (1.25rem) -->
                        <!-- mb-2: margin bottom 8px (0.5rem) -->
                        <h3 class="text-white font-bold text-xl mb-2">
                            Drs. Nama Kepala Sekolah, M.Pd
                        </h3>

                        <!-- JABATAN -->
                        <!-- text-blue-100: warna text biru sangat muda -->
                        <!-- text-sm: ukuran font 14px (0.875rem) -->
                        <p class="text-blue-100 text-sm">
                            Kepala SMK Negeri 1 Saptosari
                        </p>
                    </div>
                </div>

                <!-- KOLOM KONTEN SAMBUTAN -->
                <!-- md:col-span-2: mengambil 2 kolom dari 3 kolom total -->
                <!-- p-8: padding semua sisi 32px -->
                <!-- md:p-12: di screen medium ke atas, padding 48px -->
                <div class="md:col-span-2 p-8 md:p-12">

                    <!-- SALAM PEMBUKA -->
                    <!-- text-lg: ukuran font 18px (1.125rem) -->
                    <!-- text-gray-700: warna text abu-abu gelap -->
                    <!-- mb-6: margin bottom 24px (1.5rem) -->
                    <!-- italic: font style italic/miring -->
                    <p class="text-lg text-gray-700 mb-6 italic">
                        Assalamu'alaikum Warahmatullahi Wabarakatuh
                    </p>

                    <!-- PARAGRAF SAMBUTAN -->
                    <!-- space-y-4: memberikan spacing vertikal 16px antar child element -->
                    <div class="space-y-4">
                        <!-- text-gray-600: warna text abu-abu medium -->
                        <!-- leading-relaxed: line height 1.625 (jarak antar baris lebih lega) -->
                        <!-- text-justify: text rata kiri-kanan -->
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
                    <!-- mt-8: margin top 32px (2rem) -->
                    <!-- pt-6: padding top 24px (1.5rem) -->
                    <!-- border-t-2: border top 2px -->
                    <!-- border-gray-200: warna border abu-abu muda -->
                    <div class="mt-8 pt-6 border-t-2 border-gray-200">
                        <p class="text-gray-600 leading-relaxed italic mb-4">
                            Wassalamu'alaikum Warahmatullahi Wabarakatuh
                        </p>

                        <!-- TANDA TANGAN -->
                        <div class="mt-6">
                            <!-- text-right: text rata kanan -->
                            <p class="text-gray-700 font-semibold text-right">
                                Kepala Sekolah
                            </p>
                            <!-- mt-12: margin top 48px (untuk space tanda tangan) -->
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

        <!-- QUOTE BOX DI BAWAH -->
        <!-- mt-8: margin top 32px -->
        <div class="mt-8">
            <!-- bg-blue-600: background biru -->
            <!-- text-white: warna text putih -->
            <!-- p-6: padding 24px semua sisi -->
            <!-- rounded-xl: border radius besar -->
            <!-- text-center: text rata tengah -->
            <!-- shadow-lg: bayangan besar -->
            <div class="bg-blue-600 text-white p-6 rounded-xl text-center shadow-lg">
                <!-- text-xl: ukuran font 20px -->
                <!-- md:text-2xl: di screen medium ke atas, font 24px -->
                <!-- font-semibold: font weight semi bold (600) -->
                <!-- italic: font style miring -->
                <p class="text-xl md:text-2xl font-semibold italic">
                    "Berprestasi, Berkarakter, Berdaya Saing"
                </p>
                <!-- text-blue-200: warna text biru muda -->
                <!-- text-sm: ukuran font 14px -->
                <!-- mt-2: margin top 8px -->
                <p class="text-blue-200 text-sm mt-2">
                    Motto SMK Negeri 1 Saptosari
                </p>
            </div>
        </div>

    </div>
</section>

<?php
// Include file footer (navbar bawah, copyright, dll)
// Kamu bilang udah punya, jadi ini optional
include '../src/includes/footer.php';
?>