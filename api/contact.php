<?php
/**
 * GIGA DIGITAL AGENCY — CONTACT FORM ENDPOINT
 * Handles secure submission, input sanitization, and JSON response
 */

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid request method. Only POST submissions are accepted.'
    ]);
    exit;
}

// Sanitize inputs reliably across all PHP SAPIs
$name    = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name']), ENT_QUOTES, 'UTF-8') : '';
$email   = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
$phone   = isset($_POST['phone']) ? htmlspecialchars(trim($_POST['phone']), ENT_QUOTES, 'UTF-8') : '';
$company = isset($_POST['company']) ? htmlspecialchars(trim($_POST['company']), ENT_QUOTES, 'UTF-8') : '';
$service = isset($_POST['service']) ? htmlspecialchars(trim($_POST['service']), ENT_QUOTES, 'UTF-8') : '';
$budget  = isset($_POST['budget']) ? htmlspecialchars(trim($_POST['budget']), ENT_QUOTES, 'UTF-8') : '';
$message = isset($_POST['message']) ? htmlspecialchars(trim($_POST['message']), ENT_QUOTES, 'UTF-8') : '';

// Validate required fields
$errors = [];

if (empty($name) || mb_strlen($name) < 2) {
    $errors['name'] = 'Full name is required (minimum 2 characters).';
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'A valid business email address is required.';
}

if (empty($service)) {
    $errors['service'] = 'Please select a primary service.';
}

if (empty($message) || mb_strlen($message) < 10) {
    $errors['message'] = 'Project summary is required (minimum 10 characters).';
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

// In production, send email to info@gigadigitalagency.com via PHPMailer or mail()

http_response_code(200);
echo json_encode([
    'status' => 'success',
    'message' => "Thank you, {$name}! Your project inquiry has been successfully received by Giga Digital Agency. A senior strategist will review your brief and contact you within 24 business hours.",
    'data' => [
        'received_at' => date('Y-m-d H:i:s'),
        'service' => $service,
        'email' => $email
    ]
]);
exit;
