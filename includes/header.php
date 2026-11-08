<?php
/**
 * GIGA DIGITAL AGENCY — HEADER COMPONENT
 */
if (!isset($page_title)) {
  $page_title = 'Giga Digital Agency — Best Web Design, Software & Digital Marketing Agency in Bangladesh';
}
if (!isset($page_desc)) {
  $page_desc = 'Giga Digital Agency is a leading web design, custom software development, e-commerce, and digital marketing agency in Dhaka, Bangladesh.';
}
?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
  <meta name="author" content="Giga Digital Agency">

  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($page_desc); ?>">
  <meta property="og:image" content="images/resource/logo-1.png">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="images/favicon.png">
  <link rel="shortcut icon" href="images/favicon.png">

  <!-- Typography -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
</head>
<body>

  <!-- Top Information Bar -->
  <div class="topbar">
    <div class="container topbar-container">
      <div class="topbar-info">
        <div class="topbar-info-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
          <span>Hotline: <a href="tel:01860422185" style="color:#fff; font-weight:700;">+880 1860-422185</a>, <a href="tel:01778741894" style="color:#fff; font-weight:700;">+880 1778-741894</a></span>
        </div>
        <div class="topbar-info-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
          <a href="mailto:info@gigadigitalagency.com" style="color:#cbd5e1;">info@gigadigitalagency.com</a>
        </div>
        <div class="topbar-info-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
          <span>House # 6/14, Block # A, Lalmatia, Dhaka</span>
        </div>
      </div>
      <div class="topbar-socials">
        <span style="color:#94a3b8; font-size:0.8rem; margin-right:6px;">Sat – Thu: 9:30 AM – 7:00 PM</span>
        <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></a>
        <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"><svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg></a>
        <a href="https://youtube.com" target="_blank" rel="noopener noreferrer" aria-label="YouTube"><svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02" fill="#000"></polygon></svg></a>
      </div>
    </div>
  </div>

  <!-- Main Header with Actual Logo -->
  <header class="main-header" id="topNav">
    <div class="container nav-container">
      <a href="index.php#home" class="site-brand" aria-label="Giga Digital Agency Homepage">
        <img src="images/resource/logo-1.png" alt="Giga Digital Agency" class="site-logo">
      </a>

      <nav class="nav-menu">
        <div class="nav-menu-item"><a href="index.php#home" class="nav-menu-link active">Home</a></div>
        <div class="nav-menu-item"><a href="index.php#about" class="nav-menu-link">About Us</a></div>
        <div class="nav-menu-item">
          <a href="index.php#services" class="nav-menu-link">
            Services
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </a>
          <div class="nav-dropdown">
            <a href="index.php#services" class="dropdown-link">💻 Web Design & Development</a>
            <a href="index.php#services" class="dropdown-link">🛍️ E-Commerce Solutions</a>
            <a href="index.php#services" class="dropdown-link">⚙️ Custom Software & POS</a>
            <a href="index.php#services" class="dropdown-link">📈 SEO & Digital Marketing</a>
            <a href="index.php#services" class="dropdown-link">📱 Social Media & Meta Ads</a>
            <a href="index.php#services" class="dropdown-link">🎨 UI/UX & Graphic Design</a>
            <a href="index.php#services" class="dropdown-link">☁️ Domain & Cloud Hosting</a>
            <a href="index.php#services" class="dropdown-link">🛠️ Annual Maintenance & Support</a>
          </div>
        </div>
        <div class="nav-menu-item"><a href="index.php#packages" class="nav-menu-link">Packages</a></div>
        <div class="nav-menu-item"><a href="index.php#portfolio" class="nav-menu-link">Portfolio</a></div>
        <div class="nav-menu-item"><a href="index.php#process" class="nav-menu-link">Our Process</a></div>
        <div class="nav-menu-item"><a href="index.php#contact" class="nav-menu-link">Contact</a></div>
      </nav>

      <div class="header-actions">
        <!-- Dual Mode Toggle Button -->
        <button class="theme-toggle-btn" id="themeToggleBtn" aria-label="Switch Theme" title="Switch Theme"></button>
        <a href="index.php#contact" class="btn btn-primary header-cta">Get Free Quote</a>
        <button class="mobile-toggle" aria-label="Toggle Menu"><span></span><span></span><span></span></button>
      </div>
    </div>
  </header>

  <!-- Mobile Drawer Overlay -->
  <div class="mobile-drawer-overlay"></div>

  <!-- Mobile Drawer Menu -->
  <aside class="mobile-drawer" aria-label="Mobile Navigation Drawer">
    <div>
      <div style="display:flex; justify-content:space-between; align-items:center;">
        <img src="images/resource/logo-1.png" alt="Giga Digital Agency" style="height:36px; width:auto;">
        <button class="drawer-close" style="font-size:1.8rem; color:var(--text-heading);">&times;</button>
      </div>
      <nav class="drawer-nav-list">
        <a href="index.php#home">Home</a>
        <a href="index.php#about">About Giga Digital</a>
        <a href="index.php#services">Our IT & Digital Services</a>
        <a href="index.php#packages">Pricing & Packages</a>
        <a href="index.php#portfolio">Recent Work</a>
        <a href="index.php#process">How We Work</a>
        <a href="index.php#contact">Contact Us</a>
      </nav>
    </div>
    <div style="border-top:1px solid var(--border-subtle); padding-top:20px;">
      <p style="font-size:0.85rem; color:var(--text-muted); margin-bottom:6px;">Call Our Team:</p>
      <p style="font-size:1.05rem; font-weight:800; color:var(--text-heading); margin-bottom:14px;">+880 1860-422185</p>
      <a href="https://wa.me/8801860422185?text=Hello%20Giga%20Digital%20Agency" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp" style="width:100%; margin-bottom:10px;">
        💬 Chat on WhatsApp
      </a>
      <a href="index.php#contact" class="btn btn-primary" style="width:100%;">Get Quotation</a>
    </div>
  </aside>
