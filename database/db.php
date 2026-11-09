<?php
/**
 * GIGA DIGITAL AGENCY — DATABASE & LEAD STORAGE ENGINE
 * Robust Dual Storage: SQLite (PDO) with JSON Ledger Fallback
 */

define('GDA_DB_DIR', __DIR__);
define('GDA_SQLITE_PATH', GDA_DB_DIR . '/giga_agency.sqlite');
define('GDA_INQUIRIES_JSON', GDA_DB_DIR . '/inquiries.json');
define('GDA_INTERACTIONS_JSON', GDA_DB_DIR . '/interactions.json');

/**
 * Initialize and get PDO SQLite instance
 */
function gda_get_db() {
    static $pdo = null;
    if ($pdo !== null) {
        return $pdo;
    }

    try {
        if (!class_exists('PDO') || !in_array('sqlite', PDO::getAvailableDrivers())) {
            return null;
        }

        $pdo = new PDO('sqlite:' . GDA_SQLITE_PATH);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        // Auto-create schema
        $pdo->exec("
            CREATE TABLE IF NOT EXISTS inquiries (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                type TEXT DEFAULT 'inquiry',
                name TEXT,
                email TEXT,
                phone TEXT,
                company TEXT,
                service TEXT,
                budget TEXT,
                message TEXT,
                page_url TEXT,
                ip_address TEXT,
                user_agent TEXT,
                status TEXT DEFAULT 'New',
                created_at DATETIME DEFAULT CURRENT_TIMESTAMP
            );

            CREATE TABLE IF NOT EXISTS interaction_logs (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                interaction_type TEXT,
                target_value TEXT,
                page_url TEXT,
                ip_address TEXT,
                user_agent TEXT,
                created_at DATETIME DEFAULT CURRENT_TIMESTAMP
            );
        ");

        return $pdo;
    } catch (Exception $e) {
        error_log('GDA DB Connection Notice: ' . $e->getMessage());
        return null;
    }
}

/**
 * Save an inquiry (Email/Form/Quote) to SQLite and JSON Ledger
 */
function gda_save_inquiry(array $data) {
    $now = date('Y-m-d H:i:s');
    $ip = $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1';
    $ua = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown';

    $record = [
        'type' => $data['type'] ?? 'inquiry',
        'name' => trim($data['name'] ?? ''),
        'email' => trim($data['email'] ?? ''),
        'phone' => trim($data['phone'] ?? ''),
        'company' => trim($data['company'] ?? ''),
        'service' => trim($data['service'] ?? ''),
        'budget' => trim($data['budget'] ?? ''),
        'message' => trim($data['message'] ?? ''),
        'page_url' => trim($data['page_url'] ?? ''),
        'ip_address' => $ip,
        'user_agent' => $ua,
        'status' => 'New',
        'created_at' => $now
    ];

    $insertId = null;

    // 1. Try SQLite
    $pdo = gda_get_db();
    if ($pdo) {
        try {
            $stmt = $pdo->prepare("
                INSERT INTO inquiries (type, name, email, phone, company, service, budget, message, page_url, ip_address, user_agent, status, created_at)
                VALUES (:type, :name, :email, :phone, :company, :service, :budget, :message, :page_url, :ip_address, :user_agent, :status, :created_at)
            ");
            $stmt->execute([
                ':type' => $record['type'],
                ':name' => $record['name'],
                ':email' => $record['email'],
                ':phone' => $record['phone'],
                ':company' => $record['company'],
                ':service' => $record['service'],
                ':budget' => $record['budget'],
                ':message' => $record['message'],
                ':page_url' => $record['page_url'],
                ':ip_address' => $record['ip_address'],
                ':user_agent' => $record['user_agent'],
                ':status' => $record['status'],
                ':created_at' => $record['created_at']
            ]);
            $insertId = (int)$pdo->lastInsertId();
        } catch (Exception $e) {
            error_log('SQLite Insert Error: ' . $e->getMessage());
        }
    }

    // 2. Always sync to JSON Ledger
    $existing = [];
    if (file_exists(GDA_INQUIRIES_JSON)) {
        $raw = file_get_contents(GDA_INQUIRIES_JSON);
        $decoded = json_decode($raw, true);
        if (is_array($decoded)) {
            $existing = $decoded;
        }
    }

    $record['id'] = $insertId ?: (count($existing) + 1);
    array_unshift($existing, $record); // Prepend so newest is first

    // Limit to latest 1000 items in JSON
    if (count($existing) > 1000) {
        $existing = array_slice($existing, 0, 1000);
    }

    @file_put_contents(GDA_INQUIRIES_JSON, json_encode($existing, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE), LOCK_EX);

    return $record;
}

/**
 * Save an interaction event (Call, WhatsApp click) to SQLite and JSON
 */
function gda_save_interaction(array $data) {
    $now = date('Y-m-d H:i:s');
    $ip = $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1';
    $ua = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown';

    $record = [
        'interaction_type' => $data['interaction_type'] ?? 'interaction',
        'target_value' => trim($data['target_value'] ?? ''),
        'page_url' => trim($data['page_url'] ?? ''),
        'ip_address' => $ip,
        'user_agent' => $ua,
        'created_at' => $now
    ];

    $insertId = null;

    // 1. Try SQLite
    $pdo = gda_get_db();
    if ($pdo) {
        try {
            $stmt = $pdo->prepare("
                INSERT INTO interaction_logs (interaction_type, target_value, page_url, ip_address, user_agent, created_at)
                VALUES (:interaction_type, :target_value, :page_url, :ip_address, :user_agent, :created_at)
            ");
            $stmt->execute([
                ':interaction_type' => $record['interaction_type'],
                ':target_value' => $record['target_value'],
                ':page_url' => $record['page_url'],
                ':ip_address' => $record['ip_address'],
                ':user_agent' => $record['user_agent'],
                ':created_at' => $record['created_at']
            ]);
            $insertId = (int)$pdo->lastInsertId();
        } catch (Exception $e) {
            error_log('SQLite Interaction Error: ' . $e->getMessage());
        }
    }

    // 2. Always sync to JSON Ledger
    $existing = [];
    if (file_exists(GDA_INTERACTIONS_JSON)) {
        $raw = file_get_contents(GDA_INTERACTIONS_JSON);
        $decoded = json_decode($raw, true);
        if (is_array($decoded)) {
            $existing = $decoded;
        }
    }

    $record['id'] = $insertId ?: (count($existing) + 1);
    array_unshift($existing, $record);

    if (count($existing) > 2000) {
        $existing = array_slice($existing, 0, 2000);
    }

    @file_put_contents(GDA_INTERACTIONS_JSON, json_encode($existing, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE), LOCK_EX);

    return $record;
}

/**
 * Retrieve all inquiries
 */
function gda_get_all_inquiries() {
    $pdo = gda_get_db();
    if ($pdo) {
        try {
            $stmt = $pdo->query("SELECT * FROM inquiries ORDER BY id DESC LIMIT 500");
            $rows = $stmt->fetchAll();
            if ($rows !== false && !empty($rows)) {
                return $rows;
            }
        } catch (Exception $e) {
            error_log('SQLite Query Error: ' . $e->getMessage());
        }
    }

    // Fallback to JSON
    if (file_exists(GDA_INQUIRIES_JSON)) {
        $raw = file_get_contents(GDA_INQUIRIES_JSON);
        $decoded = json_decode($raw, true);
        if (is_array($decoded)) {
            return $decoded;
        }
    }

    return [];
}

/**
 * Retrieve all interaction logs
 */
function gda_get_all_interactions() {
    $pdo = gda_get_db();
    if ($pdo) {
        try {
            $stmt = $pdo->query("SELECT * FROM interaction_logs ORDER BY id DESC LIMIT 500");
            $rows = $stmt->fetchAll();
            if ($rows !== false && !empty($rows)) {
                return $rows;
            }
        } catch (Exception $e) {
            error_log('SQLite Query Error: ' . $e->getMessage());
        }
    }

    if (file_exists(GDA_INTERACTIONS_JSON)) {
        $raw = file_get_contents(GDA_INTERACTIONS_JSON);
        $decoded = json_decode($raw, true);
        if (is_array($decoded)) {
            return $decoded;
        }
    }

    return [];
}

/**
 * Update an inquiry status
 */
function gda_update_inquiry_status($id, $status) {
    $id = (int)$id;
    $status = htmlspecialchars(trim($status), ENT_QUOTES, 'UTF-8');

    $pdo = gda_get_db();
    if ($pdo) {
        try {
            $stmt = $pdo->prepare("UPDATE inquiries SET status = :status WHERE id = :id");
            $stmt->execute([':status' => $status, ':id' => $id]);
        } catch (Exception $e) {
            error_log('SQLite Update Error: ' . $e->getMessage());
        }
    }

    // Update in JSON
    if (file_exists(GDA_INQUIRIES_JSON)) {
        $raw = file_get_contents(GDA_INQUIRIES_JSON);
        $items = json_decode($raw, true);
        if (is_array($items)) {
            foreach ($items as &$item) {
                if (isset($item['id']) && (int)$item['id'] === $id) {
                    $item['status'] = $status;
                    break;
                }
            }
            @file_put_contents(GDA_INQUIRIES_JSON, json_encode($items, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE), LOCK_EX);
        }
    }

    return true;
}

/**
 * Delete an inquiry
 */
function gda_delete_inquiry($id) {
    $id = (int)$id;

    $pdo = gda_get_db();
    if ($pdo) {
        try {
            $stmt = $pdo->prepare("DELETE FROM inquiries WHERE id = :id");
            $stmt->execute([':id' => $id]);
        } catch (Exception $e) {
            error_log('SQLite Delete Error: ' . $e->getMessage());
        }
    }

    if (file_exists(GDA_INQUIRIES_JSON)) {
        $raw = file_get_contents(GDA_INQUIRIES_JSON);
        $items = json_decode($raw, true);
        if (is_array($items)) {
            $items = array_values(array_filter($items, function($item) use ($id) {
                return !isset($item['id']) || (int)$item['id'] !== $id;
            }));
            @file_put_contents(GDA_INQUIRIES_JSON, json_encode($items, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE), LOCK_EX);
        }
    }

    return true;
}
