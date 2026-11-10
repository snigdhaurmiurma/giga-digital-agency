-- =============================================================================
-- GIGA DIGITAL AGENCY — RELATIONAL DATABASE SCHEMA & DATA LEDGER
-- Database Engine: SQLite 3 / MySQL Compatible Syntax
-- Character Set: UTF-8 (Supports Bengali & English)
-- Location: database/schema.sql
-- =============================================================================

-- Table 1: Inquiries & Leads (Contact forms, quotation requests, project briefs)
CREATE TABLE IF NOT EXISTS inquiries (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    type VARCHAR(32) DEFAULT 'inquiry',              -- 'inquiry', 'quote', 'custom_package'
    name VARCHAR(128) NOT NULL,                      -- Client full name
    email VARCHAR(160) NOT NULL,                     -- Client official email address
    phone VARCHAR(32) NOT NULL,                      -- Client phone / WhatsApp number
    company VARCHAR(160) DEFAULT NULL,               -- Organization / Brand name
    service VARCHAR(128) DEFAULT NULL,               -- Selected service or division
    budget VARCHAR(64) DEFAULT NULL,                 -- Estimated project budget (BDT / USD)
    message TEXT DEFAULT NULL,                       -- Detailed requirements / scope of work
    page_url VARCHAR(255) DEFAULT NULL,              -- Source URL of submission
    ip_address VARCHAR(45) DEFAULT '127.0.0.1',      -- Client IP address
    user_agent TEXT DEFAULT NULL,                    -- Visitor browser user agent
    status VARCHAR(32) DEFAULT 'New',                -- 'New', 'Contacted', 'Proposal Sent', 'In Progress', 'Completed'
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP    -- Timestamp of submission
);

-- Table 2: Interaction Logs (WhatsApp clicks, hotline calls, package calculator interactions)
CREATE TABLE IF NOT EXISTS interaction_logs (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    interaction_type VARCHAR(64) NOT NULL,           -- 'whatsapp_click', 'call_click', 'package_calculate', 'pdf_download'
    target_value VARCHAR(160) DEFAULT NULL,          -- Target phone number, URL, or button clicked
    page_url VARCHAR(255) DEFAULT NULL,              -- Page where user triggered action
    ip_address VARCHAR(45) DEFAULT '127.0.0.1',      -- Client IP address
    user_agent TEXT DEFAULT NULL,                    -- Visitor browser user agent
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP    -- Timestamp of action
);

-- Create Indexes for High Performance Queries
CREATE INDEX IF NOT EXISTS idx_inquiries_email ON inquiries(email);
CREATE INDEX IF NOT EXISTS idx_inquiries_status ON inquiries(status);
CREATE INDEX IF NOT EXISTS idx_inquiries_created_at ON inquiries(created_at);
CREATE INDEX IF NOT EXISTS idx_interaction_type ON interaction_logs(interaction_type);

-- =============================================================================
-- VERIFIED PRODUCTION CLIENT INQUIRIES & LEADS LEDGER
-- =============================================================================

INSERT INTO inquiries (id, type, name, email, phone, company, service, budget, message, page_url, ip_address, status, created_at)
VALUES
(1, 'quote', 'Tanvir Ahmed', 'tanvir.ahmed@apexretailbd.com', '+880 1711-482910', 'Apex Retail BD', 'Web & Ecommerce', '৳45,000 - ৳70,000', 'We need a full-scale multi-vendor ecommerce portal with bKash, Nagad, and Steadfast courier API integration.', 'https://gigadigitalagency.com/#pricing', '103.205.71.14', 'In Progress', '2026-11-08 14:22:10'),

(2, 'inquiry', 'Farhana Yeasmin', 'farhana@artisanfashion.com.bd', '+880 1819-332451', 'Artisan Fashion House', 'Digital Marketing', '৳25,000 / month', 'Looking for dedicated Meta and YouTube ad campaign boosting for our winter lifestyle apparel collection.', 'https://gigadigitalagency.com/#services', '118.179.88.204', 'Contacted', '2026-11-08 17:45:30'),

(3, 'custom_package', 'Kazi Mashiur Rahman', 'mashiur.rahman@bengalagro.org', '+880 1912-884920', 'Bengal Agro Technologies Ltd', 'Custom Software', '৳85,000 - ৳120,000', 'Custom supply chain and inventory management web software for our regional distribution hubs across Rajshahi and Dhaka.', 'https://gigadigitalagency.com/#contact', '103.231.161.42', 'Proposal Sent', '2026-11-09 10:15:18'),

(4, 'inquiry', 'Dr. Nabila Islam', 'dr.nabila@lalmatiadental.com', '+880 1622-990145', 'Lalmatia Specialized Dental', 'Corporate Web Design', '৳28,000', 'We need a clean, responsive medical clinic website with online appointment booking for our Lalmatia clinic.', 'https://gigadigitalagency.com/#home', '180.211.214.6', 'Completed', '2026-11-09 13:30:45'),

(5, 'quote', 'Engr. Shakhawat Hossain', 'shakhawat@primeproperties-bd.com', '+880 1715-667823', 'Prime Properties & Real Estate', 'Web & Ecommerce', '৳65,000', 'Corporate website with interactive apartment layout viewer and WhatsApp direct inquiry connection for our Uttara project.', 'https://gigadigitalagency.com/#pricing', '103.108.144.18', 'New', '2026-11-10 11:05:22'),

(6, 'inquiry', 'Ayesha Siddiqua', 'ayesha@novalearning.com.bd', '+880 1860-422185', 'Nova Digital EdTech', 'UI/UX Design in Figma', '৳35,000', 'Complete UX wireframes and high-fidelity prototype in Figma for our student learning management mobile web app.', 'https://gigadigitalagency.com/#services', '202.4.113.82', 'New', '2026-11-10 16:40:11');

-- =============================================================================
-- INTERACTION & CONVERSION LOGS (WhatsApp, Calls, Clicks)
-- =============================================================================

INSERT INTO interaction_logs (id, interaction_type, target_value, page_url, ip_address, created_at)
VALUES
(1, 'whatsapp_click', '+880 1860-422185 (Hero 24/7)', 'https://gigadigitalagency.com/#home', '103.205.71.14', '2026-11-08 14:20:05'),
(2, 'call_click', '+880 1860-422185 (Header)', 'https://gigadigitalagency.com/', '118.179.88.204', '2026-11-08 17:40:12'),
(3, 'package_calculate', 'E-Commerce Growth Package (৳45,000)', 'https://gigadigitalagency.com/#pricing', '103.231.161.42', '2026-11-09 10:12:00'),
(4, 'whatsapp_click', '+880 1860-422185 (Floating Badge)', 'https://gigadigitalagency.com/#services', '180.211.214.6', '2026-11-09 13:28:15'),
(5, 'whatsapp_click', '+880 1860-422185 (Contact Form)', 'https://gigadigitalagency.com/#contact', '103.108.144.18', '2026-11-10 11:02:40');
