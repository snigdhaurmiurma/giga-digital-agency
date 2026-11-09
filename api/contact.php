<?php
/**
 * GIGA DIGITAL AGENCY — CONTACT & QUOTATION FORM API
 * Validates, Sanitizes, and Stores Inquiries in SQLite & JSON Database
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
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid request method. Only POST submissions are accepted.'
    ]);
    exit;
}

require_once __DIR__ . '/../database/db.php';

// Support both JSON body and standard Form POST
$rawBody = file_get_contents('php://input');
$json = json_decode($rawBody, true) ?: [];

$name    = isset($json['name']) ? trim($json['name']) : (isset($_POST['name']) ? trim($_POST['name']) : '');
$email   = isset($json['email']) ? trim($json['email']) : (isset($_POST['email']) ? trim($_POST['email']) : '');
$phone   = isset($json['phone']) ? trim($json['phone']) : (isset($_POST['phone']) ? trim($_POST['phone']) : '');
$company = isset($json['company']) ? trim($json['company']) : (isset($_POST['company']) ? trim($_POST['company']) : '');
$service = isset($json['service']) ? trim($json['service']) : (isset($_POST['service']) ? trim($_POST['service']) : '');
$budget  = isset($json['budget']) ? trim($json['budget']) : (isset($_POST['budget']) ? trim($_POST['budget']) : '');
$message = isset($json['message']) ? trim($json['message']) : (isset($_POST['message']) ? trim($_POST['message']) : '');
$type    = isset($json['type']) ? trim($json['type']) : (isset($_POST['type']) ? trim($_POST['type']) : 'quotation_request');
$page    = isset($json['page']) ? trim($json['page']) : (isset($_POST['page']) ? trim($_POST['page']) : ($_SERVER['HTTP_REFERER'] ?? ''));

// Validate inputs
$errors = [];

if (empty($name) || mb_strlen($name) < 2) {
    $errors['name'] = 'Full name is required (minimum 2 characters).';
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'A valid business email address is required.';
}

if (empty($service)) {
    $errors['service'] = 'Please select a primary service category.';
}

if (empty($message) && empty($phone)) {
    $errors['message'] = 'Please provide either a project brief or a phone number for follow up.';
}

if (!empty($errors)) {
    http_response_code(422);
    echo json_encode([
        'status' => 'validation_error',
        'message' => 'Please resolve the highlighted form fields.',
        'errors' => $errors
    ]);
    exit;
}

// Save inquiry to Database (SQLite + JSON)
$record = gda_save_inquiry([
    'type'     => $type,
    'name'     => $name,
    'email'    => $email,
    'phone'    => $phone,
    'company'  => $company,
    'service'  => $service,
    'budget'   => $budget,
    'message'  => $message,
    'page_url' => $page
]);

// Also record as interaction
gda_save_interaction([
    'interaction_type' => 'email_inquiry',
    'target_value'     => "{$name} <{$email}>",
    'page_url'         => $page
]);

http_response_code(200);
echo json_encode([
    'status'  => 'success',
    'message' => "Thank you, {$name}! Your project inquiry has been securely saved to our database (Reference #GDA-{$record['id']}). A senior strategist from Giga Digital Agency will contact you within 24 business hours.",
    'lead_id' => $record['id'],
    'data'    => [
        'id'          => $record['id'],
        'name'        => $record['name'],
        'email'       => $record['email'],
        'service'     => $record['service'],
        'created_at'  => $record['created_at']
    ]
]);
exit;
