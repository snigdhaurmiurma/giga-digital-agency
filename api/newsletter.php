<?php
/**
 * GIGA DIGITAL AGENCY — NEWSLETTER SUBSCRIPTION ENDPOINT
 */

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid request method.'
    ]);
    exit;
}

$input = json_decode(file_get_contents('php://input'), true);
$rawEmail = isset($input['email']) ? $input['email'] : (isset($_POST['email']) ? $_POST['email'] : '');
$email = filter_var(trim($rawEmail), FILTER_VALIDATE_EMAIL);

if (!$email) {
    http_response_code(422);
    echo json_encode([
        'status' => 'validation_error',
        'message' => 'Please provide a valid email address.'
    ]);
    exit;
}

http_response_code(200);
echo json_encode([
    'status' => 'success',
    'message' => 'You have successfully subscribed to Giga Digital Agency insights! Check your inbox for updates.'
]);
exit;
