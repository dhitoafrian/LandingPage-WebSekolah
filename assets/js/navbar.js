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

  document.querySelectorAll(".mobile-dropdown").forEach((other) => {
    if (other !== dropdown) {
      const otherButton = other.querySelector("button"); 
      const otherContent = other.querySelector(".mobile-dropdown-content");
      const otherIcon = other.querySelector(".fa-chevron-down");

      // Hapus style aktif/focus
      otherButton.classList.remove("text-blue-600", "bg-blue-50");
      otherButton.classList.add("text-gray-700"); 

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

    button.classList.remove("text-blue-600", "bg-blue-50");
    button.classList.add("text-gray-700");
  } else {
    content.style.maxHeight = content.scrollHeight + "px";
    icon.style.transform = "rotate(180deg)";

    button.classList.remove("text-gray-700"); 
    button.classList.add("text-blue-600", "bg-blue-50");
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

document.addEventListener("DOMContentLoaded", function () {
  const dropdowns = document.querySelectorAll(".nav-item");

  dropdowns.forEach((dropdown) => {
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
    if (!sidebar.classList.contains("-translate-x-full")) {
      toggleSidebar();
    }

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

window.addEventListener("resize", handleResize);

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

function handleLanguageSelection(targetButton) {
  const lang = targetButton.getAttribute("data-lang");
  const flagCode = targetButton.getAttribute("data-flag");
  const flagUrl = `https://flagsapi.com/${flagCode}/flat/24.png`;
  const langText = targetButton.textContent.trim();

  const currentFlagDesktop = document.getElementById("currentFlagDesktop");
  currentFlagDesktop.src = flagUrl;

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

  const mobileDropdownContainer = document.getElementById("mobileLangDropdown");
  const mobileTriggerSpan = mobileDropdownContainer.querySelector("span");
  mobileTriggerSpan.innerHTML = `<img src="${flagUrl}" alt="${lang} Flag" id="currentFlagMobile" class="w-6 h-auto inline mr-2 rounded-full"> ${langText}`;

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


  desktopMenu.style.opacity = "0";
  desktopMenu.style.visibility = "hidden";
  desktopMenu.style.transform = "translateY(10px)";

  const mobileContent = mobileDropdownContainer.querySelector(
    ".mobile-dropdown-content"
  );
  if (mobileContent && mobileContent.style.maxHeight) {
    const dropdownButton = mobileDropdownContainer.querySelector("button");
    toggleMobileDropdown(dropdownButton);
  }

  console.log(
    `Language changed to: ${lang.toUpperCase()}. Anda bisa menambahkan logic untuk mengganti konten halaman/mengatur cookie di sini.`
  );
}

document.querySelectorAll(".language-select").forEach((button) => {
  button.addEventListener("click", function () {
    handleLanguageSelection(this);
  });
});

document.querySelectorAll(".language-select-mobile").forEach((button) => {
  button.addEventListener("click", function () {
    handleLanguageSelection(this);
  });
});
