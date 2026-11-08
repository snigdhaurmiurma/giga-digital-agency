# Giga Digital Agency — Official Website Platform

This repository contains the complete custom-designed, human-crafted, premium, responsive website platform for **Giga Digital Agency** (GDA).

Designed with inspiration from top-performing IT and software agencies in Bangladesh (such as Zaman IT), this platform pairs an authentic, credible corporate identity with dual Light and Dark themes, transparent service offerings, direct phone hotlines, and WhatsApp instant connectivity.

---

## 1. Project Overview & Verified Specifications

* **Official Brand:** Giga Digital Agency (GDA) — Est. 2014
* **Positioning:** Full-Service Corporate Web Design, Custom Software Development, E-Commerce Engineering & Digital Marketing Agency.
* **Headquarters:** House # 6/14, Block # A, Lalmatia, Dhaka-1207, Bangladesh *(additional operations: Mirpur / Shewrapara, Dhaka)*.
* **Office Hours:** Saturday – Thursday, 9:30 AM – 7:00 PM (GMT+6)
* **Direct Hotlines:** `+880 1860-422185`, `+880 1778-741894`
* **Direct WhatsApp:** `+880 1860-422185` (Instant Click-to-Chat enabled)
* **Official Emails:** `info@gigadigitalagency.com`, `supports@gigadigitalagency.com`
* **Live Deployment:** [https://giga-digital-agency.vercel.app/](https://giga-digital-agency.vercel.app/)
* **GitHub Repository:** [https://github.com/snigdhaurmiurma/giga-digital-agency.git](https://github.com/snigdhaurmiurma/giga-digital-agency.git)
* **Accreditations & Awards:**
  * **2014:** Animation Quality Excellence Award
  * **2016:** Site of the Day / National ICT Ecosystem Recognition (Reg: GDA-ICT-BD-2016)
  * **2018:** Best Product Design Award
  * **2020:** Best SEO of the Year
  * **Track Record:** 80+ Citations, 7,000+ Completed Deliverables, 98.4% On-Time Delivery.

---

## 2. Key Design & Technical Highlights

### Dual Light & Dark Mode (Visitor Switchable)
* Built using CSS Custom Properties (`[data-theme="light"]` and `[data-theme="dark"]`).
* Interactive sun/moon toggle switch located in the sticky navigation header.
* Remembers user preference across visits via `localStorage.getItem('gda_theme')` with zero flash-of-unstyled-theme.

### Authentic Human Agency Feel (Zaman-IT Style)
* **Corporate Top Information Bar:** Displays direct Bangladesh phone numbers, official email, Lalmatia office location, and business hours.
* **Real Commercial Services:**
  1. Corporate Web Design & CMS
  2. E-Commerce Store with bKash / Nagad / SSLCommerz / Pathao Courier integration
  3. Custom Software, POS & ERP Systems
  4. Search Engine Optimization (SEO & Google Maps 3-Pack)
  5. Meta (Facebook / Instagram) & Google Performance Ads
  6. UI/UX & Graphic Brand Identity
  7. High-Speed NVMe cPanel Cloud Hosting & .com.bd Domains
  8. Website Maintenance & Annual Support Contracts (AMC)
* **Transparent Pricing in BDT & USD:** Clear package breakdown with monthly and annual options, payment method badges (bKash, Nagad, Visa, Mastercard, American Express, Bank Transfer).
* **Floating WhatsApp Quick Connect:** Sticky bottom-left button for instant consultations.
* **Official Logos:** Rendered with the authentic agency assets (`images/resource/logo-1.png` and `images/resource/footer-logo.png`).

---

## 3. Architecture & File Structure

```
giga-digital-agency/
│
├── api/
│   ├── contact.php               # Secure AJAX quotation & consultation endpoint
│   └── newsletter.php            # Newsletter subscription endpoint
│
├── css/
│   ├── style.css                 # Master dual-theme design system (Light & Dark)
│   └── responsive.css            # Mobile, tablet, and high-DPI desktop breakpoints
│
├── fonts/                        # Local typographic assets
│
├── images/                       # Official agency assets and portfolio media
│   └── resource/
│       ├── logo-1.png            # Official Giga Digital Agency header logo
│       ├── footer-logo.png       # Official Giga Digital Agency footer logo
│       └── ...
│
├── includes/
│   ├── header.php                # Topbar, sticky header, theme switcher & nav
│   └── footer.php                # Corporate footer, WhatsApp float, back-to-top
│
├── js/
│   ├── main.js                   # Theme switcher, mobile drawer, packages tab, filters, forms
│   └── animations.js             # IntersectionObserver reveal effects & stats counters
│
├── pages/                        # Individual subpages for modular architecture
│   ├── about.php
│   ├── services.php
│   ├── portfolio.php
│   ├── case-studies.php
│   ├── pricing.php
│   ├── blog.php
│   └── contact.php
│
├── index.html                    # Production-ready static edition (served on Vercel)
├── index.php                     # Production-ready PHP dynamic edition
├── robots.txt                    # Search crawler rules
├── sitemap.xml                   # XML sitemap
├── vercel.json                   # Vercel deployment routing configuration
└── README.md                     # Documentation
```

---

## 4. How to Open and Run in VS Code

### Opening the Project in VS Code
1. Unzip `giga-digital-agency-vscode.zip` or open the `giga-digital-agency` folder in **Visual Studio Code**.
2. To test the static version instantly:
   * Install the **Live Server** extension (by Ritwick Dey) in VS Code.
   * Right-click `index.html` and choose **"Open with Live Server"**.
   * Your browser will open `http://127.0.0.1:5500/index.html`.

### Running with Local PHP (XAMPP or PHP CLI)
1. Open the integrated terminal in VS Code (`Ctrl + ~`):
   ```bash
   php -S localhost:8000
   ```
2. Navigate to:
   ```
   http://localhost:8000
   ```
3. Test the theme switcher, quotation form, package tabs, and mobile navigation!

---

## 5. Live Production URL
* **Live Website:** [https://giga-digital-agency.vercel.app/](https://giga-digital-agency.vercel.app/)
* **GitHub Source:** [https://github.com/snigdhaurmiurma/giga-digital-agency.git](https://github.com/snigdhaurmiurma/giga-digital-agency.git)
