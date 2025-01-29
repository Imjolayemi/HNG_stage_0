<?php
// public_api.php

// Set headers to allow CORS and return JSON
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

// Function to get the current datetime in ISO 8601 format
function getCurrentDateTime() {
    return gmdate('Y-m-d\\TH:i:s\\Z');
}

// Define the response
$response = [
    "email" => "your-email@example.com", // Replace with your HNG12 Slack email
    "current_datetime" => getCurrentDateTime(),
    "github_url" => "https://github.com/yourusername/your-repo" // Replace with your GitHub repo URL
];

// Return the response as JSON
http_response_code(200); // HTTP 200 OK
echo json_encode($response);
?>
