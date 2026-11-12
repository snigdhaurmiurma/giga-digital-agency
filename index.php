<?php
/**
 * GIGA DIGITAL AGENCY — MASTER HOMEPAGE
 * Results-Driven Digital Marketing & Creative Solutions Agency
 */
$page_title = 'Giga Digital Agency — Digital Marketing, Creative Branding & Web Development';
$page_desc = 'Giga Digital Agency is a professional, results-driven digital marketing and creative solutions agency helping businesses establish a powerful online presence and achieve sustainable growth.';
$current_page = 'home';
$is_subpage = false;
require_once __DIR__ . '/includes/header.php';
?>
<section class="hero-banner hero-carousel-section" id="home" aria-label="Giga Digital Agency Promotional Carousel" aria-roledescription="carousel">
    
    <!-- Ambient Tech Glow Behind Carousel -->
    <div class="carousel-ambient-glow" aria-hidden="true"></div>

    <!-- Automatic Slide Progress Indicator (Freezes on Hover) -->
    <div class="carousel-progress-track" aria-hidden="true">
      <div class="carousel-progress-bar" id="carouselProgressBar"></div>
    </div>

    <!-- Carousel Viewport & Slides Track -->
    <div class="hero-carousel-viewport">
      <div class="hero-carousel-track" id="heroCarouselTrack">

        <!-- ===================================================================
             SLIDE 01: MAIN BRAND INTRODUCTION
             =================================================================== -->
        <article class="hero-carousel-slide active" data-slide-index="0" role="group" aria-roledescription="slide" aria-label="1 of 6: Main Brand Introduction">
          <div class="container hero-slide-container">
            <div class="hero-slide-grid">
              
              <!-- Left Copy & Brand Value Proposition -->
              <div class="hero-slide-content">
                <div class="hero-partner-pill">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><polyline points="9 12 11 14 15 10"></polyline></svg>
                  <span>Your Growth. Our Digital Strategy.</span>
                </div>

                <div class="hero-supporting-kicker">Empowering Businesses Through Digital Innovation &amp; Strategic Growth.</div>

                <h1 class="hero-carousel-title">
                  Your Growth.<br>
                  <span class="hero-accent-text">Our Digital Strategy.</span>
                </h1>

                <p class="hero-carousel-desc">
                  We help businesses grow through strategic digital marketing, targeted advertising, creative branding, and innovative digital solutions. From building brand awareness to generating qualified leads, we're here to turn your business goals into measurable opportunities.
                </p>

                <div class="hero-service-chips">
                  <span class="service-chip">Strategic Digital Marketing</span>
                  <span class="service-chip">Targeted Advertising</span>
                  <span class="service-chip">Creative Branding</span>
                  <span class="service-chip">Web Engineering</span>
                </div>

                <div class="hero-carousel-ctas">
                  <a href="#services" class="btn btn-primary">
                    <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 14 14"></polyline></svg>
                    <span>Explore Our Services</span>
                  </a>
                  <a href="#contact" class="btn btn-dark-pill">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                    <span>Let's Discuss Your Project</span>
                  </a>
                </div>
              </div>

              <!-- Right: Art-Directed Digital Growth Command Center -->
              <div class="hero-slide-visual">
                <div class="visual-art-canvas visual-canvas-brand">
                  <div class="canvas-ambient-backdrop"></div>

                  <!-- Agency Growth Hub Display Card -->
                  <div class="canvas-laptop-card">
                    <div class="card-browser-bar">
                      <span class="bar-dot red"></span>
                      <span class="bar-dot yellow"></span>
                      <span class="bar-dot green"></span>
                      <span class="bar-url">gigadigitalagency.com/growth-suite</span>
                    </div>
                    <div class="card-screen-content">
                      <div class="screen-brand-header">
                        <img src="images/resource/logo-1.png" alt="Giga Digital Agency" class="screen-logo-img">
                        <span class="screen-badge-live">● Live Performance</span>
                      </div>
                      <div class="screen-kpi-row">
                        <div class="screen-kpi-box">
                          <span class="kpi-label">Average Campaign ROI</span>
                          <span class="kpi-val">+148%</span>
                          <span class="kpi-sub">Data-Driven Optimization</span>
                        </div>
                        <div class="screen-kpi-box">
                          <span class="kpi-label">Qualified Leads</span>
                          <span class="kpi-val">24.5K+</span>
                          <span class="kpi-sub">Verified B2B &amp; B2C Inquiries</span>
                        </div>
                      </div>
                      <div class="screen-mini-chart">
                        <svg viewBox="0 0 320 60" class="sparkline-svg" fill="none" preserveAspectRatio="none">
                          <path d="M0,50 Q40,32 80,40 T160,22 T240,14 T320,6" stroke="var(--accent-primary)" stroke-width="3" stroke-linecap="round"/>
                          <path d="M0,50 Q40,32 80,40 T160,22 T240,14 T320,6 L320,60 L0,60 Z" fill="var(--accent-primary)" fill-opacity="0.14"/>
                        </svg>
                      </div>
                    </div>
                  </div>

                  <!-- Floating Trust Pill Top -->
                  <div class="canvas-float-card float-badge-top">
                    <span class="badge-icon-wrap" style="color:var(--accent-green); background:rgba(62,182,73,0.16);">
                      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                    </span>
                    <div>
                      <div class="float-title">99.4% Client CSAT</div>
                      <div class="float-sub">Long-Term Growth Partner</div>
                    </div>
                  </div>

                  <!-- Floating Strategic Pill Bottom -->
                  <div class="canvas-float-card float-badge-bottom">
                    <span class="badge-icon-wrap" style="color:var(--accent-cyan); background:rgba(6,182,212,0.16);">
                      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 14 14"></polyline></svg>
                    </span>
                    <div>
                      <div class="float-title">Measurable Opportunities</div>
                      <div class="float-sub">Full-Funnel Campaign Execution</div>
                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>
        </article>

        <!-- ===================================================================
             SLIDE 02: GOOGLE ADS & LINKEDIN ADS
             =================================================================== -->
        <article class="hero-carousel-slide" data-slide-index="1" role="group" aria-roledescription="slide" aria-label="2 of 6: Google Ads & LinkedIn Ads">
          <div class="container hero-slide-container">
            <div class="hero-slide-grid">
              
              <!-- Left Copy -->
              <div class="hero-slide-content">
                <div class="hero-partner-pill">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><line x1="22" y1="12" x2="18" y2="12"></line><line x1="6" y1="12" x2="2" y2="12"></line><line x1="12" y1="6" x2="12" y2="2"></line><line x1="12" y1="22" x2="12" y2="18"></line></svg>
                  <span>Growth &amp; High-Intent Advertising</span>
                </div>

                <div class="hero-supporting-kicker">Performance Search &amp; Enterprise B2B Lead Generation</div>

                <h2 class="hero-carousel-title">
                  Reach the Right Audience.<br>
                  <span class="hero-accent-text">Generate Real Opportunities.</span>
                </h2>

                <p class="hero-carousel-desc">
                  Connect with potential customers and business decision-makers through strategic advertising campaigns designed to increase visibility, generate quality leads, and support business growth.
                </p>

                <div class="hero-service-chips">
                  <a href="services/google-ads.html" class="service-chip">Google Ads Management</a>
                  <a href="services/linkedin-ads.html" class="service-chip">LinkedIn Ads Management</a>
                  <span class="service-chip">B2B Lead Generation</span>
                  <span class="service-chip">Targeted Digital Advertising</span>
                </div>

                <div class="hero-carousel-ctas">
                  <a href="services/google-ads.html" class="btn btn-primary">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    <span>Explore Advertising Solutions</span>
                  </a>
                  <a href="services/linkedin-ads.html" class="btn btn-dark-pill">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    <span>LinkedIn Ads Details</span>
                  </a>
                </div>
              </div>

              <!-- Right: Dual Advertising Mockup Matrix -->
              <div class="hero-slide-visual">
                <div class="visual-art-canvas visual-canvas-ads">
                  <div class="canvas-ambient-backdrop"></div>

                  <!-- Google Search Ad Preview Card -->
                  <div class="ad-mockup-card google-ad-card">
                    <div class="ad-card-badge-row">
                      <span class="ad-pill-label">Sponsored Search Campaign</span>
                      <span class="ad-quality-badge">Quality Score: 10/10</span>
                    </div>
                    <div class="ad-url-preview">
                      <span class="ad-tag">Ad</span>
                      <span class="ad-display-url">https://gigadigitalagency.com/scale-revenue</span>
                    </div>
                    <div class="ad-headline-preview">High-Performance Google Ads Management | Qualified Leads &amp; Sales</div>
                    <p class="ad-body-preview">Connect with buyers actively searching for your solutions. Targeted keywords, lower CPC &amp; verified conversion tracking.</p>
                    <div class="ad-sitelinks-row">
                      <span class="sitelink-pill">B2B Lead Generation</span>
                      <span class="sitelink-pill">E-Commerce ROAS 4.8x</span>
                      <span class="sitelink-pill">Free Account Audit</span>
                    </div>
                  </div>

                  <!-- LinkedIn B2B Sponsored Ad Mockup Card -->
                  <div class="ad-mockup-card linkedin-ad-card">
                    <div class="li-ad-header">
                      <div class="li-avatar">
                        <img src="images/resource/logo-1.png" alt="Giga">
                      </div>
                      <div>
                        <div class="li-company-name">Giga Digital Agency &bull; Promoted</div>
                        <div class="li-target-scope">Targeting: C-Level Executives &bull; VP of Growth &bull; Tech Founders</div>
                      </div>
                    </div>
                    <div class="li-ad-caption">
                      Reach decision-makers in targeted industries with precision B2B LinkedIn campaigns. Turn executive engagement into verified enterprise pipelines.
                    </div>
                    <div class="li-ad-cta-box">
                      <div>
                        <div class="li-cta-title">B2B Enterprise Growth Blueprint 2026</div>
                        <div class="li-cta-sub">High-Value Lead Generation Form</div>
                      </div>
                      <span class="li-btn-download">Download Guide</span>
                    </div>
                  </div>

                  <!-- Floating B2B Metric Badge -->
                  <div class="canvas-float-card float-badge-metric">
                    <span class="badge-icon-wrap" style="color:var(--accent-primary); background:rgba(30,58,138,0.16);">
                      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><polyline points="16 11 18 13 22 9"></polyline></svg>
                    </span>
                    <div>
                      <div class="float-title">1.2M+ Decision Makers</div>
                      <div class="float-sub">Targeted B2B Industry Reach</div>
                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>
        </article>

        <!-- ===================================================================
             SLIDE 03: FACEBOOK & SOCIAL MEDIA MARKETING
             =================================================================== -->
        <article class="hero-carousel-slide" data-slide-index="2" role="group" aria-roledescription="slide" aria-label="3 of 6: Facebook & Social Media Marketing">
          <div class="container hero-slide-container">
            <div class="hero-slide-grid">
              
              <!-- Left Copy -->
              <div class="hero-slide-content">
                <div class="hero-partner-pill">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                  <span>Social Media Advertising &amp; Audience Reach</span>
                </div>

                <div class="hero-supporting-kicker">Viral Brand Creative &amp; Dynamic Audience Engagement</div>

                <h2 class="hero-carousel-title">
                  Make Your Brand<br>
                  <span class="hero-accent-text">Impossible to Ignore.</span>
                </h2>

                <p class="hero-carousel-desc">
                  Build meaningful audience connections through strategic social media advertising, creative campaigns, and targeted Facebook promotions that help your business reach more potential customers.
                </p>

                <div class="hero-service-chips">
                  <a href="services/facebook-boosting.html" class="service-chip">Facebook Boosting</a>
                  <span class="service-chip">Social Media Advertising</span>
                  <span class="service-chip">Campaign Creative Design</span>
                  <span class="service-chip">Audience Engagement</span>
                </div>

                <div class="hero-carousel-ctas">
                  <a href="services/facebook-boosting.html" class="btn btn-primary">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    <span>Grow Your Social Presence</span>
                  </a>
                  <a href="#pricing" class="btn btn-dark-pill">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    <span>View Custom Packages</span>
                  </a>
                </div>
              </div>

              <!-- Right: Smartphone Social Creative Frame & Engagement Analytics -->
              <div class="hero-slide-visual">
                <div class="visual-art-canvas visual-canvas-social">
                  <div class="canvas-ambient-backdrop"></div>

                  <!-- Smartphone Device Mockup with Social Post -->
                  <div class="social-phone-frame">
                    <div class="phone-dynamic-island"></div>
                    <div class="phone-social-feed">
                      <div class="feed-author-row">
                        <img src="images/resource/logo-1.png" alt="Giga" class="feed-author-avatar">
                        <div class="feed-author-meta">
                          <div class="author-name">Giga Digital Agency <span class="verified-blue">✓</span></div>
                          <div class="author-sub">Sponsored &bull; High-Impact Campaign</div>
                        </div>
                        <span class="feed-more">•••</span>
                      </div>
                      <div class="feed-creative-image">
                        <img src="images/resource/why-choose-one-img-2.jpg" alt="Campaign Post Visual">
                        <div class="feed-creative-overlay">
                          <span class="promo-tag">Featured Promotion</span>
                          <div class="promo-headline">Accelerate Your Market Reach</div>
                        </div>
                      </div>
                      <div class="feed-action-bar">
                        <div class="feed-actions-left">
                          <span class="action-icon heart">♥ 18.4K</span>
                          <span class="action-icon comment">💬 1,280</span>
                          <span class="action-icon share">↗ 480</span>
                        </div>
                        <span class="feed-cta-pill">Learn More</span>
                      </div>
                    </div>
                  </div>

                  <!-- Floating Social Analytics Metric Card -->
                  <div class="canvas-float-card float-badge-social-kpi">
                    <div class="kpi-ring-stat">
                      <div class="kpi-radial-text">+320%</div>
                      <div>
                        <div class="float-title">Engagement Surge</div>
                        <div class="float-sub">840K+ Monthly Reach</div>
                      </div>
                    </div>
                  </div>

                  <div class="canvas-float-card float-badge-virality">
                    <span class="badge-icon-wrap" style="color:var(--accent-violet); background:rgba(124,58,237,0.16);">
                      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                    </span>
                    <div>
                      <div class="float-title">High-Converting Creatives</div>
                      <div class="float-sub">Dynamic Copy &amp; Visual Testing</div>
                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>
        </article>

        <!-- ===================================================================
             SLIDE 04: BRANDING & CREATIVE DESIGN
             =================================================================== -->
        <article class="hero-carousel-slide" data-slide-index="3" role="group" aria-roledescription="slide" aria-label="4 of 6: Branding & Creative Design">
          <div class="container hero-slide-container">
            <div class="hero-slide-grid">
              
              <!-- Left Copy -->
              <div class="hero-slide-content">
                <div class="hero-partner-pill">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                  <span>Brand Identity &amp; Creative Studio</span>
                </div>

                <div class="hero-supporting-kicker">Distinctive Visual Architecture &amp; Corporate Communication</div>

                <h2 class="hero-carousel-title">
                  Turn Your Ideas Into<br>
                  <span class="hero-accent-text">Powerful Brand Experiences.</span>
                </h2>

                <p class="hero-carousel-desc">
                  Create a distinctive brand identity through professional design, engaging promotional visuals, and creative content that makes your business memorable.
                </p>

                <div class="hero-service-chips">
                  <a href="services/branding-design.html" class="service-chip">Branding &amp; Design</a>
                  <a href="services/company-profile-design.html" class="service-chip">Company Profile Design</a>
                  <a href="services/banner-poster-design.html" class="service-chip">Banner &amp; Poster Design</a>
                  <span class="service-chip">Creative Content</span>
                </div>

                <div class="hero-carousel-ctas">
                  <a href="services/branding-design.html" class="btn btn-primary">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    <span>Explore Creative Services</span>
                  </a>
                  <a href="services/company-profile-design.html" class="btn btn-dark-pill">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    <span>Company Profile Design</span>
                  </a>
                </div>
              </div>

              <!-- Right: Editorial Brand System Studio Artboard -->
              <div class="hero-slide-visual">
                <div class="visual-art-canvas visual-canvas-brandstudio">
                  <div class="canvas-ambient-backdrop"></div>

                  <!-- Company Profile Presentation Mockup -->
                  <div class="profile-book-mockup">
                    <div class="book-spine"></div>
                    <div class="book-cover">
                      <div class="book-cover-header">
                        <span class="brand-book-tag">Brand Identity Guidelines</span>
                        <span class="brand-book-ver">Vol. 2026</span>
                      </div>
                      <div class="book-logo-display">
                        <img src="images/resource/logo-1.png" alt="Brand Logo Mockup">
                      </div>
                      <div class="book-brand-name">GIGA DIGITAL AGENCY</div>
                      <p class="book-brand-sub">Design Systems, Typography &amp; Identity Architecture</p>
                      <div class="book-color-palette">
                        <span class="swatch-pill" style="background:#3eb649;" title="Emerald"></span>
                        <span class="swatch-pill" style="background:#1d4ed8;" title="Royal Blue"></span>
                        <span class="swatch-pill" style="background:#0b172a;" title="Midnight"></span>
                        <span class="swatch-pill" style="background:#f59e0b;" title="Amber"></span>
                        <span class="swatch-pill" style="background:#7c3aed;" title="Purple"></span>
                      </div>
                    </div>
                  </div>

                  <!-- Typography Specimen Card -->
                  <div class="canvas-float-card float-badge-type">
                    <div class="type-specimen">
                      <span class="type-letter">Aa</span>
                      <div>
                        <div class="float-title">Plus Jakarta Sans</div>
                        <div class="float-sub">Editorial &bull; Modern &bull; Geometric</div>
                      </div>
                    </div>
                  </div>

                  <div class="canvas-float-card float-badge-creative-kpi">
                    <span class="badge-icon-wrap" style="color:var(--accent-amber); background:rgba(245,158,11,0.16);">
                      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
                    </span>
                    <div>
                      <div class="float-title">300+ Brand Systems</div>
                      <div class="float-sub">Print &amp; Digital Ready Files</div>
                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>
        </article>

        <!-- ===================================================================
             SLIDE 05: WEB DESIGN & DEVELOPMENT
             =================================================================== -->
        <article class="hero-carousel-slide" data-slide-index="4" role="group" aria-roledescription="slide" aria-label="5 of 6: Web Design & Development">
          <div class="container hero-slide-container">
            <div class="hero-slide-grid">
              
              <!-- Left Copy -->
              <div class="hero-slide-content">
                <div class="hero-partner-pill">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
                  <span>Modern Web Engineering &amp; Architecture</span>
                </div>

                <div class="hero-supporting-kicker">High-Performance User Experience &amp; Mobile-First Code</div>

                <h2 class="hero-carousel-title">
                  Build a Digital Presence<br>
                  <span class="hero-accent-text">That Works for You.</span>
                </h2>

                <p class="hero-carousel-desc">
                  Transform your business vision into a professional online experience with modern, responsive, user-friendly website design and development.
                </p>

                <div class="hero-service-chips">
                  <a href="services/web-design-development.html" class="service-chip">Website Design</a>
                  <span class="service-chip">Website Development</span>
                  <span class="service-chip">Responsive Layouts</span>
                  <span class="service-chip">Business Websites</span>
                </div>

                <div class="hero-carousel-ctas">
                  <a href="services/web-design-development.html" class="btn btn-primary">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    <span>Explore Web Solutions</span>
                  </a>
                  <a href="#process" class="btn btn-dark-pill">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    <span>Explore Our Process</span>
                  </a>
                </div>
              </div>

              <!-- Right: Desktop Glass Browser + Performance Badges -->
              <div class="hero-slide-visual">
                <div class="visual-art-canvas visual-canvas-web">
                  <div class="canvas-ambient-backdrop"></div>

                  <!-- Desktop Glass Browser Window -->
                  <div class="web-browser-window">
                    <div class="browser-header-row">
                      <div class="browser-dots">
                        <span class="b-dot b-red"></span>
                        <span class="b-dot b-yellow"></span>
                        <span class="b-dot b-green"></span>
                      </div>
                      <div class="browser-address-bar">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                        <span>https://gigadigitalagency.com</span>
                      </div>
                      <span class="browser-refresh">↻</span>
                    </div>
                    <div class="browser-viewport-display">
                      <img src="images/resource/why-choose-one-img-3.jpg" alt="Responsive Website Preview">
                      <div class="browser-overlay-content">
                        <div class="mini-agency-header">
                          <img src="images/resource/logo-1.png" alt="Giga Logo" style="height:16px;">
                          <span class="tech-pill-live">Fast SSR &bull; 99.9% Uptime</span>
                        </div>
                        <div class="mini-agency-hero-text">
                          <h3>High-Performance Web Platforms</h3>
                          <p>Lightning-fast load speed, clean semantic code, and conversion-focused UX architecture.</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- PageSpeed Score Circle Badge -->
                  <div class="canvas-float-card float-badge-pagespeed">
                    <div class="pagespeed-score-circle">100</div>
                    <div>
                      <div class="float-title">100/100 Core Web Vitals</div>
                      <div class="float-sub">Optimized Speed &amp; SEO</div>
                    </div>
                  </div>

                  <div class="canvas-float-card float-badge-responsive">
                    <span class="badge-icon-wrap" style="color:var(--accent-primary); background:rgba(62,182,73,0.16);">
                      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg>
                    </span>
                    <div>
                      <div class="float-title">Mobile-First Design</div>
                      <div class="float-sub">Fluid Across All Devices</div>
                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>
        </article>

        <!-- ===================================================================
             SLIDE 06: VIDEO EDITING & CONTENT MARKETING
             =================================================================== -->
        <article class="hero-carousel-slide" data-slide-index="5" role="group" aria-roledescription="slide" aria-label="6 of 6: Video Editing & Content Marketing">
          <div class="container hero-slide-container">
            <div class="hero-slide-grid">
              
              <!-- Left Copy -->
              <div class="hero-slide-content">
                <div class="hero-partner-pill">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg>
                  <span>Cinematic Motion &amp; Content Marketing</span>
                </div>

                <div class="hero-supporting-kicker">Multi-Platform Video Storytelling &amp; Audience Retention</div>

                <h2 class="hero-carousel-title">
                  Create Content That<br>
                  <span class="hero-accent-text">Captures Attention.</span>
                </h2>

                <p class="hero-carousel-desc">
                  Bring your brand stories to life through engaging video editing and strategic content marketing designed to inform, connect, and inspire your audience.
                </p>

                <div class="hero-service-chips">
                  <a href="services/video-editing.html" class="service-chip">Professional Video Editing</a>
                  <span class="service-chip">Promotional Videos</span>
                  <span class="service-chip">Social Media Content</span>
                  <a href="services/content-marketing.html" class="service-chip">Content Marketing</a>
                </div>

                <div class="hero-carousel-ctas">
                  <a href="services/content-marketing.html" class="btn btn-primary">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    <span>Explore Content Solutions</span>
                  </a>
                  <a href="services/video-editing.html" class="btn btn-dark-pill">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    <span>Video Editing Services</span>
                  </a>
                </div>
              </div>

              <!-- Right: Video Editing Studio Timeline & Visual Monitor -->
              <div class="hero-slide-visual">
                <div class="visual-art-canvas visual-canvas-video">
                  <div class="canvas-ambient-backdrop"></div>

                  <!-- Video Studio Monitor & Multi-Track Timeline -->
                  <div class="video-studio-card">
                    <div class="studio-header">
                      <span class="studio-badge-rec">● 4K PRORES 60FPS</span>
                      <span class="studio-timecode">00:02:48:15</span>
                    </div>
                    <!-- Video Monitor Screen -->
                    <div class="studio-screen-preview">
                      <img src="images/resource/mint-vortex.jpg" alt="Video Monitor Preview">
                      <div class="studio-play-circle">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg>
                      </div>
                      <div class="studio-color-grade-pill">Color Grade: Film LUT 04</div>
                    </div>
                    <!-- Timeline Tracks -->
                    <div class="studio-timeline-tracks">
                      <div class="timeline-track-row v-track">
                        <span class="t-label">V1</span>
                        <div class="t-clip c-blue" style="width:34%;">Intro Hook</div>
                        <div class="t-clip c-purple" style="width:42%;">Brand Story</div>
                        <div class="t-clip c-green" style="width:20%;">CTA Outro</div>
                      </div>
                      <div class="timeline-track-row a-track">
                        <span class="t-label">A1</span>
                        <div class="t-audio-wave" style="width:100%;">
                          <svg viewBox="0 0 300 16" width="100%" height="16" fill="var(--accent-primary)" opacity="0.85">
                            <rect x="0" y="4" width="3" height="8" rx="1"/>
                            <rect x="6" y="2" width="3" height="12" rx="1"/>
                            <rect x="12" y="5" width="3" height="6" rx="1"/>
                            <rect x="18" y="1" width="3" height="14" rx="1"/>
                            <rect x="24" y="3" width="3" height="10" rx="1"/>
                            <rect x="30" y="6" width="3" height="4" rx="1"/>
                            <rect x="36" y="2" width="3" height="12" rx="1"/>
                            <rect x="42" y="1" width="3" height="14" rx="1"/>
                            <rect x="48" y="4" width="3" height="8" rx="1"/>
                            <rect x="54" y="2" width="3" height="12" rx="1"/>
                            <rect x="60" y="0" width="3" height="16" rx="1"/>
                            <rect x="66" y="3" width="3" height="10" rx="1"/>
                            <rect x="72" y="5" width="3" height="6" rx="1"/>
                            <rect x="78" y="2" width="3" height="12" rx="1"/>
                            <rect x="84" y="4" width="3" height="8" rx="1"/>
                            <rect x="90" y="1" width="3" height="14" rx="1"/>
                            <rect x="96" y="2" width="3" height="12" rx="1"/>
                            <rect x="102" y="6" width="3" height="4" rx="1"/>
                            <rect x="108" y="3" width="3" height="10" rx="1"/>
                            <rect x="114" y="1" width="3" height="14" rx="1"/>
                            <rect x="120" y="4" width="3" height="8" rx="1"/>
                            <rect x="126" y="2" width="3" height="12" rx="1"/>
                            <rect x="132" y="5" width="3" height="6" rx="1"/>
                            <rect x="138" y="0" width="3" height="16" rx="1"/>
                            <rect x="144" y="2" width="3" height="12" rx="1"/>
                            <rect x="150" y="4" width="3" height="8" rx="1"/>
                            <rect x="156" y="1" width="3" height="14" rx="1"/>
                            <rect x="162" y="3" width="3" height="10" rx="1"/>
                            <rect x="168" y="5" width="3" height="6" rx="1"/>
                            <rect x="174" y="2" width="3" height="12" rx="1"/>
                            <rect x="180" y="4" width="3" height="8" rx="1"/>
                            <rect x="186" y="0" width="3" height="16" rx="1"/>
                            <rect x="192" y="2" width="3" height="12" rx="1"/>
                            <rect x="198" y="5" width="3" height="6" rx="1"/>
                            <rect x="204" y="3" width="3" height="10" rx="1"/>
                            <rect x="210" y="1" width="3" height="14" rx="1"/>
                            <rect x="216" y="4" width="3" height="8" rx="1"/>
                            <rect x="222" y="2" width="3" height="12" rx="1"/>
                            <rect x="228" y="6" width="3" height="4" rx="1"/>
                            <rect x="234" y="1" width="3" height="14" rx="1"/>
                            <rect x="240" y="3" width="3" height="10" rx="1"/>
                            <rect x="246" y="5" width="3" height="6" rx="1"/>
                            <rect x="252" y="2" width="3" height="12" rx="1"/>
                            <rect x="258" y="0" width="3" height="16" rx="1"/>
                            <rect x="264" y="4" width="3" height="8" rx="1"/>
                            <rect x="270" y="2" width="3" height="12" rx="1"/>
                            <rect x="276" y="5" width="3" height="6" rx="1"/>
                            <rect x="282" y="3" width="3" height="10" rx="1"/>
                            <rect x="288" y="1" width="3" height="14" rx="1"/>
                            <rect x="294" y="4" width="3" height="8" rx="1"/>
                          </svg>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Floating Retention Metric Badge -->
                  <div class="canvas-float-card float-badge-retention">
                    <span class="badge-icon-wrap" style="color:var(--accent-cyan); background:rgba(6,182,212,0.16);">
                      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg>
                    </span>
                    <div>
                      <div class="float-title">+450% Retention Surge</div>
                      <div class="float-sub">Short-Form Reels &amp; Corporate 4K</div>
                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>
        </article>

      </div>
    </div>

    <!-- Carousel Controls Bar (Docked Below Slides) -->
    <div class="container carousel-controls-container">
      <div class="carousel-controls-bar">
        
        <!-- Previous Arrow -->
        <button class="carousel-nav-btn prev-btn" id="heroCarouselPrev" aria-label="Previous Slide" title="Previous Slide">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 18 9 12 15 6"></polyline></svg>
        </button>

        <!-- Pagination Indicators with Mini Labels & Progress Pill -->
        <div class="carousel-pagination" id="heroCarouselPagination" role="tablist" aria-label="Slide Selector">
          <button class="hero-dot active" data-slide="0" role="tab" aria-selected="true" aria-label="Slide 1: Agency Overview">
            <span class="dot-num">01</span>
            <span class="dot-title">Agency Overview</span>
          </button>
          <button class="hero-dot" data-slide="1" role="tab" aria-selected="false" aria-label="Slide 2: Search & B2B Ads">
            <span class="dot-num">02</span>
            <span class="dot-title">Search &amp; B2B Ads</span>
          </button>
          <button class="hero-dot" data-slide="2" role="tab" aria-selected="false" aria-label="Slide 3: Social Marketing">
            <span class="dot-num">03</span>
            <span class="dot-title">Social Marketing</span>
          </button>
          <button class="hero-dot" data-slide="3" role="tab" aria-selected="false" aria-label="Slide 4: Branding & Design">
            <span class="dot-num">04</span>
            <span class="dot-title">Branding &amp; Design</span>
          </button>
          <button class="hero-dot" data-slide="4" role="tab" aria-selected="false" aria-label="Slide 5: Web Engineering">
            <span class="dot-num">05</span>
            <span class="dot-title">Web &amp; Engineering</span>
          </button>
          <button class="hero-dot" data-slide="5" role="tab" aria-selected="false" aria-label="Slide 6: Video & Content">
            <span class="dot-num">06</span>
            <span class="dot-title">Video &amp; Content</span>
          </button>
        </div>

        <!-- Next Arrow -->
        <button class="carousel-nav-btn next-btn" id="heroCarouselNext" aria-label="Next Slide" title="Next Slide">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
        </button>

        <!-- Slide Numeric Counter -->
        <div class="carousel-counter" id="heroCarouselCounter" aria-live="polite">
          <span class="current-slide">01</span><span class="counter-sep">/</span><span class="total-slides">06</span>
        </div>

      </div>
    </div>

    <!-- 6-Metric Stats Ticker Bar (Zaman IT Bottom Bar) -->
    <div class="zaman-stats-strip">
      <div class="container">
        <div class="zaman-stats-grid">
          <div class="zaman-stat-card">
            <div class="zaman-stat-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
            </div>
            <div>
              <div class="zaman-stat-number">7000+</div>
              <div class="zaman-stat-title">Completed Projects</div>
            </div>
          </div>
          <div class="zaman-stat-card">
            <div class="zaman-stat-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
            </div>
            <div>
              <div class="zaman-stat-number">40+</div>
              <div class="zaman-stat-title">Team Members</div>
            </div>
          </div>
          <div class="zaman-stat-card">
            <div class="zaman-stat-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
            </div>
            <div>
              <div class="zaman-stat-number">22K+</div>
              <div class="zaman-stat-title">Active Clients</div>
            </div>
          </div>
          <div class="zaman-stat-card">
            <div class="zaman-stat-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
            </div>
            <div>
              <div class="zaman-stat-number">10+</div>
              <div class="zaman-stat-title">Years Experience</div>
            </div>
          </div>
          <div class="zaman-stat-card">
            <div class="zaman-stat-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
            </div>
            <div>
              <div class="zaman-stat-number">75+</div>
              <div class="zaman-stat-title">Awards &amp; Honors</div>
            </div>
          </div>
          <div class="zaman-stat-card">
            <div class="zaman-stat-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
            </div>
            <div>
              <div class="zaman-stat-number">4</div>
              <div class="zaman-stat-title">Service Hubs</div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

  <!-- =========================================================================
       4. TRUSTED BY OUR CLIENTS (Official Brand Partners from gigadigitalagency.com)
       ========================================================================= -->
  <section class="brands-section" aria-label="Trusted Clients">
    <div class="container">
      <div class="brands-title-tag">
        Trusted by Leading Enterprises, Startups & Retail Brands in Bangladesh and Abroad
      </div>
      <div class="brands-logo-row">
        <div class="brand-item-box" title="Giga Digital Agency Client Partner">
          <img src="images/brand/brand-1-1.png" alt="Client Brand 1">
        </div>
        <div class="brand-item-box" title="Giga Digital Agency Client Partner">
          <img src="images/brand/brand-1-2.png" alt="Client Brand 2">
        </div>
        <div class="brand-item-box" title="Giga Digital Agency Client Partner">
          <img src="images/brand/brand-1-3.png" alt="Client Brand 3">
        </div>
        <div class="brand-item-box" title="Giga Digital Agency Client Partner">
          <img src="images/brand/brand-1-4.png" alt="Client Brand 4">
        </div>
        <div class="brand-item-box" title="Giga Digital Agency Client Partner">
          <img src="images/brand/brand-1-5.png" alt="Client Brand 5">
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       5. ABOUT US & WHY CHOOSE US
       ========================================================================= -->
  <section class="section" id="about">
    <div class="container">
      
      <div class="section-header text-center">
        <span class="section-tag">Brand Positioning</span>
        <h2 class="section-title">
          YOUR GROWTH. <span class="gradient-text">OUR DIGITAL STRATEGY</span>.
        </h2>
        <p class="section-desc" style="max-width:880px; margin:0 auto 20px;">
          Giga Digital Agency is a professional, results-driven digital marketing and creative solutions agency dedicated to helping businesses establish a powerful online presence, connect with their target audiences, and achieve sustainable growth.
        </p>
        <p style="max-width:880px; margin:0 auto; color:var(--text-main); font-size:0.96rem; line-height:1.7;">
          We work with startups, small businesses, growing enterprises, and established brands to deliver customized digital solutions aligned with their unique goals. By combining strategic thinking, creative execution, and data-driven marketing, we help businesses strengthen their brand identity, generate qualified leads, improve customer engagement, and increase sales.
        </p>
      </div>

      <!-- Why Choose Giga Digital Agency (5 Feature Cards) -->
      <div style="margin-top:55px;">
        <div class="text-center" style="margin-bottom:30px;">
          <span class="section-tag" style="background:var(--badge-bg); color:var(--accent-primary); border-color:var(--border-glow);">Agency Values & Execution</span>
          <h3 style="font-size:clamp(1.6rem, 3vw, 2.2rem); font-weight:900; color:var(--text-heading); margin-top:10px;">
            Why Businesses Choose Giga Digital Agency
          </h3>
          <p style="color:var(--text-muted); max-width:720px; margin:8px auto 0; font-size:0.95rem; line-height:1.6;">
            We believe successful digital growth begins with understanding your business. Our approach combines strategic planning, creative execution, and continuous improvement to deliver solutions that align with your goals.
          </p>
        </div>

        <div class="why-choose-cards-grid">
          <div class="why-feature-card">
            <span class="why-feature-num">01</span>
            <h4 class="why-feature-title">Data-Driven Strategies</h4>
            <p class="why-feature-desc">We use research, audience insights, and performance data to guide marketing decisions and develop strategies aligned with business objectives.</p>
          </div>
          <div class="why-feature-card">
            <span class="why-feature-num">02</span>
            <h4 class="why-feature-title">Dedicated Expertise</h4>
            <p class="why-feature-desc">Our team brings together creative and technical capabilities to support different aspects of your digital presence.</p>
          </div>
          <div class="why-feature-card">
            <span class="why-feature-num">03</span>
            <h4 class="why-feature-title">Client-Centered Approach</h4>
            <p class="why-feature-desc">Every business has unique challenges. We focus on understanding your requirements and developing solutions tailored to your specific needs.</p>
          </div>
          <div class="why-feature-card">
            <span class="why-feature-num">04</span>
            <h4 class="why-feature-title">Transparent Communication</h4>
            <p class="why-feature-desc">We value clear communication, progress updates, and performance reporting so clients can better understand their projects and campaigns.</p>
          </div>
          <div class="why-feature-card">
            <span class="why-feature-num">05</span>
            <h4 class="why-feature-title">Long-Term Growth Focus</h4>
            <p class="why-feature-desc">We aim to build lasting partnerships by continuously identifying opportunities to strengthen brand visibility, improve performance, and support sustainable growth.</p>
          </div>
        </div>
      </div>

      <!-- About Us Sub-Portion Navigation Tabs -->
      <div class="about-nav-tabs" style="margin-top:60px;">
        <button class="about-tab-btn active" data-tab="story">Our Story</button>
        <button class="about-tab-btn" data-tab="profile">Company Profile</button>
        <button class="about-tab-btn" data-tab="founder">Founder &amp; CEO</button>
        <button class="about-tab-btn" data-tab="team">Our Team</button>
        <button class="about-tab-btn" data-tab="gallery">Photo Galleries</button>
        <button class="about-tab-btn" data-tab="clients">Our Clients &amp; Recognition</button>
      </div>

      <!-- PANEL 1: Our Story -->
      <div class="about-panel active" data-panel="story">
        <div class="about-grid-two">
          <div>
            <span class="section-tag" style="background:rgba(18,115,207,0.15); color:var(--accent-primary); border-color:var(--border-glow);">Since 2014</span>
            <h3 style="font-size:1.85rem; font-weight:800; color:var(--text-heading); margin:10px 0 16px;">
              A Decade of Turning Digital Ambitions Into Market Realities
            </h3>
            <p style="color:var(--text-main); font-size:0.95rem; line-height:1.7; margin-bottom:16px;">
              Giga Digital Agency was founded in Lalmatia, Dhaka by practicing software and marketing engineers who recognized a critical flaw in traditional agencies: creative designers didn't understand conversion science, and developers rarely cared about user experience or sales funnels.
            </p>
            <p style="color:var(--text-muted); font-size:0.92rem; line-height:1.7; margin-bottom:24px;">
              We set out to build a unified studio where world-class Figma UI/UX, ultra-clean web code, and aggressive Facebook & YouTube ad boosting live under one roof. Today, with over 7,000 project deliverables completed across Bangladesh and global markets, we stand as one of the most trusted digital execution teams in the nation.
            </p>
            <div style="display:grid; grid-template-columns:1fr 1fr; gap:16px;">
              <div style="background:var(--bg-card); border:1px solid var(--border-subtle); padding:16px; border-radius:var(--radius-sm);">
                <div style="font-size:1.25rem; font-weight:900; color:var(--accent-green); margin-bottom:4px;">7,000+</div>
                <div style="font-size:0.82rem; color:var(--text-muted);">Completed Client Deliverables</div>
              </div>
              <div style="background:var(--bg-card); border:1px solid var(--border-subtle); padding:16px; border-radius:var(--radius-sm);">
                <div style="font-size:1.25rem; font-weight:900; color:var(--accent-primary); margin-bottom:4px;">10+ Years</div>
                <div style="font-size:0.82rem; color:var(--text-muted);">Proven Industry Longevity</div>
              </div>
            </div>
          </div>
          <div class="about-photo-wrap">
            <img src="images/resource/about-one-img-1.jpg" alt="Giga Digital Agency Team Workspace">
          </div>
        </div>
      </div>

      <!-- PANEL 2: Company Profile -->
      <div class="about-panel" data-panel="profile">
        <div class="about-grid-two">
          <div class="about-photo-wrap">
            <img src="images/resource/why-choose-one-img.jpg" alt="Company Profile and Technology Lab">
          </div>
          <div>
            <span class="section-tag" style="background:rgba(14,165,233,0.15); color:var(--accent-cyan); border-color:var(--border-subtle);">Corporate Profile</span>
            <h3 style="font-size:1.85rem; font-weight:800; color:var(--text-heading); margin:10px 0 16px;">
              Engineered For Modern Business Scale
            </h3>
            <p style="color:var(--text-main); font-size:0.95rem; line-height:1.7; margin-bottom:14px;">
              <strong>Giga Digital Agency</strong> is a formally registered digital agency and technology consultancy (Trade Registry: GDA-ICT-BD-2016), headquartered in Lalmatia, Dhaka.
            </p>
            <ul class="service-features-list" style="margin-bottom:22px;">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> <strong>Full-Stack Architecture:</strong> Clean PHP, Node.js, Next.js, and WordPress solutions built without bloated page builders.</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> <strong>Fintech Integrations:</strong> Official API integration for bKash Merchant, Nagad, SSLCommerz, and Pathao Courier.</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> <strong>Performance Marketing:</strong> Server-side Meta CAPI tracking, YouTube in-stream ad setups, and Google Search top rankings.</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> <strong>Enterprise SLAs:</strong> 99.9% uptime monitoring, automated cloud backups, and dedicated account managers.</li>
            </ul>
            <a href="#contact" class="btn btn-primary">Request Corporate Profile PDF</a>
          </div>
        </div>
      </div>

      <!-- PANEL 3: Founder & CEO -->
      <div class="about-panel" data-panel="founder">
        <div class="about-grid-two">
          <div class="about-photo-wrap" style="text-align:center;">
            <img src="images/team/team-1-1.jpg" alt="Engr. Md. Ashikur Rahman — Founder & CEO" style="height:420px; object-fit:cover; object-position:top;">
          </div>
          <div>
            <span class="section-tag" style="background:rgba(251,191,36,0.15); color:#fbbf24; border-color:rgba(251,191,36,0.3);">Executive Leadership</span>
            <h3 style="font-size:1.85rem; font-weight:900; color:var(--text-heading); margin:10px 0 6px;">
              Engr. Md. Ashikur Rahman
            </h3>
            <p style="font-size:1rem; color:var(--accent-primary); font-weight:800; margin-bottom:18px;">Founder & Chief Executive Officer</p>
            <blockquote style="border-left:3px solid var(--accent-primary); padding-left:18px; margin:0 0 20px; font-style:italic; color:var(--text-main); font-size:1.02rem; line-height:1.7;">
              "In today's hyper-competitive digital landscape, a website cannot merely be an online brochure, and digital advertising cannot simply burn cash on impressions without sales. At Giga Digital Agency, every pixel, every line of code, and every boosted campaign is engineered with commercial accountability to generate verifiable revenue for our clients."
            </blockquote>
            <p style="color:var(--text-muted); font-size:0.90rem; line-height:1.65; margin-bottom:24px;">
              With over a decade of engineering leadership in Bangladesh's ICT ecosystem, Engr. Md. Ashikur Rahman has steered Giga Digital Agency from its early inception to a nationally accredited partner servicing retail giants, healthcare providers, and high-growth digital ventures.
            </p>
            <div style="display:flex; gap:12px; flex-wrap:wrap;">
              <a href="#contact" class="btn btn-primary">Schedule Consultation With CEO</a>
              <a href="https://wa.me/8801860422185?text=Hello%20Giga%20Digital%20Agency,%20I%20would%20like%20to%20consult%20with%20the%20CEO." target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" style="display:inline-block; vertical-align:middle; margin-right:6px;"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.275.072.376-.044c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.1.824zm-3.423-14.416c-6.627 0-12 5.373-12 12 0 2.154.57 4.175 1.564 5.918l-1.564 5.71 5.86-1.536c1.678.914 3.603 1.408 5.64 1.408 6.627 0 12-5.373 12-12s-5.373-12-12-12z"/></svg>
                <span>WhatsApp Direct</span>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 4: Our Team -->
      <div class="about-panel" data-panel="team">
        <div style="text-align:center; max-width:680px; margin:0 auto 30px;">
          <h3 style="font-size:1.8rem; font-weight:800; color:var(--text-heading); margin-bottom:8px;">
            The Specialists Driving Your Success
          </h3>
          <p style="font-size:0.92rem; color:var(--text-muted);">
            Direct access to dedicated engineering leads, marketing specialists, and designers — verified real professionals with proven track records.
          </p>
        </div>

        <div class="team-grid">
          <!-- 1: Founder & CEO -->
          <div class="team-card">
            <div class="team-img-wrap"><img src="images/team/team-1-1.jpg" alt="Engr. Md. Ashikur Rahman"></div>
            <div class="team-info">
              <h4 class="team-name">Engr. Md. Ashikur Rahman</h4>
              <div class="team-role">Founder & CEO</div>
            </div>
          </div>
          <!-- 2: CTO -->
          <div class="team-card">
            <div class="team-img-wrap"><img src="images/team/team-1-2.jpg" alt="Engr. Md. Hasinur Rahman"></div>
            <div class="team-info">
              <h4 class="team-name">Engr. Md. Hasinur Rahman</h4>
              <div class="team-role">Chief Technology Officer</div>
            </div>
          </div>
          <!-- 3: Senior Software Engineer -->
          <div class="team-card">
            <div class="team-img-wrap"><img src="images/team/team-1-3.jpg" alt="Engr. Md. Al Amin"></div>
            <div class="team-info">
              <h4 class="team-name">Engr. Md. Al Amin</h4>
              <div class="team-role">Senior Software Engineer</div>
            </div>
          </div>
          <!-- 4: Digital Marketing Specialist -->
          <div class="team-card">
            <div class="team-img-wrap"><img src="images/team/team-1-4.jpg" alt="Jannatul Nayem"></div>
            <div class="team-info">
              <h4 class="team-name">Jannatul Nayem</h4>
              <div class="team-role">Digital Marketing Specialist</div>
            </div>
          </div>
          <!-- 5: Senior Graphics Designer -->
          <div class="team-card">
            <div class="team-img-wrap"><img src="images/team/team-1-5.jpg" alt="Engr. Md. Mehedi Hasan"></div>
            <div class="team-info">
              <h4 class="team-name">Engr. Md. Mehedi Hasan</h4>
              <div class="team-role">Senior Graphics Designer</div>
            </div>
          </div>
          <!-- 6: Deputy General Manager -->
          <div class="team-card">
            <div class="team-img-wrap"><img src="images/team/team-1-6.jpg" alt="Md. Rezaul Karim"></div>
            <div class="team-info">
              <h4 class="team-name">Md. Rezaul Karim</h4>
              <div class="team-role">Deputy General Manager</div>
            </div>
          </div>
          <!-- 7: Digital Marketing Specialist -->
          <div class="team-card">
            <div class="team-img-wrap"><img src="images/team/team-1-7.jpg" alt="Md. Nazmus Sakib"></div>
            <div class="team-info">
              <h4 class="team-name">Md. Nazmus Sakib</h4>
              <div class="team-role">Digital Marketing Specialist</div>
            </div>
          </div>
          <!-- 8: App Developer -->
          <div class="team-card">
            <div class="team-img-wrap"><img src="images/team/team-1-8.jpg" alt="Kobir Hossen"></div>
            <div class="team-info">
              <h4 class="team-name">Kobir Hossen</h4>
              <div class="team-role">App Developer</div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 5: Photo Galleries -->
      <div class="about-panel" data-panel="gallery">
        <div style="text-align:center; max-width:680px; margin:0 auto 30px;">
          <h3 style="font-size:1.8rem; font-weight:800; color:var(--text-heading); margin-bottom:8px;">
            Inside Giga Digital Agency
          </h3>
          <p style="font-size:0.92rem; color:var(--text-muted);">
            An authentic glimpse into our daily engineering sprints, design critique workshops, and strategy sessions at our Lalmatia headquarters.
          </p>
        </div>

        <div class="gallery-grid">
          <div class="gallery-item" title="Agile Sprint & Strategy Planning">
            <img src="images/resource/about-one-img-1.jpg" alt="Team Sprint Session">
          </div>
          <div class="gallery-item" title="UI/UX & Brand Identity Lab">
            <img src="images/resource/about-one-img-2.jpg" alt="Design Lab">
          </div>
          <div class="gallery-item" title="Software Architecture & Engineering">
            <img src="images/resource/why-choose-one-img.jpg" alt="Engineering Hub">
          </div>
          <div class="gallery-item" title="Digital Marketing & Ad Optimization">
            <img src="images/resource/why-choose-one-img-2.jpg" alt="Performance Marketing Desk">
          </div>
          <div class="gallery-item" title="Client Discovery & Consultation">
            <img src="images/resource/why-choose-one-img-3.jpg" alt="Client Strategy">
          </div>
          <div class="gallery-item" title="Creative Workshop & Prototyping">
            <img src="images/resource/faq-one-img.jpg" alt="Creative Workshop">
          </div>
        </div>
      </div>

      <!-- PANEL 6: Our Clients & Recognition -->
      <div class="about-panel" data-panel="clients">
        <div class="about-grid-two">
          <div>
            <span class="section-tag" style="background:rgba(34,180,85,0.15); color:var(--accent-green); border-color:var(--border-green);">Validated Impact</span>
            <h3 style="font-size:1.85rem; font-weight:800; color:var(--text-heading); margin:10px 0 16px;">
              Trusted By Growing Brands & Recognized Nationally
            </h3>
            <p style="color:var(--text-main); font-size:0.95rem; line-height:1.7; margin-bottom:18px;">
              From local retail powerhouses in Bangladesh to venture-backed tech startups, our clients rely on Giga Digital Agency for stable digital execution and compounding ROI.
            </p>
            <div class="brands-logo-row" style="justify-content:flex-start; margin-bottom:24px;">
              <div class="brand-item-box"><img src="images/brand/brand-1-1.png" alt="Client 1"></div>
              <div class="brand-item-box"><img src="images/brand/brand-1-2.png" alt="Client 2"></div>
              <div class="brand-item-box"><img src="images/brand/brand-1-3.png" alt="Client 3"></div>
              <div class="brand-item-box"><img src="images/brand/brand-1-4.png" alt="Client 4"></div>
              <div class="brand-item-box"><img src="images/brand/brand-1-5.png" alt="Client 5"></div>
            </div>
            <a href="#reviews" class="btn btn-secondary">Read 98.4% Verified Client Reviews</a>
          </div>

          <!-- 2016 National ICT Ecosystem Recognition Card -->
          <div style="background:#0f1c32; border:1px solid var(--border-medium); border-radius:var(--radius-lg); padding:36px; box-shadow:var(--shadow-md);">
            <div style="display:flex; align-items:center; gap:14px; margin-bottom:18px;">
              <div>
                <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="#fbbf24" stroke-width="2"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
              </div>
              <div>
                <span style="font-size:0.75rem; font-weight:800; color:#fbbf24; text-transform:uppercase; letter-spacing:0.08em;">Official Accreditation</span>
                <h3 style="font-size:1.35rem; font-weight:900; color:#ffffff;">2016 National ICT Recognition</h3>
              </div>
            </div>
            <p style="font-size:0.92rem; color:#cbd5e1; line-height:1.65; margin-bottom:20px;">
              Recognized as <strong>Site of the Day & Digital Innovation Partner</strong> within the Bangladesh ICT ecosystem for pioneering responsive web design, robust e-commerce architecture, and data-driven marketing.
            </p>
            <div style="display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:12px; border-top:1px solid rgba(255,255,255,0.1); padding-top:18px;">
              <span style="font-size:0.85rem; color:#94a3b8;"><strong>Accreditation Registry:</strong> GDA-ICT-BD-2016</span>
              <span class="section-tag" style="margin-bottom:0; background:rgba(251,191,36,0.15); color:#fef08a; border-color:rgba(251,191,36,0.4);">Verified Partner</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

    <!-- =========================================================================
       6. OUR 11 CORE DIGITAL SERVICES (3 Categories)
       ========================================================================= -->
  <section class="section section-alt" id="services">
    <div class="container">
      
      <div class="section-header text-center">
        <span class="section-tag">Results-Driven Solutions</span>
        <h2 class="section-title">
          OUR 11 CORE <span class="gradient-text">DIGITAL DISCIPLINES</span>
        </h2>
        <p class="section-desc">
          Structured into three specialized divisions — <strong>Growth & Advertising</strong>, <strong>Creative & Content</strong>, and <strong>Web & Technology</strong> — each engineered to deliver measurable business growth.
        </p>
      </div>

      <!-- Category Filter Tabs -->
      <div class="services-tabs-row">
        <button class="service-cat-tab active" data-category="all">All Services (11)</button>
        <button class="service-cat-tab" data-category="growth">Growth & Advertising (5)</button>
        <button class="service-cat-tab" data-category="creative">Creative & Content (5)</button>
        <button class="service-cat-tab" data-category="tech">Web & Technology (1)</button>
      </div>

      <!-- Services Cards Grid -->
      <div class="services-cards-grid">
        
        <!-- 1. LinkedIn Ads Management (Growth) -->
        <div class="service-box" data-category="growth">
          <div>
            <span class="service-cat-pill" style="background:rgba(29,78,216,0.15); color:#60a5fa; border-color:rgba(29,78,216,0.3);">Growth & Advertising</span>
            <div class="service-icon-wrap" style="color:#60a5fa;">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
            </div>
            <h3 class="service-title">LinkedIn Ads Management</h3>
            <p class="service-desc">
              Connect your business with industry professionals, business owners, decision-makers, and potential clients through strategic LinkedIn advertising campaigns.
            </p>
            <ul class="service-features-list">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Job Title, Industry & Company Targeting</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> B2B Lead Generation Forms & InMail</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Continuous Monitoring & Analytics</li>
            </ul>
          </div>
          <div style="display:flex; gap:10px; margin-top:20px;">
            <a href="services/linkedin-ads.html" class="btn btn-primary" style="flex:1; text-align:center;">Learn More &rarr;</a>
            <a href="#contact" class="btn btn-secondary" style="flex:1; text-align:center;">Inquire</a>
          </div>
        </div>

        <!-- 2. Google Ads Management (Growth) -->
        <div class="service-box" data-category="growth">
          <div>
            <span class="service-cat-pill" style="background:rgba(29,78,216,0.15); color:#60a5fa; border-color:rgba(29,78,216,0.3);">Growth & Advertising</span>
            <div class="service-icon-wrap" style="color:#60a5fa;">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polygon points="12 8 8 12 12 16 16 12 12 8"></polygon></svg>
            </div>
            <h3 class="service-title">Google Ads Management</h3>
            <p class="service-desc">
              Reach potential customers at the right moment through professionally managed Google Search, Display, Shopping, and YouTube advertising campaigns.
            </p>
            <ul class="service-features-list">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Keyword Research & High-Intent Search Ads</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> YouTube Video & Display Network Placement</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Conversion Tracking & Budget Management</li>
            </ul>
          </div>
          <div style="display:flex; gap:10px; margin-top:20px;">
            <a href="services/google-ads.html" class="btn btn-primary" style="flex:1; text-align:center;">Learn More &rarr;</a>
            <a href="#contact" class="btn btn-secondary" style="flex:1; text-align:center;">Inquire</a>
          </div>
        </div>

        <!-- 3. Facebook Boosting Service (Growth) -->
        <div class="service-box" data-category="growth">
          <div>
            <span class="service-cat-pill" style="background:rgba(244,63,94,0.15); color:#fb7185; border-color:rgba(244,63,94,0.3);">Growth & Advertising</span>
            <div class="service-icon-wrap" style="color:#f43f5e;">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
            </div>
            <h3 class="service-title">Facebook Boosting Service</h3>
            <p class="service-desc">
              Expand your Facebook presence through strategically managed boosting campaigns designed to increase content reach, engagement, and customer inquiries.
            </p>
            <ul class="service-features-list">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Audience & Demographic Interest Targeting</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Post Boosting Strategy & Budget Planning</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Engagement Tracking & Performance Reports</li>
            </ul>
          </div>
          <div style="display:flex; gap:10px; margin-top:20px;">
            <a href="services/facebook-boosting.html" class="btn btn-primary" style="flex:1; text-align:center;">Learn More &rarr;</a>
            <a href="#contact" class="btn btn-secondary" style="flex:1; text-align:center;">Inquire</a>
          </div>
        </div>

        <!-- 4. Search Engine Optimization (SEO) (Growth) -->
        <div class="service-box" data-category="growth">
          <div>
            <span class="service-cat-pill" style="background:rgba(16,185,129,0.15); color:#4ade80; border-color:rgba(16,185,129,0.3);">Growth & Advertising</span>
            <div class="service-icon-wrap" style="color:#10b981;">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
            </div>
            <h3 class="service-title">Search Engine Optimization (SEO)</h3>
            <p class="service-desc">
              Strengthen your website's organic search presence through strategic SEO practices designed to improve visibility, attract relevant visitors, and support long-term growth.
            </p>
            <ul class="service-features-list">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> On-Page & Technical SEO Audits</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Competitor Research & Content Strategy</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Local SEO & Search Ranking Monitoring</li>
            </ul>
          </div>
          <div style="display:flex; gap:10px; margin-top:20px;">
            <a href="services/seo.html" class="btn btn-primary" style="flex:1; text-align:center;">Learn More &rarr;</a>
            <a href="#contact" class="btn btn-secondary" style="flex:1; text-align:center;">Inquire</a>
          </div>
        </div>

        <!-- 5. Digital Marketing (Growth) -->
        <div class="service-box" data-category="growth">
          <div>
            <span class="service-cat-pill" style="background:rgba(29,78,216,0.15); color:#60a5fa; border-color:rgba(29,78,216,0.3);">Growth & Advertising</span>
            <div class="service-icon-wrap" style="color:#1d4ed8;">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 14 14"></polyline></svg>
            </div>
            <h3 class="service-title">Digital Marketing</h3>
            <p class="service-desc">
              Grow your business through integrated digital marketing strategies that combine advertising, search visibility, creative content, and audience engagement.
            </p>
            <ul class="service-features-list">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Integrated Multi-Channel Growth Strategy</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Cross-Platform Social Media Marketing</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Marketing Analytics & Performance Reports</li>
            </ul>
          </div>
          <div style="display:flex; gap:10px; margin-top:20px;">
            <a href="services/digital-marketing.html" class="btn btn-primary" style="flex:1; text-align:center;">Learn More &rarr;</a>
            <a href="#contact" class="btn btn-secondary" style="flex:1; text-align:center;">Inquire</a>
          </div>
        </div>

        <!-- 6. Company Profile & Business Profile Design (Creative) -->
        <div class="service-box" data-category="creative">
          <div>
            <span class="service-cat-pill" style="background:rgba(124,58,237,0.15); color:#c084fc; border-color:rgba(124,58,237,0.3);">Creative & Content</span>
            <div class="service-icon-wrap" style="color:#7c3aed;">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
            </div>
            <h3 class="service-title">Company Profile & Business Profile Design</h3>
            <p class="service-desc">
              Make a lasting impression with professionally designed company and business profiles that communicate your brand identity, services, expertise, and value.
            </p>
            <ul class="service-features-list">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Mission, Vision & Service Overviews</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Professional Infographics & Custom Layouts</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Print-Ready & Digital Interactive PDF</li>
            </ul>
          </div>
          <div style="display:flex; gap:10px; margin-top:20px;">
            <a href="services/company-profile-design.html" class="btn btn-primary" style="flex:1; text-align:center;">Learn More &rarr;</a>
            <a href="#contact" class="btn btn-secondary" style="flex:1; text-align:center;">Inquire</a>
          </div>
        </div>

        <!-- 7. Banner & Poster Design (Creative) -->
        <div class="service-box" data-category="creative">
          <div>
            <span class="service-cat-pill" style="background:rgba(124,58,237,0.15); color:#c084fc; border-color:rgba(124,58,237,0.3);">Creative & Content</span>
            <div class="service-icon-wrap" style="color:#7c3aed;">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
            </div>
            <h3 class="service-title">Banner & Poster Design</h3>
            <p class="service-desc">
              Promote your products, services, and campaigns through creative, visually engaging banner and poster designs tailored to your brand and marketing objectives.
            </p>
            <ul class="service-features-list">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Social Media & Ad Creative Design</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Event, Campaign & Product Posters</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Web Banners & Print-Ready Files</li>
            </ul>
          </div>
          <div style="display:flex; gap:10px; margin-top:20px;">
            <a href="services/banner-poster-design.html" class="btn btn-primary" style="flex:1; text-align:center;">Learn More &rarr;</a>
            <a href="#contact" class="btn btn-secondary" style="flex:1; text-align:center;">Inquire</a>
          </div>
        </div>

        <!-- 8. Content Marketing (Creative) -->
        <div class="service-box" data-category="creative">
          <div>
            <span class="service-cat-pill" style="background:rgba(124,58,237,0.15); color:#c084fc; border-color:rgba(124,58,237,0.3);">Creative & Content</span>
            <div class="service-icon-wrap" style="color:#7c3aed;">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
            </div>
            <h3 class="service-title">Content Marketing</h3>
            <p class="service-desc">
              Connect with your target audience through valuable, relevant, and engaging content that communicates your brand message, strengthens trust, and supports growth.
            </p>
            <ul class="service-features-list">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Strategic Content Planning & Topic Research</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Articles, Blogs & Promotional Copywriting</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Unified Messaging Across Channels</li>
            </ul>
          </div>
          <div style="display:flex; gap:10px; margin-top:20px;">
            <a href="services/content-marketing.html" class="btn btn-primary" style="flex:1; text-align:center;">Learn More &rarr;</a>
            <a href="#contact" class="btn btn-secondary" style="flex:1; text-align:center;">Inquire</a>
          </div>
        </div>

        <!-- 9. Branding & Design (Creative) -->
        <div class="service-box" data-category="creative">
          <div>
            <span class="service-cat-pill" style="background:rgba(124,58,237,0.15); color:#c084fc; border-color:rgba(124,58,237,0.3);">Creative & Content</span>
            <div class="service-icon-wrap" style="color:#7c3aed;">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
            </div>
            <h3 class="service-title">Branding & Design</h3>
            <p class="service-desc">
              Develop a distinctive brand identity through thoughtful design, consistent visual elements, and strategic brand presentation that helps your business stand out.
            </p>
            <ul class="service-features-list">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Logo Design & Visual Identity Systems</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Brand Guidelines, Color & Typography</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Stationery & Marketing Collateral</li>
            </ul>
          </div>
          <div style="display:flex; gap:10px; margin-top:20px;">
            <a href="services/branding-design.html" class="btn btn-primary" style="flex:1; text-align:center;">Learn More &rarr;</a>
            <a href="#contact" class="btn btn-secondary" style="flex:1; text-align:center;">Inquire</a>
          </div>
        </div>

        <!-- 10. Professional Video Editing (Creative) -->
        <div class="service-box" data-category="creative">
          <div>
            <span class="service-cat-pill" style="background:rgba(124,58,237,0.15); color:#c084fc; border-color:rgba(124,58,237,0.3);">Creative & Content</span>
            <div class="service-icon-wrap" style="color:#7c3aed;">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg>
            </div>
            <h3 class="service-title">Professional Video Editing</h3>
            <p class="service-desc">
              Transform raw footage into polished, engaging, and professionally edited videos that capture attention, communicate your message, and strengthen your presence.
            </p>
            <ul class="service-features-list">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Reels, Shorts & YouTube Video Cuts</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Color Grading, Motion Graphics & Audio Clean</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Corporate & Promotional Showcase Videos</li>
            </ul>
          </div>
          <div style="display:flex; gap:10px; margin-top:20px;">
            <a href="services/video-editing.html" class="btn btn-primary" style="flex:1; text-align:center;">Learn More &rarr;</a>
            <a href="#contact" class="btn btn-secondary" style="flex:1; text-align:center;">Inquire</a>
          </div>
        </div>

        <!-- 11. Web Design & Development (Tech) -->
        <div class="service-box" data-category="tech">
          <div>
            <span class="service-cat-pill" style="background:rgba(2,132,199,0.15); color:#38bdf8; border-color:rgba(2,132,199,0.3);">Web & Technology</span>
            <div class="service-icon-wrap" style="color:#0284c7;">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
            </div>
            <h3 class="service-title">Web Design & Development</h3>
            <p class="service-desc">
              Build a powerful online presence with modern, responsive, user-friendly, and search-engine-friendly websites designed to support your business objectives.
            </p>
            <ul class="service-features-list">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Custom UI/UX & Responsive Web Development</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Corporate Portals & E-Commerce Platforms</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Speed Optimization & Security Best Practices</li>
            </ul>
          </div>
          <div style="display:flex; gap:10px; margin-top:20px;">
            <a href="services/web-design-development.html" class="btn btn-primary" style="flex:1; text-align:center;">Learn More &rarr;</a>
            <a href="#contact" class="btn btn-secondary" style="flex:1; text-align:center;">Inquire</a>
          </div>
        </div>

      </div>

    </div>
  </section>

    <!-- =========================================================================
       7. OUR WORKING PROCESS (6 Strategic Steps)
       ========================================================================= -->
  <section class="section" id="process">
    <div class="container">
      
      <div class="section-header text-center">
        <span class="section-tag">Methodical Growth Workflow</span>
        <h2 class="section-title">
          A CLEAR PROCESS. <span class="gradient-text">A SMARTER PATH TO GROWTH</span>.
        </h2>
        <p class="section-desc">
          Our disciplined six-step framework ensures strategic clarity, creative excellence, and measurable results across every client project.
        </p>
      </div>

      <div class="process-grid-6">
        
        <div class="process-card-6">
          <div class="step-num-badge">01</div>
          <h3 class="step-title">Discover &amp; Understand</h3>
          <p class="step-desc">We begin by understanding your business, goals, target audience, challenges, and expectations.</p>
        </div>

        <div class="process-card-6">
          <div class="step-num-badge">02</div>
          <h3 class="step-title">Research &amp; Strategize</h3>
          <p class="step-desc">We analyze relevant market information and develop a customized strategy based on your requirements.</p>
        </div>

        <div class="process-card-6">
          <div class="step-num-badge">03</div>
          <h3 class="step-title">Plan &amp; Create</h3>
          <p class="step-desc">Our team develops the creative concepts, content, campaign structures, or digital solutions required for your project.</p>
        </div>

        <div class="process-card-6">
          <div class="step-num-badge">04</div>
          <h3 class="step-title">Execute &amp; Deliver</h3>
          <p class="step-desc">We implement the agreed strategy and work toward delivering the planned outputs with high technical precision.</p>
        </div>

        <div class="process-card-6">
          <div class="step-num-badge">05</div>
          <h3 class="step-title">Monitor &amp; Optimize</h3>
          <p class="step-desc">We evaluate performance, identify opportunities, and make continuous improvements where necessary.</p>
        </div>

        <div class="process-card-6">
          <div class="step-num-badge">06</div>
          <h3 class="step-title">Report &amp; Grow</h3>
          <p class="step-desc">We share progress, insights, and recommendations to support informed decisions and long-term future growth.</p>
        </div>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       8. CASE STUDY: 'META CONTENT MARKETING & SCALE CAMPAIGN'
       ========================================================================= -->
  <section class="section section-alt" id="case-study">
    <div class="container">
      
      <div class="section-header text-center">
        <span class="section-tag">Verified Case Study</span>
        <h2 class="section-title">
          CASE STUDY: <span class="gradient-text">META CONTENT MARKETING & SCALE</span>
        </h2>
        <p class="section-desc">
          How Giga Digital Agency transformed an established fashion and lifestyle retail brand into an e-commerce powerhouse through full-funnel Meta advertising.
        </p>
      </div>

      <div class="case-study-hero">
        <div class="case-study-grid">
          
          <div>
            <span class="section-tag" style="background:rgba(244,63,94,0.15); color:#fb7185; border-color:rgba(244,63,94,0.3);">
              Retail & E-Commerce Flagship
            </span>
            <h3 style="font-size:1.8rem; font-weight:900; color:var(--text-heading); margin:12px 0 16px;">
              Scaling From High Ad Waste to 4.8x ROAS
            </h3>
            
            <p style="font-size:0.95rem; color:var(--text-main); line-height:1.7; margin-bottom:14px;">
              <strong>The Challenge:</strong> The client suffered from high Cost Per Click (CPC) and high cart abandonment (over 74%), with generic boosted posts failing to convert followers into paying customers.
            </p>
            <p style="font-size:0.95rem; color:var(--text-main); line-height:1.7; margin-bottom:14px;">
              <strong>Our Strategy:</strong> We restructured the brand's Meta ad account from scratch. We integrated Meta Conversions API (CAPI), produced 45+ dynamic video reels highlighting product features, and introduced automated retargeting discounts for abandoned checkouts.
            </p>
            <p style="font-size:0.95rem; color:var(--text-main); line-height:1.7; margin-bottom:24px;">
              <strong>The Execution:</strong> Over a 90-day execution period, our media buyers continuously tested 4 audience segments across Dhaka, Chittagong, Sylhet, and overseas Bangladeshi expats, deploying one-click bKash payment landing pages.
            </p>

            <a href="#contact" class="btn btn-primary">
              Discuss Your Campaign
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
          </div>

          <!-- 4 Highlight Metric Cards -->
          <div class="metric-cards-grid">
            <div class="metric-box">
              <div class="metric-val" style="color:#fb7185;">1.85M+</div>
              <div class="metric-label">Total Reach & Impressions</div>
            </div>
            <div class="metric-box">
              <div class="metric-val" style="color:var(--accent-primary);">6.4%</div>
              <div class="metric-label">Engagement Rate (3.2x benchmark)</div>
            </div>
            <div class="metric-box">
              <div class="metric-val" style="color:var(--accent-violet);">+24,500</div>
              <div class="metric-label">Targeted Followers & Leads</div>
            </div>
            <div class="metric-box">
              <div class="metric-val" style="color:var(--accent-green);">4.8x</div>
              <div class="metric-label">Verified Average ROAS</div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>

    <!-- =========================================================================
       9. PRICING & CUSTOM PACKAGES (3 Categories)
       ========================================================================= -->
  <section class="section" id="pricing">
    <div class="container">
      
      <div class="section-header text-center">
        <span class="section-tag">Flexible Investment</span>
        <h2 class="section-title">
          FLEXIBLE SOLUTIONS <span class="gradient-text">DESIGNED AROUND YOUR BUSINESS</span>
        </h2>
        <p class="section-desc">
          Every business has different goals, priorities, and budgets. That's why we offer flexible service packages designed to meet different requirements.
        </p>
      </div>

      <!-- Pricing Category Tabs -->
      <div class="pricing-category-tabs">
        <button class="pricing-cat-btn active" data-deck="growth">Growth &amp; Advertising</button>
        <button class="pricing-cat-btn" data-deck="creative">Creative &amp; Content</button>
        <button class="pricing-cat-btn" data-deck="tech">Web &amp; Technology</button>
      </div>

      <!-- DECK 1: Growth & Advertising -->
      <div class="pricing-category-deck active" data-deck="growth">
        
        <div class="pricing-package-card">
          <div>
            <span class="pkg-badge">Starter Tier</span>
            <h3 class="pkg-title">Starter Growth</h3>
            <p class="pkg-ideal">Ideal for startups and local businesses looking to establish their initial ad presence.</p>
            
            <div class="pkg-price-row">
              <div class="pkg-price-label">Investment Model</div>
              <div class="pkg-price-val">Request a Quote</div>
            </div>

            <div class="pkg-deliverables-title">Included Deliverables:</div>
            <ul class="pkg-deliverables-list">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Audience & Competitor Research</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Initial Ad Campaign Setup (Meta or Google)</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Essential Conversion Tracking</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Monthly Performance Summary</li>
            </ul>
          </div>
          <a href="#contact" class="btn btn-secondary" style="width:100%; text-align:center;">Request Starter Quote</a>
        </div>

        <div class="pricing-package-card featured-pkg">
          <span class="popular-ribbon">Most Popular</span>
          <div>
            <span class="pkg-badge" style="background:rgba(29,78,216,0.25);">Professional Tier</span>
            <h3 class="pkg-title">Professional Growth</h3>
            <p class="pkg-ideal">Ideal for growing brands requiring multi-platform ad management and continuous lead generation.</p>
            
            <div class="pkg-price-row">
              <div class="pkg-price-label">Investment Model</div>
              <div class="pkg-price-val">Request a Quote</div>
            </div>

            <div class="pkg-deliverables-title">Included Deliverables:</div>
            <ul class="pkg-deliverables-list">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Multi-Channel Ads (Google + LinkedIn or Meta)</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Advanced Audience Segmentation & Retargeting</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Conversion API & Analytics Integration</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Bi-Weekly Optimization & Transparent Reporting</li>
            </ul>
          </div>
          <a href="#contact" class="btn btn-primary" style="width:100%; text-align:center;">Request Professional Quote</a>
        </div>

        <div class="pricing-package-card">
          <div>
            <span class="pkg-badge">Scale Tier</span>
            <h3 class="pkg-title">Performance Scale</h3>
            <p class="pkg-ideal">Ideal for established companies aiming for aggressive market expansion and maximum ROI.</p>
            
            <div class="pkg-price-row">
              <div class="pkg-price-label">Investment Model</div>
              <div class="pkg-price-val">Request a Quote</div>
            </div>

            <div class="pkg-deliverables-title">Included Deliverables:</div>
            <ul class="pkg-deliverables-list">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Full-Funnel Growth (Google, Meta, LinkedIn & SEO)</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Dedicated Account Manager & Media Buyer</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Continuous Creative A/B Testing & Copywriting</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Real-Time Dashboard & Weekly Strategy Calls</li>
            </ul>
          </div>
          <a href="#contact" class="btn btn-secondary" style="width:100%; text-align:center;">Request Performance Quote</a>
        </div>

      </div>

      <!-- DECK 2: Creative & Content -->
      <div class="pricing-category-deck" data-deck="creative">
        
        <div class="pricing-package-card">
          <div>
            <span class="pkg-badge">Essential Tier</span>
            <h3 class="pkg-title">Essential Creative</h3>
            <p class="pkg-ideal">Ideal for startups requiring essential brand visuals and promotional graphics.</p>
            
            <div class="pkg-price-row">
              <div class="pkg-price-label">Investment Model</div>
              <div class="pkg-price-val">Request a Quote</div>
            </div>

            <div class="pkg-deliverables-title">Included Deliverables:</div>
            <ul class="pkg-deliverables-list">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Primary Logo & Basic Color Palette</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Social Media Banner & Post Templates</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Business Card & Letterhead Design</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Vector & High-Res Export Formats</li>
            </ul>
          </div>
          <a href="#contact" class="btn btn-secondary" style="width:100%; text-align:center;">Request Essential Quote</a>
        </div>

        <div class="pricing-package-card featured-pkg">
          <span class="popular-ribbon">Recommended</span>
          <div>
            <span class="pkg-badge" style="background:rgba(124,58,237,0.25);">Professional Tier</span>
            <h3 class="pkg-title">Professional Creative</h3>
            <p class="pkg-ideal">Ideal for growing businesses needing comprehensive company profile design, video edits & content.</p>
            
            <div class="pkg-price-row">
              <div class="pkg-price-label">Investment Model</div>
              <div class="pkg-price-val">Request a Quote</div>
            </div>

            <div class="pkg-deliverables-title">Included Deliverables:</div>
            <ul class="pkg-deliverables-list">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Corporate Company Profile & Brochure (Digital/Print)</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Professional Video Editing (Reels, Shorts & YouTube)</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Monthly Promotional Banner Pack</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Complete Brand Identity Guidelines</li>
            </ul>
          </div>
          <a href="#contact" class="btn btn-primary" style="width:100%; text-align:center;">Request Professional Quote</a>
        </div>

        <div class="pricing-package-card">
          <div>
            <span class="pkg-badge">Complete Tier</span>
            <h3 class="pkg-title">Complete Studio</h3>
            <p class="pkg-ideal">Ideal for enterprise brands needing full-service creative production and ongoing content marketing.</p>
            
            <div class="pkg-price-row">
              <div class="pkg-price-label">Investment Model</div>
              <div class="pkg-price-val">Request a Quote</div>
            </div>

            <div class="pkg-deliverables-title">Included Deliverables:</div>
            <ul class="pkg-deliverables-list">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> End-to-End Brand Identity & Rebranding</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Ongoing Content Marketing & Editorial Writing</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> High-Volume Video Editing with Motion Graphics</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Dedicated Creative Director & Quick Turnaround</li>
            </ul>
          </div>
          <a href="#contact" class="btn btn-secondary" style="width:100%; text-align:center;">Request Complete Quote</a>
        </div>

      </div>

      <!-- DECK 3: Web & Technology -->
      <div class="pricing-category-deck" data-deck="tech">
        
        <div class="pricing-package-card">
          <div>
            <span class="pkg-badge">Basic Tier</span>
            <h3 class="pkg-title">Basic Web</h3>
            <p class="pkg-ideal">Ideal for startups and professionals needing a clean, high-performance landing page or business site.</p>
            
            <div class="pkg-price-row">
              <div class="pkg-price-label">Investment Model</div>
              <div class="pkg-price-val">Request a Quote</div>
            </div>

            <div class="pkg-deliverables-title">Included Deliverables:</div>
            <ul class="pkg-deliverables-list">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Responsive Modern Web Architecture</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Mobile-Optimized Layout & Fast Load Speed</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Lead Capture Form & WhatsApp Direct Link</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Basic On-Page SEO Structure</li>
            </ul>
          </div>
          <a href="#contact" class="btn btn-secondary" style="width:100%; text-align:center;">Request Basic Quote</a>
        </div>

        <div class="pricing-package-card featured-pkg">
          <span class="popular-ribbon">Corporate Choice</span>
          <div>
            <span class="pkg-badge" style="background:rgba(2,132,199,0.25);">Business Tier</span>
            <h3 class="pkg-title">Business Corporate</h3>
            <p class="pkg-ideal">Ideal for established companies requiring multi-page corporate portals and custom content management.</p>
            
            <div class="pkg-price-row">
              <div class="pkg-price-label">Investment Model</div>
              <div class="pkg-price-val">Request a Quote</div>
            </div>

            <div class="pkg-deliverables-title">Included Deliverables:</div>
            <ul class="pkg-deliverables-list">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Custom UI/UX Design System in Figma</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Multi-Page Architecture & Dynamic Services Deck</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Dual-Ledger Lead Management (SQLite + JSON)</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Security Hardening & Performance Optimization</li>
            </ul>
          </div>
          <a href="#contact" class="btn btn-primary" style="width:100%; text-align:center;">Request Business Quote</a>
        </div>

        <div class="pricing-package-card">
          <div>
            <span class="pkg-badge">Advanced Tier</span>
            <h3 class="pkg-title">Advanced E-Commerce</h3>
            <p class="pkg-ideal">Ideal for businesses requiring full-scale e-commerce stores, custom integrations, or web applications.</p>
            
            <div class="pkg-price-row">
              <div class="pkg-price-label">Investment Model</div>
              <div class="pkg-price-val">Request a Quote</div>
            </div>

            <div class="pkg-deliverables-title">Included Deliverables:</div>
            <ul class="pkg-deliverables-list">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Custom E-Commerce & Product Catalog System</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Payment Gateway Integration & Order Automation</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Custom API Integrations & Courier Webhooks</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Ongoing Technical Support & Maintenance SLA</li>
            </ul>
          </div>
          <a href="#contact" class="btn btn-secondary" style="width:100%; text-align:center;">Request Advanced Quote</a>
        </div>

      </div>

      <!-- Custom Package Banner -->
      <div class="custom-package-banner">
        <div class="custom-pkg-left">
          <h3>Need a Solution Tailored to Your Business?</h3>
          <p>Tell us about your goals, project requirements, and budget. We'll help you explore a customized solution that fits your exact needs.</p>
        </div>
        <a href="#contact" class="btn btn-primary" style="white-space:nowrap;">Request a Custom Package</a>
      </div>

    </div>
  </section>

  <!-- =========================================================================
       10. ACHIEVEMENTS & MILESTONES (Eye-Catching Counters)
       ========================================================================= -->
  <section class="section section-alt">
    <div class="container">
      <div class="achievements-box">
        <div class="counters-grid">
          <div class="counter-item">
            <div class="counter-number">7,000+</div>
            <div class="counter-label">Deliverables Completed</div>
          </div>
          <div class="counter-item">
            <div class="counter-number">80+</div>
            <div class="counter-label">Industry Recognitions</div>
          </div>
          <div class="counter-item">
            <div class="counter-number">98.4%</div>
            <div class="counter-label">Client Retention Rate</div>
          </div>
          <div class="counter-item">
            <div class="counter-number">10+</div>
            <div class="counter-label">Years of Craftsmanship</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       11. OUR TEAM SECTION (Actual Verified Names From Official Website)
       ========================================================================= -->
  <section class="section" id="team">
    <div class="container">
      
      <div class="section-header text-center">
        <span class="section-tag">Executive Leadership & Core Team</span>
        <h2 class="section-title">
          MEET THE EXPERTS AT <span class="gradient-text">GIGA DIGITAL AGENCY</span>
        </h2>
        <p class="section-desc">
          The verified engineering leads, marketing specialists, and designers driving high-impact digital solutions for our clients.
        </p>
      </div>

      <div class="team-grid">
        
        <!-- Member 1: Founder & CEO -->
        <div class="team-card">
          <div class="team-img-wrap">
            <img src="images/team/team-1-1.jpg" alt="Engr. Md. Ashikur Rahman — Founder & CEO">
          </div>
          <div class="team-info">
            <h3 class="team-name">Engr. Md. Ashikur Rahman</h3>
            <div class="team-role">Founder & CEO</div>
            <div class="team-socials">
              <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="team-social-btn" aria-label="LinkedIn">in</a>
              <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="team-social-btn" aria-label="Facebook">fb</a>
            </div>
          </div>
        </div>

        <!-- Member 2: CTO -->
        <div class="team-card">
          <div class="team-img-wrap">
            <img src="images/team/team-1-2.jpg" alt="Engr. Md. Hasinur Rahman — CTO">
          </div>
          <div class="team-info">
            <h3 class="team-name">Engr. Md. Hasinur Rahman</h3>
            <div class="team-role">CTO (Chief Technology Officer)</div>
            <div class="team-socials">
              <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="team-social-btn" aria-label="LinkedIn">in</a>
              <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="team-social-btn" aria-label="Facebook">fb</a>
            </div>
          </div>
        </div>

        <!-- Member 3: Senior Software Engineer -->
        <div class="team-card">
          <div class="team-img-wrap">
            <img src="images/team/team-1-3.jpg" alt="Engr. Md. Al Amin — Senior Software Engineer">
          </div>
          <div class="team-info">
            <h3 class="team-name">Engr. Md. Al Amin</h3>
            <div class="team-role">Senior Software Engineer</div>
            <div class="team-socials">
              <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="team-social-btn" aria-label="LinkedIn">in</a>
              <a href="https://github.com" target="_blank" rel="noopener noreferrer" class="team-social-btn" aria-label="GitHub">gh</a>
            </div>
          </div>
        </div>

        <!-- Member 4: Digital Marketing Specialist -->
        <div class="team-card">
          <div class="team-img-wrap">
            <img src="images/team/team-1-4.jpg" alt="Jannatul Nayem — Digital Marketing Specialist">
          </div>
          <div class="team-info">
            <h3 class="team-name">Jannatul Nayem</h3>
            <div class="team-role">Digital Marketing Specialist</div>
            <div class="team-socials">
              <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="team-social-btn" aria-label="LinkedIn">in</a>
              <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="team-social-btn" aria-label="Facebook">fb</a>
            </div>
          </div>
        </div>

        <!-- Member 5: Senior Graphics Designer -->
        <div class="team-card">
          <div class="team-img-wrap">
            <img src="images/team/team-1-5.jpg" alt="Engr. Md. Mehedi Hasan — Senior Graphics Designer">
          </div>
          <div class="team-info">
            <h3 class="team-name">Engr. Md. Mehedi Hasan</h3>
            <div class="team-role">Senior Graphics Designer</div>
            <div class="team-socials">
              <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="team-social-btn" aria-label="LinkedIn">in</a>
              <a href="https://behance.net" target="_blank" rel="noopener noreferrer" class="team-social-btn" aria-label="Behance">bē</a>
            </div>
          </div>
        </div>

        <!-- Member 6: Deputy General Manager -->
        <div class="team-card">
          <div class="team-img-wrap">
            <img src="images/team/team-1-6.jpg" alt="Md. Rezaul Karim — Deputy General Manager">
          </div>
          <div class="team-info">
            <h3 class="team-name">Md. Rezaul Karim</h3>
            <div class="team-role">Deputy General Manager</div>
            <div class="team-socials">
              <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="team-social-btn" aria-label="LinkedIn">in</a>
              <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="team-social-btn" aria-label="Facebook">fb</a>
            </div>
          </div>
        </div>

        <!-- Member 7: Digital Marketing Specialist -->
        <div class="team-card">
          <div class="team-img-wrap">
            <img src="images/team/team-1-7.jpg" alt="Md. Nazmus Sakib — Digital Marketing Specialist">
          </div>
          <div class="team-info">
            <h3 class="team-name">Md. Nazmus Sakib</h3>
            <div class="team-role">Digital Marketing Specialist</div>
            <div class="team-socials">
              <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="team-social-btn" aria-label="LinkedIn">in</a>
              <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="team-social-btn" aria-label="Facebook">fb</a>
            </div>
          </div>
        </div>

        <!-- Member 8: App Developer -->
        <div class="team-card">
          <div class="team-img-wrap">
            <img src="images/team/team-1-8.jpg" alt="Kobir Hossen — App Developer">
          </div>
          <div class="team-info">
            <h3 class="team-name">Kobir Hossen</h3>
            <div class="team-role">App Developer</div>
            <div class="team-socials">
              <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="team-social-btn" aria-label="LinkedIn">in</a>
              <a href="https://github.com" target="_blank" rel="noopener noreferrer" class="team-social-btn" aria-label="GitHub">gh</a>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       12. CLIENT REVIEWS (Sliding Transition Carousel)
       ========================================================================= -->
  <section class="section section-alt" id="reviews">
    <div class="container">
      
      <div class="section-header text-center">
        <span class="section-tag">Client Feedback</span>
        <h2 class="section-title">
          WHAT OUR CLIENTS SAY ABOUT <span class="gradient-text">GIGA DIGITAL</span>
        </h2>
        <p class="section-desc">
          Real reviews from business owners, managing directors, and retail founders who have scaled with our team.
        </p>
      </div>

      <!-- Sliding Review Carousel -->
      <div class="testimonial-carousel-wrap">
        
        <button class="carousel-nav-btn carousel-prev" aria-label="Previous Review">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 18 9 12 15 6"></polyline></svg>
        </button>

        <button class="carousel-nav-btn carousel-next" aria-label="Next Review">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
        </button>

        <div class="testimonial-track">
          
          <!-- Slide 1: M Kamruzzaman Shadhin -->
          <div class="testimonial-slide">
            <div class="testimonial-card">
              <div class="review-stars" aria-label="5 out of 5 stars">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                <svg width="15" height="15" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                <svg width="15" height="15" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                <svg width="15" height="15" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                <svg width="15" height="15" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
              </div>
              <p class="review-quote">
                "We are extremely impressed with the services provided by Giga Digital Agency. Their team's expertise in digital marketing, creative design, and strategic guidance has significantly boosted our online presence and business growth. Highly recommended!"
              </p>
              <div class="reviewer-profile">
                <img src="images/team/team-1-1.jpg" alt="M Kamruzzaman Shadhin" class="reviewer-avatar">
                <div>
                  <div class="reviewer-name">M Kamruzzaman Shadhin</div>
                  <div class="reviewer-company">Managing Director, Enterprise Group</div>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2: Retail Founder -->
          <div class="testimonial-slide">
            <div class="testimonial-card">
              <div class="review-stars" aria-label="5 out of 5 stars">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                <svg width="15" height="15" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                <svg width="15" height="15" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                <svg width="15" height="15" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                <svg width="15" height="15" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
              </div>
              <p class="review-quote">
                "Their Facebook and YouTube ad boosting strategies tripled our e-commerce sales within 60 days. The automated bKash and Pathao courier integrations work without a single hitch. Exceptional engineering."
              </p>
              <div class="reviewer-profile">
                <img src="images/team/team-1-2.jpg" alt="Anisur Rahman" class="reviewer-avatar">
                <div>
                  <div class="reviewer-name">Anisur Rahman</div>
                  <div class="reviewer-company">Founder, Retail Express Bangladesh</div>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3: SaaS Executive -->
          <div class="testimonial-slide">
            <div class="testimonial-card">
              <div class="review-stars" aria-label="5 out of 5 stars">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                <svg width="15" height="15" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                <svg width="15" height="15" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                <svg width="15" height="15" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                <svg width="15" height="15" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
              </div>
              <p class="review-quote">
                "Giga Digital Agency designed our entire web application and UI/UX in Figma, followed by flawless front-end development. Our user activation rate jumped by 48% within two weeks of launch."
              </p>
              <div class="reviewer-profile">
                <img src="images/team/team-1-3.jpg" alt="Sophia Chen" class="reviewer-avatar">
                <div>
                  <div class="reviewer-name">Sophia Chen</div>
                  <div class="reviewer-company">Product Lead, TechNova Global</div>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 4: Corporate Logistics CEO -->
          <div class="testimonial-slide">
            <div class="testimonial-card">
              <div class="review-stars" aria-label="5 out of 5 stars">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                <svg width="15" height="15" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                <svg width="15" height="15" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                <svg width="15" height="15" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                <svg width="15" height="15" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
              </div>
              <p class="review-quote">
                "Best SEO and web development firm in Dhaka. We are now ranking #1 on Google for all of our primary commercial keywords, bringing in qualified B2B leads every single morning."
              </p>
              <div class="reviewer-profile">
                <img src="images/team/team-1-4.jpg" alt="Tanvir Hasan" class="reviewer-avatar">
                <div>
                  <div class="reviewer-name">Tanvir Hasan</div>
                  <div class="reviewer-company">CEO, Horizon Logistics</div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="carousel-dots"></div>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       13. BLOG & PERSPECTIVES SECTION (Topic-Focused Articles)
       ========================================================================= -->
  <section class="section" id="blog">
    <div class="container">
      
      <div class="section-header text-center">
        <span class="section-tag">Industry Perspectives</span>
        <h2 class="section-title">
          DIGITAL MARKETING & <span class="gradient-text">TECH PERSPECTIVES</span>
        </h2>
        <p class="section-desc">
          In-depth articles and actionable strategies written by Giga Digital Agency experts to help your business grow.
        </p>
      </div>

      <div class="blog-grid">
        
        <!-- Blog 1 -->
        <article class="blog-card">
          <div class="blog-img-wrap">
            <img src="images/blog/blog-2-1.jpg" alt="Facebook and YouTube Ad Boosting Strategy">
          </div>
          <div class="blog-content">
            <div>
              <div style="font-size:0.75rem; color:var(--accent-primary); font-weight:800; text-transform:uppercase; margin-bottom:8px;">Performance Ads &bull; Nov 2026</div>
              <h3 class="blog-title">How to Scale Your Business with Facebook & YouTube Ad Boosting in 2026</h3>
              <p class="blog-excerpt">
                Mastering Meta Conversions API, short-form video hooks, and retargeting funnels to achieve consistent 4.0x+ ROAS.
              </p>
            </div>
            <a href="#" class="blog-read-btn" data-article="blog-1">
              Read Article &rarr;
            </a>
          </div>
        </article>

        <!-- Blog 2 -->
        <article class="blog-card">
          <div class="blog-img-wrap">
            <img src="images/blog/blog-2-2.jpg" alt="UI/UX Design for E-Commerce Websites">
          </div>
          <div class="blog-content">
            <div>
              <div style="font-size:0.75rem; color:var(--accent-violet); font-weight:800; text-transform:uppercase; margin-bottom:8px;">UI/UX Design &bull; Oct 2026</div>
              <h3 class="blog-title">The Science of High-Converting UI/UX Design for E-Commerce Platforms</h3>
              <p class="blog-excerpt">
                Why 70% of shoppers abandon carts in South Asia and how one-click mobile checkout designs slash drop-off rates.
              </p>
            </div>
            <a href="#" class="blog-read-btn" data-article="blog-2">
              Read Article &rarr;
            </a>
          </div>
        </article>

        <!-- Blog 3 -->
        <article class="blog-card">
          <div class="blog-img-wrap">
            <img src="images/blog/blog-2-3.jpg" alt="Local SEO Ranking in Bangladesh">
          </div>
          <div class="blog-content">
            <div>
              <div style="font-size:0.75rem; color:var(--accent-green); font-weight:800; text-transform:uppercase; margin-bottom:8px;">SEO Strategy &bull; Sep 2026</div>
              <h3 class="blog-title">Local SEO Strategies: How to Rank #1 on Google Search and Maps in Bangladesh</h3>
              <p class="blog-excerpt">
                Proven blueprint for dominating Google's Local 3-Pack and ranking commercial intent keywords organically.
              </p>
            </div>
            <a href="#" class="blog-read-btn" data-article="blog-3">
              Read Article &rarr;
            </a>
          </div>
        </article>

        <!-- Blog 4 -->
        <article class="blog-card">
          <div class="blog-img-wrap">
            <img src="images/blog/blog-3-1.jpg" alt="Custom Software and POS Systems">
          </div>
          <div class="blog-content">
            <div>
              <div style="font-size:0.75rem; color:var(--accent-cyan); font-weight:800; text-transform:uppercase; margin-bottom:8px;">Tech & Code &bull; Aug 2026</div>
              <h3 class="blog-title">Why Custom Software & ERP Outperforms Off-the-Shelf Templates for Growing Businesses</h3>
              <p class="blog-excerpt">
                Avoid recurring SaaS tax: how custom multi-branch inventory systems protect margin and streamline operations.
              </p>
            </div>
            <a href="#" class="blog-read-btn" data-article="blog-4">
              Read Article &rarr;
            </a>
          </div>
        </article>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       14. CONTACT & INSTANT QUOTATION SECTION
       ========================================================================= -->
    <!-- =========================================================================
       10. FREQUENTLY ASKED QUESTIONS (FAQ)
       ========================================================================= -->
  <section class="section section-alt" id="faq">
    <div class="container">
      
      <div class="section-header text-center">
        <span class="section-tag">Common Inquiries</span>
        <h2 class="section-title">
          FREQUENTLY ASKED <span class="gradient-text">QUESTIONS</span>
        </h2>
        <p class="section-desc">
          Clear, straightforward answers about our services, engagement models, project workflows, and pricing.
        </p>
      </div>

      <div class="faq-section-wrap">
        <div class="faq-accordion">
          
          <div class="faq-item">
            <button class="faq-question" aria-expanded="false">
              <span>What services does Giga Digital Agency provide?</span>
              <span class="faq-toggle-icon">+</span>
            </button>
            <div class="faq-answer">
              <p>We provide a range of digital marketing, advertising, creative design, branding, content marketing, video editing, and website development services. Our solutions are designed to help businesses strengthen their digital presence and achieve their marketing objectives.</p>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question" aria-expanded="false">
              <span>Do you work with small businesses and startups?</span>
              <span class="faq-toggle-icon">+</span>
            </button>
            <div class="faq-answer">
              <p>Yes. We work with businesses at different stages of growth and offer customized solutions based on their requirements, goals, and available budgets.</p>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question" aria-expanded="false">
              <span>Can I choose only one service?</span>
              <span class="faq-toggle-icon">+</span>
            </button>
            <div class="faq-answer">
              <p>Absolutely. You can choose an individual service or combine multiple services depending on your business needs.</p>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question" aria-expanded="false">
              <span>How do I get started?</span>
              <span class="faq-toggle-icon">+</span>
            </button>
            <div class="faq-answer">
              <p>Contact our team through the website, phone, or email. Share your requirements, and we will discuss the most suitable approach for your project.</p>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question" aria-expanded="false">
              <span>Do you offer customized packages?</span>
              <span class="faq-toggle-icon">+</span>
            </button>
            <div class="faq-answer">
              <p>Yes. We can discuss customized service combinations based on your goals, scope, and budget.</p>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question" aria-expanded="false">
              <span>How long does a project take?</span>
              <span class="faq-toggle-icon">+</span>
            </button>
            <div class="faq-answer">
              <p>Project timelines depend on the service, complexity, deliverables, and required approvals. We discuss the expected timeline before starting the project.</p>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question" aria-expanded="false">
              <span>Do you provide campaign performance reports?</span>
              <span class="faq-toggle-icon">+</span>
            </button>
            <div class="faq-answer">
              <p>Reporting depends on the service and agreed project scope. For managed advertising and marketing campaigns, we can provide performance insights and recommendations.</p>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question" aria-expanded="false">
              <span>Do you work with international clients?</span>
              <span class="faq-toggle-icon">+</span>
            </button>
            <div class="faq-answer">
              <p>We can discuss project requirements with businesses and clients from different locations. Contact our team to explore the available arrangements.</p>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question" aria-expanded="false">
              <span>Can you redesign my existing website or brand?</span>
              <span class="faq-toggle-icon">+</span>
            </button>
            <div class="faq-answer">
              <p>Yes. We can review your existing digital presence and discuss suitable redesign or improvement solutions.</p>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question" aria-expanded="false">
              <span>How can I request a quotation?</span>
              <span class="faq-toggle-icon">+</span>
            </button>
            <div class="faq-answer">
              <p>Contact us with your project requirements, preferred services, and budget expectations. Our team will discuss a suitable quotation.</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>

  <section class="section section-alt" id="contact">
    <div class="container">
      
      <div class="contact-grid">
        
        <!-- Left: Agency Information -->
        <div class="contact-info-card">
          <span class="section-tag">Let's Connect</span>
          <h2 style="font-size:1.9rem; font-weight:900; color:var(--text-heading); margin-bottom:14px;">
            START YOUR PROJECT TODAY
          </h2>
          <p style="color:var(--text-muted); font-size:0.94rem; line-height:1.7; margin-bottom:26px;">
            Whether you need a full corporate website, an e-commerce platform with bKash integration, or a high-ROAS Facebook and YouTube ad boost campaign, our team is ready to deliver.
          </p>

          <div style="margin-bottom:22px;">
            <div style="font-size:0.82rem; color:var(--text-muted); text-transform:uppercase; font-weight:800; margin-bottom:4px;">Office Headquarters:</div>
            <p style="font-size:1.02rem; font-weight:700; color:var(--text-heading); line-height:1.5;">
              House # 6/14, Block # A, Lalmatia,<br>
              Dhaka-1207, Bangladesh
            </p>
          </div>

          <div style="margin-bottom:20px;">
            <div style="font-size:0.82rem; color:var(--text-muted); text-transform:uppercase; font-weight:800; margin-bottom:4px;">Direct Phone Hotlines:</div>
            <p style="font-size:1.05rem; font-weight:800; color:var(--accent-primary); line-height:1.6;">
              <a href="tel:01860422185">+880 1860-422185</a> (Corporate / WhatsApp)<br>
              <a href="tel:01723654747">+880 1723-654747</a> / <a href="tel:01778741894">+880 1778-741894</a>
            </p>
          </div>

          <div style="margin-bottom:20px;">
            <div style="font-size:0.82rem; color:var(--text-muted); text-transform:uppercase; font-weight:800; margin-bottom:4px;">Direct Email:</div>
            <p style="font-size:1.02rem; font-weight:700; color:var(--text-heading);">
              <a href="mailto:info@gigadigitalagency.com" style="color:var(--accent-cyan);">info@gigadigitalagency.com</a>
            </p>
          </div>

          <div style="margin-bottom:24px;">
            <div style="font-size:0.82rem; color:var(--text-muted); text-transform:uppercase; font-weight:800; margin-bottom:6px;">Official Facebook:</div>
            <a href="https://www.facebook.com/gigadigitalagency" target="_blank" rel="noopener noreferrer" style="display:inline-flex; align-items:center; gap:8px; color:#ffffff; background:rgba(24,119,242,0.18); border:1px solid rgba(24,119,242,0.4); padding:8px 14px; border-radius:8px; font-size:0.90rem; font-weight:700; text-decoration:none;">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="#1877F2"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
              <span>facebook.com/gigadigitalagency</span>
            </a>
          </div>

          <a href="https://wa.me/8801860422185?text=Hello%20Giga%20Digital%20Agency,%20I%20would%20like%20to%20discuss%20a%20project." target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp" style="width:100%;">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" style="display:inline-block; vertical-align:middle; flex-shrink:0;"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.275.072.376-.044c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.1.824zm-3.423-14.416c-6.627 0-12 5.373-12 12 0 2.154.57 4.175 1.564 5.918l-1.564 5.71 5.86-1.536c1.678.914 3.603 1.408 5.64 1.408 6.627 0 12-5.373 12-12s-5.373-12-12-12z"/></svg>
            Instant WhatsApp Chat (+880 1860-422185)
          </a>
        </div>

        <!-- Right: Quotation Form -->
        <div class="contact-form-card">
          <h3 style="font-size:1.45rem; font-weight:800; color:var(--text-heading); margin-bottom:6px;">Request a Quotation</h3>
          <p style="font-size:0.88rem; color:var(--text-muted); margin-bottom:22px;">Fill out your project details for an immediate consultation within 2 hours.</p>

          <div id="formAlert" style="display:none;"></div>

          <form id="consultationForm">
            <div class="form-row-2">
              <div class="input-group">
                <label class="input-label" for="custName">Your Full Name *</label>
                <input type="text" id="custName" name="name" class="form-input" placeholder="e.g. Tanvir Ahmed" required>
              </div>
              <div class="input-group">
                <label class="input-label" for="custPhone">Phone / Mobile (WhatsApp) *</label>
                <input type="tel" id="custPhone" name="phone" class="form-input" placeholder="018XXXXXXXX" required>
              </div>
            </div>

            <div class="form-row-2">
              <div class="input-group">
                <label class="input-label" for="custEmail">Email Address *</label>
                <input type="email" id="custEmail" name="email" class="form-input" placeholder="name@company.com" required>
              </div>
              <div class="input-group">
                <label class="input-label" for="custService">Service Required *</label>
                <select id="custService" name="service" class="form-input" required>
                  <option value="" disabled selected>Select service category...</option>
                  <option value="Growth & Advertising Package">Growth &amp; Advertising Package</option>
                  <option value="Creative & Content Package">Creative &amp; Content Package</option>
                  <option value="Web & Technology Package">Web &amp; Technology Package</option>
                  <option value="LinkedIn Ads Management">LinkedIn Ads Management</option>
                  <option value="Google Ads Management">Google Ads Management</option>
                  <option value="Facebook Boosting Service">Facebook Boosting Service</option>
                  <option value="Search Engine Optimization (SEO)">Search Engine Optimization (SEO)</option>
                  <option value="Digital Marketing">Digital Marketing</option>
                  <option value="Company Profile & Business Profile Design">Company Profile &amp; Business Profile Design</option>
                  <option value="Banner & Poster Design">Banner &amp; Poster Design</option>
                  <option value="Content Marketing">Content Marketing</option>
                  <option value="Branding & Design">Branding &amp; Design</option>
                  <option value="Professional Video Editing">Professional Video Editing</option>
                  <option value="Web Design & Development">Web Design &amp; Development</option>
                  <option value="Custom Tailored Solution">Custom Tailored Solution</option>
                </select>
              </div>
            </div>

            <div class="input-group">
              <label class="input-label" for="custDetails">Project Details & Requirements *</label>
              <textarea id="custDetails" name="details" class="form-input" placeholder="Tell us about your company, target audience, reference websites, and key requirements..." required></textarea>
            </div>

            <button type="submit" class="btn btn-primary" style="width:100%; padding:14px; font-size:1.02rem;">
              Send Quotation Request
            </button>
          </form>
        </div>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       INSPIRATIONAL INNOVATION CREED (Motivational Vision for Bold Brands)
       ========================================================================= -->
    <!-- =========================================================================
       12. FINAL CALL TO ACTION
       ========================================================================= -->
  <section class="inspirational-footer-banner" aria-label="Final Call to Action">
    <div class="container text-center">
      <span class="section-tag" style="background:var(--badge-bg); color:var(--accent-primary); border-color:var(--border-glow); display:inline-block; margin-bottom:12px;">Get Started Today</span>
      <h2 class="inspiration-quote">
        Ready to Take Your Business to the Next Level?
      </h2>
      <p class="inspiration-subquote">
        Whether you want to strengthen your brand, reach more customers, generate quality leads, or establish a powerful digital presence, Giga Digital Agency is ready to help you move forward. Let's discuss your goals and create a digital strategy that works for your business.
      </p>
      <div style="display:flex; justify-content:center; gap:16px; margin-top:32px; flex-wrap:wrap;">
        <a href="#contact" class="btn btn-primary" style="padding:14px 34px; font-size:1.05rem;">Start Your Project</a>
        <a href="https://wa.me/8801860422185?text=Hello%20Giga%20Digital%20Agency,%20I%20would%20like%20to%20contact%20your%20team." target="_blank" rel="noopener noreferrer" class="btn btn-secondary" style="padding:14px 34px; font-size:1.05rem;">Contact Our Team</a>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       ZAMAN-IT STYLE 4-PILLAR GROWTH IMPACT BANNER (IDEATE, CREATE, DEVELOP, BOOST)
       ========================================================================= -->
  <section class="impact-banner-section" aria-label="Our Core Agency Execution Pillars">
    <div class="container">
      <div style="text-align:center; max-width:680px; margin:0 auto 36px;">
        <span class="section-tag" style="background:rgba(18,115,207,0.12); color:var(--accent-primary); border-color:var(--border-subtle);">Execution Philosophy</span>
        <h2 style="font-size:2rem; font-weight:900; color:var(--text-heading); margin-top:8px;">How We Turn Ideas Into Digital Leadership</h2>
        <p style="font-size:0.95rem; color:var(--text-muted);">A proven four-stage agency lifecycle built for commercial longevity and rapid market adoption.</p>
      </div>

      <div class="impact-pillars-grid">
        
        <!-- Pillar 1 -->
        <div class="impact-pillar-card">
          <div class="pillar-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
          </div>
          <div class="pillar-title" style="color:var(--accent-cyan);">1. IDEATE</div>
          <p class="pillar-desc">
            Deep requirement workshops, user research, competitor gap mapping, and clear project milestones.
          </p>
        </div>

        <!-- Pillar 2 -->
        <div class="impact-pillar-card">
          <div class="pillar-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 19l7-7 3 3-7 7-3-3z"></path><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path></svg>
          </div>
          <div class="pillar-title" style="color:var(--accent-primary);">2. CREATE</div>
          <p class="pillar-desc">
            Human-centered UI/UX prototypes, modern visual systems, interactive Figma flows, and brand assets.
          </p>
        </div>

        <!-- Pillar 3 -->
        <div class="impact-pillar-card">
          <div class="pillar-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
          </div>
          <div class="pillar-title" style="color:#a855f7;">3. DEVELOP</div>
          <p class="pillar-desc">
            Ultra-fast responsive code, bKash/Nagad checkout integrations, secure databases, and custom CMS.
          </p>
        </div>

        <!-- Pillar 4 -->
        <div class="impact-pillar-card">
          <div class="pillar-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
          </div>
          <div class="pillar-title" style="color:var(--accent-green);">4. BOOST</div>
          <p class="pillar-desc">
            Meta CAPI pixel tracking, targeted Facebook & YouTube ad boosting, Google SEO, and sustained ROAS.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- =========================================================================
       15. CORPORATE FOOTER
       ========================================================================= -->
  <?php
require_once __DIR__ . '/includes/footer.php';
?>
