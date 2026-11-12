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
            <span>Services</span>
            <svg class="dropdown-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" width="13" height="13" aria-hidden="true"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </a>
          <div class="nav-dropdown">
            
            <!-- Category 1: Growth & Advertising -->
            <div>
              <div class="dropdown-col-title" style="color:var(--accent-green);">
                <span>Growth &amp; Advertising</span>
              </div>
              <div class="dropdown-items-group">
                <a href="<?php echo $asset_prefix; ?>services/linkedin-ads.html" class="dropdown-work-item">
                  <span class="title">LinkedIn Ads</span>
                  <span class="desc">B2B lead generation &amp; corporate targeting</span>
                </a>
                <a href="<?php echo $asset_prefix; ?>services/google-ads.html" class="dropdown-work-item">
                  <span class="title">Google Ads</span>
                  <span class="desc">Search, Display, Shopping &amp; YouTube ads</span>
                </a>
                <a href="<?php echo $asset_prefix; ?>services/facebook-boosting.html" class="dropdown-work-item">
                  <span class="title">Facebook Boosting</span>
                  <span class="desc">Audience targeting &amp; engagement expansion</span>
                </a>
                <a href="<?php echo $asset_prefix; ?>services/seo.html" class="dropdown-work-item">
                  <span class="title">Search Engine Optimization</span>
                  <span class="desc">Improve organic search visibility &amp; reach</span>
                </a>
                <a href="<?php echo $asset_prefix; ?>services/digital-marketing.html" class="dropdown-work-item">
                  <span class="title">Digital Marketing</span>
                  <span class="desc">Integrated multi-channel growth strategies</span>
                </a>
              </div>
            </div>

            <!-- Category 2: Creative & Content -->
            <div>
              <div class="dropdown-col-title" style="color:var(--accent-violet);">
                <span>Creative &amp; Content</span>
              </div>
              <div class="dropdown-items-group">
                <a href="<?php echo $asset_prefix; ?>services/company-profile-design.html" class="dropdown-work-item">
                  <span class="title">Company Profile Design</span>
                  <span class="desc">Corporate brochures &amp; digital presentations</span>
                </a>
                <a href="<?php echo $asset_prefix; ?>services/banner-poster-design.html" class="dropdown-work-item">
                  <span class="title">Banner &amp; Poster Design</span>
                  <span class="desc">High-impact advertising &amp; promotional creatives</span>
                </a>
                <a href="<?php echo $asset_prefix; ?>services/content-marketing.html" class="dropdown-work-item">
                  <span class="title">Content Marketing</span>
                  <span class="desc">Strategic storytelling &amp; audience engagement</span>
                </a>
                <a href="<?php echo $asset_prefix; ?>services/branding-design.html" class="dropdown-work-item">
                  <span class="title">Branding &amp; Design</span>
                  <span class="desc">Distinctive logos, color systems &amp; brand guides</span>
                </a>
                <a href="<?php echo $asset_prefix; ?>services/video-editing.html" class="dropdown-work-item">
                  <span class="title">Professional Video Editing</span>
                  <span class="desc">Reels, Shorts, YouTube &amp; corporate videos</span>
                </a>
              </div>
            </div>

            <!-- Category 3: Web & Technology -->
            <div>
              <div class="dropdown-col-title" style="color:var(--accent-primary);">
                <span>Web &amp; Technology</span>
              </div>
              <div class="dropdown-items-group">
                <a href="<?php echo $asset_prefix; ?>services/web-design-development.html" class="dropdown-work-item">
                  <span class="title">Web Design &amp; Development</span>
                  <span class="desc">Modern, responsive, user-friendly websites</span>
                </a>
                <a href="<?php echo $asset_prefix; ?>index.php#pricing" class="dropdown-work-item">
                  <span class="title">Custom Solutions &amp; Packages</span>
                  <span class="desc">Tailored service packages for business scale</span>
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
          <a href="<?php echo $asset_prefix; ?>index.php#faq" class="nav-menu-link" style="white-space:nowrap;">FAQ</a>
        </div>
        <div class="nav-menu-item">
          <a href="<?php echo $asset_prefix; ?>index.php#blog" class="nav-menu-link" style="white-space:nowrap;">Blog</a>
        </div>
        <div class="nav-menu-item">
          <a href="<?php echo $asset_prefix; ?>index.php#contact" class="nav-menu-link" style="white-space:nowrap;">Contact</a>
        </div>
      </nav>

      <!-- Action Tools: Generous Space, Theme Toggle, Accent Palette, Quote Button -->
      <div class="header-actions">
        <!-- Sleek Compact Theme Switcher (Icon Only) -->
        <button id="themeToggleBtn" class="theme-toggle-switch" aria-label="Toggle Light and Dark Mode" title="Toggle Light and Dark Mode">
          <span class="switch-ball"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" style="display:block; margin:auto;"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg></span>
        </button>

        <!-- Interactive Accent Palette Picker -->
        <div class="palette-picker-wrap">
          <button id="palettePickerBtn" class="palette-picker-btn" aria-label="Choose Accent Palette" title="Choose Accent Palette" aria-expanded="false">
            <span class="palette-active-dot" id="headerPaletteDot"></span>
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2C6.49 2 2 6.49 2 12s4.49 10 10 10c1.38 0 2.5-1.12 2.5-2.5 0-.61-.23-1.21-.64-1.67-.42-.45-.66-1.04-.66-1.68 0-1.38 1.12-2.5 2.5-2.5h2.95c3.04 0 5.35-2.48 5.35-5.52C24 6.07 18.67 2 12 2z"></path><circle cx="6.5" cy="11.5" r="1.5" fill="currentColor"></circle><circle cx="9.5" cy="7.5" r="1.5" fill="currentColor"></circle><circle cx="14.5" cy="7.5" r="1.5" fill="currentColor"></circle><circle cx="17.5" cy="11.5" r="1.5" fill="currentColor"></circle></svg>
          </button>
          
          <div class="palette-dropdown" id="paletteDropdown" role="menu" aria-label="Accent Palette Options">
            <div class="palette-header">Accent Palette</div>
            <div class="palette-options">
              <button class="palette-option active" data-accent="emerald" role="menuitem">
                <span class="palette-dot" style="background:#3eb649;"></span>
                <span class="palette-label">Logo Green</span>
              </button>
              <button class="palette-option" data-accent="blue" role="menuitem">
                <span class="palette-dot" style="background:#1d4ed8;"></span>
                <span class="palette-label">Logo Royal Blue</span>
              </button>
              <button class="palette-option" data-accent="violet" role="menuitem">
                <span class="palette-dot" style="background:#7c3aed;"></span>
                <span class="palette-label">Logo Purple</span>
              </button>
              <button class="palette-option" data-accent="cyan" role="menuitem">
                <span class="palette-dot" style="background:#e11d48;"></span>
                <span class="palette-label">Logo Magenta</span>
              </button>
              <button class="palette-option" data-accent="amber" role="menuitem">
                <span class="palette-dot" style="background:#f59e0b;"></span>
                <span class="palette-label">Logo Amber</span>
              </button>
            </div>
          </div>
        </div>

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
        <a href="<?php echo $asset_prefix; ?>index.php#process">Our 6-Step Process</a>
        <a href="<?php echo $asset_prefix; ?>index.php#case-study">Meta Case Study</a>
        <a href="<?php echo $asset_prefix; ?>index.php#pricing">Pricing & Packages</a>
        <a href="<?php echo $asset_prefix; ?>index.php#team">Meet Our Team</a>
        <a href="<?php echo $asset_prefix; ?>index.php#reviews">Client Reviews</a>
        <a href="<?php echo $asset_prefix; ?>index.php#blog">Articles & Perspectives</a>
        <a href="<?php echo $asset_prefix; ?>index.php#contact">Contact & Quotation</a>
      </nav>
    </div>
    <div style="border-top:1px solid var(--border-subtle); padding-top:18px;">
      <!-- Mobile Theme & Accent Controls -->
      <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:14px; gap:8px;">
        <div style="display:flex; align-items:center; gap:10px;">
          <button id="drawerThemeToggleBtn" class="theme-toggle-switch" aria-label="Toggle Theme" title="Toggle Light and Dark Mode">
            <span class="switch-ball"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" style="display:block; margin:auto;"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg></span>
          </button>
          <span style="font-size:0.85rem; color:var(--text-muted); font-weight:700;">Theme</span>
        </div>
        <div style="display:flex; gap:6px;" id="drawerPaletteQuickDots" aria-label="Select Accent Color">
          <button class="palette-quick-dot active" data-accent="emerald" style="background:#3eb649;" title="Logo Green"></button>
          <button class="palette-quick-dot" data-accent="blue" style="background:#1d4ed8;" title="Logo Royal Blue"></button>
          <button class="palette-quick-dot" data-accent="violet" style="background:#7c3aed;" title="Logo Purple"></button>
          <button class="palette-quick-dot" data-accent="cyan" style="background:#e11d48;" title="Logo Magenta"></button>
          <button class="palette-quick-dot" data-accent="amber" style="background:#f59e0b;" title="Logo Amber"></button>
        </div>
      </div>
      <p style="font-size:0.85rem; color:var(--text-muted); margin-bottom:4px;">Direct Hotline:</p>
      <p style="font-size:1.05rem; font-weight:800; color:var(--text-heading); margin-bottom:12px;">+8801870-699677</p>
      <a href="https://wa.me/8801870699677?text=Hello%20Giga%20Digital%20Agency,%20I%20would%20like%20to%20discuss%20your%20services." target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp" style="width:100%; margin-bottom:10px;">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" style="display:inline-block; vertical-align:middle; flex-shrink:0; margin-right:6px;"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.275.072.376-.044c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.1.824zm-3.423-14.416c-6.627 0-12 5.373-12 12 0 2.154.57 4.175 1.564 5.918l-1.564 5.71 5.86-1.536c1.678.914 3.603 1.408 5.64 1.408 6.627 0 12-5.373 12-12s-5.373-12-12-12z"/></svg>
        <span>Chat on WhatsApp</span>
      </a>
      <a href="<?php echo $asset_prefix; ?>index.php#contact" class="btn btn-primary" style="width:100%;">Get Quotation</a>
    </div>
  </aside>
