<?php
/**
 * GIGA DIGITAL AGENCY — MASTER HOMEPAGE
 * Clean Modern International Digital Agency
 */
$page_title = 'Giga Digital Agency — Best Web Design, UI/UX, SEO & Digital Marketing Agency in Bangladesh';
$page_desc = 'Giga Digital Agency is a premier digital agency in Dhaka, Bangladesh specializing in UI/UX design, corporate web development, e-commerce, SEO, and Facebook & YouTube ad boosting.';
$current_page = 'home';
$is_subpage = false;
require_once __DIR__ . '/includes/header.php';
?>
<section class="hero-banner" id="home">
    <div class="container">
      <div class="hero-grid">
        
        <!-- Left: Copy & Value Proposition -->
        <div>
          <span class="section-tag" style="background:rgba(0,229,153,0.15); color:var(--accent-green); border-color:var(--border-green);">
            <span class="pulsing-dot"></span>
            BUILD THE FUTURE &bull; INSPIRE EXCELLENCE
          </span>
          <h1 class="hero-title">
            DREAM BOLDLY. BUILD WITH PURPOSE. <span class="gradient-text">SCALE EXPONENTIALLY</span>.
          </h1>
          <p class="hero-subtitle">
            We don't just design websites and run ads — we build enduring digital legacies. Giga Digital Agency unites human-centered <strong>UI/UX Design</strong>, <strong>Corporate & E-Commerce Web Engineering</strong>, and <strong>High-ROAS Facebook & YouTube Ad Boosting</strong> to turn visionary ambition into market dominance.
          </p>

          <div class="hero-cta-group">
            <a href="#services" class="btn btn-primary">
              Explore Our Services
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
            <a href="#contact" class="btn btn-secondary">
              Get Instant Quote
            </a>
            <a href="https://wa.me/8801860422185?text=Hello%20Giga%20Digital%20Agency,%20I%20would%20like%20to%20discuss%20a%20project." target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp">
              💬 WhatsApp
            </a>
          </div>

          <!-- Zaman IT Quick Stats Trust Strip -->
          <div class="hero-quick-strip">
            <div class="quick-metric-item">
              <div class="metric-num">10+</div>
              <div class="metric-label">Years Innovation</div>
            </div>
            <div class="quick-metric-item">
              <div class="metric-num">7,000+</div>
              <div class="metric-label">Deliverables</div>
            </div>
            <div class="quick-metric-item">
              <div class="metric-num">4.8x</div>
              <div class="metric-label">Average ROAS</div>
            </div>
            <div class="quick-metric-item">
              <div class="metric-num">98.4%</div>
              <div class="metric-label">Retention</div>
            </div>
          </div>
        </div>

        <!-- Right: Eye-Catching Real Agency Visual with Floating Trust Chips -->
        <div class="hero-visual-card">
          <img src="images/resource/about-one-img-1.jpg" alt="Giga Digital Agency Team & Creative Workspace" class="hero-main-photo">
          
          <!-- Floating Chip 1: ROAS Metric -->
          <div class="hero-float-chip hero-chip-top">
            <span style="font-size:1.6rem;">🎯</span>
            <div>
              <div style="font-size:1.15rem; font-weight:900; color:var(--text-heading); line-height:1.1;">4.8x Average ROAS</div>
              <div style="font-size:0.75rem; color:var(--accent-primary); font-weight:700;">Meta & YouTube Ad Boosting</div>
            </div>
          </div>

          <!-- Floating Chip 2: Verified Deliverables -->
          <div class="hero-float-chip hero-chip-bottom">
            <span style="font-size:1.6rem;">🏆</span>
            <div>
              <div style="font-size:1.15rem; font-weight:900; color:var(--text-heading); line-height:1.1;">7,000+ Completed Projects</div>
              <div style="font-size:0.75rem; color:var(--accent-green); font-weight:700;">★ 98.4% Client Satisfaction</div>
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
       5. ABOUT US (Structured Sub-Portions: Story, Profile, Founder, Team, Gallery, Clients)
       ========================================================================= -->
  <section class="section" id="about">
    <div class="container">
      
      <div class="section-header text-center">
        <span class="section-tag">About Giga Digital Agency</span>
        <h2 class="section-title">
          MORE THAN AN AGENCY. <span class="gradient-text">YOUR DIGITAL PARTNER</span>.
        </h2>
        <p class="section-desc">
          Established in 2014 in Lalmatia, Dhaka, we unite creative UI/UX design, custom web engineering, and data-driven ad performance into measurable revenue.
        </p>
      </div>

      <!-- About Us Sub-Portion Navigation Tabs -->
      <div class="about-nav-tabs">
        <button class="about-tab-btn active" data-tab="story">📖 Our Story</button>
        <button class="about-tab-btn" data-tab="profile">🏢 Company Profile</button>
        <button class="about-tab-btn" data-tab="founder">👤 Founder & CEO</button>
        <button class="about-tab-btn" data-tab="team">👥 Our Team</button>
        <button class="about-tab-btn" data-tab="gallery">📸 Photo Galleries</button>
        <button class="about-tab-btn" data-tab="clients">🤝 Our Clients & Recognition</button>
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
              <a href="https://wa.me/8801860422185" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp">💬 WhatsApp Direct</a>
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
          <div style="background:linear-gradient(135deg, rgba(15,28,50,0.95), rgba(12,35,64,0.9)); border:1px solid var(--border-glow); border-radius:var(--radius-lg); padding:36px; box-shadow:var(--shadow-lg);">
            <div style="display:flex; align-items:center; gap:14px; margin-bottom:18px;">
              <div style="font-size:2.4rem;">🏆</div>
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
       6. CATEGORIZED SERVICES (Creative, Growth, Tech)
       ========================================================================= -->
  <section class="section section-alt" id="services">
    <div class="container">
      
      <div class="section-header text-center">
        <span class="section-tag">Comprehensive Capabilities</span>
        <h2 class="section-title">
          WHAT WE DO AT <span class="gradient-text">GIGA DIGITAL AGENCY</span>
        </h2>
        <p class="section-desc">
          Structured into three core divisions — <strong>Creative</strong>, <strong>Growth & Ad Boosting</strong>, and <strong>Technology</strong> — to elevate your brand from concept to measurable revenue.
        </p>
      </div>

      <!-- Category Filter Tabs -->
      <div class="services-tabs-row">
        <button class="service-cat-tab active" data-category="all">All Services (9)</button>
        <button class="service-cat-tab" data-category="creative">🎨 Creative (Design & YouTube)</button>
        <button class="service-cat-tab" data-category="growth">🚀 Growth (Marketing, SEO & Ads)</button>
        <button class="service-cat-tab" data-category="tech">💻 Tech & Web Development</button>
      </div>

      <!-- Services Cards Grid -->
      <div class="services-cards-grid">
        
        <!-- Service 1 (Creative): Graphic Design -->
        <div class="service-box" data-category="creative">
          <div>
            <span class="service-cat-pill">Creative Division</span>
            <div class="service-icon-wrap">🎨</div>
            <h3 class="service-title">Graphic Design & Brand Identity</h3>
            <p class="service-desc">
              Custom corporate logos, brand guidelines, marketing banners, packaging design, and social media creative toolkits that command immediate visual authority.
            </p>
            <ul class="service-features-list">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Complete Vector Logo & Typography Guidelines</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> High-Converting Social Media Banner Packs</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Print & Digital Corporate Collateral</li>
            </ul>
          </div>
          <a href="#contact" class="btn btn-secondary" style="width:100%;">Inquire About Graphic Design</a>
        </div>

        <!-- Service 2 (Creative): UI/UX Design -->
        <div class="service-box" data-category="creative">
          <div>
            <span class="service-cat-pill">Creative Division</span>
            <div class="service-icon-wrap">📱</div>
            <h3 class="service-title">UI/UX Design & Prototyping</h3>
            <p class="service-desc">
              Interactive Figma prototypes, wireframing, user persona mapping, and conversion-optimized mobile app and web design systems tested for effortless usability.
            </p>
            <ul class="service-features-list">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Modern Design Systems in Figma</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Mobile-First Wireframing & Usability Audits</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> High-Conversion Checkout User Journeys</li>
            </ul>
          </div>
          <a href="#contact" class="btn btn-secondary" style="width:100%;">Inquire About UI/UX</a>
        </div>

        <!-- Service 3 (Creative): YouTube Services -->
        <div class="service-box" data-category="creative">
          <div>
            <span class="service-cat-pill">Creative Division</span>
            <div class="service-icon-wrap">▶️</div>
            <h3 class="service-title">YouTube Creative & Channel Services</h3>
            <p class="service-desc">
              Custom high-CTR YouTube thumbnails, channel branding, video intros/outros, engaging motion graphics, and video editing to maximize audience retention.
            </p>
            <ul class="service-features-list">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> A/B Tested High-CTR Thumbnail Design</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> YouTube Banner & Channel Identity Kit</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Motion Graphic Hooks & Retention Editing</li>
            </ul>
          </div>
          <a href="#contact" class="btn btn-secondary" style="width:100%;">Inquire About YouTube Creative</a>
        </div>

        <!-- Service 4 (Growth): Facebook Ad Boosting -->
        <div class="service-box" data-category="growth">
          <div>
            <span class="service-cat-pill" style="background:rgba(244,63,94,0.15); color:#fb7185; border-color:rgba(244,63,94,0.3);">Growth Division</span>
            <div class="service-icon-wrap" style="color:#f43f5e;">🚀</div>
            <h3 class="service-title">Facebook & Instagram Ad Boosting</h3>
            <p class="service-desc">
              Precision Meta ad management, pixel setup with Conversions API, custom & lookalike audiences, reel video boosting, and high-ROAS e-commerce scaling.
            </p>
            <ul class="service-features-list">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Meta Conversions API (CAPI) Integration</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Custom Retargeting & Cart Abandoner Funnels</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Daily Bidding Tuning & Clear ROAS Reports</li>
            </ul>
          </div>
          <a href="#contact" class="btn btn-primary" style="width:100%;">Start Facebook Boosting</a>
        </div>

        <!-- Service 5 (Growth): YouTube Ad Boosting -->
        <div class="service-box" data-category="growth">
          <div>
            <span class="service-cat-pill" style="background:rgba(239,68,68,0.15); color:#f87171; border-color:rgba(239,68,68,0.3);">Growth Division</span>
            <div class="service-icon-wrap" style="color:#ef4444;">🎯</div>
            <h3 class="service-title">YouTube Ad Boosting & Video Marketing</h3>
            <p class="service-desc">
              Skippable in-stream ads, non-skippable 6-second bumper ads, in-feed discovery ads, subscriber growth campaigns, and demographic video marketing.
            </p>
            <ul class="service-features-list">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Google Ads YouTube Video Campaign Setup</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Geo-Targeted Views & Subscriber Acquisition</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> YouTube Remarketing to Web Visitors</li>
            </ul>
          </div>
          <a href="#contact" class="btn btn-primary" style="width:100%;">Start YouTube Boosting</a>
        </div>

        <!-- Service 6 (Growth): SEO -->
        <div class="service-box" data-category="growth">
          <div>
            <span class="service-cat-pill" style="background:rgba(16,185,129,0.15); color:#6ee7b7; border-color:rgba(16,185,129,0.3);">Growth Division</span>
            <div class="service-icon-wrap" style="color:#10b981;">📈</div>
            <h3 class="service-title">Search Engine Optimization (SEO)</h3>
            <p class="service-desc">
              Dominate page 1 of Google Search. Complete technical audits, keyword mapping, high-authority backlink building, and Google Maps Local 3-Pack ranking.
            </p>
            <ul class="service-features-list">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Technical & On-Page Keyword Optimization</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Google Business Profile & Maps 3-Pack Rank</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Sustainable White-Hat Backlink Outreach</li>
            </ul>
          </div>
          <a href="#contact" class="btn btn-secondary" style="width:100%;">Rank #1 on Google</a>
        </div>

        <!-- Service 7 (Tech): Corporate Web Development -->
        <div class="service-box" data-category="tech">
          <div>
            <span class="service-cat-pill" style="background:rgba(56,189,248,0.15); color:#7dd3fc; border-color:rgba(56,189,248,0.3);">Tech Division</span>
            <div class="service-icon-wrap" style="color:#38bdf8;">💻</div>
            <h3 class="service-title">Corporate Website Design & Development</h3>
            <p class="service-desc">
              Custom-coded, lightning-fast corporate websites. Mobile responsive, easy-to-manage dynamic CMS, SSL encryption, and Google Core Web Vitals optimization.
            </p>
            <ul class="service-features-list">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Custom Modern Architecture (PHP / HTML5 / JS)</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Free .com Domain & NVMe Hosting (1 Year)</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> WhatsApp Chat & Lead Capture Integration</li>
            </ul>
          </div>
          <a href="#contact" class="btn btn-secondary" style="width:100%;">Build Corporate Website</a>
        </div>

        <!-- Service 8 (Tech): E-Commerce Development -->
        <div class="service-box" data-category="tech">
          <div>
            <span class="service-cat-pill" style="background:rgba(56,189,248,0.15); color:#7dd3fc; border-color:rgba(56,189,248,0.3);">Tech Division</span>
            <div class="service-icon-wrap" style="color:#38bdf8;">🛒</div>
            <h3 class="service-title">E-Commerce Store (bKash/Nagad/Cards)</h3>
            <p class="service-desc">
              Feature-rich online store with automated bKash, Nagad, Rocket, SSLCommerz, and Visa/Mastercard payments plus Pathao/Steadfast Courier API delivery tracking.
            </p>
            <ul class="service-features-list">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Automated bKash & Nagad Merchant Checkout</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Pathao / Steadfast Courier Dispatch API</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Inventory Sync, Order Alerts & Customer Accounts</li>
            </ul>
          </div>
          <a href="#contact" class="btn btn-secondary" style="width:100%;">Launch E-Commerce Store</a>
        </div>

        <!-- Service 9 (Tech): Custom Software & POS -->
        <div class="service-box" data-category="tech">
          <div>
            <span class="service-cat-pill" style="background:rgba(56,189,248,0.15); color:#7dd3fc; border-color:rgba(56,189,248,0.3);">Tech Division</span>
            <div class="service-icon-wrap" style="color:#38bdf8;">⚙️</div>
            <h3 class="service-title">Custom Software, POS & ERP Systems</h3>
            <p class="service-desc">
              Bespoke business automation systems: inventory tracking, multi-branch POS, billing, automated invoicing, customer CRM, and employee management portals.
            </p>
            <ul class="service-features-list">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Multi-Branch Point of Sale (POS) & Thermal Billing</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Custom ERP & Accounting Database Solutions</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> 100% Data Ownership & Secure Cloud Backups</li>
            </ul>
          </div>
          <a href="#contact" class="btn btn-secondary" style="width:100%;">Discuss Custom Software</a>
        </div>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       7. OUR WORKING PROCESS (4 Authentic Steps)
       ========================================================================= -->
  <section class="section" id="process">
    <div class="container">
      
      <div class="section-header text-center">
        <span class="section-tag">Proven Workflow</span>
        <h2 class="section-title">
          HOW WE BRING YOUR PROJECT <span class="gradient-text">TO LIFE</span>
        </h2>
        <p class="section-desc">
          A disciplined four-step execution framework engineered specifically for web development, UI/UX design, and multi-platform ad boosting campaigns.
        </p>
      </div>

      <div class="process-steps-grid">
        
        <!-- Step 1 -->
        <div class="process-step-card">
          <div class="step-num-badge">01</div>
          <div class="step-icon">📋</div>
          <h3 class="step-title">Requirement Consultation & Strategy</h3>
          <p class="step-desc">
            We meet with your team to analyze your business goals, competitors, and target audience, formulating a comprehensive technical and marketing roadmap.
          </p>
        </div>

        <!-- Step 2 -->
        <div class="process-step-card">
          <div class="step-num-badge">02</div>
          <div class="step-icon">🎨</div>
          <h3 class="step-title">UI/UX Design & Client Approval</h3>
          <p class="step-desc">
            Our creative team crafts interactive Figma prototypes, ad creatives, and high-fidelity layouts for your review and explicit sign-off before coding begins.
          </p>
        </div>

        <!-- Step 3 -->
        <div class="process-step-card">
          <div class="step-num-badge">03</div>
          <div class="step-icon">💻</div>
          <h3 class="step-title">Development & Coding</h3>
          <p class="step-desc">
            Our software engineers develop clean, high-performance code, integrate bKash/Nagad gateways, configure tracking pixels, and deploy SEO architecture.
          </p>
        </div>

        <!-- Step 4 -->
        <div class="process-step-card">
          <div class="step-num-badge">04</div>
          <div class="step-icon">🚀</div>
          <h3 class="step-title">Launch, Ad Boosting & Optimization</h3>
          <p class="step-desc">
            We deploy your platform live, ignite high-conversion Facebook and YouTube ad boost campaigns, monitor ROAS metrics, and continuously scale results.
          </p>
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
       9. PRICING & ESTIMATED PACKAGES WITH CUSTOMIZER
       ========================================================================= -->
  <section class="section" id="pricing">
    <div class="container">
      
      <div class="section-header text-center">
        <span class="section-tag">Transparent Investment</span>
        <h2 class="section-title">
          ESTIMATED PACKAGES & <span class="gradient-text">CUSTOM SOLUTIONS</span>
        </h2>
        <p class="section-desc">
          Honest, transparent pricing for growing businesses. Choose a standard estimated package or build a customized plan tailored to your exact budget.
        </p>
      </div>

      <!-- Pricing Cards Grid -->
      <div class="pricing-cards-grid">
        
        <!-- Package 1: Starter Business Website -->
        <div class="pricing-card">
          <div>
            <h3 class="price-heading">Starter Business Website</h3>
            <p class="price-subtitle">Ideal for startups, clinics, schools & corporate portfolios</p>
            
            <div class="price-tag-wrap">
              <span class="price-currency">৳</span>
              <span class="price-amount">15,000</span>
              <div class="price-approx">Estimated Price (approx $140 USD)</div>
            </div>

            <ul class="price-features">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> 5 to 7 Custom Responsive Pages</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Modern Clean UI/UX Design</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Contact Form with Instant Email Alert</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Floating WhatsApp Click-to-Chat Button</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Free .com Domain & NVMe Hosting (1 Year)</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Delivery: 5–7 Working Days</li>
            </ul>
          </div>
          <a href="#contact" class="btn btn-secondary" style="width:100%;">Select Starter Package</a>
        </div>

        <!-- Package 2: Professional Corporate Website (Featured) -->
        <div class="pricing-card featured">
          <span class="popular-ribbon">Most Popular</span>
          <div>
            <h3 class="price-heading">Professional Corporate Website</h3>
            <p class="price-subtitle">For established firms demanding prestige, SEO & dynamic CMS</p>
            
            <div class="price-tag-wrap">
              <span class="price-currency">৳</span>
              <span class="price-amount">28,000</span>
              <div class="price-approx">Estimated Price (approx $260 USD)</div>
            </div>

            <ul class="price-features">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Up to 15 Dynamic Responsive Pages</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Custom CMS to Manage Blogs, Projects & Services</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Advanced Technical On-Page SEO & Google Maps</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Meta Pixel & Google Analytics 4 Setup</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> High-Speed NVMe cPanel Hosting (1 Year)</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> 3 Months Free Priority Maintenance</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Delivery: 10–14 Working Days</li>
            </ul>
          </div>
          <a href="#contact" class="btn btn-primary" style="width:100%;">Select Professional Package</a>
        </div>

        <!-- Package 3: E-Commerce Store with bKash/Nagad -->
        <div class="pricing-card">
          <div>
            <h3 class="price-heading">E-Commerce Growth Store</h3>
            <p class="price-subtitle">Full online store with instant payment & courier dispatch</p>
            
            <div class="price-tag-wrap">
              <span class="price-currency">৳</span>
              <span class="price-amount">45,000</span>
              <div class="price-approx">Estimated Price (approx $420 USD)</div>
            </div>

            <ul class="price-features">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Unlimited Products, Categories & Variations</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Automated bKash, Nagad, SSLCommerz & Card Gateways</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Pathao & Steadfast Courier API Integration</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Inventory Control, Automated Invoices & SMS Alerts</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> 6 Months Free Maintenance & Security SLA</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Delivery: 14–20 Working Days</li>
            </ul>
          </div>
          <a href="#contact" class="btn btn-secondary" style="width:100%;">Select E-Commerce Store</a>
        </div>

      </div>

      <!-- Interactive Custom Package Estimator -->
      <div class="customizer-box">
        <div style="display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:16px;">
          <div>
            <span class="section-tag" style="margin-bottom:6px;">Need a Tailored Bundle?</span>
            <h3 style="font-size:1.45rem; font-weight:800; color:var(--text-heading);">Build Your Custom Solution</h3>
            <p style="font-size:0.90rem; color:var(--text-muted);">Select the services you need to estimate your investment:</p>
          </div>
          <div id="customEstimateDisplay" style="font-size:1.05rem; font-weight:700; color:var(--text-heading);">
            Select options below for estimated total
          </div>
        </div>

        <div class="customizer-grid">
          <label class="custom-check-item">
            <input type="checkbox" class="custom-pkg-checkbox" data-label="Corporate Website Design" data-price="15000">
            <span>Corporate Website (৳15k+)</span>
          </label>
          <label class="custom-check-item">
            <input type="checkbox" class="custom-pkg-checkbox" data-label="E-Commerce Store with bKash" data-price="45000">
            <span>E-Commerce with bKash (৳45k+)</span>
          </label>
          <label class="custom-check-item">
            <input type="checkbox" class="custom-pkg-checkbox" data-label="UI/UX Design in Figma" data-price="10000">
            <span>UI/UX Figma Design (৳10k+)</span>
          </label>
          <label class="custom-check-item">
            <input type="checkbox" class="custom-pkg-checkbox" data-label="Facebook & Instagram Ad Boosting" data-price="12000">
            <span>Facebook Ad Boosting (৳12k+/mo)</span>
          </label>
          <label class="custom-check-item">
            <input type="checkbox" class="custom-pkg-checkbox" data-label="YouTube Video Ad Boosting" data-price="15000">
            <span>YouTube Ad Boosting (৳15k+/mo)</span>
          </label>
          <label class="custom-check-item">
            <input type="checkbox" class="custom-pkg-checkbox" data-label="Search Engine Optimization (SEO)" data-price="15000">
            <span>Google SEO & Maps (৳15k+/mo)</span>
          </label>
        </div>

        <div style="text-align:center;">
          <a href="#contact" class="btn btn-primary" style="padding:14px 34px;">
            Request Customized Quotation
          </a>
        </div>
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
              <div class="review-stars">★★★★★</div>
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
              <div class="review-stars">★★★★★</div>
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
              <div class="review-stars">★★★★★</div>
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
              <div class="review-stars">★★★★★</div>
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

          <div style="margin-bottom:22px;">
            <div style="font-size:0.82rem; color:var(--text-muted); text-transform:uppercase; font-weight:800; margin-bottom:4px;">Direct Phone Hotlines:</div>
            <p style="font-size:1.12rem; font-weight:800; color:var(--accent-primary);">
              <a href="tel:01860422185">+880 1860-422185</a><br>
              <a href="tel:01778741894">+880 1778-741894</a>
            </p>
          </div>

          <div style="margin-bottom:26px;">
            <div style="font-size:0.82rem; color:var(--text-muted); text-transform:uppercase; font-weight:800; margin-bottom:4px;">Direct Email:</div>
            <p style="font-size:1.02rem; font-weight:700; color:var(--text-heading);">
              <a href="mailto:info@gigadigitalagency.com" style="color:var(--accent-cyan);">info@gigadigitalagency.com</a>
            </p>
          </div>

          <a href="https://wa.me/8801860422185?text=Hello%20Giga%20Digital%20Agency,%20I%20would%20like%20to%20discuss%20a%20project." target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp" style="width:100%;">
            💬 Instant WhatsApp Chat (+880 1860-422185)
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
                  <option value="Starter Business Web (৳15,000)">Starter Business Web Design (৳15,000)</option>
                  <option value="Corporate Web Design (৳28,000)">Professional Corporate Web Design (৳28,000)</option>
                  <option value="E-Commerce Store (৳45,000)">E-Commerce Store with bKash (৳45,000)</option>
                  <option value="Facebook & YouTube Ad Boosting">Facebook & YouTube Ad Boosting</option>
                  <option value="UI/UX Design in Figma">UI/UX Design in Figma</option>
                  <option value="Search Engine Optimization (SEO)">Search Engine Optimization (SEO)</option>
                  <option value="Custom Software / POS / ERP">Custom Software / POS / ERP</option>
                  <option value="Customized Multi-Service Solution">Customized Multi-Service Solution</option>
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
<?php
require_once __DIR__ . '/includes/footer.php';
?>