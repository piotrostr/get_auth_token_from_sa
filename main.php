<?php

require 'vendor/autoload.php';

use Google\Client;

$jsonKeyFilePath = 'creds.json';

$client = new Client();
$client->setAuthConfig($jsonKeyFilePath);

$scopes = [
	'https://www.googleapis.com/auth/cloud-platform',
	// the required Retail scopes
];

$client->useApplicationDefaultCredentials();
$client->setScopes($scopes);

$accessToken = $client->fetchAccessTokenWithAssertion();

if (isset($accessToken['access_token'])) {
	echo $accessToken['access_token'];
} else {
	echo "Failed to fetch access token.";
}