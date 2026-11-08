# Giga Digital Agency — Complete Website Redesign & Production Codebase

This repository contains the complete, premium, responsive redesign and development for **Giga Digital Agency** (GDA). 

Designed to reflect the caliber of a high-end international digital creative and growth agency, this platform blends dark luxury aesthetics, sharp geometric typography, fluid micro-interactions, conversion-focused user journeys, and robust engineering.

---

## 1. Project Overview & Verified Information

Based on research from the existing agency presence (`https://www.gigadigitalagency.com/`), this website preserves and elevates the genuine corporate identity:

* **Official Name:** Giga Digital Agency (GDA)
* **Established:** 2014
* **Positioning:** Results-Driven International Digital Growth Agency uniting Creative Design, Growth Marketing, and Advanced Web Engineering.
* **Headquarters:** House # 6/14, Block # A, Lalmatia, Dhaka-1207, Bangladesh (Additional operations: Mirpur / Shewrapara, Dhaka).
* **Phone Lines:** `+880 1860-422185`, `+880 1778-741894`
* **Email:** `info@gigadigitalagency.com`, `supports@gigadigitalagency.com`
* **Core Leadership Team:**
  * **Leonard Heizer** — Chief Executive Officer (CEO)
  * **Leslie Alexander** — Lead Web & UI/UX Designer
  * **Theresa Webb** — Senior Digital Marketing Strategist
  * **Dianne Russell** — Area & Operations Manager
* **Verified Awards & Milestones (Govt.bd / National ICT Ecosystem):**
  * **2014:** Animation Quality Excellence Award (02)
  * **2016:** Site of the Day / National Digital Excellence Recognition (05)
  * **2018:** Best Product Design Award (01)
  * **2020:** Best SEO of the Year (03)
  * **Cumulative Track Record:** 80+ Honorable Recognitions, 7,000+ Completed Deliverables, 16+ Major Milestones.
* **Verified Client Endorsement:**
  * **M Kamruzzaman Shadhin** (Managing Director): *"We are extremely impressed with the services provided by Giga Digital Agency. Their team's expertise in digital marketing, creative design, and strategic guidance has significantly boosted our online presence and business growth. Highly recommended!"*

---

## 2. Architecture & File Structure

The project is structured with modular PHP components and dual static HTML compatibility:

```
giga-digital-agency/
│
├── api/
│   ├── contact.php               # Secure AJAX contact form endpoint with validation
│   └── newsletter.php            # Newsletter subscription endpoint with email validation
│
├── assets/
│   ├── icons/                    # Scalable vector SVG icons
│   └── images/                   # High-res photography & brand assets
│       ├── blog/                 # Article thumbnails
│       ├── brand/                # Partner client logos (marquee)
│       ├── resource/             # Core logo and UI compositions
│       ├── services/             # Service & project imagery
│       ├── team/                 # Executive team photography
│       └── testimonial/          # Client avatar photography
│
├── css/
│   ├── style.css                 # Master design tokens, dark luxury agency styling
│   └── responsive.css            # Mobile-first breakpoints & reduced motion queries
│
├── includes/
│   ├── header.php                # Sticky glass navbar, dynamic dropdowns, mobile drawer
│   └── footer.php                # Multi-column footer, modal dialogs, back-to-top
│
├── js/
│   ├── main.js                   # Sticky nav, drawers, category tabs, filter, modal, AJAX
│   └── animations.js             # IntersectionObserver, animated counters, testimonial carousel
│
├── pages/
│   ├── about.php                 # Dedicated About Us page
│   ├── services.php              # Dedicated Services & Capabilities page
│   ├── portfolio.php             # Dedicated Portfolio & Selected Work page
│   ├── case-studies.php          # Dedicated Strategy Case Studies page
│   ├── pricing.php               # Dedicated Pricing & Packages page
│   ├── blog.php                  # Dedicated Blog & Digital Perspectives page
│   └── contact.php               # Dedicated Contact & Inquiries page
│
├── index.php                     # Complete master homepage (all 17 sections modularized)
├── index.html                    # Static standalone preview for instant browser opening
├── robots.txt                    # Search crawler indexation rules
├── sitemap.xml                   # Complete XML sitemap
└── README.md                     # Comprehensive documentation & deployment guide
```

---

## 3. The 17 Website Sections

