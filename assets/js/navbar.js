// Hamburger Menu & Sidebar Toggle
const hamburger = document.getElementById("hamburger");
const sidebar = document.getElementById("sidebar");
const overlay = document.getElementById("overlay");

function toggleSidebar() {
  hamburger.classList.toggle("active");
  sidebar.classList.toggle("-translate-x-full");

  if (!sidebar.classList.contains("-translate-x-full")) {
    overlay.classList.remove("invisible", "opacity-0");
    overlay.classList.add("visible", "opacity-100");
    document.body.style.overflow = "hidden";
  } else {
    overlay.classList.add("invisible", "opacity-0");
    overlay.classList.remove("visible", "opacity-100");
    document.body.style.overflow = "";
  }
}

hamburger.addEventListener("click", toggleSidebar);
overlay.addEventListener("click", toggleSidebar);

// Mobile Dropdown Toggle
function toggleMobileDropdown(button) {
  const dropdown = button.parentElement;
  const content = dropdown.querySelector(".mobile-dropdown-content");
  const icon = button.querySelector(".fa-chevron-down");

  // Close other dropdowns & remove active style
  document.querySelectorAll(".mobile-dropdown").forEach((other) => {
    if (other !== dropdown) {
      const otherButton = other.querySelector("button"); // Dapatkan tombol dropdown lain
      const otherContent = other.querySelector(".mobile-dropdown-content");
      const otherIcon = other.querySelector(".fa-chevron-down");

      // Hapus style aktif/focus
      otherButton.classList.remove("text-blue-600", "bg-blue-50");
      otherButton.classList.add("text-gray-700"); // Kembalikan ke warna default

      // Tutup konten
      otherContent.style.maxHeight = "0";
      otherIcon.style.transform = "rotate(0deg)";
    }
  });

  // Toggle current dropdown
  if (content.style.maxHeight && content.style.maxHeight !== "0px") {
    // SEDANG TERBUKA -> TUTUP
    content.style.maxHeight = "0";
    icon.style.transform = "rotate(0deg)";

    // Hapus style aktif/focus pada tombol
    button.classList.remove("text-blue-600", "bg-blue-50");
    button.classList.add("text-gray-700");
  } else {
    // SEDANG TERTUTUP -> BUKA
    content.style.maxHeight = content.scrollHeight + "px";
    icon.style.transform = "rotate(180deg)";

    // Tambahkan style aktif/focus pada tombol
    button.classList.remove("text-gray-700"); // Hapus warna default
    button.classList.add("text-blue-600", "bg-blue-50"); // Tambahkan warna aktif
  }
}
// Sticky Navbar
window.addEventListener("scroll", function () {
  const nav = document.getElementById("mainNav");
  if (window.scrollY > 50) {
    nav.classList.add("sticky");
  } else {
    nav.classList.remove("sticky");
  }
});

// Solusi tambahan untuk mencegah gap pada dropdown desktop
document.addEventListener("DOMContentLoaded", function () {
  const dropdowns = document.querySelectorAll(".nav-item");

  dropdowns.forEach((dropdown) => {
    // Tambahkan event listener untuk mouseenter dan mouseleave
    dropdown.addEventListener("mouseenter", function () {
      this.classList.add("hovering");
    });

    dropdown.addEventListener("mouseleave", function () {
      this.classList.remove("hovering");
    });
  });
});

function handleResize() {
  const width = window.innerWidth;

  if (width >= 640) {
    //tutup sidebar jika terbuka
    if (!sidebar.classList.contains("-translate-x-full")) {
      toggleSidebar();
    }

    //tutuo semua dropdown mobile
    document.querySelectorAll(".mobile-dropdown-content").forEach((content) => {
      content.style.maxHeight = "0";
    });

    document
      .querySelectorAll(".mobile-dropdown .fa-chevron-down")
      .forEach((icon) => {
        icon.style.transform = "rotate(0deg)";
      });
  }
}

//panggil saat resize
window.addEventListener("resize", handleResize);

//panggil sekali saat load untuk pastikan state konsisten
window.addEventListener("load", handleResize);

