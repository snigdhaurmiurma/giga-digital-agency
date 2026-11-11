# Giga Digital Agency — Database & Lead Capture Architecture

This directory houses the persistent relational database engine and dual-ledger storage system for **Giga Digital Agency** (GDA).

---

## 📊 Dual-Storage Pipeline & Data Flow

```mermaid
flowchart LR
  Form["🌐 Client Form / Customizer\n(Frontend Submission)"] -->|POST Payload| Backend["⚙️ PHP Engine\n(database/db.php)"]
  
  subgraph Security["🛡️ Security & Normalization"]
    Sanitize["Input Sanitization\nCSRF Validation\nXSS Protection"]
  end
  
  Backend --> Security
  
  subgraph DualLedger["💾 Dual-Ledger Persistence Engine"]
    direction TB
    SQLite[("🗄️ Primary Engine: SQLite 3\n(giga_agency.sqlite)\n• Full ACID Transactions\n• B-Tree Indexed\n• High-Performance")]
    JSON[("📋 Secondary Ledger: JSON Audit\n(inquiries.json & interactions.json)\n• Human-Readable\n• Instant Backup\n• Fail-Safe Fallback")]
  end
  
  Security -->|Prepared Statement| SQLite
  Security -->|Async Append| JSON

  subgraph Admin["📊 Admin & Review"]
    Dashboard["Admin Portal (admin.html / admin.php)"]
  end
  
  SQLite -.->|Query Records| Dashboard
  JSON -.->|Fallback Read| Dashboard
```

---

## 🗄️ Entity-Relationship (ER) Diagram

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

  INQUIRIES ||--o{ INTERACTION_LOGS : "session tracking"
```

---

## 📁 Files in this Directory

| File | Purpose | Format | How to Inspect |
| :--- | :--- | :--- | :--- |
| **`schema.sql`** / **`giga_agency.sql`** | Complete DDL schema, table structures, indexes, and initial records. | Plain SQL text | Click to view directly in VS Code with syntax highlighting. |
| **`giga_agency.sqlite`** | Active, compiled binary database file used at runtime by PHP PDO. | Binary SQLite 3 | Install **"SQLite Viewer"** extension in VS Code to view as an interactive spreadsheet. |
| **`inquiries.json`** | Real-time JSON backup ledger for all customer quotations, briefs, and inquiries. | JSON text | Click to view in VS Code as formatted, human-readable text. |
| **`interactions.json`** | Real-time JSON log for visitor clicks (WhatsApp, hotline, calculator). | JSON text | Click to view in VS Code as formatted, human-readable text. |
| **`db.php`** | PHP PDO connection handler, prepared statements, and dual-ledger writer. | PHP 8 | Standard PHP code file. |
| **`.htaccess`** | Production server security rule blocking direct public web access to database files. | Apache config | Standard configuration file. |

---

## 🔍 How to Inspect the Database in VS Code

1. **Why does clicking `giga_agency.sqlite` say "Binary File"?**
   * SQLite is a compiled binary database format (the exact same engine used in production systems and mobile apps worldwide). A text editor cannot display raw compiled binary bytes as text.
2. **How to view the database visually inside VS Code:**
   * Open the Extensions tab in VS Code (`Ctrl + Shift + X`).
   * Search for **"SQLite Viewer"** (by *Florian Klampfer*).
   * Click **Install**.
   * Now click on `giga_agency.sqlite` in your sidebar: it will open in an interactive spreadsheet view with searchable rows and columns!
3. **How to view SQL tables as text:**
   * Open `schema.sql` to view the full schema, table columns, constraints, and sample data.
4. **How to view leads via web browser:**
   * Open `admin.html` in your browser (or visit `http://localhost:8000/admin.php` when running PHP) to view the interactive management dashboard with search and CSV export.
