<?php
// The URL for the GET request
$url = 'http://upaymultirechargeservice.com/api/recharge/v1.0/wallet-balance?username=9854422974&apikey=h0H3Q1cj6RWngojdoJdj';

// Initialize a cURL session
$ch = curl_init($url);

// Set the options for the cURL session
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return the response as a string
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Accept: application/json' // Set the Accept header to application/json
]);

// Execute the cURL session and store the response
$response = curl_exec($ch);

// Check if any error occurred during the request
if(curl_errno($ch)) {
    echo 'cURL error: ' . curl_error($ch);
} else {
    // Decode the JSON response
    $responseData = json_decode($response, true);

    // Print the decoded response
    echo '<pre>';
    print_r($responseData);
    echo '</pre>';
}

// Close the cURL session
curl_close($ch);
?>
