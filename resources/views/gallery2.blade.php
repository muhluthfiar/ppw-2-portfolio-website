<?php
$api_url = 'http://localhost:8000/api/gallery';

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$response_data = json_decode($json_data);

echo $response_data;
?>