# Giga Digital Agency — Official Website Platform

[![Platform: Web](https://img.shields.io/badge/Platform-Web%20%2F%20Responsive-blue?style=for-the-badge&logo=googlechrome&logoColor=white)](https://giga-digital-agency.vercel.app/)
[![Engine: PHP 8.2](https://img.shields.io/badge/Engine-PHP%208.2-777bb4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![Database: SQLite 3](https://img.shields.io/badge/Database-SQLite%203-003b57?style=for-the-badge&logo=sqlite&logoColor=white)](https://www.sqlite.org/)
[![Styling: Vanilla CSS3](https://img.shields.io/badge/Styling-Custom%20CSS3%20Variables-1572b6?style=for-the-badge&logo=css3&logoColor=white)](https://giga-digital-agency.vercel.app/)
[![Frontend: ES6+ JavaScript](https://img.shields.io/badge/Frontend-ES6%2B%20Vanilla%20JS-f7df1e?style=for-the-badge&logo=javascript&logoColor=black)](https://giga-digital-agency.vercel.app/)
[![Deployment: Vercel](https://img.shields.io/badge/Deploy-Vercel%20Production-000000?style=for-the-badge&logo=vercel&logoColor=white)](https://giga-digital-agency.vercel.app/)

This repository contains the complete custom-designed, enterprise-grade, responsive website platform for **Giga Digital Agency** (GDA) — Dhaka, Bangladesh.

Designed with an international digital creative & growth agency aesthetic, this platform features an atmospheric solid canvas, a **5-step dynamic brand palette switcher**, instant light/dark mode persistence, a transparent frosted-glass navigation header, prominent high-resolution branding, interactive package quotation customizer, real-time dual-ledger lead persistence (SQLite 3 + JSON audit logs), and an interactive admin dashboard.

---

## 📸 Website Visual Showcase & Interactive Transitions

Visitors experience smooth, dynamic visual transitions across color palettes and light/dark modes as they interact with the platform:

### 1. Dynamic Atmosphere & Palette Transitions

| Default Dark Mode (Tech Sapphire) | Logo Green Atmosphere (Obsidian Emerald) |
| :---: | :---: |
| ![Default Dark Mode Hero](images/preview-hero.png) | ![Logo Green Emerald Atmosphere](images/preview-green-atmosphere.png) |
| *Signature midnight slate canvas with Royal Blue accents* | *Dynamic whole-page canvas shift to deep obsidian emerald* |

| Crisp Light Mode (Nordic Slate) | Real-Time Admin Operations Portal |
| :---: | :---: |
| ![Crisp Light Mode Interface](images/preview-light-mode.png) | ![Admin Operations Portal](images/preview-admin.png) |
| *Instant light mode transition with soft pastel contrasts* | *Live lead review, search filter & status management* |

### 2. Categorized Services & Engineering Deck

![Categorized Services Deck](images/preview-services.png)
*Interactive multi-division service showcase covering Creative Design, Performance Marketing & E-Commerce Engineering.*

---

## 🗺️ System Architecture & Visual Overview

```mermaid
flowchart TD
  subgraph Client_Experience["🖥️ VISITOR CLIENT EXPERIENCE"]
    UI["Modern Responsive UI\n(Semantic HTML5 & Vanilla CSS3)"]
    ThemeEngine["🎨 5-Step Dynamic Palette Engine\n(Logo Green • Royal Blue • Purple • Magenta • Amber)"]
    ModeSwitch["☀️ / 🌙 Light & Dark Mode Engine\n(Persistent via localStorage)"]
    Customizer["💡 Interactive Quotation Customizer\n(Real-Time BDT & USD Estimates)"]
    ModalEngine["📖 Interactive Modals & Sliders\n(Lead Confirmation • Article Reader • Testimonial Slider)"]
  end

  subgraph Security_Backend["⚙️ SECURE BACKEND & VALIDATION LAYER"]
    Endpoint["REST API Ingestion Endpoints\n(api/inquire.php • api/track.php)"]
    Sanitizer["Security & Data Validation\n(CSRF Protection • XSS Scrubbing • Input Normalization)"]
  end

  subgraph Dual_Storage["💾 DUAL-LEDGER PERSISTENCE SYSTEM"]
    SQLite[("🗄️ Primary Relational Engine\n(giga_agency.sqlite)\n• AC-ID Compliant\n• Full Indexed Queries")]
    JSONLedger[("📋 Audit Backup Ledger\n(inquiries.json • interactions.json)\n• Human-Readable Records\n• Fail-Safe Fallback")]
  end

  subgraph Admin_Control["📊 OPERATIONS & LEAD DASHBOARD"]
    AdminPortal["Interactive Admin Portal\n(admin.html / admin.php)\n• Real-Time Lead Review\n• Status Management (New / Contacted / Closed)\n• One-Click CSV / JSON Export"]
  end

  UI --> ThemeEngine
  UI --> ModeSwitch
  UI --> Customizer
  UI --> ModalEngine
  Customizer -->|Submit Lead / Quotation| Endpoint
  Endpoint --> Sanitizer
  Sanitizer -->|Primary Storage: Prepared Statement| SQLite
  Sanitizer -->|Secondary Audit Write| JSONLedger
  SQLite -.->|Read Active Leads| AdminPortal
  JSONLedger -.->|Audit Fallback| AdminPortal
```

---

## 🔄 User Lead & Interactive Quotation Journey

```mermaid
sequenceDiagram
  autonumber
  actor Visitor as 👤 Website Visitor
  participant Browser as 🌐 Client Browser (giga-digital-agency)
  participant Theme as 🎨 Dynamic Palette Engine
  participant API as ⚙️ PHP Backend (api/inquire.php)
  participant DB as 🗄️ SQLite Engine (giga_agency.sqlite)
  participant JSON as 📋 Audit Ledger (inquiries.json)
  actor Agency as 🏢 GDA Operations & Admin

  Visitor->>Browser: Selects Accent Palette (e.g. Logo Green)
  Browser->>Theme: Sets document[data-accent="emerald"]
  Theme-->>Browser: Instantly transforms whole-page background & accents

  Visitor->>Browser: Selects custom services in Pricing Calculator
  Browser-->>Visitor: Recalculates live total estimate (BDT / USD)
  Visitor->>Browser: Submits Project Brief & Contact Form

  Browser->>API: POST /api/inquire.php (Sanitized Payload)
  API->>API: Validate phone, email, and required fields
  API->>DB: INSERT INTO inquiries (PDO Prepared Statement)
  API->>JSON: Append record to inquiries.json (Audit trail)
  API-->>Browser: 200 OK {success: true, ref_code: "GDA-2026-8812"}
  Browser-->>Visitor: Displays Animated Success Modal & Direct WhatsApp Link

  Agency->>Browser: Opens Admin Portal (/admin.html)
  Browser->>DB: Queries active inquiries and customer interactions
  DB-->>Agency: Renders searchable table, status updates & export actions
```

---

## 🗄️ Database Entity-Relationship (ER) Model

```mermaid
erDiagram
  INQUIRIES {
    INTEGER id PK "Auto Increment"
    TEXT ref_code UK "Unique Lead Identifier (e.g. GDA-2026-7491)"
    TEXT name "Client Full Name"
    TEXT email "Client Email Address"
    TEXT phone "Direct Phone / WhatsApp Number"
    TEXT company "Company / Organization Name"
    TEXT service "Selected Service Category"
    TEXT package "Selected Package Tier"
    TEXT estimated_budget "Calculated Estimate (BDT / USD)"
    TEXT message "Project Brief & Requirements"
    TEXT status "new | contacted | in_progress | closed"
    TEXT ip_address "Visitor IP Address (Anonymized)"
    DATETIME created_at "Submission Timestamp (UTC+6)"
    DATETIME updated_at "Status Update Timestamp"
  }

  INTERACTION_LOGS {
    INTEGER id PK "Auto Increment"
    TEXT event_type "whatsapp_click | hotline_call | quote_calc | theme_change"
    TEXT target_value "Clicked Number, Service Name, or Selected Palette"
    TEXT visitor_ip "Visitor IP Address (Anonymized)"
    TEXT user_agent "Client Browser / Device Metadata"
    DATETIME created_at "Interaction Timestamp"
  }

  INQUIRIES ||--o{ INTERACTION_LOGS : "originates from visitor session"
```

---

## 🎨 5-Step Official Logo Palette Matrix

The website's atmosphere transforms dynamically based on the 5 signature steps of the official Giga brand identity:

| Step | Swatch | Palette Name | Accent Hex | Dark Mode Atmosphere | Light Mode Atmosphere |
| :---: | :---: | :--- | :--- | :--- | :--- |
| **01** | 🟢 | **Logo Green** | `#3eb649` | Deep Obsidian Emerald (`#06150e` / `#071c12`) | Soft Mint Porcelain (`#f0faf3` / `#e6f6ec`) |
| **02** | 🔵 | **Logo Royal Blue** | `#1d4ed8` | Tech Midnight Sapphire (`#071324` / `#08162a`) | Crisp Nordic Slate (`#f1f6fb` / `#e7f0fa`) |
| **03** | 🟣 | **Logo Purple** | `#7c3aed` | Deep Cosmic Amethyst (`#100a20` / `#140d27`) | Soft Lavender Mist (`#f5f2fa` / `#ece6f6`) |
| **04** | 🔴 | **Logo Magenta** | `#e11d48` | Rich Velvet Wine (`#180812` / `#1d0a16`) | Delicate Rose Glaze (`#faf1f4` / `#f8e8ed`) |
| **05** | 🟡 | **Logo Amber** | `#f59e0b` | Warm Espresso Amber (`#161005` / `#1b1407`) | Sunlit Sandstone (`#faf6f0` / `#f6ede0`) |

---

## 📁 Repository Directory Layout

```
giga-digital-agency/
├── 📄 index.html                 # Production static entrypoint (11 services, 6-step process, 3-tier pricing, FAQ)
├── 📄 index.php                  # Dynamic PHP entrypoint with component architecture
├── 📄 admin.html                 # Client-side Admin Portal & lead review dashboard
├── 📄 admin.php                  # Server-side PHP Admin Portal with live database queries
├── 📁 services/                  # 11 Dedicated High-Conversion Service Detail Pages
│   ├── 📄 linkedin-ads.html      # LinkedIn Ads Management detail page
│   ├── 📄 google-ads.html        # Google Ads Management detail page
│   ├── 📄 facebook-boosting.html # Facebook Boosting Service detail page
│   ├── 📄 seo.html               # Search Engine Optimization (SEO) detail page
│   ├── 📄 digital-marketing.html # Digital Marketing Multi-Channel detail page
│   ├── 📄 company-profile-design.html # Company Profile & Brochure Design page
│   ├── 📄 banner-poster-design.html   # Banner & Poster Creative Design page
│   ├── 📄 content-marketing.html      # Content Marketing & Storytelling page
│   ├── 📄 branding-design.html        # Branding, Logo & Visual Identity page
│   ├── 📄 video-editing.html          # Professional Video Editing page
│   └── 📄 web-design-development.html # Web Design & Development detail page
├── 📁 api/                       # REST endpoints & form ingestion handlers
│   ├── 📄 inquire.php            # Quotation & project brief handler (PDO + JSON)
│   └── 📄 track.php              # Real-time interaction logger (hotline/WhatsApp clicks)
├── 📁 database/                  # Dual-ledger database engine & schema definitions
│   ├── 📄 schema.sql             # Clean, human-readable SQL definitions & sample data
│   ├── 📄 giga_agency.sql        # Standard SQL export for MySQL / MariaDB / SQLite
│   ├── 💾 giga_agency.sqlite     # Active compiled SQLite 3 runtime database
│   ├── 📋 inquiries.json         # Real-time JSON audit ledger for all customer submissions
│   ├── 📋 interactions.json      # Real-time JSON log for visitor click interactions
│   ├── 📄 db.php                 # PHP PDO singleton connection & dual-storage handler
│   ├── 📄 README.md              # Database documentation & inspection guide
│   └── 🔒 .htaccess              # Direct web browser access blocker for database files
├── 📁 includes/                  # Modular PHP components
│   ├── 📄 header.php             # Frosted glass navigation, logo & palette switcher
│   └── 📄 footer.php             # 4-pillar banner, corporate footer & dynamic modals
├── 📁 css/                       # Master stylesheet
│   └── 📄 style.css              # 3,400+ lines of custom CSS variables, themes & components
├── 📁 js/                        # Client-side interactivity
│   └── 📄 main.js                # Theme switcher, FAQ accordion, package switcher & modals
├── 📁 images/                    # Brand assets, project mockups & client showcases
└── 📄 README.md                  # Master documentation with visual architecture diagrams
```

---

## 🏢 Project Specifications & Verified Identity

* **Official Brand:** Giga Digital Agency (GDA) — Est. 2014
* **Brand Tagline:** "Your Growth. Our Digital Strategy."
* **Positioning:** A professional, results-driven digital marketing and creative solutions agency helping businesses establish a strong online presence, reach their target audiences, generate qualified leads, and achieve sustainable growth.
* **11 Core Specialized Disciplines:**
  * **Growth & Advertising:** LinkedIn Ads Management, Google Ads Management, Facebook Boosting Service, Search Engine Optimization (SEO), Digital Marketing.
  * **Creative & Content:** Company Profile & Business Profile Design, Banner & Poster Design, Content Marketing, Branding & Design, Professional Video Editing.
  * **Web & Technology:** Web Design & Development, Custom Enterprise Solutions.
* **Headquarters:** House # 6/14, Block # A, Lalmatia, Dhaka-1207, Bangladesh *(additional operations: Mirpur / Shewrapara, Dhaka)*.
* **Office Hours:** Saturday – Thursday, 9:30 AM – 7:00 PM (GMT+6)
* **Direct Hotlines:** `+8801870-699677`, `+8801870-699677`
* **Direct WhatsApp:** `+8801870-699677` (Instant Click-to-Chat enabled)
* **Official Emails:** `info@gigadigitalagency.com`, `supports@gigadigitalagency.com`
* **Live Deployment:** [https://giga-digital-agency.vercel.app/](https://giga-digital-agency.vercel.app/)
* **GitHub Repository:** [https://github.com/snigdhaurmiurma/giga-digital-agency.git](https://github.com/snigdhaurmiurma/giga-digital-agency.git)
* **Core Team & Leadership:**
  * **Engr. Md. Ashikur Rahman** — Founder & CEO
  * **Engr. Md. Hasinur Rahman** — CTO (Chief Technology Officer)
  * **Engr. Md. Al Amin** — Senior Software Engineer
  * **Jannatul Nayem** — Digital Marketing Specialist
  * **Engr. Md. Mehedi Hasan** — Senior Graphics Designer
  * **Md. Rezaul Karim** — Deputy General Manager
  * **Md. Nazmus Sakib** — Digital Marketing Specialist
  * **Kobir Hossen** — App Developer
* **Accreditations & Awards:**
  * **2016:** Site of the Day / National ICT Ecosystem Recognition (Accreditation Reg: `GDA-ICT-BD-2016`)
  * **Track Record:** 80+ Citations, 7,000+ Completed Deliverables, 98.4% Retention Rate.

---

## 🚀 How to Run in VS Code

### Instant Frontend Preview
1. Open the project folder in **Visual Studio Code**.
2. Right-click `index.html` and select **"Open with Live Server"**.
3. The platform will launch in your browser at `http://127.0.0.1:5500/index.html`.

### Running Dynamic PHP Edition
1. Open the integrated terminal in VS Code (`Ctrl + ~`).
2. Run:
   ```bash
   php -S localhost:8000
   ```
3. Visit `http://localhost:8000` to test the dynamic PHP version, API endpoints, and live database writes.

### Inspecting the Database in VS Code
* **To read the SQL tables as text:** Open [`database/schema.sql`](file:///database/schema.sql).
* **To inspect customer submissions as text:** Open [`database/inquiries.json`](file:///database/inquiries.json).
* **To view the compiled SQLite database visually:** Install the VS Code extension **"SQLite Viewer"** (by Florian Klampfer), then click on [`database/giga_agency.sqlite`](file:///database/giga_agency.sqlite) to view live tables in a spreadsheet interface.
* **To view via web dashboard:** Visit `http://localhost:8000/admin.html` or `http://localhost:8000/admin.php`.

---

## 🌐 Production Deployments
* **Live Website:** [https://giga-digital-agency.vercel.app/](https://giga-digital-agency.vercel.app/)
* **GitHub Repository:** [https://github.com/snigdhaurmiurma/giga-digital-agency.git](https://github.com/snigdhaurmiurma/giga-digital-agency.git)
