<?php
// public_api.php

// headers that allows CORS and return JSON
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

// Function to get the current datetime in ISO 8601 format
function getCurrentDateTime() {
    return gmdate('Y-m-d\\TH:i:s\\Z');
}

// Defining the response
$response = [
    "email" => "nurudeen.jola@gmail.com", // HNG12 email
    "current_datetime" => getCurrentDateTime(),
    "github_url" => "https://github.com/imjolayemi/HNG_stage_0" // GitHub repo URL
];

// Return the response as JSON
http_response_code(200); // HTTP 200 OK
echo json_encode($response);
?>
