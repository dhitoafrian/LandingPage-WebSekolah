
class PPDBSlider {
  constructor() {
    this.sliderTrack = document.getElementById("sliderTrackPPDB");
    this.slider = document.getElementById("sliderPPDB");

    // Clone slides untuk infinity loop (next & prev)
    this.cloneSlides();

    this.slides = document.querySelectorAll(".ppdb-slide");
    this.realSlidesCount = this.slides.length - 2; // -2 karena ada 2 clone
    this.currentSlide = 1; // Start dari slide asli pertama (bukan clone)

    this.isAnimating = false;
    this.animationDuration = 700;
    this.autoSlideInterval = null;
    this.autoSlideDelay = 3000;

    // Touch/Drag
    this.isDragging = false;
    this.startPos = 0;
    this.currentTranslate = 0;
    this.prevTranslate = 0;
    this.startTime = 0;
    this.hasMoved = false;

    console.log("🔄 PPDB Slider initialized - Bidirectional Infinity Loop");
    this.init();
  }

  cloneSlides() {
    const allSlides = this.sliderTrack.querySelectorAll(".ppdb-slide");
    const firstSlide = allSlides[0];
    const lastSlide = allSlides[allSlides.length - 1];

    // Clone last slide dan taruh di awal (untuk prev)
    const cloneLast = lastSlide.cloneNode(true);
    cloneLast.classList.add("clone", "clone-last");
    this.sliderTrack.insertBefore(cloneLast, firstSlide);

    // Clone first slide dan taruh di akhir (untuk next)
    const cloneFirst = firstSlide.cloneNode(true);
    cloneFirst.classList.add("clone", "clone-first");
    this.sliderTrack.appendChild(cloneFirst);
  }

  init() {
    // Set posisi awal ke slide asli pertama
    this.updateSlidePosition(true);

    // Mobile click - show content (TIDAK pindah slide)
    this.slides.forEach((slide) => {
      slide.addEventListener("click", (e) => {
        if (window.innerWidth <= 768 && !e.target.closest("button")) {
          if (!this.hasMoved) {
            // Pure click, toggle active
            this.slides.forEach((s) => s.classList.remove("active"));
            slide.classList.add("active");
            e.preventDefault();
            e.stopPropagation();
          }
        }
      });
    });

    // Mouse events
    this.slider.addEventListener("mousedown", (e) => this.handleStart(e), {
      passive: false,
    });
    this.slider.addEventListener("mousemove", (e) => this.handleMove(e), {
      passive: false,
    });
    this.slider.addEventListener("mouseup", (e) => this.handleEnd(e));
    this.slider.addEventListener("mouseleave", (e) => this.handleEnd(e));

    // Touch events
    this.slider.addEventListener("touchstart", (e) => this.handleStart(e), {
      passive: false,
    });
    this.slider.addEventListener("touchmove", (e) => this.handleMove(e), {
      passive: false,
    });
    this.slider.addEventListener("touchend", (e) => this.handleEnd(e));

    // Prevent image drag
    this.slider.querySelectorAll("img").forEach((img) => {
      img.addEventListener("dragstart", (e) => e.preventDefault());
    });

    this.startAutoSlide();

    // Pause on hover (desktop only)
    if (window.innerWidth > 768) {
      this.slider.addEventListener("mouseenter", () => this.pauseAutoSlide());
      this.slider.addEventListener("mouseleave", () => this.startAutoSlide());
    }
  }

  handleStart(event) {
    if (this.isAnimating) return;

    this.isDragging = true;
    this.hasMoved = false;
    this.startPos = this.getPositionX(event);
    this.startTime = Date.now();

    // Get slide width (FLAT, ga include margin!)
    const slideWidth = window.innerWidth <= 768 ? 100 : 71.43;
    this.prevTranslate = -this.currentSlide * slideWidth;

    this.sliderTrack.classList.add("no-select");
    this.pauseAutoSlide();
    this.sliderTrack.style.transition = "none";

    event.preventDefault();
  }

  handleMove(event) {
    if (!this.isDragging) return;

    const currentPosition = this.getPositionX(event);
    const diff = currentPosition - this.startPos;

    // Track if user actually moved (not just click)
    if (Math.abs(diff) > 5) {
      this.hasMoved = true;
    }

    const containerWidth = this.slider.offsetWidth;
    const dragPercentage = (diff / containerWidth) * 100;

    this.currentTranslate = this.prevTranslate + dragPercentage;
    this.sliderTrack.style.transform = `translateX(${this.currentTranslate}%)`;

    event.preventDefault();
  }