const desktopLangDropdown = document.getElementById("desktopLangDropdown");
const desktopMenu = desktopLangDropdown.querySelector(".dropdown-menu");

desktopLangDropdown.addEventListener("mouseenter", () => {
  desktopMenu.style.opacity = "1";
  desktopMenu.style.visibility = "visible";
  desktopMenu.style.transform = "translateY(0)";
});

desktopLangDropdown.addEventListener("mouseleave", () => {
  desktopMenu.style.opacity = "0";
  desktopMenu.style.visibility = "hidden";
  desktopMenu.style.transform = "translateY(10px)";
});

// FUNGSI UTAMA: MENGATUR PEMILIHAN BAHASA (DESKTOP DAN MOBILE)
function handleLanguageSelection(targetButton) {
  const lang = targetButton.getAttribute("data-lang");
  const flagCode = targetButton.getAttribute("data-flag");
  const flagUrl = `https://flagsapi.com/${flagCode}/flat/24.png`;
  const langText = targetButton.textContent.trim();

  // 1. UPDATE BENDERA & GAYA DI DESKTOP
  const currentFlagDesktop = document.getElementById("currentFlagDesktop");
  currentFlagDesktop.src = flagUrl;

  // Atur gaya aktif (Bold) di menu dropdown desktop
  document.querySelectorAll(".language-select").forEach((btn) => {
    btn.classList.remove("font-semibold", "text-gray-900");
    btn.classList.add("text-gray-700");
  });
  desktopLangDropdown
    .querySelector(`[data-lang="${lang}"]`)
    .classList.add("font-semibold", "text-gray-900");
  desktopLangDropdown
    .querySelector(`[data-lang="${lang}"]`)
    .classList.remove("text-gray-700");

  // 2. UPDATE BENDERA & GAYA DI MOBILE
  const mobileDropdownContainer = document.getElementById("mobileLangDropdown");
  // Update teks tampilan di tombol trigger mobile
  const mobileTriggerSpan = mobileDropdownContainer.querySelector("span");
  mobileTriggerSpan.innerHTML = `<img src="${flagUrl}" alt="${lang} Flag" id="currentFlagMobile" class="w-6 h-auto inline mr-2 rounded-full"> ${langText}`;

  // Atur gaya aktif (Bold) di menu dropdown mobile
  document.querySelectorAll(".language-select-mobile").forEach((btn) => {
    btn.classList.remove("font-semibold", "text-blue-600");
    btn.classList.add("text-gray-700");
  });
  mobileDropdownContainer
    .querySelector(`[data-lang="${lang}"]`)
    .classList.add("font-semibold", "text-blue-600");
  mobileDropdownContainer
    .querySelector(`[data-lang="${lang}"]`)
    .classList.remove("text-gray-700");

  // 3. TUTUP MENU DESKTOP & MOBILE
  // Tutup dropdown desktop setelah klik
  desktopMenu.style.opacity = "0";
  desktopMenu.style.visibility = "hidden";
  desktopMenu.style.transform = "translateY(10px)";

  // Cek dan tutup dropdown mobile jika terbuka
  const mobileContent = mobileDropdownContainer.querySelector(
    ".mobile-dropdown-content"
  );
  if (mobileContent && mobileContent.style.maxHeight) {
    const dropdownButton = mobileDropdownContainer.querySelector("button");
    toggleMobileDropdown(dropdownButton);
  }

  // --- TEMPAT LOGIC BAHASA SESUNGGUHNYA ---
  console.log(
    `Language changed to: ${lang.toUpperCase()}. Anda bisa menambahkan logic untuk mengganti konten halaman/mengatur cookie di sini.`
  );
}

// Event Listeners untuk Pemilihan Bahasa Desktop
document.querySelectorAll(".language-select").forEach((button) => {
  button.addEventListener("click", function () {
    handleLanguageSelection(this);
  });
});

// Event Listeners untuk Pemilihan Bahasa Mobile
document.querySelectorAll(".language-select-mobile").forEach((button) => {
  button.addEventListener("click", function () {
    handleLanguageSelection(this);
  });
});
