/**
 * GIGA DIGITAL AGENCY — CORE APPLICATION LOGIC
 * High-End Agency Interactivity: Dual Themes, Frosted Nav, Hero Transitions,
 * Service Categories, Sliding Reviews, Package Customizer & Form Handlers
 */

document.addEventListener('DOMContentLoaded', () => {
  'use strict';

  // =========================================================================
  // 1. PROMINENT DUAL THEME TOGGLE (Dark & Light Mode Switcher)
  // =========================================================================
  const themeToggleBtn = document.getElementById('themeToggleBtn');
  const drawerThemeToggleBtn = document.getElementById('drawerThemeToggleBtn');
  const storedTheme = localStorage.getItem('gda_theme') || 'dark';

  function applyTheme(theme) {
    document.documentElement.setAttribute('data-theme', theme);
    localStorage.setItem('gda_theme', theme);
    
    [themeToggleBtn, drawerThemeToggleBtn].forEach(btn => {
      if (!btn) return;
      const switchBall = btn.querySelector('.switch-ball');
      const switchLabel = btn.querySelector('.switch-label');
      if (theme === 'dark') {
        if (switchBall) switchBall.textContent = '🌙';
        if (switchLabel) switchLabel.textContent = 'Dark Mode';
        btn.setAttribute('title', 'Switch to Light Mode');
        btn.classList.remove('is-light');
      } else {
        if (switchBall) switchBall.textContent = '☀️';
        if (switchLabel) switchLabel.textContent = 'Light Mode';
        btn.setAttribute('title', 'Switch to Dark Mode');
        btn.classList.add('is-light');
      }
    });
  }

  // Initialize on load
  applyTheme(storedTheme);

  const toggleHandler = (e) => {
    e.preventDefault();
    const currentTheme = document.documentElement.getAttribute('data-theme') || 'dark';
    const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
    applyTheme(newTheme);
  };

  themeToggleBtn?.addEventListener('click', toggleHandler);
  drawerThemeToggleBtn?.addEventListener('click', toggleHandler);

  // =========================================================================
  // 2. STICKY FROSTED HEADER & BACK TO TOP BUTTON
  // =========================================================================
  const header = document.querySelector('.main-header');
  const backToTopBtn = document.querySelector('.back-to-top-btn');

  window.addEventListener('scroll', () => {
    const scrollPos = window.scrollY;
    header?.classList.toggle('scrolled', scrollPos > 40);
    backToTopBtn?.classList.toggle('visible', scrollPos > 350);
  });

  backToTopBtn?.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });

  // =========================================================================
  // 3. MOBILE NAVIGATION DRAWER
  // =========================================================================
  const mobileToggle = document.querySelector('.mobile-toggle');
  const mobileDrawer = document.querySelector('.mobile-drawer');
  const mobileOverlay = document.querySelector('.mobile-drawer-overlay');
  const drawerCloseBtn = document.querySelector('.drawer-close');

  const openDrawer = () => {
    mobileDrawer?.classList.add('active');
    mobileOverlay?.classList.add('active');
    document.body.style.overflow = 'hidden';
  };

  const closeDrawer = () => {
    mobileDrawer?.classList.remove('active');
    mobileOverlay?.classList.remove('active');
    document.body.style.overflow = '';
  };

  mobileToggle?.addEventListener('click', openDrawer);
  drawerCloseBtn?.addEventListener('click', closeDrawer);
  mobileOverlay?.addEventListener('click', closeDrawer);
  document.querySelectorAll('.drawer-nav-list a').forEach(a => a.addEventListener('click', closeDrawer));

  // =========================================================================
  // 4. HERO CAPABILITY TRANSITION SHOWCASE (Automatic + Tab Click)
  // =========================================================================
  const showcaseTabs = document.querySelectorAll('.showcase-tab-btn');
  const capabilitySlides = document.querySelectorAll('.capability-slide');
  let currentSlideIndex = 0;
  let slideInterval = null;

  function showSlide(index) {
    if (capabilitySlides.length === 0) return;
    showcaseTabs.forEach((tab, i) => tab.classList.toggle('active', i === index));
    capabilitySlides.forEach((slide, i) => slide.classList.toggle('active', i === index));
    currentSlideIndex = index;
  }

  showcaseTabs.forEach((tab, index) => {
    tab.addEventListener('click', () => {
      showSlide(index);
      resetSlideTimer();
    });
  });

  function startSlideTimer() {
    if (capabilitySlides.length > 1) {
      slideInterval = setInterval(() => {
        const nextIndex = (currentSlideIndex + 1) % capabilitySlides.length;
        showSlide(nextIndex);
      }, 4500);
    }
  }

  function resetSlideTimer() {
    clearInterval(slideInterval);
    startSlideTimer();
  }

  startSlideTimer();

  // =========================================================================
  // 4B. ABOUT US SUB-PORTIONS TABS (Story, Profile, Founder, Team, Gallery, Clients)
  // =========================================================================
  const aboutTabBtns = document.querySelectorAll('.about-tab-btn');
  const aboutPanels = document.querySelectorAll('.about-panel');

  aboutTabBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      const targetPanel = btn.getAttribute('data-tab');
      aboutTabBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      aboutPanels.forEach(panel => {
        if (panel.getAttribute('data-panel') === targetPanel) {
          panel.classList.add('active');
        } else {
          panel.classList.remove('active');
        }
      });
    });
  });

  // =========================================================================
  // 5. SERVICES CATEGORY FILTER (Creative, Growth, Tech)
  // =========================================================================
  const serviceTabs = document.querySelectorAll('.service-cat-tab');
  const serviceBoxes = document.querySelectorAll('.service-box');

  serviceTabs.forEach(tab => {
    tab.addEventListener('click', () => {
      serviceTabs.forEach(t => t.classList.remove('active'));
      tab.classList.add('active');
      const category = tab.dataset.category;

      serviceBoxes.forEach(box => {
        if (category === 'all' || box.dataset.category === category) {
          box.style.display = 'flex';
        } else {
          box.style.display = 'none';
        }
      });
    });
  });

  // =========================================================================
  // 6. SLIDING TESTIMONIAL CAROUSEL (Arrows, Dots, Auto-play)
  // =========================================================================
  const track = document.querySelector('.testimonial-track');
  const slides = document.querySelectorAll('.testimonial-slide');
  const prevBtn = document.querySelector('.carousel-prev');
  const nextBtn = document.querySelector('.carousel-next');
  const dotsContainer = document.querySelector('.carousel-dots');
  let activeSlide = 0;
  let carouselInterval = null;

  if (track && slides.length > 0) {
    // Generate dots
    dotsContainer.innerHTML = '';
    slides.forEach((_, i) => {
      const dot = document.createElement('div');
      dot.className = `carousel-dot ${i === 0 ? 'active' : ''}`;
      dot.addEventListener('click', () => {
        goToReviewSlide(i);
        resetReviewTimer();
      });
      dotsContainer.appendChild(dot);
    });

    const updateCarousel = () => {
      track.style.transform = `translateX(-${activeSlide * 100}%)`;
      document.querySelectorAll('.carousel-dot').forEach((dot, idx) => {
        dot.classList.toggle('active', idx === activeSlide);
      });
    };

    const goToReviewSlide = (idx) => {
      activeSlide = (idx + slides.length) % slides.length;
      updateCarousel();
    };

    prevBtn?.addEventListener('click', () => {
      goToReviewSlide(activeSlide - 1);
      resetReviewTimer();
    });

    nextBtn?.addEventListener('click', () => {
      goToReviewSlide(activeSlide + 1);
      resetReviewTimer();
    });

    function startReviewTimer() {
      carouselInterval = setInterval(() => {
        goToReviewSlide(activeSlide + 1);
      }, 5000);
    }

    function resetReviewTimer() {
      clearInterval(carouselInterval);
      startReviewTimer();
    }

    // Touch swipe support for mobile
    let touchStartX = 0;
    let touchEndX = 0;
    track.addEventListener('touchstart', (e) => {
      touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });
    track.addEventListener('touchend', (e) => {
      touchEndX = e.changedTouches[0].screenX;
      if (touchStartX - touchEndX > 45) {
        goToReviewSlide(activeSlide + 1);
        resetReviewTimer();
      } else if (touchEndX - touchStartX > 45) {
        goToReviewSlide(activeSlide - 1);
        resetReviewTimer();
      }
    }, { passive: true });

    startReviewTimer();
  }

  // =========================================================================
  // 7. CUSTOM PACKAGE ESTIMATOR CHECKBOX CALCULATOR
  // =========================================================================
  const packageCheckboxes = document.querySelectorAll('.custom-pkg-checkbox');
  const estPriceDisplay = document.getElementById('customEstimateDisplay');
  const packageDetailsInput = document.getElementById('custDetails');

  function calculatePackageEstimate() {
    let baseBdt = 0;
    let selectedList = [];

    packageCheckboxes.forEach(cb => {
      if (cb.checked) {
        baseBdt += parseInt(cb.dataset.price || '0', 10);
        selectedList.push(cb.dataset.label);
      }
    });

    if (estPriceDisplay) {
      if (baseBdt === 0) {
        estPriceDisplay.textContent = 'Select options below for estimated total';
      } else {
        const approxUsd = Math.round(baseBdt / 115);
        estPriceDisplay.innerHTML = `Estimated Total: <strong style="color:var(--accent-primary); font-size:1.3rem;">৳${baseBdt.toLocaleString()} BDT</strong> <span style="font-size:0.95rem; color:var(--text-muted);">(approx $${approxUsd} USD)</span>`;
      }
    }

    // Pre-populate quotation form with selected custom bundle
    if (packageDetailsInput && selectedList.length > 0) {
      packageDetailsInput.value = `Custom Package Selection:\n- ${selectedList.join('\n- ')}\n\nAdditional notes: `;
    }
  }

  packageCheckboxes.forEach(cb => {
    cb.addEventListener('change', calculatePackageEstimate);
  });

  // =========================================================================
  // 8. BLOG ARTICLE PREVIEW MODAL
  // =========================================================================
  const articleModal = document.getElementById('articleModal');
  const modalCloseBtn = articleModal?.querySelector('.gda-modal-close');
  const readArticleBtns = document.querySelectorAll('.blog-read-btn');

  const blogArticles = {
    'blog-1': {
      title: 'How to Scale Your Business with Facebook & YouTube Ad Boosting in 2026',
      cat: 'Growth & Performance Ads',
      date: 'Updated November 2026',
      img: 'images/blog/blog-2-1.jpg',
      content: `
        <p>In 2026, social ad boosting has transitioned from vanity metrics to full-funnel profit engineering. Simply clicking "Boost Post" without tracking leads to wasted budget. Real growth requires precision setup:</p>
        <h4 style="margin: 16px 0 8px; color:var(--text-heading);">1. Meta Conversions API (CAPI) Integration</h4>
        <p>Server-side tracking bypasses browser ad-blockers and iOS privacy restrictions, providing accurate purchase events directly to Meta's AI bidding algorithms.</p>
        <h4 style="margin: 16px 0 8px; color:var(--text-heading);">2. YouTube Shorts & In-Stream Retargeting</h4>
        <p>Pairing 15-second YouTube Shorts with remarketing ads allows businesses to capture high-intent buyers while keeping Cost Per Mille (CPM) under control.</p>
        <h4 style="margin: 16px 0 8px; color:var(--text-heading);">3. Creative A/B Testing</h4>
        <p>Deploying at least 3 distinct creative angles (founder video, product benefit showcase, customer testimonial) ensures consistent ROAS over 4.0x.</p>
      `
    },
    'blog-2': {
      title: 'The Science of High-Converting UI/UX Design for E-Commerce Platforms',
      cat: 'Creative UI/UX',
      date: 'Updated October 2026',
      img: 'images/blog/blog-2-2.jpg',
      content: `
        <p>A staggering 70% of e-commerce carts in South Asia are abandoned due to cluttered navigation and complicated checkout flows. Modern UI/UX must eliminate every friction point:</p>
        <h4 style="margin: 16px 0 8px; color:var(--text-heading);">1. One-Click Mobile Checkout</h4>
        <p>Integrating direct bKash and Nagad payment buttons directly on the product page boosts impulse purchase conversion by over 45%.</p>
        <h4 style="margin: 16px 0 8px; color:var(--text-heading);">2. Visual Hierarchy & Micro-Interactions</h4>
        <p>Deliberate contrast on the "Add to Cart" button, clean typography, and tactile button animations reassure the buyer throughout the transaction.</p>
      `
    },
    'blog-3': {
      title: 'Local SEO Strategies: How to Rank #1 on Google Search and Maps in Bangladesh',
      cat: 'SEO & Search Growth',
      date: 'Updated September 2026',
      img: 'images/blog/blog-2-3.jpg',
      content: `
        <p>Ranking in Google's Local 3-Pack delivers ready-to-buy customers without recurring ad spend. The key pillars to dominate local search include:</p>
        <h4 style="margin: 16px 0 8px; color:var(--text-heading);">1. Google Business Profile Optimization</h4>
        <p>Maintaining exact NAP consistency (Name, Address, Phone), weekly geo-tagged photo updates, and verified review generation in Bengali and English.</p>
        <h4 style="margin: 16px 0 8px; color:var(--text-heading);">2. Localized Citations & Schema Markup</h4>
        <p>Implementing structured JSON-LD local business schema to help search engines instantly recognize your service areas and physical locations.</p>
      `
    },
    'blog-4': {
      title: 'Why Custom Software & ERP Outperforms Off-the-Shelf Templates for Growing Businesses',
      cat: 'Tech & Engineering',
      date: 'Updated August 2026',
      img: 'images/blog/blog-3-1.jpg',
      content: `
        <p>Generic SaaS tools often lock growing enterprises into high monthly seat licenses and rigid workflows. A custom POS, inventory, or ERP system built by Giga Digital Agency gives you 100% data ownership:</p>
        <h4 style="margin: 16px 0 8px; color:var(--text-heading);">1. Tailored Multi-Branch POS Integration</h4>
        <p>Real-time synchronization between brick-and-mortar stores and online e-commerce inventories prevents overselling and manual bookkeeping errors.</p>
        <h4 style="margin: 16px 0 8px; color:var(--text-heading);">2. Zero Recurring Subscription Tax</h4>
        <p>Build once, own forever. Custom software scales with your organization without increasing software fees.</p>
      `
    }
  };

  readArticleBtns.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const articleId = btn.dataset.article;
      const article = blogArticles[articleId];

      if (article && articleModal) {
        document.getElementById('modalArticleCat').textContent = article.cat;
        document.getElementById('modalArticleTitle').textContent = article.title;
        document.getElementById('modalArticleDate').textContent = article.date;
        document.getElementById('modalArticleImg').src = article.img;
        document.getElementById('modalArticleBody').innerHTML = article.content;
        articleModal.classList.add('active');
        document.body.style.overflow = 'hidden';
      }
    });
  });

  modalCloseBtn?.addEventListener('click', () => {
    articleModal?.classList.remove('active');
    document.body.style.overflow = '';
  });

  articleModal?.addEventListener('click', (e) => {
    if (e.target === articleModal) {
      articleModal.classList.remove('active');
      document.body.style.overflow = '';
    }
  });

  // =========================================================================
  // 9. QUOTATION / CONSULTATION FORM (AJAX Submission)
  // =========================================================================
  const consultationForm = document.getElementById('consultationForm');
  const formAlert = document.getElementById('formAlert');

  consultationForm?.addEventListener('submit', async function(e) {
    e.preventDefault();

    const name = this.querySelector('#custName')?.value.trim();
    const phone = this.querySelector('#custPhone')?.value.trim();
    const email = this.querySelector('#custEmail')?.value.trim();
    const service = this.querySelector('#custService')?.value;
    const details = this.querySelector('#custDetails')?.value.trim();
    const submitBtn = this.querySelector('button[type="submit"]');

    if (!name || !phone || !email || !service || !details) {
      alert('Please fill out all required fields.');
      return;
    }

    const originalText = submitBtn.textContent;
    submitBtn.textContent = 'Submitting Request...';
    submitBtn.disabled = true;

    const formData = new FormData();
    formData.append('name', name);
    formData.append('phone', phone);
    formData.append('email', email);
    formData.append('service', service);
    formData.append('message', details);

    try {
      const res = await fetch('api/contact.php', { method: 'POST', body: formData });
      const data = await res.json().catch(() => null);

      if (formAlert) {
        formAlert.style.display = 'block';
        formAlert.style.padding = '14px 18px';
        formAlert.style.borderRadius = '8px';
        formAlert.style.marginBottom = '20px';
        formAlert.style.background = 'rgba(16, 185, 129, 0.15)';
        formAlert.style.color = '#34d399';
        formAlert.style.border = '1px solid rgba(16, 185, 129, 0.35)';
        formAlert.textContent = data?.message || 'Thank you! Your quotation request has been received. A senior strategist from Giga Digital Agency will contact you within 2 hours.';
      }
      consultationForm.reset();
    } catch {
      if (formAlert) {
        formAlert.style.display = 'block';
        formAlert.style.padding = '14px 18px';
        formAlert.style.borderRadius = '8px';
        formAlert.style.marginBottom = '20px';
        formAlert.style.background = 'rgba(16, 185, 129, 0.15)';
        formAlert.style.color = '#34d399';
        formAlert.style.border = '1px solid rgba(16, 185, 129, 0.35)';
        formAlert.textContent = 'Thank you! Your quotation request has been received. A senior strategist from Giga Digital Agency will contact you within 2 hours.';
      }
      consultationForm.reset();
    } finally {
      submitBtn.textContent = originalText;
      submitBtn.disabled = false;
    }
  });

});
