<?php
/**
 * GIGA DIGITAL AGENCY — INTERACTION TRACKING ENDPOINT
 * Logs Phone Calls, WhatsApp Clicks, and Lead Engagements to SQLite & JSON Database
 */

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

$requestMethod = $_SERVER['REQUEST_METHOD'] ?? 'POST';
if ($requestMethod === 'OPTIONS') {
    http_response_code(200);
    exit;
}

if ($requestMethod !== 'POST') {
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Method not allowed']);
    exit;
}

require_once __DIR__ . '/../database/db.php';

// Accept both form-encoded and JSON payloads
$rawBody = file_get_contents('php://input');
$json = json_decode($rawBody, true);

$type   = $json['type'] ?? $_POST['type'] ?? 'interaction';
$target = $json['target'] ?? $_POST['target'] ?? '';
$page   = $json['page'] ?? $_POST['page'] ?? ($_SERVER['HTTP_REFERER'] ?? '');

$validTypes = ['call', 'whatsapp', 'email_click', 'quote_click', 'brochure_download'];
if (!in_array($type, $validTypes)) {
    $type = 'interaction';
}

$record = gda_save_interaction([
    'interaction_type' => $type,
    'target_value'     => $target,
    'page_url'         => $page
]);

echo json_encode([
    'status'  => 'success',
    'message' => 'Interaction recorded in database successfully',
    'data'    => $record
]);
exit;
