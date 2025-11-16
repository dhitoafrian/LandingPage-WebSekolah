<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($page_title) ? $page_title . ' - ' : '' ?>Sekolah Modern</title>
    <link rel="stylesheet" href="http://localhost/Template-Websekolah/public/css/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/Template-WebSekolah/assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body class="bg-gray-50">
    <div class="bg-gradient-to-r from-blue-900 to-blue-800 text-white py-2">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center text-sm">
                <div class="flex flex-wrap items-center gap-4 mb-2 md:mb-0">
                    <a href="tel:02741234567" class="flex items-center gap-2 hover:text-blue-200 transition-colors">
                        <i class="fas fa-phone"></i>
                        <span>(0274) 123456</span>
                    </a>
                    <a href="mailto:info@sekolah.sch.id" class="flex items-center gap-2 hover:text-blue-200 transition-colors">
                        <i class="fas fa-envelope"></i>
                        <span>info@sekolah.sch.id</span>
                    </a>
                </div>
                <div class="flex items-center gap-3">
                    <a href="#" class="w-8 h-8 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm transition-all transform hover:scale-110">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="w-8 h-8 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm transition-all transform hover:scale-110">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="w-8 h-8 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm transition-all transform hover:scale-110">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="#" class="w-8 h-8 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm transition-all transform hover:scale-110">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <nav class="main-nav bg-white shadow-md sticky top-0 z-50" id="mainNav">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">

                <div class="flex items-center gap-3">
                    <img src="/Template-WebSekolah/assets/images/logo.png" alt="Logo Sekolah" class="lg:w-60 w-40">
                    <div class="hidden sm:block">
                    </div>
                </div>

                <ul class="hidden lg:flex items-center gap-6">
                    <li><a href="/Template-WebSekolah/src/index.php" class="text-blue-600 font-medium transition-colors">Beranda</a></li>
                    <li class="nav-item relative">
                        <button class="dropdown-trigger text-gray-700 hover:text-blue-600 font-medium transition-colors flex items-center gap-1">Profil <svg class="w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg></button>
                        <div class="dropdown-menu absolute top-full left-0 mt-2 w-64">
                            <div class="dropdown-arrow"></div>
                            <div class="relative bg-white rounded-lg shadow-xl overflow-hidden py-2">
                                <a href="/Template-WebSekolah/pages/tentang-kami.php" class="flex items-center gap-3 px-4 py-3 hover:bg-blue-50 transition-colors group"><i class="fas fa-book w-5 transition-transform group-hover:text-blue-600"></i>
                                    <div>
                                        <div class="font-medium text-gray-900 group-hover:text-blue-600">Tentang Kami</div>
                                        <div class="text-xs text-gray-500">Sejarah Singkat</div>
                                    </div>
                                </a>
                                <a href="/Template-WebSekolah/pages/sambutan.php" class="flex items-center gap-3 px-4 py-3 hover:bg-blue-50 transition-colors group"><i class="fas fa-user-tie w-5 transition-transform group-hover:text-blue-600"></i>
                                    <div>
                                        <div class="font-medium text-gray-900 group-hover:text-blue-600">Sambutan Kepala Sekolah</div>
                                        <div class="text-xs text-gray-500">Tentang Sekolah</div>
                                    </div>
                                </a>
                                <a href="/Template-WebSekolah/pages/visi-misi.php" class="flex items-center gap-3 px-4 py-3 hover:bg-blue-50 transition-colors group"><i class="fas fa-bullseye w-5 transition-transform group-hover:text-blue-600"></i>
                                    <div>
                                        <div class="font-medium text-gray-900 group-hover:text-blue-600">Visi & Misi</div>
                                        <div class="text-xs text-gray-500">Visi Misi Sekolah</div>
                                    </div>
                                </a>

                                <a href="/Template-WebSekolah/pages/struktur-organisasi.php" class="flex items-center gap-3 px-4 py-3 hover:bg-blue-50 transition-colors group"><i class="fas fa-sitemap w-5 transition-transform group-hover:text-blue-600"></i>
                                    <div>
                                        <div class="font-medium text-gray-900 group-hover:text-blue-600">Struktur Organisasi</div>
                                        <div class="text-xs text-gray-500">Kepengurusan</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item relative">
                        <button class="dropdown-trigger text-gray-700 hover:text-blue-600 font-medium transition-colors flex items-center gap-1">Akademik <svg class="w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg></button>
                        <div class="dropdown-menu absolute top-full left-0 mt-2 w-64">
                            <div class="dropdown-arrow"></div>
                            <div class="relative bg-white rounded-lg shadow-xl overflow-hidden py-2">
                                <a href="/Template-WebSekolah/pages/kurikulum.php" class="flex items-center gap-3 px-4 py-3 hover:bg-blue-50 transition-colors group"><i class="fas fa-book-open w-5 transition-transform group-hover:text-blue-600"></i>
                                    <div>
                                        <div class="font-medium text-gray-900 group-hover:text-blue-600">Kurikulum</div>
                                        <div class="text-xs text-gray-500">Kurikulum Merdeka</div>
                                    </div>
                                </a>
                                <a href="/Template-WebSekolah/pages/program-unggulan.php" class="flex items-center gap-3 px-4 py-3 hover:bg-blue-50 transition-colors group"><i class="fas fa-award w-5 transition-transform group-hover:text-blue-600"></i>
                                    <div>
                                        <div class="font-medium text-gray-900 group-hover:text-blue-600">Program Unggulan</div>
                                        <div class="text-xs text-gray-500">Program Khusus</div>
                                    </div>
                                </a>
                                <a href="/Template-WebSekolah/pages/kalender-akademik.php" class="flex items-center gap-3 px-4 py-3 hover:bg-blue-50 transition-colors group"><i class="fas fa-calendar-alt w-5 transition-transform group-hover:text-blue-600"></i>
                                    <div>
                                        <div class="font-medium text-gray-900 group-hover:text-blue-600">Kalender Akademik</div>
                                        <div class="text-xs text-gray-500">Jadwal Kegiatan</div>
                                    </div>
                                </a>
                                <a href="/Template-WebSekolah/pages/ekstrakurikuler.php" class="flex items-center gap-3 px-4 py-3 hover:bg-blue-50 transition-colors group"><i class="fas fa-users w-5 transition-transform group-hover:text-blue-600"></i>
                                    <div>
                                        <div class="font-medium text-gray-900 group-hover:text-blue-600">Ekstrakurikuler</div>
                                        <div class="text-xs text-gray-500">Kegiatan Ekskul</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item relative">
                        <button class="dropdown-trigger text-gray-700 hover:text-blue-600 font-medium transition-colors flex items-center gap-1">PPDB <svg class="w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg></button>
                        <div class="dropdown-menu absolute top-full left-0 mt-2 w-64">
                            <div class="dropdown-arrow"></div>
                            <div class="relative bg-white rounded-lg shadow-xl overflow-hidden py-2">
                                <a href="/Template-WebSekolah/pages/info-ppdb.php" class="flex items-center gap-3 px-4 py-3 hover:bg-blue-50 transition-colors group"><i class="fas fa-info-circle w-5 transition-transform group-hover:text-blue-600"></i>
                                    <div>
                                        <div class="font-medium text-gray-900 group-hover:text-blue-600">Informasi PPDB</div>
                                        <div class="text-xs text-gray-500">Info Pendaftaran</div>
                                    </div>
                                </a>
                                <a href="/Template-WebSekolah/pages/syarat-pendaftaran.php" class="flex items-center gap-3 px-4 py-3 hover:bg-blue-50 transition-colors group"><i class="fas fa-file-alt w-5 transition-transform group-hover:text-blue-600"></i>
                                    <div>
                                        <div class="font-medium text-gray-900 group-hover:text-blue-600">Syarat Pendaftaran</div>
                                        <div class="text-xs text-gray-500">Persyaratan</div>
                                    </div>
                                </a>
                                <a href="/Template-WebSekolah/pages/alur-pendaftaran.php" class="flex items-center gap-3 px-4 py-3 hover:bg-blue-50 transition-colors group"><i class="fas fa-route w-5 transition-transform group-hover:text-blue-600"></i>
                                    <div>
                                        <div class="font-medium text-gray-900 group-hover:text-blue-600">Alur Pendaftaran</div>
                                        <div class="text-xs text-gray-500">Cara Daftar</div>
                                    </div>
                                </a>
                                <a href="/Template-WebSekolah/pages/daftar-online.php" class="flex items-center gap-3 px-4 py-3 hover:bg-blue-50 transition-colors group"><i class="fas fa-edit w-5 transition-transform group-hover:text-blue-600"></i>
                                    <div>
                                        <div class="font-medium text-gray-900 group-hover:text-blue-600">Daftar Online</div>
                                        <div class="text-xs text-gray-500">Pendaftaran Online</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item relative">
                        <button class="dropdown-trigger text-gray-700 hover:text-blue-600 font-medium transition-colors flex items-center gap-1">Informasi <svg class="w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg></button>
                        <div class="dropdown-menu absolute top-full left-0 mt-2 w-64">
                            <div class="dropdown-arrow"></div>
                            <div class="relative bg-white rounded-lg shadow-xl overflow-hidden py-2">
                                <a href="/Template-WebSekolah/pages/berita.php" class="flex items-center gap-3 px-4 py-3 hover:bg-blue-50 transition-colors group"><i class="fas fa-newspaper w-5 transition-transform group-hover:text-blue-600"></i>
                                    <div>
                                        <div class="font-medium text-gray-900 group-hover:text-blue-600">Berita</div>
                                        <div class="text-xs text-gray-500">Berita Terbaru</div>
                                    </div>
                                </a>
                                <a href="/Template-WebSekolah/pages/pengumuman.php" class="flex items-center gap-3 px-4 py-3 hover:bg-blue-50 transition-colors group"><i class="fas fa-bullhorn w-5 transition-transform group-hover:text-blue-600"></i>
                                    <div>
                                        <div class="font-medium text-gray-900 group-hover:text-blue-600">Pengumuman</div>
                                        <div class="text-xs text-gray-500">Pengumuman Resmi</div>
                                    </div>
                                </a>
                                <a href="/Template-WebSekolah/pages/agenda.php" class="flex items-center gap-3 px-4 py-3 hover:bg-blue-50 transition-colors group"><i class="fas fa-calendar-check w-5 transition-transform group-hover:text-blue-600"></i>
                                    <div>
                                        <div class="font-medium text-gray-900 group-hover:text-blue-600">Agenda</div>
                                        <div class="text-xs text-gray-500">Agenda Kegiatan</div>
                                    </div>
                                </a>
                                <a href="/Template-WebSekolah/pages/prestasi.php" class="flex items-center gap-3 px-4 py-3 hover:bg-blue-50 transition-colors group"><i class="fas fa-trophy w-5 transition-transform group-hover:text-blue-600"></i>
                                    <div>
                                        <div class="font-medium text-gray-900 group-hover:text-blue-600">Prestasi</div>
                                        <div class="text-xs text-gray-500">Prestasi Siswa</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>

                    <li><a href="/Template-WebSekolah/quospages/galeri.php" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">Galeri</a></li>
                    <li><a href="/Template-WebSekolah/pages/kontak.php" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">Kontak</a></li>

                    <li class="nav-item relative language-dropdown-desktop" id="desktopLangDropdown">
                        <button class="language-trigger text-gray-700 font-medium flex items-center gap-1 border border-gray-300 rounded-full px-2 py-1 hover:bg-gray-100 transition-colors">
                            <img src="https://flagsapi.com/ID/flat/24.png" alt="ID Flag" id="currentFlagDesktop" class="w-6 h-auto rounded-full shadow-md">
                        </button>

                        <div class="dropdown-menu absolute top-full right-0 mt-4 w-36">
                            <div class="dropdown-arrow-right"></div>
                            <div class="relative bg-white rounded-lg shadow-xl overflow-hidden py-2">
                                <button data-lang="id" data-flag="ID" class="language-select flex items-center gap-2 px-4 py-2 text-sm text-gray-900 hover:bg-blue-50 w-full text-left font-semibold">
                                    <img src="https://flagsapi.com/ID/flat/24.png" alt="ID Flag" class="w-6 h-auto rounded-full"> ID
                                </button>
                                <button data-lang="en" data-flag="GB" class="language-select flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 w-full text-left">
                                    <img src="https://flagsapi.com/GB/flat/24.png" alt="EN Flag" class="w-6 h-auto rounded-full"> EN
                                </button>
                            </div>
                        </div>
                    </li>

                    <li class="relative overflow-hidden">
                        <a href="login.php" class="glow-button block w-full h-full rounded-full bg-blue-600 text-white px-6 py-2.5 hover:bg-blue-700 font-semibold shadow-md will-change-transform">
                            <span class="relative z-10">Masuk</span>
                        </a>
                    </li>
                </ul>

                <div class="flex items-center gap-2 lg:hidden">
                    <li class="relative overflow-hidden">
                        <a href="login.php" class="glow-button block w-full h-full rounded-full bg-blue-600 text-white px-6 py-2.5 hover:bg-blue-700 font-semibold shadow-md will-change-transform">
                            <span class="relative z-10">Masuk</span>
                        </a>
                    </li>
                    <button id="hamburger" class="lg:hidden w-10 h-10 flex flex-col justify-center items-center gap-1.5 rounded-lg hover:bg-gray-100 transition-all">
                        <span class="hamburger-line w-6 h-0.5 bg-gray-700 rounded-full"></span>
                        <span class="hamburger-line w-6 h-0.5 bg-gray-700 rounded-full"></span>
                        <span class="hamburger-line w-6 h-0.5 bg-gray-700 rounded-full"></span>
                    </button>
                </div>

            </div>
        </div>
    </nav>

    <div id="overlay" class="fixed inset-0 bg-black/50 z-40 opacity-0 invisible transition-all duration-300"></div>

    <aside id="sidebar" class="fixed top-0 left-0 h-full w-64 bg-white shadow-2xl z-50 transform -translate-x-full transition-transform duration-400 overflow-y-auto">
        <div class="p-6">
            <div class="flex items-center justify-between mb-8">
                <div class="flex items-center gap-3">
                    <img src="/Template-WebSekolah/assets/images/logo.png" alt="Logo" class="w-40">
                </div>
            </div>

            <nav class="space-y-2">
                <a href="/Template-WebSekolah/src/index.php" class="block px-4 py-3 hover:bg-blue-50 text-blue-600 rounded-lg font-medium transition-all">
                    <i class="fas fa-home w-5"></i> Beranda
                </a>

                <div class="mobile-dropdown">
                    <button onclick="toggleMobileDropdown(this)" class="w-full flex items-center justify-between px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg font-medium transition-all">
                        <span><i class="fas fa-info-circle w-5"></i> Profil</span>
                        <i class="fas fa-chevron-down text-sm transition-transform duration-300"></i>
                    </button>
                    <div class="mobile-dropdown-content max-h-0 overflow-hidden transition-all duration-300">
                        <div class="pl-4 pt-2 space-y-1 border-l-2 border-blue-200 ml-6">
                            <a href="/Template-WebSekolah/pages/tentang-kami.php" class="block px-4 py-2 text-sm text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">Tentang Kami</a>
                            <a href="/Template-WebSekolah/pages/Sambutan.php" class="block px-4 py-2 text-sm text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">Sambutan Kepala Sekolah</a>
                            <a href="/Template-WebSekolah/pages/visi-misi.php" class="block px-4 py-2 text-sm text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">Visi & Misi</a>
                            <a href="/Template-WebSekolah/pages/struktur-organisasi.php" class="block px-4 py-2 text-sm text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">Struktur Organisasi</a>
                        </div>
                    </div>
                </div>
                <div class="mobile-dropdown">
                    <button onclick="toggleMobileDropdown(this)" class="w-full flex items-center justify-between px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg font-medium transition-all">
                        <span><i class="fas fa-book w-5"></i> Akademik</span>
                        <i class="fas fa-chevron-down text-sm transition-transform duration-300"></i>
                    </button>
                    <div class="mobile-dropdown-content max-h-0 overflow-hidden transition-all duration-300">
                        <div class="pl-4 pt-2 space-y-1 border-l-2 border-blue-200 ml-6">
                            <a href="/Template-WebSekolah/pages/kurikulum.php" class="block px-4 py-2 text-sm text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">Kurikulum</a>
                            <a href="/Template-WebSekolah/pages/program-unggulan.php" class="block px-4 py-2 text-sm text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">Program Unggulan</a>
                            <a href="/Template-WebSekolah/pages/kalender-akademik.php" class="block px-4 py-2 text-sm text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">Kalender Akademik</a>
                            <a href="/Template-WebSekolah/pages/ekstrakurikuler.php" class="block px-4 py-2 text-sm text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">Ekstrakurikuler</a>
                        </div>
                    </div>
                </div>

                <div class="mobile-dropdown">
                    <button onclick="toggleMobileDropdown(this)" class="w-full flex items-center justify-between px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg font-medium transition-all">
                        <span><i class="fas fa-user-graduate w-5"></i> PPDB</span>
                        <i class="fas fa-chevron-down text-sm transition-transform duration-300"></i>
                    </button>
                    <div class="mobile-dropdown-content max-h-0 overflow-hidden transition-all duration-300">
                        <div class="pl-4 pt-2 space-y-1 border-l-2 border-blue-200 ml-6">
                            <a href="/Template-WebSekolah/pages/info-ppdb.php" class="block px-4 py-2 text-sm text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">Informasi PPDB</a>
                            <a href="/Template-WebSekolah/pages/syarat-pendaftaran.php" class="block px-4 py-2 text-sm text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">Syarat Pendaftaran</a>
                            <a href="/Template-WebSekolah/pages/alur-pendaftaran.php" class="block px-4 py-2 text-sm text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">Alur Pendaftaran</a>
                            <a href="/Template-WebSekolah/pages/daftar-online.php" class="block px-4 py-2 text-sm text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">Daftar Online</a>
                        </div>
                    </div>
                </div>

                <div class="mobile-dropdown">
                    <button onclick="toggleMobileDropdown(this)" class="w-full flex items-center justify-between px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg font-medium transition-all">
                        <span><i class="fas fa-newspaper w-5"></i> Informasi</span>
                        <i class="fas fa-chevron-down text-sm transition-transform duration-300"></i>
                    </button>
                    <div class="mobile-dropdown-content max-h-0 overflow-hidden transition-all duration-300">
                        <div class="pl-4 pt-2 space-y-1 border-l-2 border-blue-200 ml-6">
                            <a href="/Template-WebSekolah/pages/berita.php" class="block px-4 py-2 text-sm text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">Berita</a>
                            <a href="/Template-WebSekolah/pages/pengumuman.php" class="block px-4 py-2 text-sm text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">Pengumuman</a>
                            <a href="/Template-WebSekolah/pages/agenda.php" class="block px-4 py-2 text-sm text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">Agenda</a>
                            <a href="/Template-WebSekolah/pages/prestasi.php" class="block px-4 py-2 text-sm text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">Prestasi</a>
                        </div>
                    </div>
                </div>

                <a href="/Template-WebSekolah/pages/galeri.php" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg font-medium transition-all">
                    <i class="fas fa-images w-5"></i> Galeri
                </a>

                <a href="/Template-WebSekolah/pages/kontak.php" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg font-medium transition-all">
                    <i class="fas fa-phone w-5"></i> Kontak
                </a>

                <div class="mobile-dropdown mt-4" id="mobileLangDropdown">
                    <button onclick="toggleMobileDropdown(this)" class="w-full flex items-center justify-between px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg font-medium transition-all">
                        <span><img src="https://flagsapi.com/ID/flat/24.png" alt="ID Flag" id="currentFlagMobile" class="w-6 h-auto inline mr-2 rounded-full"> Indonesia</span>
                        <i class="fas fa-chevron-down text-sm transition-transform duration-300"></i>
                    </button>
                    <div class="mobile-dropdown-content max-h-0 overflow-hidden transition-all duration-300">
                        <div class="pl-4 pt-2 space-y-1 border-l-2 border-blue-200 ml-6">
                            <button data-lang="id" data-flag="ID" class="language-select-mobile flex items-center gap-2 px-4 py-2 text-sm text-gray-900 hover:text-blue-600 hover:bg-blue-50 rounded-lg w-full text-left font-semibold">
                                <img src="https://flagsapi.com/ID/flat/24.png" alt="ID Flag" class="w-6 h-auto rounded-full"> Indonesia
                            </button>
                            <button data-lang="en" data-flag="GB" class="language-select-mobile flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg w-full text-left">
                                <img src="https://flagsapi.com/GB/flat/24.png" alt="EN Flag" class="w-6 h-auto rounded-full"> English
                            </button>
                        </div>
                    </div>
                </div>

            </nav>

            <div class="mt-8 pt-8 border-t border-gray-200">
                <p class="text-sm text-gray-600 mb-3">Ikuti Kami:</p>
                <div class="flex gap-3">
                    <a href="#" class="w-10 h-10 bg-blue-100 hover:bg-blue-600 text-blue-600 hover:text-white rounded-lg flex items-center justify-center transition-all">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-blue-100 hover:bg-blue-600 text-blue-600 hover:text-white rounded-lg flex items-center justify-center transition-all">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-blue-100 hover:bg-blue-600 text-blue-600 hover:text-white rounded-lg flex items-center justify-center transition-all">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-blue-100 hover:bg-blue-600 text-blue-600 hover:text-white rounded-lg flex items-center justify-center transition-all">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>
        </div>
    </aside>