<?php

require 'vendor/autoload.php';

use Google\Client;

// Set the path to your service account JSON key file
$jsonKeyFilePath = 'creds.json';

// Create a new Google Client
$client = new Client();
$client->setAuthConfig($jsonKeyFilePath);

// Set the scopes for the access token
$scopes = [
	'https://www.googleapis.com/auth/cloud-platform',
	// Add other scopes as needed
];

// Set the client to use the application default credentials
$client->useApplicationDefaultCredentials();
$client->setScopes($scopes);

// Fetch the access token
$accessToken = $client->fetchAccessTokenWithAssertion();

// Output the access token
if (isset($accessToken['access_token'])) {
	echo $accessToken['access_token'];
} else {
	echo "Failed to fetch access token.";
}