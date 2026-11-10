# Giga Digital Agency — Database & Lead Capture Architecture

This directory houses the persistent relational database engine and dual-ledger storage system for Giga Digital Agency.

---

## Files in this Directory

| File | Purpose | Format |
| :--- | :--- | :--- |
| **`schema.sql`** / **`giga_agency.sql`** | Human-readable SQL schema definitions, indexes, and initial production records. Can be imported directly into SQLite, MySQL, or PostgreSQL. | Plain SQL text |
| **`giga_agency.sqlite`** | The active, compiled SQLite binary database used at runtime by PHP PDO. | Binary SQLite 3 |
| **`inquiries.json`** | Real-time JSON backup ledger for all customer quotations, briefs, and contact submissions. | JSON |
| **`interactions.json`** | Real-time log of customer clicks (direct WhatsApp calls, phone hotlines, package calculator use). | JSON |
| **`db.php`** | PHP PDO connection handler, prepared statements, XSS sanitizer, and dual-storage persistence engine. | PHP 8 |
| **`.htaccess`** | Production security rule denying public web browser access to raw database files. | Apache config |

---

## How to Inspect the Database

1. **In VS Code (Visual GUI)**:
   * Install the extension **SQLite Viewer** (by Florian Klampfer).
   * Click on `giga_agency.sqlite` in the VS Code sidebar to browse tables (`inquiries`, `interaction_logs`) in a clean spreadsheet view.
2. **Read the SQL Schema**:
   * Open `schema.sql` to view table structures, data types, constraints, and sample entries with full syntax highlighting.
3. **Admin Dashboard**:
   * Open `admin.html` in your browser (or visit `http://localhost:8000/admin.php`) to view the interactive management portal with search, status filters, and export options.
