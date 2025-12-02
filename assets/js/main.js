document.addEventListener("DOMContentLoaded", function () {
  // ========================================
  // S1: HERO SLIDER
  // ========================================
  const swiper = new Swiper(".heroSwiper", {
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    speed: 800,
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


  // ========================================
  // S2: PPDB SLIDER
  // ========================================
  const ppdbSwiper = new Swiper("#ppdbSwiper", {
    loop: true,
    speed: 700,

    observer: true,
    observeParents: true,
    watchOverflow: true,

    touchRatio: 0.5,
    threshold: 20,

    breakpoints: {
      0: {
        slidesPerView: 1,
        spaceBetween: 15,
        centeredSlides: false,
      },
      1024: {
        slidesPerView: 1.4,
        spaceBetween: 30,
        centeredSlides: false,
        loopedSlides: 3,
        loopFillGroupWithBlank: true,
      },
    },

    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },

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

  // ========================================
  // S2: SMARTSCHOOL
  // ========================================
function animateCounter(element, target, duration = 2000) {
  let start = 0;
  const increment = target / (duration / 16);

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

const observerOptions = {
  threshold: 0.3,
  rootMargin: "0px",
};

const statsObserver = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      const pesertaDidik = entry.target.querySelector(".counter-peserta");
      const guru = entry.target.querySelector(".counter-guru");
      const kelas = entry.target.querySelector(".counter-kelas");

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

document.addEventListener("DOMContentLoaded", () => {
  const statsSection = document.querySelector(
    "#stats-section"
  );
  if (statsSection) {
    statsObserver.observe(statsSection);
  }
});

  // ========================================
  // S2: INFOGRAFIS
  // ========================================
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

  // ========================================
  // S2: BERITA
  // ========================================
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
