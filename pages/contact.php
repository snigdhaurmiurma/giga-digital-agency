<?php
/**
 * GIGA DIGITAL AGENCY â€” CONTACT PAGE
 */
$page_title = 'Contact Us â€” Giga Digital Agency | Start Your Project';
$page_desc = 'Contact Giga Digital Agency. Connect with our senior digital strategists in Lalmatia, Dhaka, or schedule a virtual consultation for global projects.';
$current_page = 'contact';
$is_subpage = true;
require_once __DIR__ . '/../includes/header.php';
?>

  <section class="hero-section" style="min-height: 40vh; padding-top: calc(var(--header-height) + 40px); padding-bottom: 40px;">
    <div class="container text-center gda-reveal">
      <span class="section-tag">Direct Communication</span>
      <h1 class="hero-title" style="font-size: clamp(2.4rem, 5vw, 3.8rem); max-width: 900px; margin-left: auto; margin-right: auto;">
        LET'S CREATE SOMETHING <span class="gradient-word">GREAT TOGETHER</span>.
      </h1>
      <p class="hero-desc" style="margin-left: auto; margin-right: auto;">
        Have an upcoming launch, a brand repositioning, or an ambitious digital hurdle? Our leadership team is ready to listen and execute.
      </p>
    </div>
  </section>

  <section class="section section-darker">
    <div class="container">
      <div class="contact-section-grid">
        
        <div class="contact-info-panel gda-reveal">
          <span class="section-tag">Reach Out</span>
          <h3>HQ & DIRECT CONTACT</h3>
          <p>We welcome meetings at our Lalmatia studio or across Google Meet / Zoom with our worldwide partners.</p>

          <div class="contact-details-list">
            <div class="contact-detail-item">
              <div class="contact-icon-box">ðŸ“</div>
              <div class="contact-detail-text">
                <h5>Physical Studio</h5>
                <p>House # 6/14, Block # A, Lalmatia, Dhaka-1207, Bangladesh</p>
                <p style="font-size:0.8rem; color:var(--text-dim);">(Additional operations: Mirpur / Shewrapara, Dhaka)</p>
              </div>
            </div>

            <div class="contact-detail-item">
              <div class="contact-icon-box">ðŸ“ž</div>
              <div class="contact-detail-text">
                <h5>Phone / Direct Inquiries</h5>
                <p><a href="tel:01860422185">+880 1860-422185</a> &bull; <a href="tel:01778741894">+880 1778-741894</a></p>
              </div>
            </div>

            <div class="contact-detail-item">
              <div class="contact-icon-box">âœ‰ï¸</div>
              <div class="contact-detail-text">
                <h5>Email Inquiries</h5>
                <p><a href="mailto:info@gigadigitalagency.com">info@gigadigitalagency.com</a></p>
                <p><a href="mailto:supports@gigadigitalagency.com">supports@gigadigitalagency.com</a></p>
              </div>
            </div>
          </div>

          <div style="background:rgba(124,58,237,0.1); border:1px solid rgba(124,58,237,0.3); border-radius:var(--radius-md); padding:18px 24px;">
            <div style="font-size:0.9rem; font-weight:700; color:#fff; margin-bottom:4px;">Direct Strategic Review</div>
            <p style="font-size:0.85rem; color:var(--text-muted);">All submissions are personally reviewed by our CEO & Creative Director within 24 hours.</p>
          </div>
        </div>

        <div class="contact-form-box gda-reveal">
          <div id="contactFormStatus" class="form-status-alert"></div>

          <form id="gdaContactForm" novalidate>
            <div class="form-grid-2">
              <div class="form-group">
                <label class="form-label" for="contactName">Your Full Name *</label>
                <input type="text" id="contactName" name="name" class="form-control" placeholder="e.g. Alex Morgan" required>
                <span class="form-feedback"></span>
              </div>
              <div class="form-group">
                <label class="form-label" for="contactEmail">Business Email *</label>
                <input type="email" id="contactEmail" name="email" class="form-control" placeholder="alex@company.com" required>
                <span class="form-feedback"></span>
              </div>
            </div>

            <div class="form-grid-2">
              <div class="form-group">
                <label class="form-label" for="contactPhone">Phone / WhatsApp</label>
                <input type="tel" id="contactPhone" name="phone" class="form-control" placeholder="+1 (555) 000-0000">
                <span class="form-feedback"></span>
              </div>
              <div class="form-group">
                <label class="form-label" for="contactCompany">Company / Brand Name</label>
                <input type="text" id="contactCompany" name="company" class="form-control" placeholder="Company Ltd.">
                <span class="form-feedback"></span>
              </div>
            </div>

            <div class="form-grid-2">
              <div class="form-group">
                <label class="form-label" for="contactService">Primary Service Needed *</label>
                <select id="contactService" name="service" class="form-control" required>
                  <option value="" disabled selected>Select a discipline...</option>
                  <option value="Brand Identity & UI/UX Design">Category A: Brand Identity & UI/UX Design</option>
                  <option value="Social Media Creatives & YouTube">Category A: Social Creatives & Video Graphics</option>
                  <option value="Search Engine Optimization (SEO)">Category B: SEO & Organic Traffic</option>
                  <option value="Paid Advertising (Meta & Google PPC)">Category B: Paid Ads & Performance Marketing</option>
                  <option value="Website Design & Development">Category C: Custom Web Design & Development</option>
                  <option value="E-Commerce Architecture">Category C: E-Commerce Architecture</option>
                  <option value="Comprehensive Agency Retainer">Comprehensive Full-Service Retainer</option>
                  <option value="Other Custom Solution">Other / Custom Inquiry</option>
                </select>
                <span class="form-feedback"></span>
              </div>

              <div class="form-group">
                <label class="form-label" for="contactBudget">Estimated Investment Budget</label>
                <select id="contactBudget" name="budget" class="form-control">
                  <option value="Flexible / Let's Discuss" selected>Flexible / Let's Discuss</option>
                  <option value="$1,000 â€“ $2,500">$1,000 â€“ $2,500</option>
                  <option value="$2,500 â€“ $5,000">$2,500 â€“ $5,000</option>
                  <option value="$5,000 â€“ $10,000">$5,000 â€“ $10,000</option>
                  <option value="$10,000+">$10,000+</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="form-label" for="contactMessage">Project Details & Objectives *</label>
              <textarea id="contactMessage" name="message" class="form-control" placeholder="Tell us about your brand, current challenges, and what success looks like..." required></textarea>
              <span class="form-feedback"></span>
            </div>

            <button type="submit" class="btn btn-primary" style="width:100%; padding:16px 32px; font-size:1.05rem; margin-top:10px;">
              Submit Project Inquiry
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

<?php
require_once __DIR__ . '/../includes/footer.php';
?>

