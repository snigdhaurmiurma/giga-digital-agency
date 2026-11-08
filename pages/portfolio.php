<?php
/**
 * GIGA DIGITAL AGENCY — PORTFOLIO PAGE
 */
$page_title = 'Selected Work & Portfolio — Giga Digital Agency';
$page_desc = 'Explore our showcase of web development, UI/UX design, brand identity, and performance marketing projects delivered for ambitious brands.';
$current_page = 'portfolio';
require_once __DIR__ . '/../includes/header.php';
?>

  <section class="hero-section" style="min-height: 45vh; padding-top: calc(var(--header-height) + 40px); padding-bottom: 50px;">
    <div class="container text-center gda-reveal">
      <span class="section-tag">Case Proof</span>
      <h1 class="hero-title" style="font-size: clamp(2.4rem, 5vw, 3.8rem); max-width: 900px; margin-left: auto; margin-right: auto;">
        SELECTED WORK. <span class="gradient-word">PROVEN RESULTS</span>.
      </h1>
      <p class="hero-desc" style="margin-left: auto; margin-right: auto;">
        From interactive digital art agencies to high-volume e-commerce and performance marketing funnels, our portfolio reflects craftsmanship and commercial clarity.
      </p>
    </div>
  </section>

  <section class="section section-darker">
    <div class="container">
      
      <!-- Portfolio Filter Buttons -->
      <div class="portfolio-filters gda-reveal">
        <button class="filter-btn active" data-filter="all">All Projects</button>
        <button class="filter-btn" data-filter="branding">Branding & Design</button>
        <button class="filter-btn" data-filter="web">Website & UI/UX</button>
        <button class="filter-btn" data-filter="marketing">Digital Marketing</button>
        <button class="filter-btn" data-filter="social">Social Media</button>
      </div>

      <div class="portfolio-grid gda-reveal">
        
        <div class="project-card" data-category="web">
          <div class="project-img-box">
            <span class="project-tag">Website & UI/UX</span>
            <img src="images/services/services-3-1.jpg" alt="Crafting a Digital Identity">
          </div>
          <div class="project-content">
            <h4>Crafting a Digital Identity</h4>
            <p>Art Agency Web Design & Digital Experience — dark mode aesthetics, interactive fluid grids, and curated creator showcases.</p>
            <a href="#" class="project-view-btn">View Project Details &rarr;</a>
          </div>
        </div>

        <div class="project-card" data-category="branding">
          <div class="project-img-box">
            <span class="project-tag">Branding & Design</span>
            <img src="images/services/services-3-2.jpg" alt="Achieving Fashion">
          </div>
          <div class="project-content">
            <h4>Achieving Fashion: Runway to Real Life</h4>
            <p>High-end fashion e-commerce lookbook and typographic brand identity system for apparel lifestyle innovators.</p>
            <a href="#" class="project-view-btn">View Project Details &rarr;</a>
          </div>
        </div>

        <div class="project-card" data-category="social">
          <div class="project-img-box">
            <span class="project-tag">Social Media</span>
            <img src="images/services/services-3-3.jpg" alt="Facebook Design Initiatives">
          </div>
          <div class="project-content">
            <h4>Facebook Design Initiatives</h4>
            <p>High-engagement social UI, Meta ad creative frameworks, and viral social assets engineered to lower CAC.</p>
            <a href="#" class="project-view-btn">View Project Details &rarr;</a>
          </div>
        </div>

        <div class="project-card" data-category="web">
          <div class="project-img-box">
            <span class="project-tag">Web Application</span>
            <img src="images/services/services-3-4.jpg" alt="OmniFlow Cloud Platform">
          </div>
          <div class="project-content">
            <h4>OmniFlow SaaS Intelligence Platform</h4>
            <p>Enterprise SaaS interface design with accessible telemetry analytics, real-time metrics, and custom charts.</p>
            <a href="#" class="project-view-btn">View Project Details &rarr;</a>
          </div>
        </div>

        <div class="project-card" data-category="marketing">
          <div class="project-img-box">
            <span class="project-tag">Digital Marketing</span>
            <img src="images/blog/blog-2-1.jpg" alt="National SEO Engine">
          </div>
          <div class="project-content">
            <h4>National SEO & Acquisition Engine</h4>
            <p>Technical search restructuring delivering 320% growth in organic commercial search rankings across 6 months.</p>
            <a href="#" class="project-view-btn">View Project Details &rarr;</a>
          </div>
        </div>

        <div class="project-card" data-category="branding">
          <div class="project-img-box">
            <span class="project-tag">Branding</span>
            <img src="images/blog/blog-2-2.jpg" alt="Aura Organic Living">
          </div>
          <div class="project-content">
            <h4>Aura Organic Living Brand System</h4>
            <p>Sustainable wellness packaging and direct-to-consumer digital touchpoints built for conscious consumers.</p>
            <a href="#" class="project-view-btn">View Project Details &rarr;</a>
          </div>
        </div>

      </div>

    </div>
  </section>

<?php
require_once __DIR__ . '/../includes/footer.php';
?>
