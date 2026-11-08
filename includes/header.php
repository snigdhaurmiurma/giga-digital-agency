<?php
/**
 * GIGA DIGITAL AGENCY — HEADER COMPONENT
 * Clean Frosted Glass Navigation with Official Logo & Rich Services Mega Dropdown
 */
if (!isset($page_title)) {
  $page_title = 'Giga Digital Agency — Best Web Design, UI/UX, SEO & Digital Marketing Agency in Bangladesh';
}
if (!isset($page_desc)) {
  $page_desc = 'Giga Digital Agency is a leading full-service digital agency in Dhaka, Bangladesh specializing in UI/UX design, corporate web development, e-commerce, SEO, and Facebook & YouTube ad boosting.';
}
$asset_prefix = isset($is_subpage) && $is_subpage ? '../' : '';
?>
<!DOCTYPE html>
<html lang="en" data-theme="dark">
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
  <meta property="og:image" content="<?php echo $asset_prefix; ?>images/resource/logo-1.png">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="<?php echo $asset_prefix; ?>images/favicon.png">
  <link rel="shortcut icon" href="<?php echo $asset_prefix; ?>images/favicon.png">

  <!-- Typography: Plus Jakarta Sans -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?php echo $asset_prefix; ?>css/style.css">
  <link rel="stylesheet" href="<?php echo $asset_prefix; ?>css/responsive.css">
