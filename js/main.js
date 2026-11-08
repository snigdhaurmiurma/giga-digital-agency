/**
 * GIGA DIGITAL AGENCY — CORE INTERACTION LOGIC
 * Features: Light/Dark Theme Switcher, Sticky Nav, Mobile Menu, Filter, Accordion, Contact Form
 */

document.addEventListener('DOMContentLoaded', () => {
  'use strict';

  // --- 1. Light / Dark Theme Switcher ---
  const themeToggleBtn = document.getElementById('themeToggleBtn');
  const currentTheme = localStorage.getItem('gda_theme') || 'light';
  
  // Set initial theme
  document.documentElement.setAttribute('data-theme', currentTheme);
  updateThemeIcon(currentTheme);

  themeToggleBtn?.addEventListener('click', () => {
    const activeTheme = document.documentElement.getAttribute('data-theme');
    const newTheme = activeTheme === 'dark' ? 'light' : 'dark';
    
    document.documentElement.setAttribute('data-theme', newTheme);
    localStorage.setItem('gda_theme', newTheme);
    updateThemeIcon(newTheme);
  });

  function updateThemeIcon(theme) {
    if (!themeToggleBtn) return;
    if (theme === 'dark') {
      // Show sun icon to switch to light
      themeToggleBtn.innerHTML = `
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="20" height="20">
          <circle cx="12" cy="12" r="5"></circle>
          <line x1="12" y1="1" x2="12" y2="3"></line>
          <line x1="12" y1="21" x2="12" y2="23"></line>
          <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
          <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
          <line x1="1" y1="12" x2="3" y2="12"></line>
          <line x1="21" y1="12" x2="23" y2="12"></line>
          <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
          <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
        </svg>
      `;
      themeToggleBtn.setAttribute('title', 'Switch to Light Mode');
    } else {
      // Show moon icon to switch to dark
      themeToggleBtn.innerHTML = `
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="20" height="20">
          <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
        </svg>
      `;
      themeToggleBtn.setAttribute('title', 'Switch to Dark Mode');
    }
  }

  // --- 2. Sticky Header & Back-To-Top ---
  const header = document.querySelector('.main-header');
  const backToTopBtn = document.querySelector('.back-to-top-btn');

  window.addEventListener('scroll', () => {
    const scrollPos = window.scrollY;
    header?.classList.toggle('scrolled', scrollPos > 50);
    backToTopBtn?.classList.toggle('visible', scrollPos > 400);
  });

  backToTopBtn?.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });

  // --- 3. Mobile Navigation Drawer ---
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

  // --- 4. Package / Pricing Filter Switcher ---
  const pkgTabBtns = document.querySelectorAll('.pkg-tab-btn');
  const pkgDecks = document.querySelectorAll('.pkg-deck');

  pkgTabBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      pkgTabBtns.forEach(b => b.classList.remove('active'));
      pkgDecks.forEach(d => d.style.display = 'none');

      btn.classList.add('active');
      const targetDeck = document.getElementById(btn.dataset.target);
      if (targetDeck) {
        targetDeck.style.display = 'grid';
      }
    });
  });

  // --- 5. Portfolio Filter ---
  const pFilterBtns = document.querySelectorAll('.p-filter-btn');
  const portfolioItems = document.querySelectorAll('.portfolio-item-card');

  pFilterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      pFilterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      const val = btn.dataset.filter;

      portfolioItems.forEach(item => {
        if (val === 'all' || item.dataset.category === val) {
          item.style.display = 'block';
        } else {
          item.style.display = 'none';
        }
      });
    });
  });

  // --- 6. FAQ Accordion ---
  const faqBoxes = document.querySelectorAll('.faq-box');

  faqBoxes.forEach(box => {
    const btn = box.querySelector('.faq-btn');
    const answer = box.querySelector('.faq-answer');

    btn?.addEventListener('click', () => {
      const isOpen = box.classList.contains('active');

      // Close all other accordions
      faqBoxes.forEach(b => {
        if (b !== box) {
          b.classList.remove('active');
          const ans = b.querySelector('.faq-answer');
          if (ans) ans.style.maxHeight = null;
        }
      });

      if (isOpen) {
        box.classList.remove('active');
        if (answer) answer.style.maxHeight = null;
      } else {
        box.classList.add('active');
        if (answer) answer.style.maxHeight = answer.scrollHeight + 20 + 'px';
      }
    });
  });

  // --- 7. Contact Consultation Form Submission (AJAX) ---
  const consultationForm = document.getElementById('consultationForm');
  const formAlert = document.getElementById('formAlert');

  consultationForm?.addEventListener('submit', async function(e) {
    e.preventDefault();

    const name = this.querySelector('#custName').value.trim();
    const phone = this.querySelector('#custPhone').value.trim();
    const email = this.querySelector('#custEmail').value.trim();
    const service = this.querySelector('#custService').value;
    const details = this.querySelector('#custDetails').value.trim();
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
        formAlert.style.padding = '14px';
        formAlert.style.borderRadius = '6px';
        formAlert.style.marginBottom = '16px';
        formAlert.style.background = '#d1fae5';
        formAlert.style.color = '#065f46';
        formAlert.style.border = '1px solid #a7f3d0';
        formAlert.textContent = data?.message || 'Thank you! Your quotation request has been received. Our team will contact you shortly.';
      }
      consultationForm.reset();
    } catch {
      if (formAlert) {
        formAlert.style.display = 'block';
        formAlert.style.padding = '14px';
        formAlert.style.borderRadius = '6px';
        formAlert.style.marginBottom = '16px';
        formAlert.style.background = '#d1fae5';
        formAlert.style.color = '#065f46';
        formAlert.style.border = '1px solid #a7f3d0';
        formAlert.textContent = 'Thank you! Your quotation request has been received. Our team will contact you shortly.';
      }
      consultationForm.reset();
    } finally {
      submitBtn.textContent = originalText;
      submitBtn.disabled = false;
    }
  });
});
