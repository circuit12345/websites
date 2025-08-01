<?php
header('Content-Type: application/json');

// Get the raw POST data
$rawData = file_get_contents("php://input");

// Decode the JSON data
$data = json_decode($rawData, true);

// Extract amount and status
$amount = $data['payload']['payment']['entity']['amount'];
$status = $data['payload']['payment']['entity']['status'];

// Prepare response data
$responseData = ["amount" => $amount, "status" => $status];

// Store only amount and status in the log file
file_put_contents("razorpay_events.log", json_encode($responseData) . PHP_EOL);

// Send response to the ESP32
echo json_encode($responseData);
?>