</head>
<body>

  <!-- Top Information Bar -->
  <div class="topbar">
    <div class="container topbar-container">
      <div class="topbar-info">
        <div class="topbar-info-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
          <span>Hotlines: <a href="tel:01860422185" style="color:#ffffff; font-weight:800;">+880 1860-422185</a>, <a href="tel:01778741894" style="color:#ffffff; font-weight:800;">+880 1778-741894</a></span>
        </div>
        <div class="topbar-info-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
          <span>Email: <a href="mailto:info@gigadigitalagency.com" style="color:var(--accent-cyan); font-weight:700;">info@gigadigitalagency.com</a></span>
        </div>
        <div class="topbar-info-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
          <span>House # 6/14, Block # A, Lalmatia, Dhaka-1207</span>
        </div>
      </div>
      <div class="topbar-socials">
        <span style="font-size:0.80rem; color:#94a3b8; margin-right:8px;">Sat–Thu: 9:30 AM – 7:00 PM</span>
        <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
        </a>
        <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
        </a>
        <a href="https://youtube.com" target="_blank" rel="noopener noreferrer" aria-label="YouTube">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02" fill="#000"></polygon></svg>
        </a>
      </div>
    </div>
  </div>

  <!-- Main Navigation Header (Clean Official Logo & Rich Dropdown) -->
  <header class="main-header">
    <div class="container nav-container">
      
      <!-- Clean Official Logo (NO awkward subtitle text) -->
      <a href="<?php echo $asset_prefix; ?>index.php#home" class="site-brand" title="Giga Digital Agency — Home">
        <img src="<?php echo $asset_prefix; ?>images/resource/logo-1.png" alt="Giga Digital Agency Logo" class="site-logo">
      </a>

      <!-- Desktop Navigation Menu -->
      <nav class="nav-menu" aria-label="Primary Navigation">
        <div class="nav-menu-item">
          <a href="<?php echo $asset_prefix; ?>index.php#home" class="nav-menu-link active">Home</a>
        </div>
        <div class="nav-menu-item">
          <!-- Guaranteed strictly one-line -->
          <a href="<?php echo $asset_prefix; ?>index.php#about" class="nav-menu-link" style="white-space:nowrap;">About Us</a>
        </div>
        
        <!-- Services with Rich 3-Category Mega Dropdown -->
        <div class="nav-menu-item">
          <a href="<?php echo $asset_prefix; ?>index.php#services" class="nav-menu-link" style="white-space:nowrap;">
            Services
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" width="12" height="12"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </a>
          <div class="nav-dropdown">
            
            <!-- Category 1: Creative -->
            <div>
              <div class="dropdown-col-title">
                <span>🎨 Creative Division</span>
              </div>
              <div class="dropdown-items-group">
                <a href="<?php echo $asset_prefix; ?>index.php#services" class="dropdown-work-item">
                  <span class="title">Graphic Design</span>
                  <span class="desc">Vector logos, brand identity & marketing toolkits</span>
                </a>
                <a href="<?php echo $asset_prefix; ?>index.php#services" class="dropdown-work-item">
                  <span class="title">UI/UX Design</span>
                  <span class="desc">Interactive Figma mobile app & web interfaces</span>
                </a>
                <a href="<?php echo $asset_prefix; ?>index.php#services" class="dropdown-work-item">
                  <span class="title">YouTube Services</span>
                  <span class="desc">High-CTR thumbnails & video retention editing</span>
                </a>
              </div>
            </div>

            <!-- Category 2: Growth -->
            <div>
              <div class="dropdown-col-title" style="color:var(--accent-violet);">
                <span>🚀 Growth Division</span>
              </div>
              <div class="dropdown-items-group">
                <a href="<?php echo $asset_prefix; ?>index.php#services" class="dropdown-work-item">
                  <span class="title">Facebook Ad Boosting</span>
                  <span class="desc">Meta CAPI pixel setup & high-ROAS sales funnels</span>
                </a>
                <a href="<?php echo $asset_prefix; ?>index.php#services" class="dropdown-work-item">
                  <span class="title">YouTube Ad Boosting</span>
                  <span class="desc">Targeted in-stream ads & video subscriber growth</span>
                </a>
                <a href="<?php echo $asset_prefix; ?>index.php#services" class="dropdown-work-item">
                  <span class="title">Google Search SEO</span>
                  <span class="desc">Rank #1 organically on Google & Google Maps</span>
                </a>
              </div>
            </div>

            <!-- Category 3: Tech -->
            <div>
              <div class="dropdown-col-title" style="color:var(--accent-cyan);">
                <span>💻 Tech Division</span>
              </div>
              <div class="dropdown-items-group">
                <a href="<?php echo $asset_prefix; ?>index.php#services" class="dropdown-work-item">
                  <span class="title">Corporate Web Design</span>
                  <span class="desc">Ultra-fast responsive websites with custom CMS</span>
                </a>
                <a href="<?php echo $asset_prefix; ?>index.php#services" class="dropdown-work-item">
                  <span class="title">E-Commerce (bKash)</span>
                  <span class="desc">Cart checkout with bKash, Nagad & Pathao API</span>
                </a>
                <a href="<?php echo $asset_prefix; ?>index.php#services" class="dropdown-work-item">
                  <span class="title">Custom POS & ERP</span>
                  <span class="desc">Multi-branch inventory, billing & CRM software</span>
                </a>
              </div>
            </div>

          </div>
        </div>

        <div class="nav-menu-item">
          <a href="<?php echo $asset_prefix; ?>index.php#process" class="nav-menu-link" style="white-space:nowrap;">Process</a>
        </div>
        <div class="nav-menu-item">
          <a href="<?php echo $asset_prefix; ?>index.php#case-study" class="nav-menu-link" style="white-space:nowrap;">Case Study</a>
        </div>
        <div class="nav-menu-item">
          <a href="<?php echo $asset_prefix; ?>index.php#pricing" class="nav-menu-link" style="white-space:nowrap;">Pricing</a>
        </div>
        <div class="nav-menu-item">
          <a href="<?php echo $asset_prefix; ?>index.php#team" class="nav-menu-link" style="white-space:nowrap;">Team</a>
        </div>
        <div class="nav-menu-item">
          <a href="<?php echo $asset_prefix; ?>index.php#reviews" class="nav-menu-link" style="white-space:nowrap;">Reviews</a>
        </div>
        <div class="nav-menu-item">
          <a href="<?php echo $asset_prefix; ?>index.php#blog" class="nav-menu-link" style="white-space:nowrap;">Blog</a>
        </div>
        <div class="nav-menu-item">
          <a href="<?php echo $asset_prefix; ?>index.php#contact" class="nav-menu-link" style="white-space:nowrap;">Contact</a>
        </div>
      </nav>

      <!-- Action Tools: Generous Space, Theme Toggle, Quote Button -->
      <div class="header-actions">
        <!-- Dual Theme Toggle Switch -->
        <button id="themeToggleBtn" class="theme-toggle-btn" aria-label="Toggle Light and Dark Theme" title="Toggle Theme">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="19" height="19"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
        </button>

        <!-- Primary Action Button -->
        <a href="<?php echo $asset_prefix; ?>index.php#contact" class="btn btn-primary header-cta">
          Get Free Quote
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
        </a>

        <!-- Mobile Drawer Toggle -->
        <button class="mobile-toggle" aria-label="Open Mobile Menu">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>

    </div>
  </header>

  <!-- Mobile Drawer Overlay & Menu -->
  <div class="mobile-drawer-overlay"></div>
  <aside class="mobile-drawer" aria-label="Mobile Navigation Drawer">
    <div>
      <div style="display:flex; justify-content:space-between; align-items:center;">
        <img src="<?php echo $asset_prefix; ?>images/resource/logo-1.png" alt="Giga Digital Agency" style="height:44px; width:auto;">
        <button class="drawer-close" style="font-size:1.8rem; color:var(--text-heading);">&times;</button>
      </div>
      <nav class="drawer-nav-list">
        <a href="<?php echo $asset_prefix; ?>index.php#home">Home</a>
        <a href="<?php echo $asset_prefix; ?>index.php#about">About Us</a>
        <a href="<?php echo $asset_prefix; ?>index.php#services">Services Portfolio</a>
        <a href="<?php echo $asset_prefix; ?>index.php#process">Our 4-Step Process</a>
        <a href="<?php echo $asset_prefix; ?>index.php#case-study">Meta Case Study</a>
        <a href="<?php echo $asset_prefix; ?>index.php#pricing">Pricing & Packages</a>
        <a href="<?php echo $asset_prefix; ?>index.php#team">Meet Our Team</a>
        <a href="<?php echo $asset_prefix; ?>index.php#reviews">Client Reviews</a>
        <a href="<?php echo $asset_prefix; ?>index.php#blog">Articles & Perspectives</a>
        <a href="<?php echo $asset_prefix; ?>index.php#contact">Contact & Quotation</a>
      </nav>
    </div>
    <div style="border-top:1px solid var(--border-subtle); padding-top:18px;">
      <p style="font-size:0.85rem; color:var(--text-muted); margin-bottom:4px;">Direct Hotline:</p>
      <p style="font-size:1.05rem; font-weight:800; color:var(--text-heading); margin-bottom:12px;">+880 1860-422185</p>
      <a href="https://wa.me/8801860422185?text=Hello%20Giga%20Digital%20Agency,%20I%20would%20like%20to%20discuss%20a%20project." target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp" style="width:100%; margin-bottom:10px;">
        💬 Chat on WhatsApp
      </a>
      <a href="<?php echo $asset_prefix; ?>index.php#contact" class="btn btn-primary" style="width:100%;">Get Quotation</a>
    </div>
  </aside>
