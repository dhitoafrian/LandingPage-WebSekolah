// Pastikan file ini dimuat setelah Swiper Library (swiper-bundle.min.js)
document.addEventListener("DOMContentLoaded", function () {
  // ========================================
  // S1: HERO SLIDER (Fix Touch & Scroll Conflict)
  // ========================================
  const swiper = new Swiper(".heroSwiper", {
    loop: true,
    autoplay: {
      delay: 5000, // Lebih lama dikit biar gak terburu-buru
      disableOnInteraction: false,
    },
    speed: 800, // Smooth transition
    effect: "fade",
    fadeEffect: {
      crossFade: true,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  // GAK PERLU slideChange event lagi, CSS udah handle animasi

  // ========================================
  // S2: PPDB SLIDER (Fix Layout Mobile & Click/Drag)
  // ========================================
  const ppdbSwiper = new Swiper("#ppdbSwiper", {
    loop: true, // WAJIB TRUE
    speed: 700, // ✅ FIX 1: Memaksa Re-render di dalam Kontainer Dinamis (Grid)

    observer: true,
    observeParents: true,
    watchOverflow: true,

    touchRatio: 0.5,
    threshold: 20,

    breakpoints: {
      0: {
        // Mobile Fix
        slidesPerView: 1,
        spaceBetween: 15,
        centeredSlides: false,
      },
      1024: {
        // Desktop Fix (lg:)
        slidesPerView: 1.4,
        spaceBetween: 30,
        centeredSlides: false,

        // ✅ FIX 2: Menetapkan Jumlah Slide Kloning Secara Eksplisit
        // Diperlukan saat slidesPerView adalah pecahan (1.4)
        loopedSlides: 3, // Karena Anda punya 3 slide
        loopFillGroupWithBlank: true,
      },
    },

    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },

    // Menangani Klik/Tap untuk Menampilkan Info di Mobile
    on: {
      tap: function (swiper, event) {
        if (window.innerWidth <= 768) {
          const clickedSlide = swiper.clickedSlide;

          if (clickedSlide) {
            swiper.slides.forEach((slide) => slide.classList.remove("active"));
            clickedSlide.classList.add("active");
            swiper.slideTo(swiper.clickedIndex);
          }
        }
      },
    },
  });
});

//smartschool
function animateCounter(element, target, duration = 2000) {
  let start = 0;
  const increment = target / (duration / 16); // 60fps

  const updateCounter = () => {
    start += increment;
    if (start < target) {
      element.textContent = Math.floor(start);
      requestAnimationFrame(updateCounter);
    } else {
      element.textContent = target;
    }
  };

  updateCounter();
}

// Intersection Observer untuk trigger animation saat scroll
const observerOptions = {
  threshold: 0.3, // Trigger ketika 30% element terlihat
  rootMargin: "0px",
};

const statsObserver = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      // Ambil semua angka yang mau di-animate
      const pesertaDidik = entry.target.querySelector(".counter-peserta");
      const guru = entry.target.querySelector(".counter-guru");
      const kelas = entry.target.querySelector(".counter-kelas");

      // Jalankan animasi
      if (pesertaDidik && !pesertaDidik.classList.contains("animated")) {
        animateCounter(pesertaDidik, 595);
        pesertaDidik.classList.add("animated");
      }

      if (guru && !guru.classList.contains("animated")) {
        animateCounter(guru, 69);
        guru.classList.add("animated");
      }

      if (kelas && !kelas.classList.contains("animated")) {
        animateCounter(kelas, 34);
        kelas.classList.add("animated");
      }
      statsObserver.unobserve(entry.target);
    }
  });
}, observerOptions);

// Observe section stats
document.addEventListener("DOMContentLoaded", () => {
  const statsSection = document.querySelector(
    "#stats-section" // INI PERUBAHAN UTAMA
  );
  if (statsSection) {
    statsObserver.observe(statsSection);
  }
});

//infografis
const swiperPrestasi = new Swiper(".prestasi-swiper", {
  slidesPerView: 1,
  spaceBetween: 20,
  loop: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    768: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
  },
});

//berita
const swiperBerita = new Swiper(".swiper-hero", {
  loop: true,
  freeMode: {
    enabled: true,
    sticky: true,
  },
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

const galeriSwiper = new Swiper(".galeri-swiper", {
  slidesPerView: 2,
  spaceBetween: 15,
  loop: true,
  loopAdditionalSlides: 2,

  autoplay: {
    delay: 3500,
    disableOnInteraction: false,
  },

  breakpoints: {
    768: {
      slidesPerView: 2.5,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
  },
});
// video dan agenda
const videoSwiper = new Swiper(".video-swiper", {
  slidesPerView: 1,
  spaceBetween: 15,

  // ✅ 1. SLIDE INFINITY
  loop: true,

  // ✅ 2. SLIDE OTOMATIS DAN MANUAL (Sudah Terpenuhi)
  allowTouchMove: true,
  touchRatio: 1,
  threshold: 5,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false, // Lanjut auto-slide setelah manual interaksi
  },


  breakpoints: {
    768: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
  },
});
