<?php
$page_title = 'Visi dan Misi';
include '../src/includes/header.php';
include '../pages/banner.php';
?>

<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">

        <div class="bg-white rounded-lg shadow-md p-8 md:p-12 border-l-4 border-blue-600 mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Visi</h2>
            <blockquote class="relative">
                <svg class="absolute -top-2 -left-2 w-8 h-8 text-blue-200" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                </svg>
                <svg class="absolute -bottom-2 -right-2 w-8 h-8 text-blue-200 rotate-180" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                </svg>
                <p class="text-xl md:text-2xl text-gray-800 leading-relaxed italic text-center py-6 px-8">
                    Membentuk lulusan yang unggul, berkarakter, berbudaya industri, dan berjiwa wirausaha
                </p>
            </blockquote>
        </div>

        <!-- Split Layout dengan Tabs -->
        <div class="max-w-6xl mx-auto mb-16">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="grid lg:grid-cols-5 gap-0">

                    <!-- LEFT SIDE - Image (2 kolom) -->
                    <div class="lg:col-span-2 h-64 lg:h-auto">
                        <img src="/Template-WebSekolah/assets/images/school-photo.jpg"
                            alt="Foto Sekolah"
                            class="w-full h-full object-cover"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <!-- Fallback jika gambar ga ada -->
                        <div class="w-full h-full bg-gradient-to-br from-blue-600 to-blue-800 flex items-center justify-center text-white" style="display: none;">
                            <div class="text-center p-8">
                                <svg class="w-20 h-20 mx-auto mb-4 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                                <p class="text-lg font-semibold">SMK Negeri 1 Satap</p>
                                <p class="text-sm opacity-90">Kalibawang</p>
                            </div>
                        </div>
                    </div>

                    <!-- RIGHT SIDE - Tabs & Content (3 kolom) -->
                    <div class="lg:col-span-3 p-8 md:p-10">

                        <!-- Tabs Navigation -->
                        <div class="flex border-b border-gray-200 mb-6">
                            <button onclick="switchTab('foto')" id="tab-foto" class="tab-button active px-6 py-3 font-semibold text-blue-600 border-b-2 border-blue-600 transition-colors">
                                Foto
                            </button>
                            <button onclick="switchTab('misi')" id="tab-misi" class="tab-button px-6 py-3 font-semibold text-gray-600 hover:text-blue-600 transition-colors">
                                Misi
                            </button>
                        </div>

                        <!-- Tab Content -->
                        <div class="tab-content-wrapper">

                            <!-- FOTO Content -->
                            <div id="content-foto" class="tab-content active">
                                <h3 class="text-xl font-bold text-gray-900 mb-4">Galeri Sekolah</h3>
                                <p class="text-gray-600 leading-relaxed">
                                    Lihat foto-foto kegiatan dan fasilitas SMK Negeri 1 Satap Kalibawang yang mendukung proses pembelajaran siswa-siswi.
                                </p>
                                <div class="mt-6 grid grid-cols-2 gap-3">
                                    <div class="aspect-video bg-gray-200 rounded-lg flex items-center justify-center">
                                        <span class="text-gray-400 text-sm">Foto 1</span>
                                    </div>
                                    <div class="aspect-video bg-gray-200 rounded-lg flex items-center justify-center">
                                        <span class="text-gray-400 text-sm">Foto 2</span>
                                    </div>
                                </div>
                            </div>

                            <!-- MISI Content -->
                            <div id="content-misi" class="tab-content hidden">
                                <h3 class="text-xl font-bold text-gray-900 mb-4">Misi Sekolah</h3>
                                <ul class="space-y-3 text-gray-700">
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center text-xs font-semibold mr-3 mt-0.5">1</span>
                                        <span>Mengembangkan kegiatan pembelajaran yang kreatif, inovatif, dan kolaboratif</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center text-xs font-semibold mr-3 mt-0.5">2</span>
                                        <span>Mengembangkan kegiatan pembelajaran berbasis TEFA</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center text-xs font-semibold mr-3 mt-0.5">3</span>
                                        <span>Mengembangkan kegiatan literasi numerasi</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center text-xs font-semibold mr-3 mt-0.5">4</span>
                                        <span>Mengembangkan program kesamaptaan untuk menguatkan fisik dan mental</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center text-xs font-semibold mr-3 mt-0.5">5</span>
                                        <span>Mengoptimalkan sumber daya untuk meningkatkan mutu pendidikan</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center text-xs font-semibold mr-3 mt-0.5">6</span>
                                        <span>Mengembangkan program untuk meningkatkan keimanan ketaqwaan kepada Tuhan Yang Maha Esa dan berakhlak mulia</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center text-xs font-semibold mr-3 mt-0.5">7</span>
                                        <span>Menerapkan prinsip efisiensi, efektivitas dan produktivitas di semua bidang</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center text-xs font-semibold mr-3 mt-0.5">8</span>
                                        <span>Mengembangkan hard skill dan soft skill kompetitif yang diperlukan dunia industri</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center text-xs font-semibold mr-3 mt-0.5">9</span>
                                        <span>Meningkatkan kualitas Pendidik dan Tenaga Kependidikan secara berkelanjutan</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center text-xs font-semibold mr-3 mt-0.5">10</span>
                                        <span>Menerapkan program untuk mengembangkan jiwa wirausaha</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center text-xs font-semibold mr-3 mt-0.5">11</span>
                                        <span>Membangun, memperluas, dan mempererat jalinan kemitraan/link and match dengan lembaga yang relevan dalam dan luar negeri</span>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- MOTTO Section -->
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-lg shadow-md p-8 md:p-12 text-center border-t-4 border-blue-600">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">MOTTO</h2>
                <p class="text-3xl md:text-4xl font-bold text-blue-600 mb-2">Unggul, Mandiri, Berkarakter</p>
                <div class="flex justify-center items-center gap-8 mt-8">
                    <div class="text-center">
                        <div class="w-16 h-16 mx-auto bg-blue-100 rounded-full flex items-center justify-center mb-2 hover:bg-blue-600">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                            </svg>
                        </div>
                        <p class="text-sm font-semibold text-gray-700">Unggul</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 mx-auto bg-blue-100 rounded-full flex items-center justify-center mb-2 hover:bg-blue-600">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <p class="text-sm font-semibold text-gray-700">Mandiri</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 mx-auto bg-blue-100 rounded-full flex items-center justify-center mb-2 hover:bg-blue-600">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <p class="text-sm font-semibold text-gray-700">Berkarakter</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<script>
    function switchTab(tabName) {
        // Hide all content
        document.querySelectorAll('.tab-content').forEach(content => {
            content.classList.add('hidden');
            content.classList.remove('active');
        });

        // Remove active state from all buttons
        document.querySelectorAll('.tab-button').forEach(button => {
            button.classList.remove('active', 'text-blue-600', 'border-b-2', 'border-blue-600');
            button.classList.add('text-gray-600');
        });

        // Show selected content
        document.getElementById('content-' + tabName).classList.remove('hidden');
        document.getElementById('content-' + tabName).classList.add('active');

        // Activate selected button
        const activeButton = document.getElementById('tab-' + tabName);
        activeButton.classList.remove('text-gray-600');
        activeButton.classList.add('active', 'text-blue-600', 'border-b-2', 'border-blue-600');
    }
</script>

<style>
    .tab-content {
        animation: fadeIn 0.3s ease-in;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<?php
include '../src/includes/footer.php';
?>