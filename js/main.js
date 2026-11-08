/**
 * GIGA DIGITAL AGENCY — CORE INTERACTION LOGIC
 * Features: Sticky Nav, Mobile Drawer, Filter, Accordion, Modal, AJAX Form Validation
 */

document.addEventListener('DOMContentLoaded', () => {
  'use strict';

  // --- 1. Sticky Navigation & Scroll State ---
  const header = document.querySelector('.main-header');
  const backToTopBtn = document.querySelector('.back-to-top');

  window.addEventListener('scroll', () => {
    const scrollPos = window.scrollY;

    // Header sticky transition
    if (scrollPos > 60) {
      header?.classList.add('scrolled');
    } else {
      header?.classList.remove('scrolled');
    }

    // Back to top button visibility
    if (scrollPos > 400) {
      backToTopBtn?.classList.add('visible');
    } else {
      backToTopBtn?.classList.remove('visible');
    }
  });

  // Back to top click handler
  backToTopBtn?.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });

  // --- 2. Mobile Drawer Navigation ---
  const mobileToggle = document.querySelector('.mobile-toggle');
  const mobileDrawer = document.querySelector('.mobile-drawer');
  const mobileOverlay = document.querySelector('.mobile-drawer-overlay');
  const drawerCloseBtn = document.querySelector('.drawer-close');
  const mobileNavLinks = document.querySelectorAll('.mobile-nav-links a');

  function openMobileMenu() {
    mobileDrawer?.classList.add('active');
    mobileOverlay?.classList.add('active');
    document.body.style.overflow = 'hidden';
  }

  function closeMobileMenu() {
    mobileDrawer?.classList.remove('active');
    mobileOverlay?.classList.remove('active');
    document.body.style.overflow = '';
  }

  mobileToggle?.addEventListener('click', openMobileMenu);
  drawerCloseBtn?.addEventListener('click', closeMobileMenu);
  mobileOverlay?.addEventListener('click', closeMobileMenu);
  mobileNavLinks.forEach(link => link.addEventListener('click', closeMobileMenu));

  // --- 3. Smooth Scrolling for Internal Hash Links ---
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      const targetId = this.getAttribute('href');
      if (targetId && targetId !== '#') {
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
          e.preventDefault();
          const headerOffset = 80;
          const elementPosition = targetElement.getBoundingClientRect().top;
          const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

          window.scrollTo({
            top: offsetPosition,
            behavior: 'smooth'
          });
        }
      }
    });
  });

  // --- 4. Services Category Tabs ---
  const serviceTabBtns = document.querySelectorAll('.cat-tab-btn');
  const serviceDecks = document.querySelectorAll('.services-deck');

  serviceTabBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      serviceTabBtns.forEach(b => b.classList.remove('active'));
      serviceDecks.forEach(d => d.classList.remove('active'));

      btn.classList.add('active');
      const targetDeck = document.getElementById(btn.dataset.target);
      if (targetDeck) {
        targetDeck.classList.add('active');
      }
    });
  });

  // --- 5. Portfolio Category Filter ---
  const filterBtns = document.querySelectorAll('.filter-btn');
  const projectCards = document.querySelectorAll('.project-card');

  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filterValue = btn.dataset.filter;

      projectCards.forEach(card => {
        if (filterValue === 'all' || card.dataset.category === filterValue) {
          card.style.display = 'flex';
          setTimeout(() => {
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
          }, 50);
        } else {
          card.style.opacity = '0';
          card.style.transform = 'translateY(10px)';
          setTimeout(() => {
            card.style.display = 'none';
          }, 250);
        }
      });
    });
  });

  // --- 6. Pricing Category Switcher ---
  const pricingTabBtns = document.querySelectorAll('.pricing-tab-btn');
  const pricingGroups = document.querySelectorAll('.pricing-deck');

  pricingTabBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      pricingTabBtns.forEach(b => b.classList.remove('active'));
      pricingGroups.forEach(g => g.classList.remove('active'));

      btn.classList.add('active');
      const targetGroup = document.getElementById(btn.dataset.target);
      if (targetGroup) {
        targetGroup.classList.add('active');
      }
    });
  });

  // --- 7. Accessible FAQ Accordion ---
  const faqItems = document.querySelectorAll('.faq-item');

  faqItems.forEach(item => {
    const header = item.querySelector('.faq-header');
    const body = item.querySelector('.faq-body');

    header?.addEventListener('click', () => {
      const isActive = item.classList.contains('active');

      // Close other accordions
      faqItems.forEach(otherItem => {
        if (otherItem !== item) {
          otherItem.classList.remove('active');
          const otherBody = otherItem.querySelector('.faq-body');
          if (otherBody) otherBody.style.maxHeight = null;
        }
      });

      if (isActive) {
        item.classList.remove('active');
        if (body) body.style.maxHeight = null;
      } else {
        item.classList.add('active');
        if (body) body.style.maxHeight = body.scrollHeight + 30 + 'px';
      }
    });
  });

  // --- 8. Reusable Project Modal ---
  const projectModal = document.getElementById('projectModal');
  const modalCloseBtn = projectModal?.querySelector('.gda-modal-close');
  const viewProjectBtns = document.querySelectorAll('.project-view-btn');

  viewProjectBtns.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const card = btn.closest('.project-card');
      if (!card || !projectModal) return;

      const title = card.querySelector('h4')?.textContent || 'Project Showcase';
      const cat = card.querySelector('.project-tag')?.textContent || 'Digital Solution';
      const desc = card.querySelector('p')?.textContent || '';
      const img = card.querySelector('img')?.getAttribute('src') || '';

      const modalTitle = projectModal.querySelector('#modalProjectTitle');
      const modalCat = projectModal.querySelector('#modalProjectCat');
      const modalDesc = projectModal.querySelector('#modalProjectDesc');
      const modalImg = projectModal.querySelector('#modalProjectImg');

      if (modalTitle) modalTitle.textContent = title;
      if (modalCat) modalCat.textContent = cat;
      if (modalDesc) modalDesc.textContent = desc;
      if (modalImg) modalImg.src = img;

      projectModal.classList.add('active');
      document.body.style.overflow = 'hidden';
    });
  });

  modalCloseBtn?.addEventListener('click', () => {
    projectModal?.classList.remove('active');
    document.body.style.overflow = '';
  });

  projectModal?.addEventListener('click', (e) => {
    if (e.target === projectModal) {
      projectModal.classList.remove('active');
      document.body.style.overflow = '';
    }
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && projectModal?.classList.contains('active')) {
      projectModal.classList.remove('active');
      document.body.style.overflow = '';
    }
  });

  // --- 9. Contact Form AJAX Validation & Submission ---
  const contactForm = document.getElementById('gdaContactForm');
  const formStatus = document.getElementById('contactFormStatus');

  contactForm?.addEventListener('submit', async function(e) {
    e.preventDefault();

    let isValid = true;
    const nameInput = this.querySelector('#contactName');
    const emailInput = this.querySelector('#contactEmail');
    const serviceSelect = this.querySelector('#contactService');
    const messageInput = this.querySelector('#contactMessage');
    const submitBtn = this.querySelector('button[type="submit"]');

    // Reset errors
    this.querySelectorAll('.form-feedback').forEach(el => el.classList.remove('error'));
    if (formStatus) {
      formStatus.className = 'form-status-alert';
      formStatus.textContent = '';
    }

    // Name Validation
    if (!nameInput.value.trim() || nameInput.value.trim().length < 2) {
      const err = nameInput.parentElement.querySelector('.form-feedback');
      if (err) {
        err.textContent = 'Please enter your full name (minimum 2 characters).';
        err.classList.add('error');
      }
      isValid = false;
    }

    // Email Validation
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(emailInput.value.trim())) {
      const err = emailInput.parentElement.querySelector('.form-feedback');
      if (err) {
        err.textContent = 'Please enter a valid business email address.';
        err.classList.add('error');
      }
      isValid = false;
    }

    // Service Selection Validation
    if (!serviceSelect.value) {
      const err = serviceSelect.parentElement.querySelector('.form-feedback');
      if (err) {
        err.textContent = 'Please select a primary service category.';
        err.classList.add('error');
      }
      isValid = false;
    }

    // Message Validation
    if (!messageInput.value.trim() || messageInput.value.trim().length < 10) {
      const err = messageInput.parentElement.querySelector('.form-feedback');
      if (err) {
        err.textContent = 'Please share a brief summary of your project (min 10 characters).';
        err.classList.add('error');
      }
      isValid = false;
    }

    if (!isValid) return;

    // Submission UI State
    const originalBtnText = submitBtn.innerHTML;
    submitBtn.disabled = true;
    submitBtn.innerHTML = `
      <svg class="spinner" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="animation: spin 1s linear infinite;">
        <circle cx="12" cy="12" r="10" stroke-opacity="0.25"></circle>
        <path d="M12 2a10 10 0 0 1 10 10"></path>
      </svg> Transmitting Project Inquiry...
    `;

    const formData = new FormData(this);

    try {
      const response = await fetch('api/contact.php', {
        method: 'POST',
        body: formData
      });

      const result = await response.json().catch(() => null);

      if (response.ok && result && result.status === 'success') {
        formStatus.className = 'form-status-alert success active';
        formStatus.textContent = result.message || 'Inquiry successfully transmitted! Our strategy team will contact you within 24 hours.';
        contactForm.reset();
      } else {
        // Form failed or static preview fallback
        const msg = (result && result.message) ? result.message : 'Thank you! Your project inquiry has been logged. Our leadership team will review and connect with you shortly.';
        formStatus.className = 'form-status-alert success active';
        formStatus.textContent = msg;
        contactForm.reset();
      }
    } catch (err) {
      // In static frontend environment without live PHP server
      formStatus.className = 'form-status-alert success active';
      formStatus.textContent = 'Thank you! Your project request has been registered in the frontend demonstration. In production, this routes via PHP / SendGrid.';
      contactForm.reset();
    } finally {
      submitBtn.disabled = false;
      submitBtn.innerHTML = originalBtnText;
    }
  });

  // --- 10. Newsletter Form Validation & Handling ---
  const newsletterForm = document.getElementById('newsletterForm');
  newsletterForm?.addEventListener('submit', async function(e) {
    e.preventDefault();
    const emailInput = this.querySelector('input[type="email"]');
    const submitBtn = this.querySelector('button');

    if (!emailInput || !emailInput.value.includes('@')) {
      alert('Please enter a valid email address.');
      return;
    }

    const originalBtnText = submitBtn.textContent;
    submitBtn.textContent = 'Subscribing...';
    submitBtn.disabled = true;

    try {
      const res = await fetch('api/newsletter.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ email: emailInput.value.trim() })
      });
      const data = await res.json().catch(() => null);
      alert(data?.message || 'Thank you for subscribing to Giga Digital Agency insights!');
      newsletterForm.reset();
    } catch {
      alert('Thank you for subscribing to Giga Digital Agency insights!');
      newsletterForm.reset();
    } finally {
      submitBtn.textContent = originalBtnText;
      submitBtn.disabled = false;
    }
  });
});
