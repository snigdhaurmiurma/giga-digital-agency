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

  <!-- Typography: Plus Jakarta Sans & Caveat -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?php echo $asset_prefix; ?>css/style.css">
  <link rel="stylesheet" href="<?php echo $asset_prefix; ?>css/responsive.css">
</head>
<body>

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
        <!-- Prominent Dual Theme Switcher (Dark & Light) -->
        <button id="themeToggleBtn" class="theme-toggle-switch" aria-label="Toggle Light and Dark Mode" title="Toggle Light and Dark Mode">
          <span class="switch-ball">🌙</span>
          <span class="switch-label">Dark Mode</span>
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
      <!-- Mobile Theme Toggle -->
      <button id="drawerThemeToggleBtn" class="theme-toggle-switch" style="width:100%; margin-bottom:12px; justify-content:center;">
        <span class="switch-ball">🌙</span>
        <span class="switch-label">Dark Mode</span>
      </button>
      <p style="font-size:0.85rem; color:var(--text-muted); margin-bottom:4px;">Direct Hotline:</p>
      <p style="font-size:1.05rem; font-weight:800; color:var(--text-heading); margin-bottom:12px;">+880 1860-422185</p>
      <a href="https://wa.me/8801860422185?text=Hello%20Giga%20Digital%20Agency,%20I%20would%20like%20to%20discuss%20a%20project." target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp" style="width:100%; margin-bottom:10px;">
        💬 Chat on WhatsApp
      </a>
      <a href="<?php echo $asset_prefix; ?>index.php#contact" class="btn btn-primary" style="width:100%;">Get Quotation</a>
    </div>
  </aside>
