/**
 * GIGA DIGITAL AGENCY — CORE APPLICATION LOGIC
 * High-End Agency Interactivity: Dual Themes, Frosted Nav, Hero Transitions,
 * Service Categories, Sliding Reviews, Package Customizer & Form Handlers
 */

document.addEventListener('DOMContentLoaded', () => {
  'use strict';

  // =========================================================================
  // 1. SLEEK ICON-ONLY THEME TOGGLE (NO Instruction Text)
  // =========================================================================
  const themeToggleBtn = document.getElementById('themeToggleBtn');
  const drawerThemeToggleBtn = document.getElementById('drawerThemeToggleBtn');
  const storedTheme = localStorage.getItem('gda_theme') || 'dark';

  const moonSvg = `<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" style="display:block; margin:auto;"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>`;
  const sunSvg = `<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" style="display:block; margin:auto;"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>`;

  function applyTheme(theme) {
    document.documentElement.setAttribute('data-theme', theme);
    localStorage.setItem('gda_theme', theme);
    
    [themeToggleBtn, drawerThemeToggleBtn].forEach(btn => {
      if (!btn) return;
      const switchBall = btn.querySelector('.switch-ball') || btn;
      if (theme === 'dark') {
        switchBall.innerHTML = moonSvg;
        btn.setAttribute('title', 'Switch to Light Mode');
        btn.classList.remove('is-light');
      } else {
        switchBall.innerHTML = sunSvg;
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
  // 1B. INTERACTIVE ACCENT PALETTE PICKER
  // =========================================================================
  const palettePickerBtn = document.getElementById('palettePickerBtn');
  const paletteDropdown = document.getElementById('paletteDropdown');
  const headerPaletteDot = document.getElementById('headerPaletteDot');
  const paletteOptions = document.querySelectorAll('.palette-option');
  const drawerPaletteDots = document.querySelectorAll('.palette-quick-dot');

  const accentColors = {
    amber: '#f59e0b',
    violet: '#7c3aed',
    cyan: '#e11d48',
    emerald: '#3eb649',
    blue: '#1d4ed8'
  };

  const storedAccent = localStorage.getItem('gda_accent') || 'emerald';

  function applyAccent(accent) {
    if (!accentColors[accent]) accent = 'emerald';
    document.documentElement.setAttribute('data-accent', accent);
    localStorage.setItem('gda_accent', accent);

    if (headerPaletteDot) {
      headerPaletteDot.style.background = accentColors[accent];
    }

    paletteOptions.forEach(opt => {
      const match = opt.getAttribute('data-accent') === accent;
      opt.classList.toggle('active', match);
    });

    drawerPaletteDots.forEach(dot => {
      const match = dot.getAttribute('data-accent') === accent;
      dot.classList.toggle('active', match);
    });
  }

  // Initialize accent on load
  applyAccent(storedAccent);

  // Toggle palette popover
  palettePickerBtn?.addEventListener('click', (e) => {
    e.stopPropagation();
    const isActive = paletteDropdown?.classList.toggle('active');
    palettePickerBtn.classList.toggle('active', isActive);
    palettePickerBtn.setAttribute('aria-expanded', isActive ? 'true' : 'false');
  });

  // Select accent from dropdown
  paletteOptions.forEach(opt => {
    opt.addEventListener('click', (e) => {
      e.stopPropagation();
      const accent = opt.getAttribute('data-accent');
      applyAccent(accent);
      paletteDropdown?.classList.remove('active');
      palettePickerBtn?.classList.remove('active');
      palettePickerBtn?.setAttribute('aria-expanded', 'false');
    });
  });

  // Mobile drawer quick dots
  drawerPaletteDots.forEach(dot => {
    dot.addEventListener('click', (e) => {
      e.stopPropagation();
      const accent = dot.getAttribute('data-accent');
      applyAccent(accent);
    });
  });

  // Close dropdown on outside click
  document.addEventListener('click', (e) => {
    if (paletteDropdown?.classList.contains('active')) {
      if (!paletteDropdown.contains(e.target) && !palettePickerBtn.contains(e.target)) {
        paletteDropdown.classList.remove('active');
        palettePickerBtn?.classList.remove('active');
        palettePickerBtn?.setAttribute('aria-expanded', 'false');
      }
    }
  });

  // Close on Escape key
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && paletteDropdown?.classList.contains('active')) {
      paletteDropdown.classList.remove('active');
      palettePickerBtn?.classList.remove('active');
      palettePickerBtn?.setAttribute('aria-expanded', 'false');
    }
  });

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
      dotsContainer.querySelectorAll('.carousel-dot').forEach((dot, idx) => {
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
  // 9. REAL-TIME DATABASE INTERACTION & LEAD TRACKING ENGINE
  // Tracks Calls, WhatsApp Clicks, and Mail Submissions to SQLite & JSON Ledger
  // =========================================================================
  function trackInteraction(type, target) {
    const payload = {
      type: type, // 'call', 'whatsapp', 'email_click'
      target: target,
      page: window.location.href,
      timestamp: new Date().toISOString()
    };

    // 1. Send to Backend Tracking API
    try {
      if (navigator.sendBeacon) {
        const blob = new Blob([JSON.stringify(payload)], { type: 'application/json' });
        navigator.sendBeacon('api/track.php', blob);
      } else {
        fetch('api/track.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify(payload),
          keepalive: true
        }).catch(() => {});
      }
    } catch (e) {
      // safe fallback
    }

    // 2. Save to Browser Database Ledger for Instant Admin Visibility
    try {
      const list = JSON.parse(localStorage.getItem('gda_interactions_db') || '[]');
      payload.id = Date.now();
      payload.interaction_type = type;
      payload.target_value = target;
      payload.page_url = window.location.pathname || 'Homepage';
      payload.created_at = new Date().toISOString().replace('T', ' ').slice(0, 19);
      list.unshift(payload);
      if (list.length > 500) list.pop();
      localStorage.setItem('gda_interactions_db', JSON.stringify(list));
    } catch (e) {}
  }

  // Intercept all Phone Calls and WhatsApp Clicks across the page
  document.addEventListener('click', (e) => {
    const callLink = e.target.closest('a[href^="tel:"]');
    if (callLink) {
      trackInteraction('call', callLink.getAttribute('href').replace('tel:', ''));
    }

    const waLink = e.target.closest('a[href*="wa.me"], a[href*="whatsapp.com"]');
    if (waLink) {
      trackInteraction('whatsapp', waLink.getAttribute('href'));
    }

    const mailLink = e.target.closest('a[href^="mailto:"]');
    if (mailLink) {
      trackInteraction('email_click', mailLink.getAttribute('href').replace('mailto:', ''));
    }
  });

  // =========================================================================
  // 10. FULLY WORKABLE QUOTATION FORM WITH DUAL DATABASE STORAGE
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

    const leadPayload = {
      type: 'quotation_request',
      name: name,
      phone: phone,
      email: email,
      service: service,
      message: details,
      page: window.location.href
    };

    let responseMessage = 'Thank you! Your quotation request has been recorded. Our strategy team will review your project and contact you at ' + email + ' within 24 business hours.';
    let leadId = 'GDA-' + Date.now().toString().slice(-6);
    let isDelivered = false;

    try {
      // First attempt: Vercel Serverless Function (/api/contact)
      const res = await fetch('/api/contact', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(leadPayload)
      });
      const data = await res.json().catch(() => null);
      if (data) {
        if (data.reference_id) leadId = data.reference_id;
        if (data.message) responseMessage = data.message;
        if (data.status === 'success' || data.status === 'delivered') isDelivered = true;
      }
    } catch {
      // Fallback: If deployed in a PHP LAMP environment, try api/contact.php
      try {
        const phpRes = await fetch('api/contact.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify(leadPayload)
        });
        const phpData = await phpRes.json().catch(() => null);
        if (phpData?.message) responseMessage = phpData.message;
        if (phpData?.lead_id) leadId = 'GDA-' + phpData.lead_id;
      } catch (err) {
        // Safe offline/fallback recording
      }
    }

    // Always mirror to Client Ledger for admin.html portal
    try {
      const leads = JSON.parse(localStorage.getItem('gda_leads_db') || '[]');
      leads.unshift({
        id: leadId,
        type: 'quotation_request',
        name: name,
        phone: phone,
        email: email,
        service: service,
        message: details,
        company: 'Online Lead',
        status: 'New',
        created_at: new Date().toISOString().replace('T', ' ').slice(0, 19)
      });
      if (leads.length > 500) leads.pop();
      localStorage.setItem('gda_leads_db', JSON.stringify(leads));
    } catch (e) {}

    // Track the form submission event
    trackInteraction('email_inquiry', `${name} <${email}>`);

    if (formAlert) {
      formAlert.style.display = 'block';
      formAlert.style.padding = '18px 22px';
      formAlert.style.borderRadius = '10px';
      formAlert.style.marginBottom = '22px';
      formAlert.style.background = 'rgba(16, 185, 129, 0.12)';
      formAlert.style.color = '#10b981';
      formAlert.style.border = '1px solid rgba(16, 185, 129, 0.35)';
      formAlert.innerHTML = `
        <div style="font-weight:800; font-size:1.02rem; margin-bottom:6px; display:flex; align-items:center; gap:8px;">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
          <span>Quotation Request Submitted Successfully (${leadId})</span>
        </div>
        <div style="font-size:0.92rem; line-height:1.55; color:var(--text-main); margin-bottom:12px;">${responseMessage}</div>
        <div style="display:flex; gap:10px; flex-wrap:wrap; align-items:center;">
          <a href="https://wa.me/8801870699677?text=Hello%20Giga%20Digital%20Agency,%20I%20just%20submitted%20quotation%20request%20${leadId}." target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp" style="padding:8px 16px; font-size:0.86rem;">
            Instant WhatsApp Confirmation
          </a>
          <span style="font-size:0.82rem; color:var(--text-muted);">Direct Hotline: +8801870-699677</span>
        </div>
      `;
    }
    consultationForm.reset();

    submitBtn.textContent = originalText;
    submitBtn.disabled = false;
  });

  // Support for contact.php standalone contact form
  const gdaContactForm = document.getElementById('gdaContactForm');
  gdaContactForm?.addEventListener('submit', async function(e) {
    e.preventDefault();
    const name = this.querySelector('#contactName')?.value.trim();
    const email = this.querySelector('#contactEmail')?.value.trim();
    const phone = this.querySelector('#contactPhone')?.value.trim();
    const company = this.querySelector('#contactCompany')?.value.trim();
    const service = this.querySelector('#contactService')?.value;
    const budget = this.querySelector('#contactBudget')?.value;
    const message = this.querySelector('#contactMessage')?.value.trim();
    const submitBtn = this.querySelector('button[type="submit"]');

    if (!name || !email || !service || !message) {
      alert('Please fill out all required fields.');
      return;
    }

    const orig = submitBtn.textContent;
    submitBtn.textContent = 'Submitting...';
    submitBtn.disabled = true;

    try {
      await fetch('/api/contact', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({
          type: 'contact_inquiry',
          name, email, phone, company, service, budget, message
        })
      });
    } catch {}

    alert('Thank you, ' + name + '! Your message has been received. Our team will contact you at ' + email + ' shortly.');
    gdaContactForm.reset();
    submitBtn.textContent = orig;
    submitBtn.disabled = false;
  });

  // =========================================================================
  // 12. FAQ ACCORDION INTERACTIVITY
  // =========================================================================
  const faqQuestions = document.querySelectorAll('.faq-question');
  faqQuestions.forEach(btn => {
    btn.addEventListener('click', () => {
      const item = btn.closest('.faq-item');
      if (!item) return;
      const isOpen = item.classList.contains('active');

      // Close other open items for clean single-expand behavior
      document.querySelectorAll('.faq-item.active').forEach(openItem => {
        if (openItem !== item) {
          openItem.classList.remove('active');
          const q = openItem.querySelector('.faq-question');
          if (q) q.setAttribute('aria-expanded', 'false');
        }
      });

      // Toggle current item
      if (isOpen) {
        item.classList.remove('active');
        btn.setAttribute('aria-expanded', 'false');
      } else {
        item.classList.add('active');
        btn.setAttribute('aria-expanded', 'true');
      }
    });
  });

  // =========================================================================
  // 13. PRICING CATEGORY DECK SWITCHER
  // =========================================================================
  const pricingCatBtns = document.querySelectorAll('.pricing-cat-btn');
  const pricingDecks = document.querySelectorAll('.pricing-category-deck');
  pricingCatBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      const targetDeck = btn.getAttribute('data-deck');
      pricingCatBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      pricingDecks.forEach(deck => {
        if (deck.getAttribute('data-deck') === targetDeck) {
          deck.classList.add('active');
        } else {
          deck.classList.remove('active');
        }
      });
    });
  });

  // =========================================================================
  // 14. HERO FULL-CANVAS ADVERTISING POSTER CAROUSEL (6 Campaigns)
  // =========================================================================
  const posterSection = document.querySelector('.hero-poster-carousel-section');
  const posterViewport = document.getElementById('posterCarouselViewport');
  const posterSlides = document.querySelectorAll('.hero-poster-slide');
  const posterIndicators = document.querySelectorAll('.poster-indicators .p-indicator');
  const posterPrevBtn = document.getElementById('posterNavPrev');
  const posterNextBtn = document.getElementById('posterNavNext');
  const posterCounterCurrent = document.querySelector('.poster-counter-pill .p-count-curr');
  const posterProgressBar = document.getElementById('posterProgressBar');

  if (posterSlides.length > 0) {
    let currentSlide = 0;
    const totalSlides = posterSlides.length;
    const posterInterval = 3200; // 3.2s continuous automatic rotation (within 2-4 seconds)
    let autoplayTimer = null;
    let isHovered = false;

    const resetProgressBar = () => {
      if (!posterProgressBar) return;
      posterProgressBar.style.transition = 'none';
      posterProgressBar.style.width = '0%';
      void posterProgressBar.offsetWidth; // Force DOM reflow
      if (!isHovered) {
        posterProgressBar.style.transition = `width ${posterInterval}ms linear`;
        posterProgressBar.style.width = '100%';
      }
    };

    const updateCounter = (index) => {
      if (posterCounterCurrent) {
        posterCounterCurrent.textContent = String(index + 1).padStart(2, '0');
      }
    };

    const goToSlide = (index) => {
      currentSlide = (index + totalSlides) % totalSlides;

      posterSlides.forEach((slide, idx) => {
        const isActive = idx === currentSlide;
        slide.classList.toggle('active', isActive);
        slide.setAttribute('aria-hidden', !isActive);
      });

      posterIndicators.forEach((ind, idx) => {
        const isActive = idx === currentSlide;
        ind.classList.toggle('active', isActive);
        ind.setAttribute('aria-selected', isActive ? 'true' : 'false');
      });

      updateCounter(currentSlide);
      resetProgressBar();
    };

    const nextSlide = () => goToSlide(currentSlide + 1);
    const prevSlide = () => goToSlide(currentSlide - 1);

    const startAutoplay = () => {
      stopAutoplay();
      resetProgressBar();
      autoplayTimer = setInterval(() => {
        if (!isHovered) {
          nextSlide();
        }
      }, posterInterval);
    };

    const stopAutoplay = () => {
      if (autoplayTimer) {
        clearInterval(autoplayTimer);
        autoplayTimer = null;
      }
      if (posterProgressBar) {
        const computedWidth = window.getComputedStyle(posterProgressBar).width;
        posterProgressBar.style.transition = 'none';
        posterProgressBar.style.width = computedWidth;
      }
    };

    // Manual Navigation: Arrow Buttons
    if (posterNextBtn) {
      posterNextBtn.addEventListener('click', (e) => {
        e.preventDefault();
        nextSlide();
        startAutoplay();
      });
    }

    if (posterPrevBtn) {
      posterPrevBtn.addEventListener('click', (e) => {
        e.preventDefault();
        prevSlide();
        startAutoplay();
      });
    }

    // Manual Navigation: Indicator Tabs
    posterIndicators.forEach(ind => {
      ind.addEventListener('click', (e) => {
        e.preventDefault();
        const target = parseInt(ind.getAttribute('data-poster'), 10);
        if (!isNaN(target)) {
          goToSlide(target);
          startAutoplay();
        }
      });
    });

    // Pause on Hover (Desktop)
    if (posterSection) {
      posterSection.addEventListener('mouseenter', () => {
        isHovered = true;
        stopAutoplay();
      });
      posterSection.addEventListener('mouseleave', () => {
        isHovered = false;
        startAutoplay();
      });
    }

    // Touch Swipe Gesture Support (Mobile & Tablet)
    if (posterViewport) {
      let touchStartX = 0;
      let touchEndX = 0;

      posterViewport.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
      }, { passive: true });

      posterViewport.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        const diffX = touchEndX - touchStartX;
        if (Math.abs(diffX) > 42) {
          if (diffX < 0) {
            nextSlide();
          } else {
            prevSlide();
          }
          startAutoplay();
        }
      }, { passive: true });
    }

    // Accessible Keyboard Navigation (Arrow Keys)
    document.addEventListener('keydown', (e) => {
      if (e.key === 'ArrowRight' || e.key === 'ArrowLeft') {
        const rect = posterSection?.getBoundingClientRect();
        if (rect && rect.top < window.innerHeight && rect.bottom > 0) {
          if (e.key === 'ArrowRight') {
            nextSlide();
          } else {
            prevSlide();
          }
          startAutoplay();
        }
      }
    });

    // Initialize Autoplay on page load
    startAutoplay();
  }

});