  handleEnd(event) {
    if (!this.isDragging) return;

    this.isDragging = false;
    this.sliderTrack.style.transition = `transform ${this.animationDuration}ms cubic-bezier(0.25, 0.46, 0.45, 0.94)`;

    const dragDiff = this.currentTranslate - this.prevTranslate;

    // Mobile: threshold lebih besar biar ga gampang pindah
    const threshold = window.innerWidth <= 768 ? 50 : 30;

    // Kalau pure click (ga geser), jangan pindah slide
    if (!this.hasMoved || Math.abs(dragDiff) < threshold) {
      this.updateSlidePosition();
    } else if (dragDiff < -threshold) {
      // Swipe kiri = next
      this.nextSlide();
    } else if (dragDiff > threshold) {
      // Swipe kanan = prev
      this.prevSlide();
    } else {
      this.updateSlidePosition();
    }

    this.sliderTrack.classList.remove("no-select");

    // Restart auto-slide (desktop only, atau mobile kalau bukan pure click)
    if (window.innerWidth > 768 || this.hasMoved) {
      this.startAutoSlide();
    }
  }

  getPositionX(event) {
    if (event.type.includes("mouse")) {
      return event.clientX;
    } else {
      return event.touches[0].clientX;
    }
  }

  nextSlide() {
    if (this.isAnimating) return;

    this.currentSlide++;
    this.updateSlidePosition();

    // Kalau sampai clone first, instant jump ke slide asli pertama
    if (this.currentSlide === this.slides.length - 1) {
      setTimeout(() => {
        this.sliderTrack.style.transition = "none";
        this.currentSlide = 1; // Slide asli pertama
        this.updateSlidePosition(true);

        // Re-enable transition setelah jump
        requestAnimationFrame(() => {
          this.sliderTrack.style.transition = `transform ${this.animationDuration}ms cubic-bezier(0.25, 0.46, 0.45, 0.94)`;
        });
      }, this.animationDuration);
    }

    this.resetAutoSlide();
  }

  prevSlide() {
    if (this.isAnimating) return;

    this.currentSlide--;
    this.updateSlidePosition();

    // Kalau sampai clone last, instant jump ke slide asli terakhir
    if (this.currentSlide === 0) {
      setTimeout(() => {
        this.sliderTrack.style.transition = "none";
        this.currentSlide = this.slides.length - 2; // Slide asli terakhir
        this.updateSlidePosition(true);

        // Re-enable transition setelah jump
        requestAnimationFrame(() => {
          this.sliderTrack.style.transition = `transform ${this.animationDuration}ms cubic-bezier(0.25, 0.46, 0.45, 0.94)`;
        });
      }, this.animationDuration);
    }

    this.resetAutoSlide();
  }

  updateSlidePosition(skipAnimation = false) {
    this.isAnimating = !skipAnimation;

    // Get slide width (FLAT 100% atau 71.43%, margin handled by CSS!)
    const slideWidth = window.innerWidth <= 768 ? 100 : 71.43;
    const offset = -this.currentSlide * slideWidth;

    this.sliderTrack.style.transform = `translateX(${offset}%)`;

    if (!skipAnimation) {
      this.sliderTrack.style.transition = `transform ${this.animationDuration}ms cubic-bezier(0.25, 0.46, 0.45, 0.94)`;
    } else {
      this.sliderTrack.style.transition = "none";
    }

    this.updateSlideRadius();

    if (!skipAnimation) {
      setTimeout(() => {
        this.isAnimating = false;
      }, this.animationDuration);
    } else {
      this.isAnimating = false;
    }
  }

  updateSlideRadius() {
    // Desktop only
    if (window.innerWidth > 768) {
      this.slides.forEach((slide, index) => {
        // Skip clone
        if (slide.classList.contains("clone")) {
          slide.style.borderRadius = "0";
          return;
        }

        if (index === this.currentSlide) {
          slide.style.borderRadius = "1rem";
        } else if (index === this.currentSlide + 1) {
          slide.style.borderRadius = "1rem 0 0 1rem";
        } else {
          slide.style.borderRadius = "0";
        }
      });
    } else {
      // Mobile: all full radius
      this.slides.forEach((slide) => {
        if (!slide.classList.contains("clone")) {
          slide.style.borderRadius = "1rem";
        }
      });
    }
  }

  startAutoSlide() {
    this.pauseAutoSlide();

    this.autoSlideInterval = setInterval(() => {
      if (!this.isDragging && !this.isAnimating) {
        this.nextSlide();
      }
    }, this.autoSlideDelay);
  }

  pauseAutoSlide() {
    if (this.autoSlideInterval) {
      clearInterval(this.autoSlideInterval);
      this.autoSlideInterval = null;
    }
  }

  resetAutoSlide() {
    this.pauseAutoSlide();
    this.startAutoSlide();
  }
}

// Initialize
document.addEventListener("DOMContentLoaded", function () {
  const slider = document.getElementById("sliderPPDB");
  if (slider) {
    new PPDBSlider();
    console.log("✅ PPDB Slider ready - All bugs fixed!");
  }
});
