// Pastikan file ini dimuat setelah Swiper Library (swiper-bundle.min.js)
document.addEventListener("DOMContentLoaded", function () {
  // ========================================
  // S1: HERO SLIDER (Fix Touch & Scroll Conflict)
  // ========================================
  const heroSwiper = new Swiper("#heroSwiper", {
    loop: true,
    speed: 1000,
    effect: "slide",

    // 🛑 FIX UTAMA TOUCH: Mengatur Threshold dan Touch Ratio
    touchRatio: 0.5, // Mengurangi sensitivitas geser horizontal
    longSwipesRatio: 0.1, // Geser harus lebih cepat untuk memicu swipe slider
    threshold: 20, // Gerakan harus lebih dari 20px agar dianggap swipe slider
    touchMoveStopPropagation: true, // Mencegah event sentuhan menyebar ke elemen lain

    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },

    navigation: {
      nextEl: "#nextBtn",
      prevEl: "#prevBtn",
    },

    slidesPerView: 1,
    spaceBetween: 0,
  });

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

    // ⛔ 3. PERBAIKI BUTTON: Tambahkan modul navigasi
    navigation: {
        nextEl: '.video-swiper-next',
        prevEl: '.video-swiper-prev',
    },

    breakpoints: {
        768: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
    },
});