/* ========================================================
   Giga Digital Agency - Custom Interactive Script
   Services Filter, Review Slider, Customization Modal
   ======================================================== */

document.addEventListener('DOMContentLoaded', function () {
  'use strict';

  // 1. SERVICES TAB FILTER (Creative, Growth, Tech)
  const tabButtons = document.querySelectorAll('.service-tab-btn');
  const serviceCards = document.querySelectorAll('.service-filter-item');

  if (tabButtons.length && serviceCards.length) {
    tabButtons.forEach(btn => {
      btn.addEventListener('click', function () {
        tabButtons.forEach(b => b.classList.remove('active'));
        this.classList.add('active');

        const filter = this.getAttribute('data-filter');

        serviceCards.forEach(card => {
          if (filter === 'all' || card.getAttribute('data-category') === filter) {
            card.style.display = 'block';
            setTimeout(() => {
              card.style.opacity = '1';
              card.style.transform = 'translateY(0)';
            }, 50);
          } else {
            card.style.opacity = '0';
            card.style.transform = 'translateY(15px)';
            setTimeout(() => {
              card.style.display = 'none';
            }, 250);
          }
        });
      });
    });
  }

  // 2. REVIEWS SLIDER (Smooth Sliding Transitions)
  const reviewTrack = document.querySelector('.review-slider-track');
  const reviewSlides = document.querySelectorAll('.review-slide-item');
  const btnPrev = document.querySelector('.review-prev-btn');
  const btnNext = document.querySelector('.review-next-btn');

  let currentSlide = 0;
  const totalSlides = reviewSlides.length;

  function updateSlide(index) {
    if (index < 0) {
      currentSlide = totalSlides - 1;
    } else if (index >= totalSlides) {
      currentSlide = 0;
    } else {
      currentSlide = index;
    }

    if (reviewTrack) {
      reviewTrack.style.transition = 'transform 0.45s cubic-bezier(0.25, 1, 0.5, 1)';
      reviewTrack.style.transform = `translateX(-${currentSlide * 100}%)`;
    }
  }

  if (btnPrev && btnNext && reviewSlides.length > 0) {
    btnPrev.addEventListener('click', () => updateSlide(currentSlide - 1));
    btnNext.addEventListener('click', () => updateSlide(currentSlide + 1));

    // Optional autoplay
    let autoSlideInterval = setInterval(() => {
      updateSlide(currentSlide + 1);
    }, 6000);

    const sliderContainer = document.querySelector('.review-slider-container');
    if (sliderContainer) {
      sliderContainer.addEventListener('mouseenter', () => clearInterval(autoSlideInterval));
      sliderContainer.addEventListener('mouseleave', () => {
        autoSlideInterval = setInterval(() => {
          updateSlide(currentSlide + 1);
        }, 6000);
      });
    }
  }

  // 3. CUSTOMIZATION REQUEST MODAL
  const modalOverlay = document.getElementById('customizationModal');
  const openModalBtns = document.querySelectorAll('.open-custom-plan-modal');
  const closeModalBtn = document.getElementById('closeCustomModal');
  const customPlanForm = document.getElementById('customPlanForm');

  if (modalOverlay) {
    openModalBtns.forEach(btn => {
      btn.addEventListener('click', function (e) {
        e.preventDefault();
        modalOverlay.classList.add('open');
        document.body.style.overflow = 'hidden';
      });
    });

    if (closeModalBtn) {
      closeModalBtn.addEventListener('click', function () {
        modalOverlay.classList.remove('open');
        document.body.style.overflow = '';
      });
    }

    modalOverlay.addEventListener('click', function (e) {
      if (e.target === modalOverlay) {
        modalOverlay.classList.remove('open');
        document.body.style.overflow = '';
      }
    });

    if (customPlanForm) {
      customPlanForm.addEventListener('submit', function (e) {
        e.preventDefault();
        const submitBtn = customPlanForm.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Submitting...';
        submitBtn.disabled = true;

        setTimeout(() => {
          submitBtn.innerHTML = '<i class="fas fa-check"></i> Request Received!';
          submitBtn.style.background = '#22c55e';
          setTimeout(() => {
            alert('Thank you! Your customized package request has been submitted. Our team will contact you shortly.');
            modalOverlay.classList.remove('open');
            document.body.style.overflow = '';
            customPlanForm.reset();
            submitBtn.innerHTML = originalText;
            submitBtn.style.background = '';
            submitBtn.disabled = false;
          }, 600);
        }, 1000);
      });
    }
  }

  // 4. SMOOTH SCROLLING FOR NAVIGATION LINKS
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const targetId = this.getAttribute('href');
      if (targetId && targetId !== '#' && targetId.length > 1) {
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
          e.preventDefault();
          targetElement.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      }
    });
  });
});