1. **Navigation / Header:** Sticky frosted-glass navbar, GDA logo badge, multi-level dropdowns for Creative/Growth/Tech, and mobile slide-out navigation.
2. **Hero / Landing Page:** Headline *"WE TURN IDEAS INTO DIGITAL IMPACT"*, animated accent text, 3D interactive floating chips, and animated statistics (7,000+ Deliverables, 98% Satisfaction, 16+ Awards).
3. **About Us:** *"MORE THAN AN AGENCY. YOUR DIGITAL GROWTH PARTNER."*, founding story, 4 core value cards (Creative Precision, Data-Driven Growth, Modern Engineering, True Partnership).
4. **7K 16 Award / Recognition:** Spotlight on the verified 2016 *Site of the Day / ICT Excellence Recognition* with official registry ID and accreditation pill.
5. **Our Services (Categorized Deck):**
   * **Category A — Creative:** Brand Identity, UI/UX Design, Social Creatives & YouTube Thumbnails.
   * **Category B — Growth:** Technical SEO, Paid Ads (Meta & Google), Social Media Management.
   * **Category C — Tech:** Full-Stack Web Development, E-Commerce Engineering, Maintenance & SLA Support.
6. **Our Working Process:** *"FROM IDEA TO IMPACT."* Connected 6-step interactive timeline: 01 Discover &rarr; 02 Strategize &rarr; 03 Create &rarr; 04 Execute &rarr; 05 Launch &rarr; 06 Optimize.
7. **Portfolio / Selected Work:** Filterable gallery featuring authentic projects: *Crafting a Digital Identity*, *Achieving Fashion: Runway to Real Life*, *Facebook Design Initiatives*, *OmniFlow SaaS*, *National SEO*, and *Aura Organic Living*.
8. **Case Studies:** Comprehensive 9-part case study for the *Meta Content Marketing & Scale Campaign* with metrics (1.8M+ Reach, 6.4% Engagement, +24.5K Followers, +180% Referral Traffic).
9. **Achievements & Milestones:** Verified chronological honors: 2014 Quality Awards Animation, 2016 Site of the Day, 2018 Best Product Design, 2020 Best SEO of the Year.
10. **Our Team:** Verified leadership profiles for Leonard Heizer (CEO), Leslie Alexander (Lead Web Designer), Theresa Webb (Senior Marketer), and Dianne Russell (Area Manager).
11. **Pricing & Packages:** Categorized investment models for Creative, Growth, and Tech with "Starter", "Professional", and "Enterprise" tiers + "Request Custom Pricing" transparency note + Custom Solution Callout banner.
12. **Client Testimonials:** Interactive responsive carousel with 5-second auto-cycle, touch swipe, manual navigation arrows, and pagination dots (featuring M Kamruzzaman Shadhin).
13. **Trusted Clients / Partners:** Continuous animated marquee featuring partner logos with grayscale-to-color hover effects.
14. **Blog & Insights:** 6 articles covering modern SEO, branding, UI/UX decision making, social media growth, and AI transformation.
15. **FAQ:** Accessible accordion answering 8 core commercial inquiries (services, timelines, international clients, custom packages, maintenance).
16. **Contact / Final CTA:** Validated inquiry form with live status feedback, budgeting picker, and direct agency contact details.
17. **Footer:** *"LET'S BUILD WHAT'S NEXT."*, multi-column links, newsletter signup, copyright, and smooth back-to-top controller.

---

## 4. How to Run Locally

### Option A: Via PHP Built-in Server (Recommended for full backend API testing)
1. Open PowerShell or Terminal in the project root:
   ```bash
   cd "C:\Users\user\.gemini\antigravity\scratch\giga-digital-agency"
   ```
2. Start the local PHP development server:
   ```bash
   php -S localhost:8000
   ```
3. Open your browser and navigate to:
   ```
   http://localhost:8000
   ```

### Option B: Standalone Static HTML Mode
If running on a machine without PHP installed, simply double-click or open `index.html` directly in any modern browser (Chrome, Edge, Firefox, Safari). All interactions, sliders, modals, filters, accordions, and client-side form validations work natively without external dependencies!

---

## 5. List of Editable Placeholders & Backend Integrations

* **Contact Form Email Dispatcher:** In `api/contact.php`, add your SMTP or SendGrid/PHPMailer configuration (currently configured to log inquiries and return verified JSON).
* **Award Registry ID:** In Section 04 and `pages/about.php`, `GDA-ICT-BD-2016` can be updated with an exact government certificate serial number if desired.
* **Pricing Values:** Specific dollar quotes are noted as *"Custom Quote"* or *"Let's Discuss"* to honor the prompt's instruction not to invent fixed official prices. You can add fixed rates at any time in `index.php` (lines under Section 11) or `pages/pricing.php`.
* **Social Links:** Update the social channel URLs in `includes/footer.php` to link directly to your verified brand handles.
