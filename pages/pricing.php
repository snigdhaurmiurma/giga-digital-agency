<?php
/**
 * GIGA DIGITAL AGENCY â€” PRICING & PACKAGES PAGE
 */
$page_title = 'Pricing & Service Packages â€” Giga Digital Agency';
$page_desc = 'Explore our transparent investment models across Creative, Growth Marketing, and Web Engineering packages with customized pricing options.';
$current_page = 'pricing';
$is_subpage = true;
require_once __DIR__ . '/../includes/header.php';
?>

  <section class="hero-section" style="min-height: 45vh; padding-top: calc(var(--header-height) + 40px); padding-bottom: 50px;">
    <div class="container text-center gda-reveal">
      <span class="section-tag">Value Investments</span>
      <h1 class="hero-title" style="font-size: clamp(2.4rem, 5vw, 3.8rem); max-width: 900px; margin-left: auto; margin-right: auto;">
        THE RIGHT SOLUTION <span class="gradient-word">FOR EVERY STAGE</span>.
      </h1>
      <p class="hero-desc" style="margin-left: auto; margin-right: auto;">
        Transparent, deliverable-driven investment packages tailored to your company's scale and commercial goals.
      </p>
    </div>
  </section>

  <section class="section section-darker">
    <div class="container">
      
      <div class="pricing-category-switcher gda-reveal">
        <button class="cat-tab-btn active pricing-tab-btn" data-target="p-creative">Creative Packages</button>
        <button class="cat-tab-btn pricing-tab-btn" data-target="p-growth">Growth Packages</button>
        <button class="cat-tab-btn pricing-tab-btn" data-target="p-tech">Tech Packages</button>
      </div>

      <!-- PRICING: CREATIVE -->
      <div class="pricing-deck active" id="p-creative">
        <div class="pricing-grid gda-reveal">
          <div class="pricing-card">
            <div>
              <div class="pricing-header">
                <h4 class="package-tier">Starter Creative</h4>
                <p class="package-target">Essential brand identity foundations for startups.</p>
                <div class="package-price">Let's Discuss <span class="package-price-sub">/ custom brief</span></div>
              </div>
              <ul class="pricing-features-list">
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Complete Logo & Icon Suite</li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Brand Color Guidelines</li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> 6 Social Media Templates</li>
              </ul>
            </div>
            <a href="#contact" class="btn btn-secondary" style="width:100%;">Request Custom Pricing</a>
          </div>

          <div class="pricing-card popular">
            <span class="popular-badge">Most Popular</span>
            <div>
              <div class="pricing-header">
                <h4 class="package-tier">Professional Creative</h4>
                <p class="package-target">Full brand transformation and UI/UX design system.</p>
                <div class="package-price">Custom Quote <span class="package-price-sub">/ scope</span></div>
              </div>
              <ul class="pricing-features-list">
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Complete Brand Style Guide</li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> 15+ Figma Screen Prototypes</li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Figma Component Library</li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Priority Creative Direction</li>
              </ul>
            </div>
            <a href="#contact" class="btn btn-primary" style="width:100%;">Request Custom Pricing</a>
          </div>

          <div class="pricing-card">
            <div>
              <div class="pricing-header">
                <h4 class="package-tier">Premium Enterprise</h4>
                <p class="package-target">Ongoing visual identity guardianship & 3D motion assets.</p>
                <div class="package-price">Tailored SLA <span class="package-price-sub">/ dedicated team</span></div>
              </div>
              <ul class="pricing-features-list">
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Full Design Team Retainer</li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> 3D & Motion Graphic Deliverables</li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Dedicated Lead Designer</li>
              </ul>
            </div>
            <a href="#contact" class="btn btn-secondary" style="width:100%;">Request Custom Pricing</a>
          </div>
        </div>
      </div>

      <!-- PRICING: GROWTH -->
      <div class="pricing-deck" id="p-growth" style="display:none;">
        <div class="pricing-grid">
          <div class="pricing-card">
            <div>
              <div class="pricing-header">
                <h4 class="package-tier">Starter Growth</h4>
                <p class="package-target">Local search optimization and foundational ad account setup.</p>
                <div class="package-price">Let's Discuss <span class="package-price-sub">/ monthly</span></div>
              </div>
              <ul class="pricing-features-list">
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Technical On-Page SEO</li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Meta Ad Funnel Setup</li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Monthly Performance Report</li>
              </ul>
            </div>
            <a href="#contact" class="btn btn-secondary" style="width:100%;">Request Custom Pricing</a>
          </div>

          <div class="pricing-card popular">
            <span class="popular-badge">High Impact</span>
            <div>
              <div class="pricing-header">
                <h4 class="package-tier">Scale Growth</h4>
                <p class="package-target">Full-funnel digital marketing engine for fast-growing businesses.</p>
                <div class="package-price">Custom Quote <span class="package-price-sub">/ monthly</span></div>
              </div>
              <ul class="pricing-features-list">
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Advanced SEO & Intent Backlinks</li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Meta & Google Ads Scaling</li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Weekly Creative A/B Testing</li>
              </ul>
            </div>
            <a href="#contact" class="btn btn-primary" style="width:100%;">Request Custom Pricing</a>
          </div>

          <div class="pricing-card">
            <div>
              <div class="pricing-header">
                <h4 class="package-tier">Performance Enterprise</h4>
                <p class="package-target">Aggressive scale marketing for established market leaders.</p>
                <div class="package-price">Tailored SLA <span class="package-price-sub">/ monthly</span></div>
              </div>
              <ul class="pricing-features-list">
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Omnichannel Strategy</li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Real-Time Funnel Analytics</li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Dedicated Performance Director</li>
              </ul>
            </div>
            <a href="#contact" class="btn btn-secondary" style="width:100%;">Request Custom Pricing</a>
          </div>
        </div>
      </div>

      <!-- PRICING: TECH -->
      <div class="pricing-deck" id="p-tech" style="display:none;">
        <div class="pricing-grid">
          <div class="pricing-card">
            <div>
              <div class="pricing-header">
                <h4 class="package-tier">Basic Tech</h4>
                <p class="package-target">High-speed business website with modern responsive styling.</p>
                <div class="package-price">Let's Discuss <span class="package-price-sub">/ project</span></div>
              </div>
              <ul class="pricing-features-list">
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Up to 5 Responsive Custom Pages</li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Mobile First & 95+ Speed Score Optimization</li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Basic SEO & Contact Form Integration</li>
              </ul>
            </div>
            <a href="#contact" class="btn btn-secondary" style="width:100%;">Request Custom Pricing</a>
          </div>

          <div class="pricing-card popular">
            <span class="popular-badge">Complete Solution</span>
            <div>
              <div class="pricing-header">
                <h4 class="package-tier">Business Engineering</h4>
                <p class="package-target">Custom web applications, e-commerce stores, or SaaS frontends.</p>
                <div class="package-price">Custom Quote <span class="package-price-sub">/ scope</span></div>
              </div>
              <ul class="pricing-features-list">
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Full E-Commerce or Custom CMS Application</li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Payment Gateways (Local & International)</li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Advanced Micro-Interactions & Transitions</li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> 90-Day Post-Launch Maintenance & Support</li>
              </ul>
            </div>
            <a href="#contact" class="btn btn-primary" style="width:100%;">Request Custom Pricing</a>
          </div>

          <div class="pricing-card">
            <div>
              <div class="pricing-header">
                <h4 class="package-tier">Enterprise Platform</h4>
                <p class="package-target">Complex web platforms, high-volume APIs, and cross-platform mobile apps.</p>
                <div class="package-price">Tailored SLA <span class="package-price-sub">/ engineering team</span></div>
              </div>
              <ul class="pricing-features-list">
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Custom Backend & Cloud Infrastructure</li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> iOS & Android Mobile Apps (Flutter/React Native)</li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Enterprise 24/7 SLA & Uptime Guarantee</li>
              </ul>
            </div>
            <a href="#contact" class="btn btn-secondary" style="width:100%;">Request Custom Pricing</a>
          </div>
        </div>
      </div>

      <!-- Custom Request Banner -->
      <div class="custom-solution-banner gda-reveal">
        <div class="custom-solution-text">
          <h4>NEED A CUSTOM SOLUTION?</h4>
          <p>Every business has unique goals. Tell us what you need, and we'll create a customized package designed around your objectives, timeline, and budget.</p>
        </div>
        <a href="#contact" class="btn btn-primary" style="padding:16px 32px;">Request a Custom Package &rarr;</a>
      </div>

    </div>
  </section>

<?php
require_once __DIR__ . '/../includes/footer.php';
?>

