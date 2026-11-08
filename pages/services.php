<?php
/**
 * GIGA DIGITAL AGENCY — SERVICES PAGE
 */
$page_title = 'Our Services — Creative, Growth & Tech | Giga Digital Agency';
$page_desc = 'Explore Giga Digital Agency specialized disciplines: Creative Design & UI/UX, Growth & Search Engine Optimization, and Full-Stack Web Development.';
$current_page = 'services';
require_once __DIR__ . '/../includes/header.php';
?>

  <section class="hero-section" style="min-height: 45vh; padding-top: calc(var(--header-height) + 40px); padding-bottom: 50px;">
    <div class="container text-center gda-reveal">
      <span class="section-tag">Agency Capabilities</span>
      <h1 class="hero-title" style="font-size: clamp(2.4rem, 5vw, 3.8rem); max-width: 900px; margin-left: auto; margin-right: auto;">
        SPECIALIZED DISCIPLINES. <span class="gradient-word">UNIFIED IMPACT</span>.
      </h1>
      <p class="hero-desc" style="margin-left: auto; margin-right: auto;">
        We combine branding, performance marketing, and software engineering into an integrated engine for sustainable business acceleration.
      </p>
    </div>
  </section>

  <!-- Category A: Creative -->
  <section class="section section-darker" id="creative">
    <div class="container">
      <div class="service-category-banner gda-reveal">
        <div>
          <h3>CATEGORY A — CREATIVE</h3>
          <p>"Design That Makes Your Brand Unforgettable."</p>
        </div>
        <a href="#contact" class="btn btn-outline" style="padding: 8px 20px; font-size: 0.85rem;">Inquire for Creative Services</a>
      </div>

      <div class="services-grid gda-reveal">
        <div class="gda-card service-card">
          <div class="service-card-top">
            <div class="service-icon-box">🎨</div>
            <h4>Brand Identity & Strategy</h4>
            <p>Comprehensive logo design, brand architecture, typography standards, visual design systems, and brand voice positioning.</p>
          </div>
          <div class="service-card-footer">
            <a href="#contact" class="service-link">Discuss Brand Identity &rarr;</a>
          </div>
        </div>

        <div class="gda-card service-card">
          <div class="service-card-top">
            <div class="service-icon-box">✨</div>
            <h4>UI/UX Interface Design</h4>
            <p>User research, Figma design systems, interactive web & mobile prototypes, and conversion-optimized checkout layouts.</p>
          </div>
          <div class="service-card-footer">
            <a href="#contact" class="service-link">Discuss UI/UX Design &rarr;</a>
          </div>
        </div>

        <div class="gda-card service-card">
          <div class="service-card-top">
            <div class="service-icon-box">🎬</div>
            <h4>Social Media Creatives & Motion</h4>
            <p>Thumb-stopping social ads, YouTube thumbnail packaging, animated banners, motion graphics, and video ad edits.</p>
          </div>
          <div class="service-card-footer">
            <a href="#contact" class="service-link">Discuss Creative Assets &rarr;</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Category B: Growth -->
  <section class="section" id="growth">
    <div class="container">
      <div class="service-category-banner gda-reveal" style="border-left-color: var(--accent-blue);">
        <div>
          <h3>CATEGORY B — GROWTH</h3>
          <p>"Strategies That Move Your Business Forward."</p>
        </div>
        <a href="#contact" class="btn btn-outline" style="padding: 8px 20px; font-size: 0.85rem;">Inquire for Growth Marketing</a>
      </div>

      <div class="services-grid gda-reveal">
        <div class="gda-card service-card">
          <div class="service-card-top">
            <div class="service-icon-box" style="background: rgba(37,99,235,0.15); color: var(--accent-blue-light);">📈</div>
            <h4>Search Engine Optimization (SEO)</h4>
            <p>Technical search auditing, high-commercial keyword targeting, local search maps, and authoritative backlink funnels.</p>
          </div>
          <div class="service-card-footer">
            <a href="#contact" class="service-link">Discuss Organic SEO &rarr;</a>
          </div>
        </div>

        <div class="gda-card service-card">
          <div class="service-card-top">
            <div class="service-icon-box" style="background: rgba(37,99,235,0.15); color: var(--accent-blue-light);">🎯</div>
            <h4>Paid Advertising (Meta & Google Ads)</h4>
            <p>Data-driven PPC management, multi-tier retargeting funnels, A/B creative testing, and ROAS-focused campaign scaling.</p>
          </div>
          <div class="service-card-footer">
            <a href="#contact" class="service-link">Discuss Paid Ads &rarr;</a>
          </div>
        </div>

        <div class="gda-card service-card">
          <div class="service-card-top">
            <div class="service-icon-box" style="background: rgba(37,99,235,0.15); color: var(--accent-blue-light);">📱</div>
            <h4>Social Media Management</h4>
            <p>Organic social growth strategy, content calendar planning, community management, and brand authority cultivation.</p>
          </div>
          <div class="service-card-footer">
            <a href="#contact" class="service-link">Discuss Social Media &rarr;</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Category C: Tech -->
  <section class="section section-darker" id="tech">
    <div class="container">
      <div class="service-category-banner gda-reveal" style="border-left-color: var(--accent-cyan);">
        <div>
          <h3>CATEGORY C — TECH</h3>
          <p>"Technology That Powers Your Next Move."</p>
        </div>
        <a href="#contact" class="btn btn-outline" style="padding: 8px 20px; font-size: 0.85rem;">Inquire for Tech Engineering</a>
      </div>

      <div class="services-grid gda-reveal">
        <div class="gda-card service-card">
          <div class="service-card-top">
            <div class="service-icon-box" style="background: rgba(6,182,212,0.15); color: var(--accent-cyan);">⚡</div>
            <h4>Website Design & Development</h4>
            <p>High-performance bespoke corporate websites, landing pages, and web portals optimized for Core Web Vitals and SEO.</p>
          </div>
          <div class="service-card-footer">
            <a href="#contact" class="service-link">Discuss Web Development &rarr;</a>
          </div>
        </div>

        <div class="gda-card service-card">
          <div class="service-card-top">
            <div class="service-icon-box" style="background: rgba(6,182,212,0.15); color: var(--accent-cyan);">🛍️</div>
            <h4>E-Commerce Engineering</h4>
            <p>Scalable online storefronts, payment gateways, custom cart funnels, inventory integration, and high-converting checkouts.</p>
          </div>
          <div class="service-card-footer">
            <a href="#contact" class="service-link">Discuss E-Commerce &rarr;</a>
          </div>
        </div>

        <div class="gda-card service-card">
          <div class="service-card-top">
            <div class="service-icon-box" style="background: rgba(6,182,212,0.15); color: var(--accent-cyan);">🛠️</div>
            <h4>Maintenance & SLA Support</h4>
            <p>Continuous uptime tracking, daily cloud backups, security patching, plugin updates, speed audits, and bug fixes.</p>
          </div>
          <div class="service-card-footer">
            <a href="#contact" class="service-link">Discuss Maintenance Plans &rarr;</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Box -->
  <section class="section">
    <div class="container">
      <div class="custom-solution-banner gda-reveal">
        <div class="custom-solution-text">
          <h4>READY TO ACCELERATE YOUR BRAND?</h4>
          <p>Book a strategic consultation call with our team leads to map out your digital roadmap.</p>
        </div>
        <a href="#contact" class="btn btn-primary" style="padding:16px 32px;">Schedule Strategy Session</a>
      </div>
    </div>
  </section>

<?php
require_once __DIR__ . '/../includes/footer.php';
?>
