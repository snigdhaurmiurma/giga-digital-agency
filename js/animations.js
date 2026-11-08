/**
 * GIGA DIGITAL AGENCY — MASTER ANIMATIONS & INTERACTIVE MOTION
 * Features: Scroll reveals, Number counters, Testimonial carousel slider, Mouse glow
 */

document.addEventListener('DOMContentLoaded', () => {
  'use strict';

  // --- 1. Testimonial Carousel Slider ---
  const carouselTrack = document.querySelector('.testimonial-track');
  const slides = document.querySelectorAll('.testimonial-slide');
  const prevBtn = document.querySelector('.carousel-prev');
  const nextBtn = document.querySelector('.carousel-next');
  const dotsContainer = document.querySelector('.carousel-dots');
  
  if (carouselTrack && slides.length > 0) {
    let currentIndex = 0;
    let autoPlayTimer = null;
    let isPaused = false;

    // Create pagination dots
    slides.forEach((_, idx) => {
      const dot = document.createElement('div');
      dot.classList.add('carousel-dot');
      if (idx === 0) dot.classList.add('active');
      dot.addEventListener('click', () => {
        goToSlide(idx);
      });
      dotsContainer?.appendChild(dot);
    });

    const dots = document.querySelectorAll('.carousel-dot');

    function updateCarousel() {
      carouselTrack.style.transform = `translateX(-${currentIndex * 100}%)`;
      dots.forEach((dot, idx) => {
        dot.classList.toggle('active', idx === currentIndex);
      });
    }

    function goToSlide(index) {
      currentIndex = (index + slides.length) % slides.length;
      updateCarousel();
    }

    function nextSlide() {
      goToSlide(currentIndex + 1);
    }

    function prevSlide() {
      goToSlide(currentIndex - 1);
    }

    nextBtn?.addEventListener('click', nextSlide);
    prevBtn?.addEventListener('click', prevSlide);

    // Auto Play every 5 seconds
    function startAutoPlay() {
      if (autoPlayTimer) clearInterval(autoPlayTimer);
      autoPlayTimer = setInterval(() => {
        if (!isPaused) {
          nextSlide();
        }
      }, 5000);
    }

    carouselTrack.parentElement?.addEventListener('mouseenter', () => { isPaused = true; });
    carouselTrack.parentElement?.addEventListener('mouseleave', () => { isPaused = false; });

    // Touch swipe for mobile devices
    let touchStartX = 0;
    let touchEndX = 0;

    carouselTrack.addEventListener('touchstart', (e) => {
      touchStartX = e.changedTouches[0].screenX;
      isPaused = true;
    }, { passive: true });

    carouselTrack.addEventListener('touchend', (e) => {
      touchEndX = e.changedTouches[0].screenX;
      handleSwipe();
      isPaused = false;
    }, { passive: true });

    function handleSwipe() {
      const swipeDistance = touchEndX - touchStartX;
      if (swipeDistance < -40) {
        nextSlide();
      } else if (swipeDistance > 40) {
        prevSlide();
      }
    }

    startAutoPlay();
  }

  // --- 2. Number Counter Animation ---
  const countElements = document.querySelectorAll('.stat-count');
  
  if ('IntersectionObserver' in window && countElements.length > 0) {
    const countObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const el = entry.target;
          const targetValue = parseInt(el.getAttribute('data-target'), 10);
          const duration = 1800; // ms
          const stepTime = 20; // ms
          const totalSteps = duration / stepTime;
          let currentStep = 0;

          const counter = setInterval(() => {
            currentStep++;
            const progress = currentStep / totalSteps;
            // Ease out cubic
            const easeOutProgress = 1 - Math.pow(1 - progress, 3);
            const currentVal = Math.round(easeOutProgress * targetValue);

            el.textContent = currentVal.toLocaleString();

            if (currentStep >= totalSteps) {
              el.textContent = targetValue.toLocaleString();
              clearInterval(counter);
            }
          }, stepTime);

          observer.unobserve(el);
        }
      });
    }, { threshold: 0.2 });

    countElements.forEach(el => countObserver.observe(el));
  } else {
    countElements.forEach(el => {
      el.textContent = el.getAttribute('data-target');
    });
  }

  // --- 3. Scroll Reveal Animation via IntersectionObserver ---
  const revealElements = document.querySelectorAll('.gda-reveal');
  if ('IntersectionObserver' in window && revealElements.length > 0) {
    const revealObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('revealed');
        }
      });
    }, { threshold: 0.1 });

    revealElements.forEach(el => {
      el.style.opacity = '0';
      el.style.transform = 'translateY(24px)';
      el.style.transition = 'opacity 0.6s cubic-bezier(0.16, 1, 0.3, 1), transform 0.6s cubic-bezier(0.16, 1, 0.3, 1)';
      revealObserver.observe(el);
    });

    // Helper CSS injection
    const styleSheet = document.createElement('style');
    styleSheet.textContent = `.gda-reveal.revealed { opacity: 1 !important; transform: translateY(0) !important; }`;
    document.head.appendChild(styleSheet);
  }

  // --- 4. Interactive Card Radial Hover Glow ---
  const glowCards = document.querySelectorAll('.gda-card, .pricing-card');
  glowCards.forEach(card => {
    card.addEventListener('mousemove', (e) => {
      const rect = card.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;
      card.style.setProperty('--mouse-x', `${x}px`);
      card.style.setProperty('--mouse-y', `${y}px`);
    });
  });
});
