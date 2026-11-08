<?php
/**
 * GIGA DIGITAL AGENCY â€” CASE STUDIES PAGE
 */
$page_title = 'Strategy Case Studies â€” Giga Digital Agency';
$page_desc = 'Detailed analytical breakdown of strategy, execution, and verified results for our client campaigns and digital engineering projects.';
$current_page = 'case-studies';
$is_subpage = true;
require_once __DIR__ . '/../includes/header.php';
?>

  <section class="hero-section" style="min-height: 45vh; padding-top: calc(var(--header-height) + 40px); padding-bottom: 50px;">
    <div class="container text-center gda-reveal">
      <span class="section-tag">Analytical Insights</span>
      <h1 class="hero-title" style="font-size: clamp(2.4rem, 5vw, 3.8rem); max-width: 900px; margin-left: auto; margin-right: auto;">
        BEHIND EVERY PROJECT, <span class="gradient-word">THERE'S A STRATEGY</span>.
      </h1>
      <p class="hero-desc" style="margin-left: auto; margin-right: auto;">
        We believe in complete transparency. Review the problems, strategic hypotheses, execution models, and data outcomes of our client partnerships.
      </p>
    </div>
  </section>

  <!-- Featured Case Study 1 -->
  <section class="section section-darker">
    <div class="container">
      <div class="case-study-hero-card gda-reveal">
        <div class="case-study-grid">
          <div>
            <div style="display:flex; align-items:center; gap:10px; margin-bottom:12px;">
              <span class="section-tag" style="margin-bottom:0;">Featured Campaign</span>
              <span style="font-size:0.75rem; background:rgba(255,255,255,0.06); padding:4px 10px; border-radius:var(--radius-sm); color:var(--text-dim);">DEMONSTRATION CASE STUDY</span>
            </div>
            
            <h3 style="font-size:2rem; font-weight:800; color:#fff; line-height:1.2; margin-bottom:16px;">
              Meta Content Marketing & Scale Campaign
            </h3>

            <div style="font-size:0.95rem; color:var(--text-muted); line-height:1.7; margin-bottom:20px;">
              <p style="margin-bottom:10px;"><strong>Client Background:</strong> Mid-market retail enterprise seeking to break past stagnation across Facebook and Instagram.</p>
              <p style="margin-bottom:10px;"><strong>The Challenge:</strong> Soaring paid ad acquisition costs, audience fatigue, and poor conversion rate on product landing pages.</p>
              <p style="margin-bottom:10px;"><strong>Our Strategy:</strong> Restructured the entire creative flywheel with motion graphic hooks, layered interest retargeting, and frictionless mobile checkouts.</p>
              <p><strong>Our Execution:</strong> Deployed 45 high-velocity creative ad variations, rebuilt the mobile page with 1.1s load speeds, and implemented automated abandoned cart workflows.</p>
            </div>

            <div class="case-study-results-grid">
              <div class="case-metric-box">
                <div class="metric-value">1.8M+</div>
                <div class="metric-label">FB & IG Total Reach</div>
              </div>
              <div class="case-metric-box">
                <div class="metric-value">6.4%</div>
                <div class="metric-label">Average Engagement Rate</div>
              </div>
              <div class="case-metric-box">
                <div class="metric-value">+24.5K</div>
                <div class="metric-label">Targeted Follower Growth</div>
              </div>
              <div class="case-metric-box">
                <div class="metric-value">+180%</div>
                <div class="metric-label">E-Commerce Referral Traffic</div>
              </div>
            </div>

            <div style="margin-top:28px;">
              <a href="#contact" class="btn btn-primary">Replicate Similar Performance &rarr;</a>
            </div>
          </div>

          <div class="case-study-gallery-box">
            <img src="../images/services/services-1-1.jpg" alt="Campaign Asset 1">
            <img src="../images/services/services-1-2.jpg" alt="Campaign Asset 2">
            <img src="../images/services/services-1-3.jpg" alt="Campaign Asset 3">
            <img src="../images/services/services-1-4.jpg" alt="Campaign Asset 4">
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
require_once __DIR__ . '/../includes/footer.php';
?>

