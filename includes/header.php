<?php
/**
 * GIGA DIGITAL AGENCY — HEADER COMPONENT
 * Reusable across index.php and individual pages
 */
if (!isset($page_title)) {
  $page_title = 'Giga Digital Agency — Turning Ideas Into Digital Impact';
}
if (!isset($page_desc)) {
  $page_desc = 'Giga Digital Agency combines creative design, strategic marketing, and innovative technology to help modern businesses scale and lead in the digital era.';
}
if (!isset($current_page)) {
  $current_page = 'home';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
  <meta name="keywords" content="digital agency, web development, SEO, digital marketing, UI/UX design, brand identity, performance marketing, Dhaka, Bangladesh, international creative agency">
  <meta name="author" content="Giga Digital Agency">

  <!-- Open Graph / Meta -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($page_desc); ?>">
  <meta property="og:url" content="https://www.gigadigitalagency.com/">
  <meta property="og:image" content="images/resource/logo-1.png">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="images/favicon.png">
  <link rel="shortcut icon" href="images/favicon.png">

  <!-- Typography: Plus Jakarta Sans & Inter -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Custom Master Stylesheets -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
</head>
<body>

  <!-- SECTION 01: NAVIGATION / HEADER -->
  <header class="main-header" id="topNav">
    <div class="container nav-container">
      
      <!-- Logo Branding -->
      <a href="index.php" class="brand-logo" aria-label="Giga Digital Agency Home">
        <div class="brand-logo-fallback">
          <span class="brand-logo-badge">GDA</span>
          <span>GIGA <span style="font-weight:400; color:var(--text-muted);">DIGITAL</span></span>
        </div>
      </a>

      <!-- Desktop Navigation Menu -->
      <nav class="nav-links" aria-label="Main Navigation">
        <div class="nav-item">
          <a href="index.php#home" class="nav-link <?php echo ($current_page === 'home') ? 'active' : ''; ?>">Home</a>
        </div>
        <div class="nav-item">
          <a href="index.php#about" class="nav-link <?php echo ($current_page === 'about') ? 'active' : ''; ?>">About</a>
        </div>
        
        <!-- Services Dropdown -->
        <div class="nav-item">
          <a href="index.php#services" class="nav-link <?php echo ($current_page === 'services') ? 'active' : ''; ?>">
            Services
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </a>
          <div class="nav-dropdown">
            <a href="index.php#creative" class="nav-dropdown-item">
              <div class="icon">🎨</div>
              <div>
                <strong>Creative & Brand</strong>
                <div style="font-size:0.75rem; color:var(--text-dim);">UI/UX, Branding, Visual Identity</div>
              </div>
            </a>
            <a href="index.php#growth" class="nav-dropdown-item">
              <div class="icon">📈</div>
              <div>
                <strong>Growth & Marketing</strong>
                <div style="font-size:0.75rem; color:var(--text-dim);">SEO, PPC, Social Media Strategy</div>
              </div>
            </a>
            <a href="index.php#tech" class="nav-dropdown-item">
              <div class="icon">⚡</div>
              <div>
                <strong>Tech & Engineering</strong>
                <div style="font-size:0.75rem; color:var(--text-dim);">Web, Mobile Apps, Automation</div>
              </div>
            </a>
          </div>
        </div>

        <!-- Portfolio & Case Studies -->
        <div class="nav-item">
          <a href="index.php#portfolio" class="nav-link <?php echo ($current_page === 'portfolio') ? 'active' : ''; ?>">Portfolio</a>
        </div>
        <div class="nav-item">
          <a href="index.php#case-studies" class="nav-link <?php echo ($current_page === 'case-studies') ? 'active' : ''; ?>">Case Studies</a>
        </div>
        <div class="nav-item">
          <a href="index.php#pricing" class="nav-link <?php echo ($current_page === 'pricing') ? 'active' : ''; ?>">Pricing</a>
        </div>
        <div class="nav-item">
          <a href="index.php#blog" class="nav-link <?php echo ($current_page === 'blog') ? 'active' : ''; ?>">Blog</a>
        </div>
        <div class="nav-item">
          <a href="index.php#contact" class="nav-link <?php echo ($current_page === 'contact') ? 'active' : ''; ?>">Contact</a>
        </div>
      </nav>

      <!-- CTA & Mobile Trigger -->
      <div class="nav-cta">
        <a href="#contact" class="btn btn-primary">
          Let's Talk
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
        </a>
        <button class="mobile-toggle" aria-label="Toggle Navigation Drawer">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>

    </div>
  </header>

  <!-- Mobile Drawer Overlay -->
  <div class="mobile-drawer-overlay"></div>

  <!-- Mobile Slide-out Drawer -->
  <aside class="mobile-drawer" aria-label="Mobile Navigation Drawer">
    <div>
      <div class="mobile-drawer-header">
        <div class="brand-logo-fallback">
          <span class="brand-logo-badge">GDA</span>
          <span>GIGA DIGITAL</span>
        </div>
        <button class="drawer-close" aria-label="Close Mobile Drawer">&times;</button>
      </div>
      <nav class="mobile-nav-links">
        <a href="index.php#home">Home</a>
        <a href="index.php#about">About Us</a>
        <a href="index.php#services">All Services</a>
        <a href="index.php#process">Our Process</a>
        <a href="index.php#portfolio">Selected Work</a>
        <a href="index.php#case-studies">Case Studies</a>
        <a href="index.php#pricing">Pricing & Packages</a>
        <a href="index.php#blog">Insights & Blog</a>
        <a href="index.php#contact">Contact</a>
      </nav>
    </div>
    <div>
      <div style="font-size:0.85rem; color:var(--text-muted); margin-bottom:12px;">Direct Inquiries:</div>
      <p style="font-size:0.95rem; font-weight:700; color:#fff; margin-bottom:4px;">+880 1860-422185</p>
      <p style="font-size:0.85rem; color:var(--accent-cyan); margin-bottom:20px;">info@gigadigitalagency.com</p>
      <a href="#contact" class="btn btn-primary" style="width:100%;">Start a Project</a>
    </div>
  </aside>
