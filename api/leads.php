<?php
/**
 * GIGA DIGITAL AGENCY — LEADS & INTERACTIONS API
 * Provides CRUD access for the Agency Lead Management Dashboard
 */

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

$requestMethod = $_SERVER['REQUEST_METHOD'] ?? 'GET';
if ($requestMethod === 'OPTIONS') {
    http_response_code(200);
    exit;
}

require_once __DIR__ . '/../database/db.php';

$action = $_GET['action'] ?? $_POST['action'] ?? 'list';

if ($action === 'list') {
    $inquiries = gda_get_all_inquiries();
    $interactions = gda_get_all_interactions();

    $totalCalls = 0;
    $totalWhatsApp = 0;
    foreach ($interactions as $item) {
        if (($item['interaction_type'] ?? '') === 'call') {
            $totalCalls++;
        } elseif (($item['interaction_type'] ?? '') === 'whatsapp') {
            $totalWhatsApp++;
        }
    }

    echo json_encode([
        'status' => 'success',
        'stats' => [
            'total_inquiries' => count($inquiries),
            'total_calls'     => $totalCalls,
            'total_whatsapp'  => $totalWhatsApp,
            'total_events'    => count($interactions)
        ],
        'inquiries'    => $inquiries,
        'interactions' => $interactions
    ]);
    exit;
}

if ($action === 'update_status') {
    $id = $_POST['id'] ?? null;
    $status = $_POST['status'] ?? 'Contacted';
    if ($id) {
        gda_update_inquiry_status($id, $status);
        echo json_encode(['status' => 'success', 'message' => "Inquiry #{$id} updated to '{$status}'."]);
    } else {
        http_response_code(400);
        echo json_encode(['status' => 'error', 'message' => 'Missing ID']);
    }
    exit;
}

if ($action === 'delete') {
    $id = $_POST['id'] ?? null;
    if ($id) {
        gda_delete_inquiry($id);
        echo json_encode(['status' => 'success', 'message' => "Inquiry #{$id} deleted."]);
    } else {
        http_response_code(400);
        echo json_encode(['status' => 'error', 'message' => 'Missing ID']);
    }
    exit;
}

http_response_code(400);
echo json_encode(['status' => 'error', 'message' => 'Invalid action']);
exit;
